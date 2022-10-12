@extends('layouts.app')
@section('title','Products')
@push('vendor_css')
    <script src="{{ asset('frontend/assets/js/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
@endpush
@push('page_css')

@endpush
@section('content')
<div class="container">
    <!-- Product -->
    <div class="products">
        {!! $page_design->design !!}
        <div id="product-category" class="container">
          <ul class="breadcrumb">
            <li><a href="{{ route('home')}}">@lang('messages.Home')</a></li>
            <li><a href="#">@lang('messages.Product-list')</a></li>
            <li><a href="#">
                @if (Session::get('locale')== "en")
                {{ $page_design->category_name }}
                @else
                {{ $page_design->category_name_bn }}
                @endif</a></li>
          </ul>
          <div class="row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
              <div class="list-group">
                <a href="#" class="list-group-item active">@lang('messages.Product-list')</a>
                @foreach ($categories as $category)
                    <a href="{{ route('product-by-category',$category->id)}}" class="list-group-item @if ($page_design->id ==$category->id)
                        active
                    @endif">-
                        @if (Session::get('locale')== "en")
                        {{ $category->category_name }}
                        @else
                        {{ $category->category_name_bn }}
                        @endif
                    </a>
                @endforeach
              </div>
            </aside>
            <div id="content" class="col-sm-9">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-sm-6 ">
                  <div class="btn-group btn-group-sm">

                    <button type="button" id="list-view" class="btn btn-success" data-toggle="tooltip" title=""
                      data-original-title=""><i class="fa fa-th-list"></i></button>
                    <button type="button" id="grid-view" class="btn btn-success active" data-toggle="tooltip" title=""
                      data-original-title=""><i class="fa fa-th"></i></button>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">

                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="form-group">
                    <label for="">Show</label>
                    <select name="" id="" class="form-control">
                      <option value="">স্বাভাবিক</option>
                      <option value="">নাম (A- Z)</option>
                      <option value="">নাম(Z - A)</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 col-xs-6">
                  <div class="form-group">
                    <label>Number</label>
                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                      <option value="#" selected="selected">20
                      </option>
                      <option value="#">25</option>
                      <option value="#">50</option>
                      <option value="#">75</option>
                      <option value="#">100</option>
                    </select>
                  </div>
                </div>
              </div>
              <hr/>
              <div class="row">
                  @foreach ($products as $product)

                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <form action="{{ route('add-to-cart')}}" method="POST">
                            @csrf
                            <div class="product-thumb">
                                <div class="image">
                                <a href="{{ route('product-details',[$product->id,$product->slug])}}"><img src="{{ asset('storage/product/'.$product->image)}}" alt="{{ $product->product_name_bn }}" title="{{ $product->product_name_bn }}" class="img-responsive mt-2"> </a>
                                </div>
                                <div>
                                <div class="caption">
                                    <h4>
                                    <a href="{{ route('product-details',[$product->id,$product->slug])}}">
                                        @if (Session::get('locale')== "en")
                                            {{ $product->product_name }}
                                        @else
                                            {{ $product->product_name_bn }}
                                        @endif

                                    </a>
                                    </h4>
                                    <p>
                                        @if (Session::get('locale')== "en")
                                            {!! Str::limit(strip_tags($product->product_details), 100) !!}
                                        @else
                                            {!! Str::limit(strip_tags($product->product_details_bn), 100) !!}
                                        @endif
                                    </p>
                                    @php
                                        $pack_size = \App\PackSize::where('id',$product->variants()->first()->size_id)->first();
                                    @endphp
                                    <p></p>
                                    <p class="price"> {{$pack_size->size_name}}</p>
                                    <h2>@lang('messages.Tk') {{ number_format($product->variants()->first()->price,2)}}</h2>

                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="price" value="{{ $product->variants()->first()->price}}">
                                    <input type="hidden" name="size" value="{{$pack_size->size_name}}">
                                    <input type="hidden" name="qty" value="1">
                                </div>
                                <div class="button-group">
                                    <button type="button" onclick="location.href='{{ route('product-details',[$product->id,$product->slug])}}'"><i class="fa fa-bullseye"></i> @lang('messages.Details')</button>
                                    <button type="submit" class="pav-quickview"><i class="fa fa-shopping-cart"></i> @lang('messages.Buy-now') </button>

                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
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
    <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
@endpush
