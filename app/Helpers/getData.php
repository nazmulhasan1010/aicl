<?php

use App\Category;
use App\Cropscat;
use App\Disorder;
use App\Product;

function getProductCategory()
{
    return Category::get();
}

function getProduct($id)
{
    if ($id != 'all') {
        return Product::where('category_id', '=', $id)->get();
    } else {
        return Product::get();
    }

}

function getCropsData($limit, $start, $cropsid)
{
    if ($cropsid === 'all') {
        return Cropscat::get();
    } elseif ($cropsid === 'spe') {
        return Cropscat::where('id', '>', $start)->take($limit)->get();
    } else {
        return Cropscat::where('id', '=', $cropsid)->get();
    }
}

function getProductById($id)
{
    return Product:: where('id', '=', $id)->get();
}
function getDisorder($inst,$id){
    if ($inst==='all'){
        return Disorder::get();
    }elseif ($inst==='byCropsId'){
        return Disorder::where('crops_id','=',$id)->get();
    }elseif ($inst==='byId'){
        return Disorder::where('id','=',$id)->get();
    }else{
        return Disorder::where('disorder_id','=',$id)->get();
    }
}

