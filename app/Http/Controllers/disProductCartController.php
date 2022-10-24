<?php

namespace App\Http\Controllers;

use App\PackSize;
use Cart;
use App\Product;
use App\ProductVariant;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class disProductCartController extends Controller
{
    // add to cart
    public function add_to_cart(Request $request)
    {
        $pid = $request->product_id;
        $option = $request->option;
        $qty = $request->qty;
        $input_price = $request->price;
        $product = Product::findOrFail($pid);


        if (isset($input_price)) {
            $price = $input_price;
            $size = $request->size;
        } else {
            $variant = ProductVariant::where('id', $option)->first();
            $price = $variant->price;
            $size = PackSize::findOrFail($variant->size_id)->size_name;
        }

        $name = $product->product_name;
        $item = Cart::add(uniqid(), $name, $price, $qty, $size,$pid);

        return redirect()->back()->with('success', 'You have successfully updated your cart');
    }

    // shopping cart
    public function cart_item()
    {
        $cart_items = Cart::getContent();
        return view('frontend.dis-cart-item', compact('cart_items'));
    }
}
