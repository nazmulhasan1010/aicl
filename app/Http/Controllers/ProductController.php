<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;
use App\Product;
use App\Category;
use App\ProductVariant;
use DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    // Product By Category
    public function product_by_cat($id)
    {
        $products           = Product::where('category_id',$id)->get();
        $categories         = Category::where('status',true)->get();
        $page_design        = Category::where('id',$id)->first();
        return view('frontend.product-by-category',compact('products','categories','page_design'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Product::findOrFail($id);

        SEOTools::setTitle($details->slug);
        SEOTools::setDescription(Str::limit($details->meta,160,));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage( asset('storage/product/'.$details->image));

        $pack_sizes = ProductVariant::where('product_id',$id)->get();

        return view('frontend.product-details',compact('details','pack_sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
