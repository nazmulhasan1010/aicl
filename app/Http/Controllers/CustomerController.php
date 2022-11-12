<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Artesaos\SEOTools\Facades\SEOTools;
use App\User;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('frontend.customer.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|string|max:255',
            'address'   => 'required|string|max:255',
            'phone'     => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->phone_number = $request->phone;
        $user->address      = $request->address;
        $user->role_id      = "2";
        $user->password     = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.login')->with('success','Sign Up Successfully Done. You Can Login Now');
    }

    // Dashboard
    public function dashboard()
    {
        SEOTools::setTitle('User Dashboard');
        SEOTools::setDescription('User Dashboard');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage( asset('backend/assets/images/logo.webp'));

        $orders         = Order::where('customer_id',Auth::user()->id)->latest()->get();
        $pending_orders = Order::where('order_status','Pending')->where('customer_id',Auth::user()->id)->get();
        $cancel_orders  = Order::where('order_status','Cancel')->where('customer_id',Auth::user()->id)->get();
        return view('frontend.customer.dashboard',compact('orders','pending_orders','cancel_orders'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        SEOTools::setTitle('User Account Update');
        SEOTools::setDescription('User Account Update');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('');
        SEOTools::jsonLd()->addImage( asset('backend/assets/images/logo.webp'));

        $user = User::where('id',Auth::user()->id)->first();
        return view('frontend.customer.edit',compact('user'));
    }

    public function update_profile(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|string|max:255',
            'phone'     => 'required|string|max:255',
            'email'     => 'required|string|email|max:255',

        ]);

        $user = User::where('id',Auth::user()->id)->first();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->phone_number = $request->phone;
        $user->update();
        return redirect()->back()->with('success','Account Successfully Updated');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    // login
    public function login()
    {
        return view('frontend.customer.login');
    }

    // Order
    public function order()
    {
        $orders = Order::where('customer_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('frontend.customer.order',compact('orders'));
    }

    // order details
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('frontend.customer.order-details',compact('order'));
    }

    // Password
    public function password()
    {
        return view('frontend.customer.password');
    }

    // Update Password
    public function passwordUpdate(Request $request)
    {
        $this->validate($request,[
            'old_password'  => 'required',
            'password'      => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password,$hashedPassword))
        {
            if(!Hash::check($request->password,$hashedPassword))
            {
                $user = User::findOrFail(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->back()->with('success','Password Successfully Changed');
            }
            else{
                return redirect()->back()->with('warning','New password cannot be the same as old password');
            }
        }
        else{
            return redirect()->back()->with('warning','Current password not match');
        }
    }

    // Address
    public function address()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('frontend.customer.address',compact('user'));
    }

    public function updateAddress(Request $request)
    {
        $this->validate($request,[
            'address' => 'required|string',
        ]);

        $address = User::where('id',Auth::user()->id)->first();
        $address->address = $request->address;
        $address->update();

        return redirect()->back()->with('success','Address Successfully Updated');
    }

}
