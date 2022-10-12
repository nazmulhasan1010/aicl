@extends('layouts.app')
@section('title','units')
@push('vendor_css')

@endpush
@push('page_css')
<script src="{{ asset('frontend/assets/js/jssor.slider-28.1.0.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/silder_init.js')}}"></script>
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
      <div class="row unit_box" id="packaging">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h3>@lang('messages.Packaging')</h3>
          <p>@lang('messages.Packaging-sub-details')</p>
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
        </div>
      </div>
      <div class="col-md-12 mb-5">
          <div class="row">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:516px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:516px;overflow:hidden;">
                  @foreach ($packaging_sliders as $slider)
                    <div>
                      <img data-u="image" src="{{ asset('storage/slider/'.$slider->image)}}" alt="{{ $slider->slider_title }}"/>
                    </div>
                  @endforeach
                </div>

                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora073" style="width:40px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora073" style="width:40px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                    </svg>
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
<script type="text/javascript">jssor_1_slider_init();</script>
@endpush
