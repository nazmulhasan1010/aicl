@extends('layouts.backend.app')
@section('title','order')
@push('vendor_css')
    <!-- plugin css -->
    <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
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
                    <li class="breadcrumb-item active" aria-current="page">order</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Orders</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Orders<a class="btn btn-info btn-xs float-right" href="{{ route('admin.order.index')}}" >New Orders</a></h4>
                    <p class="sub-header">

                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                    {{-- <table   class="table dt-responsive nowrap"> --}}
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Number</th>
                                <th>Customer Name</th>
                                <th>Address </th>
                                <th>Date </th>
                                <th class="text-right">Total Amount </th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
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

                                <td style="text-align: center">
                                    <a href="{{ route('admin.order.edit',$order->id)}}" class="btn btn-info btn-sm">
                                        <div class="icon-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>

                                        </div>
                                    </a>
                                    <button class="btn btn-danger btn-xs"  type="button" onclick="deleteItem({{$order->id }})">
                                        <div class="icon-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                        </div>
                                    </button>
                                    <form id="delete-form-{{$order->id }}" action="{{ route('admin.order.destroy',$order->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div>
<!-- container-fluid -->
@endsection
@push('vendor_js')
    <!-- datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js')}}"></script>
    <!-- summernote init -->
    <script src="{{ asset('backend/assets/js/summernote-lite.min.js')}}"></script>

@endpush
@push('page_js')

@endpush
