@extends('layouts.backend.app')
@section('title','Order Edit')
@push('vendor_css')

@endpush
@push('page_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
@section('content')
 <!-- Start Content-->
 <div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Edit</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Order Edit</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Order Edit<a class="btn btn-info btn-xs float-right" href="{{ route('admin.order.index')}}">Orders</a></h4>
                    <hr/>
                    <div class="container" id="printableArea">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('frontend/assets/images/aicl_.webp')}}" class="img-rounded logo">
                                <p><hr/></p>
                            </div>

                            <div class="col-md-6">
                                <address>
                                    <strong>{{ $order->user->name}}</strong><br>
                                    Phone: {{ $order->user->phone_number}}<br>
                                    Email: {{ $order->user->email}}<br>
                                    Address: {{ $order->address}}<br>
                                    {{ $order->upzila->name}},{{ $order->district->name}},{{ $order->division->name}}
                                </address>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong>Invoice #</strong>: {{ $order->order_number}} <br/>
                                <strong>Date</strong> : {{ date('d-m-Y',strtotime($order->order_date))}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 well invoice-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('messages.Product-name')</th>
                                            <th class="text-center">@lang('messages.Pack-size')</th>
                                            <th class="text-center">@lang('messages.Quantity')</th>
                                            <th class="text-right">@lang('messages.Price')</th>
                                            <th class="text-right">@lang('messages.Sub-total')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->order_details as $key=>$item)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{ $item->product_name }}</td>
                                                <td class="text-center">{{ $item->pack_size}}</td>
                                                <td class="text-center">{{ $item->product_qty}}</td>
                                                <td class="text-right">@lang('messages.Tk') {{ number_format($item->product_price,2)}}</td>
                                                <td class="text-right">@lang('messages.Tk') {{ number_format($item->product_price * $item->product_qty,2)}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="4"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">&nbsp;</td>
                                            <td class="text-right"><strong>@lang('messages.Grand-total')</strong></td>
                                            <td class="text-right"><strong>@lang('messages.Tk') {{ number_format($order->total_amount,2)}}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="{{ route('admin.order.update',$order->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <select name="order_status" id="" class="form-control">
                                                <option value="Approved">Approved</option>
                                                <option value="Delivered">Delivered</option>
                                                <option value="Cancel">Cancel</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-success">Update Order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div>
<!-- container-fluid -->
@endsection
@push('vendor_js')

@endpush
@push('page_js')

@endpush
