@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
<div class="container">
    <div class="col-md-12 mt-5">
        <div class="row">
            <aside id="column-right" class="col-sm-3 hidden-xs">
                @include('layouts.partials.user-sidebar');
           </aside>
            <div id="content" class="col-sm-9">
                <h1>@lang('messages.Account') @lang('messages.Password')</h1>
                <hr/>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <form action="{{ route('user.update-password')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <fieldset>
                        <div class="form-group required">
                            <label for="old-password">@lang('messages.Old-password'): <span style="color:red">*</span></label>
                            <input type="password" name="old_password" placeholder=" @lang('messages.Old-password') :" id="old-password" class="form-control" required/>

                        </div>
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
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="@lang('messages.Confirm-password')" required autocomplete="new-password">
                        </div>
                    </fieldset>
                    <div class="buttons clearfix">
                        <div class="">
                            <button type="submit" class="btn btn-primary">@lang('messages.Update')</button>
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
