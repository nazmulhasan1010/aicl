<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Images;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class productImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $product = getProduct('all');
        return view('backend.productAttachments.productImage', compact('product'));
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
     * @return int
     */
    public function store(Request $request)
    {
        $image = $request->file('file');
        if ($image) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = uniqid('', true) . '-' . $currentDate . '.' . $image->getClientOriginalExtension();

            // check dir exists
            if (!Storage::disk('public')->exists('product')) {
                Storage::disk('public')->makeDirectory('product');
            }
            $postImage = Image::make($image)->resize(190, 270)->stream();
            Storage::disk('public')->put('product/' . $imageName, $postImage);
        }
        $image = new Images();
        $image->product_id = $request->input('product_id');
        $image->image = $imageName;
        $image->save();

        return 1;

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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
