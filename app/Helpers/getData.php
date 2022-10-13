<?php

use App\Category;
use App\Cropscat;
use App\Product;

function getProductCategory()
{
    return Category::get();
}

function getProduct($id)
{
    if ($id != 'all') {
        return Product::where('category_id','=', $id)->get();
    } else {
        return Product::get();
    }

}

function getCrops()
{
    return Cropscat::get();
}

