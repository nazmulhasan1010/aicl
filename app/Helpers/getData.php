<?php

use App\Category;
use App\Cropscat;
use App\Disorder;
use App\Disorderproduct;
use App\Product;
use App\ProductVariant;
use App\Ratings;
use App\Specification;
use Illuminate\Support\Facades\DB;

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

function getDisorder($inst, $id)
{
    if ($inst === 'all') {
        return Disorder::get();
    } elseif ($inst === 'byCropsId') {
        return Disorder::where('crops_id', '=', $id)->get();
    } elseif ($inst === 'byId') {
        return Disorder::where('id', '=', $id)->get();
    } elseif ($inst === 'byDisId') {
        return Disorder::where('disorder_id', '=', $id)->get();
    }
}

function getDisProduct($inst, $id)
{
    if ($inst === 'all') {
        Disorderproduct::get();
    } elseif ($inst === 'id') {
        return Disorderproduct::where('id', '=', $id)->get();
    } elseif ($inst === 'disId') {
        return Disorderproduct::where('disorder_id', '=', $id)->get();
    }else {
        return Disorderproduct::where('product_id', '=', $id)->where('disorder_id', '=', $inst)->get();
    }

}

function getProductDetails($id)
{
    return Product::select('products.*', 'product_variants.*', 'sizes.size_name')
        ->join('product_variants', 'products.id', '=', 'product_variants.product_id')
        ->join('sizes', 'sizes.id', '=', 'product_variants.size_id')
        ->where('products.id', '=', $id)->get();
}

function getProductDetailsByCat($id)
{
    return Product::select('products.*', 'product_variants.*', 'sizes.size_name')
        ->join('product_variants', 'products.id', '=', 'product_variants.product_id')
        ->join('sizes', 'sizes.id', '=', 'product_variants.size_id')
        ->where('products.category_id', '=', $id)->get();
}

function getProductDetailsAll()
{
    return Product::select('products.*', 'product_variants.*', 'sizes.size_name')
        ->join('product_variants', 'products.id', '=', 'product_variants.product_id')
        ->join('sizes', 'sizes.id', '=', 'product_variants.size_id')->get();
}

function getReview($id)
{
    $ratings = Ratings::where('product_id', '=', $id)->sum('ratings.ratings');
    $allData = Ratings::where('product_id', '=', $id)->get();
    $allDataSFive = Ratings::where('product_id', '=', $id)->take(5)->get();
    $fiveStar = Ratings::where('product_id', '=', $id)->where('ratings', '=', 5)->count();
    $fourStar = Ratings::where('product_id', '=', $id)->where('ratings', '=', 4)->count();
    $threeStar = Ratings::where('product_id', '=', $id)->where('ratings', '=', 3)->count();
    $towStar = Ratings::where('product_id', '=', $id)->where('ratings', '=', 2)->count();
    $oneStar = Ratings::where('product_id', '=', $id)->where('ratings', '=', 1)->count();
    return [
        'ratings' => $ratings,
        'allData' => $allData,
        'fiveSat' => $fiveStar,
        'fourStar' => $fourStar,
        'threeStar' => $threeStar,
        'towStar' => $towStar,
        'oneStar' => $oneStar,
        'allDataSFive' => $allDataSFive
    ];
}

function getSpecificition($id)
{
    return Specification::where('product_id', '=', $id)->get();
}
function getSpecificitionId($id)
{
    return Specification::where('id', '=', $id)->get();
}

function disorderDetailsById($id)
{
    return Disorder::select('disorders.*', 'disorderproducts.*')
        ->join('disorderproducts', 'disorders.disorder_id', '=', 'disorderproducts.disorder_id')
        ->where('disorders.id', '=', $id)->get();
}

function getProductWithDisId($id)
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
    return $productsArray;
}

function getDisExistProduct($disId){
    return Disorderproduct::select('disorderproducts.product_id')->where('disorder_id', '=', $disId)->get();
}




