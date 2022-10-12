<?php

namespace App\Http\Controllers\admin;

use App\Career;
use App\Category;
use App\Contact;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Order;
use App\PackSize;
use App\Partner;
use App\Product;
use App\Slider;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class DashboardController extends Controller
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
        $this->on_page_seo('Admin Dashboard','Admin Dashboard');
        $today              = Carbon::now()->toDateString();
        $fist_day_of_month  = date('Y-m-d');
        $last_day_of_month  = date("Y-m-t", strtotime($fist_day_of_month));

        $todays_orders      = Order::where('order_date',$today)->count();
        $month_orders       = Order::whereBetween('order_date',[$fist_day_of_month,$last_day_of_month])->count();
        $total_orders       = Order::count();
        $products           = Product::count();
        $categories         = Category::count();
        $sliders            = Slider::count();
        $partners           = Partner::count();
        $employees          = Employee::count();
        $careers            = Career::count();
        $contacts           = Contact::count();
        $customers          = User::where('role_id',2)->count();
        $sizes              = PackSize::count();

        return view('backend.dashboard',compact('todays_orders','total_orders','month_orders','products','categories','sliders','partners','employees','careers','contacts','customers','sizes'));
    }


}
