@extends('layouts.app')
@section('title','Product Details')
@push('vendor_css')

@push('page_css')

@endpush
@section('content')
<div id="product-product" class="container mt-5">
    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="row">
                @php
                    if (Session::get('locale')== "en"){
                        $title = $details->product_name;
                    }
                    else{
                        $title = $details->product_name_bn;
                    }
                @endphp
                <div class="col-sm-8">
                    <div class="product_image">
                        <img src="{{ asset('storage/product/'.$details->image)}}" title="{{ $title}}" alt="{{ $title}}" class="img-thumbnail"/>
                    </div>
                    <h3 class="mt-5">@lang('messages.Description')</h3><hr/>
                    <div class="tab-content">
                        @if (Session::get('locale')== "en")
                            {!! $details->product_details !!}
                        @else
                            {!! $details->product_details_bn !!}
                        @endif
                    </div>
                </div>
                <div class="col-sm-4">
                    <form action="{{ route('add-to-cart')}}" method="POST">
                        @csrf
                        <h1>{{ $title}}</h1>
                        <input type="hidden" name="product_id" id="" value="{{ $details->id}}">
                        <ul class="list-unstyled">
                            <li>{{ $details->composition}}</li>
                        </ul>
                        <div id="product">
                            <hr />
                            <div class="form-group required">
                                <h5>@lang('messages.Quantity') - @lang('messages.Price')</h5>
                                <div id="input-option254">
                                    <div class="radio">
                                        <label>
                                            @foreach ($pack_sizes as $size)
                                                <input type="radio" name="option" value="{{$size->id}}" required/>
                                            {{ $size->size->size_name}}  - @lang('messages.Tk') {{ number_format($size->price,2) }}
                                                <br/>
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" min="1" name="qty" id="" class="form-control" value="1">
                                <br />
                                <button type="submit" id="button-cart" data-loading-text="" class="btn btn-primary btn-lg btn-block">@lang('messages.Add-to-cart')</button>
                            </div>
                        </div>
                    </form>
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
