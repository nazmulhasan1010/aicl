<?php

namespace App\Http\Controllers;

use App\Cropscat;
use Illuminate\Http\Request;

class cropsUserController extends Controller
{
    function cropscat()
    {
        $cropsCatData = Cropscat::get();
        return view('frontend.crops.categories',compact('cropsCatData'));
    }
}