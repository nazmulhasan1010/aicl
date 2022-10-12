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
use App\Slider;

class SliderController extends Controller
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
        $this->on_page_seo('Slider','Slider Page');
        $sliders = Slider::get();
        return view('backend.slider.index',compact('sliders'));
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
        $position   = $request->position;

        if(isset($image))
        {
            // make unique name
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $slug.'-'.$currentDate.uniqid().'.'.$image->getClientOriginalExtension();

            // check position  1 = main , 2 = quality page , 3 = support page , 4 = packaging page, 5 = Seed page
            if($position == '1')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(1349,762)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            elseif($position == '2')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(570,400)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            elseif($position == '3')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(570,400)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            elseif($position == '4')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(980,516)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            else
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(980,516)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }

        }

        $slider                 = new Slider();
        $slider->slider_title   = $request->name;
        $slider->position       = $request->position;
        $slider->image          =  $imageName;
        $slider->save();

        Toastr::success('Slider Successfully Added','Success');
        return redirect()->back();
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name'  => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048',
        ]);

        $slider_id  = $request->slider_id;
        $image      = $request->file('image');
        $slug       = Str::slug($request->name);
        $position   = $request->position;
        $slider     = Slider::findOrFail($slider_id);
        if(isset($image))
        {
            // make unique name
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $slug.'-'.$currentDate.uniqid().'.'.$image->getClientOriginalExtension();

            // check position  1 = main , 2 = quality page , 3 = support page , 4 = packaging page, 5 = Seed page
            if($position == '1')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(1349,762)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            elseif($position == '2')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(570,400)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            elseif($position == '3')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(570,400)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            elseif($position == '4')
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(980,516)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
            else
            {
                if(!Storage::disk('public')->exists('slider'))
                {
                    Storage::disk('public')->makeDirectory('slider');
                }
                $postImage = Image::make($image)->resize(980,516)->stream();
                Storage::disk('public')->put('slider/'.$imageName,$postImage);
            }
        }
        else{
            $imageName = $slider->image;
        }


        $slider->slider_title   = $request->name;
        $slider->position       = $request->position;
        $slider->image          = $imageName;
        $slider->status         = $request->status;
        $slider->update();

        Toastr::success('Slider Successfully Updated','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        // Delete old image
        if (Storage::disk('public')->exists('slider/'.$slider->image))
        {
            Storage::disk('public')->delete('slider/'.$slider->image);
        }
        $slider->delete();
        Toastr::success('Slider Successfully Deleted','Success');
        return redirect()->back();
    }
}
