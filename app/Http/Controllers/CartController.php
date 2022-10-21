<?php

namespace App\Http\Controllers;


use Brian2694\Toastr\Facades\Toastr;
use App\Product;
use App\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Session;
use Cart;
use DB;
use App\User;
use Auth;
use App\Order;
use App\Order_detail;
use App\PackSize;
use Mail;

class CartController extends Controller
{
    // add to cart
    public function add_to_cart(Request $request)
    {
//        return $request->all();
        $pid = $request->product_id;
        $option = $request->option;
        $qty = $request->qty;
        $input_price = $request->price;
        $product = Product::findOrFail($pid);


        if (isset($input_price)) {
            $price = $input_price;
            $size = $request->size;
        } else {
            $variant = ProductVariant::where('id', $option)->first();
            $price = $variant->price;
            $size = PackSize::findOrFail($variant->size_id)->size_name;
        }

        $name = $product->product_name;
        $item = Cart::add(uniqid(), $name, $price, $qty, $size);

        if ($item) {
            Toastr::success('Product Successfully Add to Cart', 'Success');
        } else {
            Toastr::warning('NotWorking', 'warning');
        }

        return redirect()->route('shopping-cart');
    }

    // shopping cart
    public function cart_item()
    {

        $cart_items = Cart::getContent();
        return view('frontend.cart-item', compact('cart_items'));

    }


    // distirct select
    public function select_district($id)
    {
        $districts = DB::table('districts')->where('division_id', $id)->get();
        return response()->json($districts);
    }

    // upzila select
    public function select_upzila($id)
    {
        $upzilas = DB::table('upazilas')->where('district_id', $id)->get();
        return response()->json($upzilas);
    }

    // checkout
    function checkout()
    {
        $divisions = DB::table('divisions')->get();
        return view('frontend.check-out', compact('divisions'));
    }

    // romove item
    public function remove_item($id)
    {
        Cart::remove($id);
        Toastr::success('Item Successfully Remove', 'Success');
        return redirect()->back();
    }

