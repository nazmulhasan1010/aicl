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
        $cartId = uniqid();


        if (isset($input_price)) {
            $price = $input_price;
            $size = $request->size;
        } else {
            $variant = ProductVariant::where('id', $option)->first();
            $price = $variant->price;
            $size = PackSize::findOrFail($variant->size_id)->size_name;
        }

        $name = $product->product_name;
        $item = Cart::add($cartId, $name, $price, $qty, $size, $pid);
        $data = getProductDetails($request->product_id);
        return redirect()->back()->with(['success'=> 'You have successfully updated your cart', 'data'=> $data,'id'=>$cartId]);
    }

    // shopping cart
    public function cart_item()
    {
        $cart_items = Cart::getContent();
        return view('frontend.dis-cart-item', compact('cart_items'));
    }

    // update item
    public function update_item(Request $request)
    {
        $item_id = $request->input('id');
        $qty = $request->input('quantity');

        Cart::update($item_id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $qty
            ),
        ));
        return [
            'total' => number_format(\Cart::getTotal(), 2),
            'all' => Cart::getContent()
        ];
    }
}
