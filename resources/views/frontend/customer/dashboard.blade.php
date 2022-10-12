@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="row">
                <aside id="column-right" class="col-sm-3 hidden-xs">
                     @include('layouts.partials.user-sidebar');
                </aside>
                <div id="content" class="col-sm-9">
                    <h1>@lang('messages.Account')</h1>
                    <hr/>
                    <h4>@lang('messages.welcome') {{ Auth::user()->name }}</h4>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mb-3">
                            <div class="dash-count bg-one">
                                <h4 class="pt-3">@lang('messages.Total-order')</h4>
                                <strong>{{ $orders->count() }}</strong>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-3">
                            <div class="dash-count bg-two">
                                <h4 class="pt-3">@lang('messages.Cancel-order')</h4>

                                <strong>{{ $cancel_orders->count() }}</strong>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-3">
                            <div class="dash-count bg-three">
                                <h4 class="pt-3">@lang('messages.Pending-order')</h4>

                                <strong>{{ $pending_orders->count() }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="mt-3">Latest 5 Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <td class="text-left">#</td>
                                        <td class="text-left">@lang('messages.Order-number')</td>
                                        <td class="text-left">@lang('messages.Order-date')</td>
                                        <td class="text-left">@lang('messages.Status')</td>
                                        <td class="text-right">@lang('messages.Grand-total')</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->take(5) as $key=>$item)
                                        <tr>
                                            <td>{{ $key+1}}</td>
                                            <td>
                                                <a href="{{ route('user.view-order',$item->id)}}"> {{ $item->order_number}}</a>

                                            </td>
                                            <td>{{ date('d M Y',strtotime($item->order_date))}}</td>
                                            <td>{{ $item->order_status}}</td>
                                            <td class="text-right">@lang('messages.Tk') {{ number_format($item->total_amount,2)}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('vendor_js')

@endpush
@push('page_js')

@endpush