    // update item
    public function update_item(Request $request)
    {
        $item_id = $request->id;
        $qty = $request->qty;

        Cart::update($item_id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $qty
            ),
        ));

        Toastr::success('Item Successfully Update', 'Success');
        return redirect()->back();
    }

    // check user
    public function user_check()
    {

        $divisions = DB::table('divisions')->get();
        return view('frontend.check-user', compact('divisions'));
    }

    public function new_customer()
    {

        $divisions = DB::table('divisions')->get();
        return view('frontend.customer.new-customer', compact('divisions'));
    }

    // new customer checkout
    public function new_customer_checkout(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'string|required|max:255',
            'email' => 'email|required|max:255|unique:users',
            'telephone' => 'required|max:255',
            'division' => 'required|max:255',
            'district' => 'required|max:255',
            'upzila' => 'required|max:255',
            'address' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        $save_data = session([
            'customer_name' => $request->fullname,
            'customer_email' => $request->email,
            'customer_phone' => $request->telephone,
            'customer_division' => $request->division,
            'customer_district' => $request->district,
            'customer_upzila' => $request->upzila,
            'customer_address' => $request->address,
            'customer_password' => $request->password,
            'order_type' => "new-register",
        ]);

        return redirect()->route('order-summary');
    }

    // guest-info
    public function guest_info(Request $request)
    {

        $divisions = DB::table('divisions')->get();
        return view('frontend.shipping-info', compact('divisions'));
    }

    // order summary
    public function order_summary()
    {

        $cart_items = Cart::getContent();
        return view('frontend.order-summary', compact('cart_items'));
    }

    // guest checkout
    public function guest_checkout(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'string|required|max:255',
            'email' => 'email|required|max:255|unique:users',
            'telephone' => 'required|max:255',
            'division' => 'required|max:255',
            'district' => 'required|max:255',
            'upzila' => 'required|max:255',
            'address' => 'required'
        ]);

        $save_data = session([
            'customer_name' => $request->fullname,
            'customer_email' => $request->email,
            'customer_phone' => $request->telephone,
            'customer_division' => $request->division,
            'customer_district' => $request->district,
            'customer_upzila' => $request->upzila,
            'customer_address' => $request->address,
            'order_type' => "guest"
        ]);

        return redirect()->route('order-summary');
    }

    // guest user_checkout
    public function user_checkout(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'string|required|max:255',
            'email' => 'email|required|max:255',
            'telephone' => 'required|max:255',
            'division' => 'required|max:255',
            'district' => 'required|max:255',
            'upzila' => 'required|max:255',
            'address' => 'required'
        ]);

        $save_data = session([
            'customer_name' => $request->fullname,
            'customer_email' => $request->email,
            'customer_phone' => $request->telephone,
            'customer_division' => $request->division,
            'customer_district' => $request->district,
            'customer_upzila' => $request->upzila,
            'customer_address' => $request->address,
            'order_type' => "user"
        ]);

        return redirect()->route('order-summary');
    }

    public function destroy_data()
    {
        // empty session data
        $destroy_data = session([
            'customer_name' => NULL,
            'customer_email' => NULL,
            'customer_phone' => NULL,
            'customer_division' => NULL,
            'customer_district' => NULL,
            'customer_upzila' => NULL,
            'customer_address' => NULL,
            'order_type' => NULL,
        ]);
    }

    // send email to customer and admin
    public function send_mail_notice($customer_name, $customer_email, $order_id)
    {
        // send mail to customer
        $data = [
            'subject' => "Order Successfully Placed!",
            'name' => $customer_name,
            'email' => $customer_email,
            'order_number' => $order_id

        ];

        Mail::send('order-success-mail', $data, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });
        // send mail to admin
        $data_admin = [
            'subject' => "New Order Pending",
            'name' => $customer_name,
            'email' => 'info.sontus@gamil.com',
            'order_number' => $order_id

        ];

        Mail::send('new-order-mail-for-admin', $data_admin, function ($message) use ($data_admin) {
            $message->to($data_admin['email'])
                ->subject($data_admin['subject']);
        });
    }

    // order
    public function submit_order(Request $request)
    {
        $name = session('customer_name');
        $phone = session('customer_phone');
        $email = session('customer_email');
        $division = session('customer_division');
        $district = session('customer_district');
        $upzila = session('customer_upzila');
        $address = session('customer_address');
        $order_type = session('order_type');
        $cus_pass = session('customer_password');


        $cart_items = Cart::getContent();

        if ((null !== $order_type && $order_type == "guest")) {

            // save customer info
            $user_id = User::insertGetId([
                'name' => $name,
                'email' => $email,
                'phone_number' => $phone,
                'address' => $address,
                'password' => Hash::make('guest_pass')
            ]);

            // save order

            $order_id = Order::insertGetId([
                // 'order_number'      => Str::random(10),str_rand(6 only digit)->unique;
                // 'order_number'      => mt_time(),
                'order_number' => time(),
                'customer_id' => $user_id,
                'division_id' => $division,
                'district_id' => $district,
                'upzila_id' => $upzila,
                'address' => $address,
                'order_date' => date('Y-m-d'),
                'total_amount' => Cart::getTotal(),
                'created_at' => date('Y-m-d')
            ]);

            // save order details
            foreach ($cart_items as $item) {
                $details = Order_detail::insert([
                    'order_id' => $order_id,
                    'product_name' => $item->name,
                    'product_qty' => $item->quantity,
                    'product_price' => $item->price,
                    'pack_size' => $item->attributes[0],
                    'created_at' => date('Y-m-d')
                ]);
            }

            //$this->send_mail_notice($name,$email,$order_id);
            // empty session data
            $this->destroy_data();
            Cart::clear();
            Toastr::success('Order Successfully Placed', 'success');
            return redirect()->route('home');

        } elseif ((null !== $order_type && $order_type == "new-register")) {

            // save customer info
            $user_id = User::insertGetId([
                'name' => $name,
                'email' => $email,
                'phone_number' => $phone,
                'address' => $address,
                'password' => Hash::make($cus_pass)
            ]);

            // save order

            $order_id = Order::insertGetId([
                // 'order_number'      => Str::random(10),str_rand(6 only digit)->unique;
                'order_number' => time(),
                'customer_id' => $user_id,
                'division_id' => $division,
                'district_id' => $district,
                'upzila_id' => $upzila,
                'address' => $address,
                'order_date' => date('Y-m-d'),
                'total_amount' => Cart::getTotal(),
                'created_at' => date('Y-m-d')
            ]);

            // save order details
            foreach ($cart_items as $item) {
                $details = Order_detail::insert([
                    'order_id' => $order_id,
                    'product_name' => $item->name,
                    'product_qty' => $item->quantity,
                    'product_price' => $item->price,
                    'pack_size' => $item->attributes[0],
                    'created_at' => date('Y-m-d')
                ]);
            }


            // empty session data
            $this->destroy_data();
            Cart::clear();
            Toastr::success('Order Successfully Placed', 'success');
            return redirect()->route('home');

        } else {
            // save order
            $order_id = Order::insertGetId([
                'order_number' => time(),
                'customer_id' => Auth::user()->id,
                'division_id' => $division,
                'district_id' => $district,
                'upzila_id' => $upzila,
                'address' => $address,
                'order_date' => date('Y-m-d'),
                'total_amount' => Cart::getTotal(),
                'created_at' => date('Y-m-d')
            ]);
            // save order details
            foreach ($cart_items as $item) {
                $details = Order_detail::insert([
                    'order_id' => $order_id,
                    'product_name' => $item->name,
                    'product_qty' => $item->quantity,
                    'product_price' => $item->price,
                    'pack_size' => $item->attributes[0],
                    'created_at' => date('Y-m-d')
                ]);
            }


            // empty session data
            $this->destroy_data();
            Cart::clear();
            Toastr::success('Order Successfully Placed', 'success');
            return redirect()->route('user.dashboard');
        }
    }
}
