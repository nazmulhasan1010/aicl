@extends('layouts.backend.app')
@section('title','Product Show')
@push('vendor_css')

@endpush
@push('page_css')
    <style media="screen">
        .checked{
            color: #ec0808;
        }
    </style>
@endpush
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Specification</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0"> Specification</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Product Specification
                            <a class="btn btn-info btn-xs float-right" href="{{ route('admin.specification.index')}}">Specification</a>
                        </h4>
                        <hr/>
                        <div class="product-details">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{asset('storage/product/'.$product[0]->image)}}" alt="">
                                </div>
                                <div class="col-md-9">
                                    <div class="col-lg-5 col-sm-12 col-md-12 rightmenu" id="addCartModal">
                                        <div class="card p-1" style="width: auto;">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    @php
                                                        if (Session::get('locale')==='bn'){
                                                            echo $product[0]->product_name_bn;
                                                        }else{
                                                            echo $product[0]->product_name;
                                                        }
                                                    @endphp
                                                </h4>
                                                <p class="card-text">{{$product[0]->composition}}</p>
                                                @php
                                                    $review = getReview($product[0]->id);
                                                    $totalRating = count($review['allData']);
                                                    $rating = 0;
                                                    if ($totalRating>0){
                                                        $rating = round($review['ratings']/$totalRating,1);
                                                    }
                                                @endphp
                                                <span
                                                    class="fa {{$rating>0&&$rating<1?'fa-star-half-o checked':''}} {{$rating>=1?'fa-star checked':'fa-star'}}  "></span>
                                                <span
                                                    class="fa {{$rating>1&&$rating<2?'fa-star-half-o checked':''}} {{$rating>=2?'fa-star checked':'fa-star'}} "></span>
                                                <span
                                                    class="fa {{$rating>2&&$rating<3?'fa-star-half-o checked':''}} {{$rating>=3?'fa-star checked':'fa-star'}}"></span>
                                                <span
                                                    class="fa {{$rating>3&&$rating<4?'fa-star-half-o checked':''}} {{$rating>=4?'fa-star checked':'fa-star'}}"></span>
                                                <span
                                                    class="fa {{$rating>4&&$rating<5?'fa-star-half-o checked':'fa-star'}} {{$rating>=5?'fa-star checked':'fa-star'}}"></span>
                                                <span>{{$rating}}</span>
                                                <hr>
                                                <div id="ot-info">
                                                    <h6><i class="fa-solid fa-bahai"></i> Sold & shipped by
                                                        <img src="{{asset('frontend/assets/images/logo.webp')}}"
                                                             style="height: 30px;">
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="modal-body">
                            {!! $spe[0]->specification !!}
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
