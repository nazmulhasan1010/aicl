<?php

namespace App\Http\Controllers\admin;

use App\Disorder;
use App\Disorderproduct;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class disorderController extends Controller
{

    public function on_page_seo($title, $description)
    {
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('frontend/assets/images/main.webp'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $disorder = Disorder::latest()->get();
        return view('backend.crops.disorder', compact('disorder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|false|string
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'disorder_name' => 'string|required|max:255',
            'crops' => 'numeric|required|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,svg,webp',
        ]);
        $products = array();
        $disorder_id = random_int(10000, 9999999);
        $product = explode(',', $request->products);
        $length = count($product);

        if (isset($request->image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid('', true) . '-' . $currentDate . '.' . $request->image->getClientOriginalExtension();
            // check dir exists
            if (!Storage::disk('public')->exists('disorder')) {
                Storage::disk('public')->makeDirectory('disorder');
            }
            $postImage = Image::make($request->image)->resize(1200, 800)->stream();
            Storage::disk('public')->put('disorder/' . $imageName, $postImage);

        }

        $disorder = new Disorder();
        $disorder->disorder_id = $disorder_id;
        $disorder->crops_id = $request->crops;
        $disorder->disorder_name = $request->disorder_name;
        $disorder->disorder_name_bn = $request->disorder_name_bn;
        $disorder->image = $imageName;
        $disorder->symptoms = $request->symptoms;
        $disorder->symptoms_bn = $request->symptoms_bn;
        $disorder->affect = $request->affect;
        $disorder->affect_bn = $request->affect_bn;
        $disorder->soil_drip = $request->soil_drip;
        $disorder->soil_drip_bn = $request->soil_drip_bn;
        $disorder->benefit = $request->benefit;
        $disorder->benefit_bn = $request->benefit_bn;
        $disorder->save();

        for ($i = 0; $i < $length; $i++) {
            $new_data = array('disorder_id'=>$disorder_id, 'product_id'=> $product[$i],'created_at'=>date("Y-m-d H:i:s"));
            array_push($products, $new_data);

        }
        if(count($products)>0) {
            Disorderproduct::insert($products);
        }

        Toastr::success('Product Successfully Added', 'Success');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->on_page_seo('View disorder', 'View disorder page');
        $disorder = Disorder::where('disorder_id','=',$id)->get();
        $products = Disorderproduct::where('disorder_id','=',$id)->get();
        return  view('backend.crops.disorderView',compact('disorder','products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return int
     */
    public function destroy($id)
    {
        return $id;
    }
}
