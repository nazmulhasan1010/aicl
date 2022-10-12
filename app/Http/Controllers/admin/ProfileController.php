<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    // profile view
    public function index()
    {
        $info   = User::where('id',Auth::user()->id)->first();
        return view('backend.profile.index',compact('info'));

    }
    // update profile
    public function update_profile(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|string',
            'mobile'    => 'required',
            'address'   => 'string',
        ]);

        $user = User::where('id',Auth::user()->id)->first();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->phone_number = $request->mobile;
        $user->address      = $request->address;
        $user->update();

        Toastr::success('Profile Successfully Updated','Success');
        return redirect()->back();
    }
    // change password
    public function edit()
    {
        return view('backend.profile.password');
    }
    // update password
    public function update_password(Request $request)
    {
        $this->validate($request,[
            'old_password'  => 'required',
            'password'      => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password,$hashedPassword))
        {
            if(!Hash::check($request->password,$hashedPassword))
            {
                $user = User::findOrFail(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                Toastr::success('Password Successfully Changed','Success');
                return redirect()->back();
            }
            else{
                Toastr::warning('New password cannot be the same as old password','Warning');
                return redirect()->back();
            }
        }
        else{
            Toastr::warning('Current password not match');
            return redirect()->back();
        }
    }


}
