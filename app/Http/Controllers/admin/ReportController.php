<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Services\PayUService\Exception;
use App\User;

class ReportController extends Controller
{
    // Product Report
    public function product_report_page()
    {
        $products = NULL;
        return view('backend.report.product-report-page',compact('products'));
    }

    public function product_report_submit(Request $request)
    {
        try {
            $from_date      = $request->from;
            $to_date        = $request->to;

            $products       =  Product::whereBetween('created_at',[$from_date,$to_date])->get();
            return view('backend.report.product-report-page',compact('products','from_date','to_date'));

          } catch (\Exception $e) {

              return $e->getMessage();
          }


    }

    // Order Report
    public function order_report_page()
    {
        $orders = NULL;
        return view('backend.report.order-report-page',compact('orders'));
    }

    public function order_report_submit(Request $request)
    {

        $from_date    = $request->from;
        $to_date      = $request->to;
        $order_status = $request->order_status;

        if($order_status == "All")
        {
            $orders    = Order::whereBetween('order_date',[$from_date,$to_date])->get();
        }
        else {
            $orders    = Order::whereBetween('order_date',[$from_date,$to_date])->where('order_status',$order_status)->get();
        }

        return view('backend.report.order-report-page',compact('orders','from_date','to_date'));

    }

    // Customer report
    public function customer_report_page()
    {
        $customers      = NULL;
        return view('backend.report.customer-report-page',compact('customers'));
    }

    public function customer_report_submit(Request $request)
    {
        try {
            $from_date      = $request->from;
            $to_date        = $request->to;

            $customers       =  User::where('role_id',"2")->whereBetween('created_at',[$from_date,$to_date])->get();
            return view('backend.report.customer-report-page',compact('customers','from_date','to_date'));

          } catch (\Exception $e) {

              return $e->getMessage();
          }
    }

}
