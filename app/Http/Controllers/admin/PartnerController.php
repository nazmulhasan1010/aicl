<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Partner;

class PartnerController extends Controller
{
    // on page seo
    public function on_page_seo($title,$description)
    {
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage( asset('frontend/assets/images/main.webp'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // seo
        $this->on_page_seo('Partners','Partner Page');
        $partners = Partner::get();
        return view('backend.partner.index',compact('partners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'  => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048',
        ]);

        $image      = $request->file('image');
        $slug       = Str::slug($request->name);
        if(isset($image))
        {
            // make unique name
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $slug.'-'.$currentDate.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('partner'))
            {
                Storage::disk('public')->makeDirectory('partner');
            }
            $postImage = Image::make($image)->resize(600,175)->stream();
            Storage::disk('public')->put('partner/'.$imageName,$postImage);

        }

        $partner                = new Partner();
        $partner->partner_name  = $request->name;
        $partner->image         = $imageName;
        $partner->save();

        Toastr::success('Financial Partner Successfully Added','Success');
        return redirect()->back();
    }


    public function update(Request $request, Partner $partner)
    {
        $this->validate($request,[
            'name'  => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048',
        ]);

        $image      = $request->file('image');
        $slug       = Str::slug($request->name);
        $partner_id = $request->partner_id;
        $partner    = Partner::findOrFail($partner_id);
        if(isset($image))
        {
            // make unique name
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $slug.'-'.$currentDate.uniqid().'.'.$image->getClientOriginalExtension();

            // Delete old image
            if (Storage::disk('public')->exists('partner/'.$partner->image))
            {
                Storage::disk('public')->delete('partner/'.$partner->image);
            }

            if(!Storage::disk('public')->exists('partner'))
            {
                Storage::disk('public')->makeDirectory('partner');
            }
            $postImage = Image::make($image)->resize(600,175)->stream();
            Storage::disk('public')->put('partner/'.$imageName,$postImage);

        }
        else{
            $imageName = $partner->image;
        }


        $partner->partner_name  = $request->name;
        $partner->image         = $imageName;
        $partner->status        = $request->status;
        $partner->update();

        Toastr::success('Financial Partner Successfully Updated','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        // Delete old image
        if (Storage::disk('public')->exists('partner/'.$partner->image))
        {
            Storage::disk('public')->delete('partner/'.$partner->image);
        }
        $partner->delete();
        Toastr::success('Financial Partner Successfully Deleted','Success');
        return redirect()->back();
    }
}
