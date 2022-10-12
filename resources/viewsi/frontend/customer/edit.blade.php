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
                    <h1>@lang('messages.Account')</h1>
                    <hr/>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('user.update-info')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <fieldset>
                            <legend>@lang('messages.Your') @lang('messages.Information')</legend>

                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-lastname">@lang('messages.Name') :</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $user->name }}" placeholder="@lang('messages.Name') :" id="input-lastname" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">@lang('messages.Email') :</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" value="{{ $user->email}}" placeholder="@lang('messages.Email') :" id="input-email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-phone">@lang('messages.Phone') :</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="phone" value="{{ $user->phone_number }}" placeholder="@lang('messages.Phone') :" id="input-phone" class="form-control" required/>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons clearfix">
                            <div class="">
                                <button type="submit" class="btn btn-primary"> Update </button>
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
