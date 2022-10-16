<?php

namespace App\Http\Controllers\admin;

use App\Cropscat;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class cropsController extends Controller
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
        // seo
        $this->on_page_seo('Category', 'Category');
        $categories = Cropscat::orderBy('auto_code', 'asc')->get();
        return view('backend.crops.categories', compact('categories'));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|max:255',
            'name_bn' => 'string|required|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,svg,webp',
        ]);
        if (isset($request->image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid('', true) . '-' . $currentDate . '.' . $request->image->getClientOriginalExtension();
            // check dir exists
            if (!Storage::disk('public')->exists('cropcat')) {
                Storage::disk('public')->makeDirectory('cropcat');
            }
            $postImage = Image::make($request->image)->resize(190, 270)->stream();
            Storage::disk('public')->put('cropcat/' . $imageName, $postImage);

        }
        $cropCat = new Cropscat();
        $cropCat->auto_code = random_int(10000,9999999);
        $cropCat->category_name = $request->name;
        $cropCat->category_name_bn = $request->name_bn;
        $cropCat->slug = Str::slug($request->name);
        $cropCat->image = $imageName;
        $cropCat->save();

        Toastr::success('Crops Category Successfully Added', 'Success');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->on_page_seo('Edit Category', 'Edit Category');
        $data = Cropscat::FindOrFail($id);
        return view('backend.crops.categoryEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'string|required|max:255',
            'name_bn' => 'string|required|max:255',
        ]);

        if (isset($request->editImage)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid('', true) . '-' . $currentDate . '.' . $request->editImage->getClientOriginalExtension();
            // check dir exists
            if (!Storage::disk('public')->exists('cropcat')) {
                Storage::disk('public')->makeDirectory('cropcat');
            }
            $postImage = Image::make($request->editImage)->resize(190, 270)->stream();
            Storage::disk('public')->put('cropcat/' . $imageName, $postImage);
            Storage::delete('public/cropcat/' . Cropscat::FindOrFail($id)->image);
        } else {
            $imageName = $request->oldImage;
        }

//        return $request->all();
        $cropCat = Cropscat::FindOrFail($id);
        $cropCat->category_name = $request->name;
        $cropCat->category_name_bn = $request->name_bn;
        $cropCat->status = $request->status;
        $cropCat->image = $imageName;
        $cropCat->update();

        Toastr::success('Crops Category Updated', 'Success');
        return redirect()->route('admin.cropsCat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        try {
            Storage::delete('public/cropcat/' . Cropscat::FindOrFail($id)->image);
            Cropscat::Find($id)->delete();
            Toastr::success('Crops Category deleted', 'Success');
            return redirect()->route('admin.cropsCat.index');
        } catch (\Exception $e) {
            Toastr::warning($e->getMessage());
            return redirect()->back();
        }
    }
}
