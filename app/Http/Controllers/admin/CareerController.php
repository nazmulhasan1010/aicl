<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;

use App\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
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
        $this->on_page_seo('Career','Careers');
        $careers = Career::latest()->get();
        return view('backend.career.index',compact('careers'));
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
            'title'         => 'required|string|max:255',
            'description'   => 'string|required',
            'deadline'      => 'date|required'
        ]);

        $career                     = new Career();
        $career->title              = $request->title;
        $career->deadline           = $request->deadline;
        $career->description        = $request->description;
        $career->total_vacancy      = $request->vacancy;
        $career->save();

        Toastr::success('Career Successfully Added','Success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'         => 'required|string|max:255',
            'description'   => 'string|required'
        ]);

        $edit_id = $request->career_id;
        $career                     = Career::findOrFail($edit_id);
        $career->title              = $request->title;
        $career->description        = $request->description;
        $career->total_vacancy      = $request->vacancy;
        $career->status             = $request->status;
        $career->update();

        Toastr::success('Career Successfully Updated','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career->delete();
        Toastr::success('Career Successfully Updated','Success');
        return redirect()->back();
    }
}
