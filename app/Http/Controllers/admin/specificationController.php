<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Specification;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class specificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $specification = Specification::get();
        return view('backend.productAttachments.specification', compact('specification'));
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
            'products' => 'required'
        ]);
//        return $request->all();
        $specification = new Specification();
        $specification->product_id = $request->products;
        $specification->specification = $request->composition;
        $specification->save();

        Toastr::success('Specification Successfully Added', 'Success');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $product = getProductById($id);
        $spe = getSpecificition($id);
        return view('backend.productAttachments.specificationshow',compact('product','spe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spe = getSpecificitionId($id);
        return view('backend.productAttachments.specificationEdit',compact('spe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
//      return $request->id;
        $this->validate($request, [
            'id' => 'required'
        ]);
        $specification = Specification::find($request->id);
        $specification->product_id = $request->products;
        $specification->specification = $request->composition;
        $specification->update();

        Toastr::success('Specification Updated Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Specification $specification)
    {
        $specification->delete();
        Toastr::success('Specification Deleted', 'Success');
        return redirect()->back();
    }
}
