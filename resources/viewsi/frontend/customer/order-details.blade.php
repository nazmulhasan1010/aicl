@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')
    <style>
        .invoice-head td {
        padding: 0 8px;
        }
        .container {
        padding-top:30px;
        }
        .invoice-body{
        background-color:transparent;
        }
        .invoice-thank{
        margin-top: 60px;
        padding: 5px;
        }
        address{
        margin-top:15px;
        }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="col-md-12 mt-5">
        <div class="row">
            <aside id="column-right" class="col-sm-3 hidden-xs">
                 @include('layouts.partials.user-sidebar');
            </aside>
            <div  class="col-sm-9" >
                <h1>@lang('messages.Order')</h1>
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
                            <div class="col-md-6">
                                <table class="invoice-head mt-3 pull-right text-right">
                                    <tbody>
                                        <tr>
                                            <td class="pull-right"><strong>Invoice #</strong></td>
                                            <td>{{ $order->order_number}}</td>
                                        </tr>
                                        <tr>
                                            <td class="pull-right"><strong>Date</strong></td>
                                            <td>{{ date('d-m-Y',strtotime($order->order_date))}}</td>
                                        </tr>
                                        <tr>
                                            <td>Status:</td>
                                            <td>{{ $order->order_status}}</td>
                                        </tr>

                                    </tbody>
                                </table>
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
                            </div>
                        </div>

                    </div>
                    <input type="button" class="btn btn-info float-right mb-5" onclick="printDiv('printableArea')" value="Print" />
            </div>
        </div>
    </div>
</div>
@endsection
@push('vendor_js')

@endpush
@push('page_js')
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endpush
