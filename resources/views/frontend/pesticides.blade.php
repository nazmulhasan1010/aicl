@extends('layouts.app')
@section('title','units')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
<!-- SISTER CONCERNS -->
<div class="container">
    <div class="sister_concerns">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h2 class="text-center">@lang('messages.Sister-concern')</h2>
        </div>
      </div>
      <div class="row unit_box" id="pesticides">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3>@lang('messages.Pesticides')</h3>
          <p>@lang('messages.Pesticides-sub-details') </p>
          <p>@lang('messages.Pesticides-sub-p')</p>
          <ul class="ml-5">
              <li> @lang('messages.Pesticides-sub-li-1')</li>
              <li> @lang('messages.Pesticides-sub-li-2')</li>
              <li> @lang('messages.Pesticides-sub-li-3')</li>
              <li> @lang('messages.Pesticides-sub-li-4')</li>
              <li> @lang('messages.Pesticides-sub-li-5')</li>
          </ul>
          <p>@lang('messages.Pesticides-sub-last-details')</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="{{ asset('frontend/assets/images/pesticides.webp')}}" id="pesticide_details_img" alt="pesticides">
        </div>
      </div>
    </div>
  </div>

@endsection
@push('vendor_js')

@endpush
@push('page_js')

@endpush
