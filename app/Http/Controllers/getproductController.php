<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getproductController extends Controller
{
    public function getProduct(Request $request)
    {
        return getProduct($request->input('id'));
    }
}
