<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;

use App\PackSize;
use Illuminate\Http\Request;

class PackSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = PackSize::latest()->get();
        return view('backend.packs_size.index',compact('sizes'));
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
            'name' => 'string|required|max:255',
        ]);

        $size = new PackSize();
        $size->size_name = $request->name;
        $size->save();

        Toastr::success('Pack Size Successfully Added','Success');
        return redirect()->back();
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'string|required|max:255',
        ]);

        $update_id = $request->size_id;
        $size = PackSize::findOrFail($update_id);

        $size->size_name = $request->name;
        $size->status = $request->status;
        $size->update();

        Toastr::success('Pack Size Successfully Updated','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PackSize  $packSize
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packSize = PackSize::findOrFail($id);
        $packSize->delete();
        Toastr::success('Pack Size Successfully Deleted','Success');
        return redirect()->back();
    }
}
