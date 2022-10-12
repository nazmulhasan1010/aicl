@extends('layouts.backend.app')
@section('title','Order Report')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
 <!-- Start Content-->
 <div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Report</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Order Report</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Order Report</h4>
                    <p class="sub-header">

                    </p>
                    <form action="{{ route('admin.order.report.submit')}}" method="GET">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="from"> From Date</label>
                                    <input type="date" name="from" value="{{ date('Y-m-d')}}"  id="from" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="to"> To Date</label>
                                    <input type="date" name="to" value="{{ date('Y-m-t')}}"  id="to" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="order_status"> Status</label>
                                    <select name="order_status" id="order_status" class="form-control">
                                        <option value="All" selected>All</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if ($orders == NULL)

                    @else
                    <div id="printableArea">
                        <div class="text-center">
                            <h3>Order Report  {{ $from_date}} To {{ $to_date }}</h3>
                        </div>
                        <hr>
                        <table class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order Number</th>
                                    <th>Customer Name</th>
                                    <th>Address </th>
                                    <th>Date </th>
                                    <th class="text-right">Total Amount </th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key=>$order)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td> <a href="{{ route('admin.order.show',$order->id)}}"> {{ $order->order_number}}</a></td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>
                                        {{ $order->address}} ,{{ $order->upzila->name}}, {{ $order->district->name}}, {{ $order->division->name}}
                                    </td>
                                    <td>{{ date('d M Y',strtotime($order->order_date))}}</td>
                                    <td class="text-right">{{ number_format($order->total_amount,2)}}</td>
                                    <td class="text-center">
                                        {{ $order->order_status}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <input type="button" class="btn btn-info float-right mb-5" onclick="printDiv('printableArea')" value="Print" />
                    @endif
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
