@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-12">
            @if (\Cart::getContent()->count() != NULL)
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <h3>@lang('messages.Shipping-info')</h3>
                </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('new-customer-checkout')}}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <fieldset id="account">
                                        <legend>@lang('messages.Your-personal-info')</legend>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-name">@lang('messages.Name') <span style="color: red">*</span></label>
                                            <input type="text" name="fullname" value="" placeholder="@lang('messages.Name')" id="input-name" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="input-payment-email">@lang('messages.Email') <span style="color: red">*</span></label>
                                            <input type="text" name="email" value="" placeholder="@lang('messages.Email')" id="input-payment-email" class="form-control" />
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="input-payment-telephone">@lang('messages.Phone') <span style="color: red">*</span></label>
                                            <input type="text" name="telephone" value="" placeholder="@lang('messages.Phone')" id="input-payment-telephone" class="form-control" />
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6">
                                    <fieldset id="address">
                                        <legend>@lang('messages.Your-address')</legend>

                                        <div class="form-group required">
                                            <label class="control-label" for="divisions">@lang('messages.Divisions') <span style="color: red">*</span></label>
                                            <select name="division" id="divisions" class="form-control">
                                                <option value=""> --- @lang('messages.Select') --- </option>
                                                @foreach ($divisions as $division)
                                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="district">@lang('messages.District') <span style="color: red">*</span></label>
                                            <select name="district" id="district" class="form-control">
                                                <option value=""> --- @lang('messages.Select') --- </option>
                                            </select>
                                        </div>
                                        <div class="form-group required">
                                            <label class="control-label" for="upzila">@lang('messages.Upzila') <span style="color: red">*</span></label>
                                            <select name="upzila" id="upzila" class="form-control">
                                                <option value=""> --- @lang('messages.Select') --- </option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="row">

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="input-payment-password">@lang('messages.Password') <span style="color: red">*</span></label>
                                        <input type="password" name="password" placeholder="@lang('messages.Password')" id="input-password" class="form-control" name="password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  for="password-confirm">@lang('messages.Confirm-password'): <span style="color:red">*</span></label>
                                        <input id="password-confirm" placeholder="@lang('messages.Confirm-password')" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="control-label" for="address">@lang('messages.Address') <span style="color: red">*</span></label>
                                    <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="@lang('messages.Address')"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{ route('user-check')}}" class="btn btn-primary float-left">@lang('messages.Go-pre-step') </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <button type="submit" class="btn btn-primary mb-3 float-right">@lang('messages.Go-next-step')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @else
                <div class="empty text-center mt-5 mb-5">
                    <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 344 344" width="150" height="150">
                        <title>fast-cart</title>
                        <defs>
                            <image  width="302" height="238" id="img1" href="data:image/png;base64,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"/>
                        </defs>
                        <style>
                            tspan { white-space:pre }
                        </style>
                        <use id="Background" href="#img1" x="10" y="53" />
                    </svg>
                   <h1>Your Cart Currently Empty </h1>
                   <a href="{{ route('product-by-category',Session::get('first_category') )}}" class="btn btn-info">Return to Shop</a>
               </div>
            @endif
        </div>
    </div>
</div>
@endsection
@push('vendor_js')

@endpush
@push('page_js')
   <script>

       $(document).ready(function() {
           // select district
            $('#divisions').on('change', function() {
                var stateID = $(this).val();
                var base_url = {!! json_encode(url('/')) !!};
                if(stateID) {
                    $.ajax({
                        url: base_url+'/distict-select/'+stateID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data) {
                            //console.log(data);
                            if(data){
                                $('#district').empty();
                                $('#district').focus;
                                $('#district').append('<option value="district">-- Select District --</option>');
                                $.each(data, function(key, value){
                                    $('select[name="district"]').append('<option value="'+ value.id +'">' + value.name+ '</option>');
                                });
                            }else{
                                $('#district').empty();
                            }
                        }
                    });
                }else{
                    $('#district').empty();
                }
            });
            // select district
            $('#district').on('change', function() {
                var districtID = $(this).val();
                var base_url = {!! json_encode(url('/')) !!};
                if(districtID) {
                    $.ajax({
                        url: base_url+'/upzila-select/'+districtID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data) {
                            if(data){
                                $('#upzila').empty();
                                $('#upzila').focus;
                                $('#upzila').append('<option value="upzila">-- Select upzila --</option>');
                                $.each(data, function(key, value){
                                    $('select[name="upzila"]').append('<option value="'+ value.id +'">' + value.name+ '</option>');
                                });
                            }else{
                                $('#upzila').empty();
                            }
                        }
                    });
                }else{
                    $('#upzila').empty();
                }
            });
        });
   </script>
@endpush
