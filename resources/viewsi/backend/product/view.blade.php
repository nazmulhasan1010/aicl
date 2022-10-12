@extends('layouts.backend.app')
@section('title','Product Show')
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
                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Product Details</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Product Details<a class="btn btn-info btn-xs float-right" href="{{ route('admin.product.index')}}">Products</a></h4>
                    <hr/>
                    <div class="modal-body">
                        <table class="table table-straped">
                            <tr>
                                <th>Product Name:</th>
                                <td>{{ $product->product_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Name (Bangla):</th>
                                <td>{{ $product->product_name_bn }}</td>
                            </tr>
                            <tr>
                                <th>Product Category:</th>
                                <td>{{ $product->category->category_name }}</td>
                            </tr>
                            <tr>
                                <th>Product Details:</th>
                                <td>{!! $product->product_details !!}</td>
                            </tr>
                            <tr>
                                <th>Product Details (Bangla):</th>
                                <td>{!! $product->product_details_bn !!}</td>
                            </tr>
                        </table>
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
    
@push('page_js')
    
@endpush