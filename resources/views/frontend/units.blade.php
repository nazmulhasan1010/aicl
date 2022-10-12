@extends('layouts.app')
@section('title','units')
@push('vendor_css')

@endpush
@push('page_css')
    <style>
        h2 {
            font-family: system-ui;
            text-transform: uppercase;
            text-align: center;
            line-height: 1.25em;
            font-size: 33px;
        }
    </style>
@endpush
@section('content')
<!-- SISTER CONCERNS -->
<div class="container">
    <div class="sister_concerns">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h2>@lang('messages.Sister-concern')</h2>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 offset-1">
          <div class="row">
              <div class="col-sm-2 col-md-2 col-lg-2">
                <a href="#pesticides"  class="btn unit animate__animated animate__fadeInLeftBig animate__repeat-3 1">@lang('messages.Pesticides')</a>
                <img class="unit_top_icon animate__animated animate__fadeInLeft animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_pesticides.svg')}}" alt="Pesticides">
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2">
                <a href="#packaging" class="btn unit animate__animated animate__fadeInLeft animate__repeat-1	1">@lang('messages.Packaging')</a>
                <img class="unit_top_icon animate__animated animate__fadeInLeftBig animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_packagin.svg')}}" alt="Packaging">
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2">
                <a href="#seed" class="btn unit animate__animated animate__fadeInLeft animate__repeat-1	1">@lang('messages.Seed')</a>
                <img class="unit_top_icon animate__animated animate__fadeInRightBig animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_seed.svg')}}" alt="Seed" >
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2">
                <a href="#consumer" class="btn unit animate__animated animate__fadeInRight animate__repeat-1	1">@lang('messages.Consumer')</a>
                <img class="unit_top_icon animate__animated animate__fadeInRightBig animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_consumer.svg')}}" alt="Consumer" >
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2">
                <a href="#construction" class="btn unit animate__animated animate__fadeInRightBig animate__repeat-1	1">@lang('messages.Construction')</a>
                <img class="unit_top_icon animate__animated animate__fadeInRight animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_construction.webp')}}" alt="" srcset="">
              </div>

          </div>
        </div>
      </div> --}}

      <div class="d-flex justify-content-between">
        <div>
            <a href="#pesticides"  class="btn unit animate__animated animate__fadeInLeftBig animate__repeat-1 1">@lang('messages.Pesticides')</a>
            <img class="unit_top_icon animate__animated animate__fadeInLeft animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_pesticides.svg')}}" alt="Pesticides">
          </div>
          <div>
            <a href="#packaging" class="btn unit animate__animated animate__fadeInLeft animate__repeat-1	1">@lang('messages.Packaging')</a>
            <img class="unit_top_icon animate__animated animate__fadeInLeftBig animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_packagin.svg')}}" alt="Packaging">
          </div>
          <div>
            <a href="#seed" class="btn unit animate__animated animate__fadeInLeft animate__repeat-1	1">@lang('messages.Seed')</a>
            <img class="unit_top_icon animate__animated animate__fadeInRightBig animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_seed.svg')}}" alt="Seed" >
          </div>
          <div>
            <a href="#consumer" class="btn unit animate__animated animate__fadeInRight animate__repeat-1	1">@lang('messages.Consumer')</a>
            <img class="unit_top_icon animate__animated animate__fadeInRightBig animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_consumer.svg')}}" alt="Consumer" >
          </div>
          <div>
            <a href="#construction" class="btn unit animate__animated animate__fadeInRightBig animate__repeat-1	1">@lang('messages.Construction')</a>
            <img class="unit_top_icon animate__animated animate__fadeInRight animate__repeat-1	1" src="{{ asset('frontend/assets/images/unit_icon/top_construction.webp')}}" alt="" srcset="">
          </div>
      </div>
      <div class="row unit_box" id="pesticides">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3>@lang('messages.Pesticides-p')</h3>
          <p>@lang('messages.Pesticides-details')</p>
          <div class="row" id="unit_icon_for_mobile">
            <div class="col-md-6">
              <img src="{{ asset('frontend/assets/images/unit_icon/1.svg')}}" class="animate__animated animate__fadeInLeftBig" alt="" >
            </div>
            <div class="col-md-6">
              <img src="{{ asset('frontend/assets/images/unit_icon/2.svg')}}" alt="">
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="{{ asset('frontend/assets/images/unit/pesticides.webp')}}" id="unit_img_for_mobile" alt="pesticides">
          <a class="btn read_more animate__animated animate__fadeInLeftBig" href="{{ route('pesticides')}}" target="_blank">@lang('messages.Clilk-for-more')</a>
        </div>
      </div>
      <div class="row unit_box" id="packaging">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3>@lang('messages.Packaging-p') </h3>
          <p>@lang('messages.Packaging-details') </p>
          <div class="row" id="unit_icon_for_mobile">
            <div class="col-md-2" >
              <img src="{{ asset('frontend/assets/images/unit_icon/3.svg')}}" class="animate__animated animate__fadeInRightBig" alt="" >
            </div>
            <div class="col-md-1">
              <img src="{{ asset('frontend/assets/images/unit_icon/4.svg')}}" class="animate__animated animate__fadeInRight" alt="" >
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="{{ asset('frontend/assets/images/unit/packaging.webp')}}" id="unit_img_for_mobile" alt="packaging">
          <a class="btn read_more animate__animated animate__fadeInLeftBig" href="{{ route('packaging')}}" target="_blank">@lang('messages.Clilk-for-more')</a>
        </div>
      </div>
      <div class="row unit_box" id="seed">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3>@lang('messages.Seed-p') </h3>
          <p>@lang('messages.Seed-details') </p>
          <div class="row" id="unit_icon_for_mobile">
            <div class="col-md-2">
              <img class="animate__animated animate__fadeInLeftBig" src="{{ asset('frontend/assets/images/unit_icon/5.svg')}}" alt="" >
            </div>
            <div class="col-md-2">
              <img class="animate__animated animate__fadeInLeft" src="{{ asset('frontend/assets/images/unit_icon/6.svg')}}" alt="" >
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="{{ asset('frontend/assets/images/unit/seed.webp')}}" id="unit_img_for_mobile" alt="Seed">
          <a class="btn read_more animate__animated animate__fadeInLeftBig" href="{{ route('seed')}}" target="_blank">@lang('messages.Clilk-for-more')</a>
        </div>
      </div>
      <div class="row unit_box" id="consumer">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3>@lang('messages.Consumer-p') </h3>
          <p>@lang('messages.Consumer-details') </p>
          <div class="row" id="unit_icon_for_mobile">
            <div class="col-md-2">
              <img class="animate__animated animate__fadeInLeftBig" src="{{ asset('frontend/assets/images/unit_icon/7.svg')}}" alt="" >
            </div>
            <div class="col-md-1">
              <img class="animate__animated animate__fadeInLeft" src="{{ asset('frontend/assets/images/unit_icon/8.svg')}}" alt="" >
            </div>
            <div class="col-md-1">
              <img class="animate__animated animate__fadeInLeft" src="{{ asset('frontend/assets/images/unit_icon/9.svg')}}" alt="" >
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="{{ asset('frontend/assets/images/unit/consumer.webp')}}" id="unit_img_for_mobile" alt="consumer">
        </div>
      </div>
      <div class="row unit_box" id="construction">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3>@lang('messages.Construction-p')</h3>
          <p>@lang('messages.Construction-details')</p>
        <div class="row">
          <div class="col-md-5" >
            <a href="https://www.canbdhome.ca/" id="unit_btn_for_mobile"  target="_blank" class="btn const_btn animate__animated animate__fadeInLeftBig">canbdhome.ca</a>
          </div>
          <div class="col-md-2" id="unit_icon_for_mobile">
            <img class="animate__animated animate__fadeInLeft" src="{{ asset('frontend/assets/images/unit_icon/10.svg')}}" alt="" >
          </div>
        </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="{{ asset('frontend/assets/images/unit/construction.webp')}}" id="unit_img_for_mobile" alt="construction">
          <a class="btn read_more animate__animated animate__fadeInLeftBig" href="https://www.canbdhome.ca/" target="_blank">@lang('messages.Clilk-for-more')</a>
        </div>
      </div>
    </div>
  </div>

@endsection
@push('vendor_js')

@endpush
@push('page_js')

@endpush
