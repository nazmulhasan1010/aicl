@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div id="content" class="col-sm-6 offset-md-3 mt-5 mb-5">
                <h1>@lang('messages.Account')</h1>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                <hr/>

                <form action="{{ route('user-signup')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <fieldset id="account">
                        <legend>@lang('messages.Your') @lang('messages.Information')</legend>
                        <div class="form-group required">
                            <label for="input-name">@lang('messages.Name'): <span style="color:red">*</span></label>
                            <input type="text" name="name" placeholder="@lang('messages.Name')" id="input-name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label  for="input-email">@lang('messages.Email'): <span style="color:red">*</span></label>
                            <input type="email" name="email" placeholder="@lang('messages.Email')" id="input-email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label  for="input-phone">@lang('messages.Phone'): <span style="color:red">*</span></label>
                            <input type="tel" name="phone" placeholder="@lang('messages.Phone')" id="input-phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label  for="input-address">@lang('messages.Address'): <span style="color:red">*</span></label>
                            <input type="text" name="address" placeholder="@lang('messages.Address')" id="input-address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" required autocomplete="address" autofocus/>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>@lang('messages.Your-password')</legend>
                        <div class="form-group required">
                            <label  for="input-password">@lang('messages.Password'): <span style="color:red">*</span></label>
                            <input type="password" name="password" placeholder="@lang('messages.Password')" id="input-password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label  for="password-confirm">@lang('messages.Confirm-password'): <span style="color:red">*</span></label>
                            <input id="password-confirm" placeholder="@lang('messages.Confirm-password')" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </fieldset>

                    <div class="buttons">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary">@lang('messages.Submit')</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@push('vendor_js')

@endpush
@push('page_js')

@endpush
