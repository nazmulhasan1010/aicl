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
use App\Employee;

class EmployeeController extends Controller
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
        $this->on_page_seo('Employee','Employee Page');

        $employees = Employee::latest()->get();
        return view('backend.employee.index',compact('employees'));
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
            'name'          => 'string|required|max:255',
            'phone'         => 'string|required|max:255',
            'email'         => 'email|required|max:255',
            'address'       => 'string|required|max:255',
            'designation'   => 'string|required|max:255',
            'position'      => 'string|required|max:20',
            'image'         => 'required|image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048'
        ]);

        $image      = $request->file('image');
        $slug       = Str::slug($request->name);
        if(isset($image))
        {
            // make unique name
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $slug.'-'.$currentDate.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('employee'))
            {
                Storage::disk('public')->makeDirectory('employee');
            }
            $postImage = Image::make($image)->resize(360,280)->stream();
            Storage::disk('public')->put('employee/'.$imageName,$postImage);

        }

        $employee  = new Employee();
        $employee->employee_name    = $request->name;
        $employee->employee_phone   = $request->phone;
        $employee->employee_email   = $request->email;
        $employee->employee_address = $request->address;
        $employee->image            = $imageName;
        $employee->designation      = $request->designation;
        $employee->position         = $request->position;
        $employee->join_date        = $request->join;
        $employee->save();

        Toastr::success('Employee Successfully Added','Success');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'          => 'string|required|max:255',
            'phone'         => 'string|required|max:255',
            'email'         => 'email|required|max:255',
            'address'       => 'string|required|max:255',
            'designation'   => 'string|required|max:255',
            'image'         => 'image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048'
        ]);

        $image      = $request->file('image');
        $slug       = Str::slug($request->name);
        $emp_id     = $request->employee_id;
        $employee   = Employee::findOrFail($emp_id);
        if(isset($image))
        {
            // make unique name
            $currentDate    = Carbon::now()->toDateString();
            $imageName      = $slug.'-'.$currentDate.uniqid().'.'.$image->getClientOriginalExtension();

            // Delete old image
            if (Storage::disk('public')->exists('employee/'.$employee->image))
            {
                Storage::disk('public')->delete('employee/'.$employee->image);
            }

            if(!Storage::disk('public')->exists('employee'))
            {
                Storage::disk('public')->makeDirectory('employee');
            }
            $postImage = Image::make($image)->resize(360,280)->stream();
            Storage::disk('public')->put('employee/'.$imageName,$postImage);

        }
        else{
             $imageName = $employee->image;
        }


        $employee->employee_name    = $request->name;
        $employee->employee_phone   = $request->phone;
        $employee->employee_email   = $request->email;
        $employee->employee_address = $request->address;
        $employee->image            = $imageName;
        $employee->designation      = $request->designation;
        $employee->join_date        = $request->join;
        $employee->status           = $request->status;
        $employee->update();

        Toastr::success('Employee Successfully Update','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
       // Delete old image
       if (Storage::disk('public')->exists('employee/'.$employee->image))
       {
           Storage::disk('public')->delete('employee/'.$employee->image);
       }
       $employee->delete();
       Toastr::success('Employee Successfully Deleted','Success');
       return redirect()->back();
    }
}
