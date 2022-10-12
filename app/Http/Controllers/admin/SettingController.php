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

use App\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Setting::first();
        return view('backend.setting.index',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request,[
            'email'     => 'required|email|max:255',
            'mobile'    => 'required|numeric',
            'phone'     => 'required|numeric',
            'address'   => 'required|string',
        ]);

        $image = $request->file('image');

        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName  = uniqid().'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            // check dir exists
            if(!Storage::disk('public')->exists('company'))
            {
                Storage::disk('public')->makeDirectory('company');
            }

            $postImage = Image::make($image)->resize(200,200)->stream();
            Storage::disk('public')->put('company/'.$imageName,$postImage);
        }
        else{
            $imageName  = $setting->logo;
        }
        $setting->company_email     = $request->email;
        $setting->company_phone     = $request->phone;
        $setting->company_mobile    = $request->mobile;
        $setting->company_fax       = $request->fax;
        $setting->company_address   = $request->address;
        $setting->update();

        Toastr::success('Company Information Successfully Updated','Success');
        return redirect()->back();

    }

    
}
