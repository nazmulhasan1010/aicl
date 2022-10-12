<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Product;
use App\Category;
use App\PackSize;
use App\ProductVariant;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function on_page_seo($title, $description)
    {
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('frontend/assets/images/main.webp'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // seo
        $this->on_page_seo('Products', 'Products page');
        $categories = Category::where('status', true)->orderBy('auto_code', 'asc')->get();
        $sizes = PackSize::where('status', true)->orderBy('size_name')->get();
        $products = Product::get();
        return view('backend.product.index', compact('products', 'categories', 'sizes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'string|required|max:255',
            'name_bn' => 'string|required|max:255',
            'category' => 'numeric|required',
            'description' => 'string|required',
            'description_bn' => 'string|required',
            'image' => 'required|image|mimes:jpeg,jpg,png,svg,webp',
        ]);

        $product_image = $request->file('image');
        $slug = Str::slug($request->name);
        $rows = $request->input('rows');
        $arr = array();


        if (isset($product_image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug . '-' . uniqid() . '-' . $currentDate . '.' . $product_image->getClientOriginalExtension();

            // check dir exists
            if (!Storage::disk('public')->exists('product')) {
                Storage::disk('public')->makeDirectory('product');
            }
            $postImage = Image::make($product_image)->resize(190, 270)->stream();
            Storage::disk('public')->put('product/' . $imageName, $postImage);
        }

        $product = new Product();
        $product->category_id = $request->category;
        $product->product_name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->meta = $request->meta;
        $product->product_name_bn = $request->name_bn;
        $product->composition = $request->composition;
        $product->product_details = $request->description;
        $product->product_details_bn = $request->description_bn;
        $product->image = $imageName;
        $product->save();

        $product_id = $product->id;


        foreach ($rows as $key => $val) {

            $val["product_id"] = $product_id;
            $val["created_at"] = date("Y-m-d H:i:s");
            array_push($arr, $val);
        }

        if (count($rows) > 0) {
            ProductVariant::insert($arr);
        }


        Toastr::success('Product Successfully Added', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // seo
        $this->on_page_seo('View Product', 'View Products page');
        return view('backend.product.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // seo
        $this->on_page_seo('Edit Product', 'Edit Product page');
        $categories = Category::where('status', true)->orderBy('auto_code', 'asc')->get();
        $sizes = PackSize::where('status', true)->orderBy('size_name')->get();
        $varients = ProductVariant::where('product_id', $product->id)->get();
        return view('backend.product.edit', compact('product', 'categories', 'sizes', 'varients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'string|required|max:255',
            'name_bn' => 'string|required|max:255',
            'category' => 'numeric|required',
            'description' => 'string|required',
            'description_bn' => 'string|required',
            'image' => 'image|mimes:jpeg,jpg,png,svg,webp',
        ]);

        $product_image = $request->file('image');
        $slug = Str::slug($request->name);
        $rows = $request->input('rows');
        $arr = array();


        if (isset($product_image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug . '-' . uniqid() . '-' . $currentDate . '.' . $product_image->getClientOriginalExtension();

            // check dir exists
            if (!Storage::disk('public')->exists('product')) {
                Storage::disk('public')->makeDirectory('product');
            }
            $postImage = Image::make($product_image)->resize(190, 270)->stream();
            Storage::disk('public')->put('product/' . $imageName, $postImage);

        } else {
            $imageName = $product->image;
        }


        $product->category_id = $request->category;
        $product->product_name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->meta = $request->meta;
        $product->product_name_bn = $request->name_bn;
        $product->composition = $request->composition;
        $product->product_details = $request->description;
        $product->product_details_bn = $request->description_bn;
        $product->image = $imageName;
        $product->update();

        $varients = ProductVariant::where('product_id', $product->id)->delete();

        foreach ($rows as $key => $val) {

            $val["product_id"] = $product->id;
            $val["created_at"] = date("Y-m-d H:i:s");
            array_push($arr, $val);
        }

        if (count($rows) > 0) {
            ProductVariant::insert($arr);
        }


        Toastr::success('Product Successfully Updated', 'Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Delete old image
        if (Storage::disk('public')->exists('product/' . $product->image)) {
            Storage::disk('public')->delete('product/' . $product->image);
        }
        $productVarient = ProductVariant::where('product_id', $product->id)->delete();
        $product->delete();
        Toastr::success('Product Successfully Deleted', 'Success');
        return redirect()->back();
    }
}
