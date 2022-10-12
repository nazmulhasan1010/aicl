<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // on page seo
    public function on_page_seo($title,$description)
    {
        SEOTools::setTitle($title);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage( asset('frontend/assets/images/main.webp'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // seo
        $this->on_page_seo('Customer','Customer page');
        $customers = User::where('role_id','2')->latest()->get();
        return view('backend.customer.index',compact('customers'));
    }

    
}
