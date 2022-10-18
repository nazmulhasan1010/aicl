<?php

namespace App\Http\Controllers;

use App\Cropscat;
use Illuminate\Http\Request;

class cropsUserController extends Controller
{
    function cropscat()
    {
        $cropsCatData = Cropscat::get();
        return view('frontend.crops.categories', compact('cropsCatData'));
    }

    function disorder($id)
    {
        $disorder = getDisorder('byCropsId', $id);
        return view('frontend.crops.item', compact('disorder'));

    }

    function getDisorderByDisId($id)
    {
        return getDisorder('byDisId', $id);
    }

    function getDisorderProduct($id)
    {
        $productId = getDisProduct('disId', $id);
        $productsArray = array();
        foreach ($productId as $pId) {
            $products = getProductById($pId->product_id);
            foreach ($products as $product) {
                $new_data = array('product' => $products);
                array_push($productsArray, $new_data);
            }
        }
        return $productsArray ;
    }
     function disorder_product($id){
         $product = getProductDetails($id);
        return view('frontend.crops.product',compact('product'));
     }
}
