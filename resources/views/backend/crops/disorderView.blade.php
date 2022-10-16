@extends('layouts.backend.app')
@section('title','Disorder Show')
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.disorder.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Disorder</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Details</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Details<a class="btn btn-info btn-xs float-right"
                                                                     href="{{ route('admin.disorder.index')}}">Disorder</a>
                        </h4>
                        <hr/>
                        <div class="modal-body">
                            <table class="table table-straped">
                                <tr>
                                    <th>Disorder Name:</th>
                                    <td>{{$disorder[0]->disorder_name}}</td>
                                </tr>
                                <tr>
                                    <th>Disorder Name (Bangla):</th>
                                    <td>{{$disorder[0]->disorder_name_bn}}</td>
                                </tr>
                                <tr>
                                    <th>Symptoms :</th>
                                    <td>{{$disorder[0]->symptoms}}</td>
                                </tr>
                                <tr>
                                    <th>Symptoms (Bangla):</th>
                                    <td>{{$disorder[0]->symptoms_bn}}</td>
                                </tr>

                                @foreach($products as $key=>$product)
                                    @php
                                        $productData = getProductById($product->product_id);
                                    @endphp
                                    @foreach($productData as $disproduct)
                                        <tr>
                                            <th>Product : {{$key+1}}</th>
                                            <td>{{$disproduct->product_name}}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
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
