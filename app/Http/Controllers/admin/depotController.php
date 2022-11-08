<?php

namespace App\Http\Controllers\admin;

use App\Depot;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class depotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $depot = Depot::get();
        return view('backend.depot.depot', compact('depot'));
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
//       return $request->all();
        $currentDate = Carbon::now()->toDateString();
        $imageName = uniqid('', true) . '-' . $currentDate . '.' . $request->image->getClientOriginalExtension();

        // check dir exists
        if (!Storage::disk('public')->exists('depot')) {
            Storage::disk('public')->makeDirectory('depot');
        }
        $postImage = Image::make($request->image)->resize(782, 440)->stream();
        Storage::disk('public')->put('depot/' . $imageName, $postImage);

        $depot = new Depot();
        $depot->location = $request->location;
        $depot->link = $request->link;
        $depot->image = $imageName;
        $depot->save();

        Toastr::success('Successfully Added', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        return Depot::where('id', '=', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public
    function update(Request $request, $id)
    {
//      return $request->all();
        $depot = Depot::find($request->depotId);
        if (isset($request->imageEdit)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid('', true) . '-' . $currentDate . '.' . $request->imageEdit->getClientOriginalExtension();

            // check dir exists
            if (!Storage::disk('public')->exists('depot')) {
                Storage::disk('public')->makeDirectory('depot');
            }
            Storage::delete('public/depot/' . Depot::where('id', '=', $request->depotId)->get()[0]->image);
            $postImage = Image::make($request->imageEdit)->resize(782, 440)->stream();
            Storage::disk('public')->put('depot/' . $imageName, $postImage);
            if ($imageName) {
                $depot->image = $imageName;
            }
        }

        if (isset($request->linkEdit) && $request->linkEdit != null) {
            $depot->link = $request->linkEdit;
        }
        $depot->location = $request->locationEdit;
        $depot->status = $request->row_status;
        $depot->update();

        Toastr::success('Successfully Updated', 'Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public
    function destroy($id)
    {
        Storage::delete('public/depot/' . Depot::where('id', '=', $id)->get()[0]->image);
        Depot::find($id)->delete();
        Toastr::success('Successfully Deleted', 'Success');
        return redirect()->back();
    }
}
