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
            <div class="col-sm-6 offset-md-3 " style="min-height: 350px;margin-top:70px">
                <div class="well">
                    <h2>@lang('messages.User-login')</h2>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="email"placeholder="@lang('messages.Email') :" id="input-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@email.com" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password"  placeholder="@lang('messages.Password')" id="input-password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br />
                            <a href="{{ route('password.request') }}">@lang('messages.Forgot-password')</a>
                        </div>
                        <button type="submit" class="btn btn-info">@lang('messages.Login')</button>
                        <a href="{{ route('user.register')}}" class="btn btn-info"> Register</a>
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

@endpush
