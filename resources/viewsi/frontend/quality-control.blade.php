@extends('layouts.app')
@section('title','quality-control')
@push('vendor_css')

@endpush
@push('page_css')
  <script src="{{ asset('frontend/assets/js/jssor.slider-28.1.0.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/js/silder_init.js')}}"></script>
  <style>
    
  </style>
@endpush
@section('content')
 <!-- quality-control -->
 <div class="quality-control">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h2>@lang('messages.Quality-control') <div class="icon_group" style="display: inline-block;">
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="43 38 114 124" viewBox="43 38 114 124" height="70px" width="70px" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
              <g>
                  <path fill="#C1C1C1" d="M90.3 38v8.8H69.6V38h20.7z" data-color="1"></path>
                  <path d="M157 69h-46.3l.3 33.8c-4-5.6-9.6-10.1-16.3-12.8V61.9h10.2v-8.8H55.1v8.8h11.3v28.2C52.2 95.8 43 109.3 43 124.7c0 20.6 16.8 37.3 37.5 37.3 13.1 0 24.6-6.7 31.3-16.8 2 9.5 10 16.6 19.3 16.6 5 0 9.7-2.1 13.3-5.8.1-.1.2-.3.4-.4 3.6-4 5.6-9.3 5.5-14.9l-.6-62.7h7.2v-9h.1zm-76.5 84.2c-15.8 0-28.6-12.8-28.6-28.5 0-12.6 8.1-23.5 20.2-27.2l3.1-1V61.9h10.6v34.6l3.1 1c11.7 3.6 19.7 14 20.1 26.1H93.7v8.8h14.4c-3.4 11.9-14.5 20.8-27.6 20.8zM143 98.6h-12.6v8.8h12.7l.3 33.3c.1 3.6-1.2 7-3.5 9.5-2.4 2.4-5.4 3.9-8.7 4-6.9 0-12.7-6.1-12.8-13.6l-.5-62.7h25l.1 20.7z" fill="#9A9FA5" data-color="2"></path>
                  <path fill="#C1C1C1" d="M143.1 107.4h-12.7v-8.8H143l.1 8.8z" data-color="1"></path>
                  <path d="M93.7 132.5H108c.7-2.5 1.1-5.2 1.1-8v-1H93.7v9z" fill="#C1C1C1" data-color="1"></path>
              </g>
            </svg>
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="30.796 53.741 138.409 92.519" viewBox="30.796 53.741 138.409 92.519" height="70px" width="70px" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img">
              <g>
                  <path fill="#F7F5F5" d="M142.457 124.816a3.479 3.479 0 1 1-6.958 0 3.479 3.479 0 0 1 6.958 0z" data-color="1"></path>
                  <path fill="#F7F5F5" d="M129.798 120.135a4.833 4.833 0 1 1-9.666 0 4.833 4.833 0 0 1 9.666 0z" data-color="1"></path>
                  <path d="M156.111 121.85h-14.518a3.94 3.94 0 0 0-2.613-.987c-1 0-1.92.373-2.613.987h-6.186c.187-.547.28-1.12.28-1.72a5.502 5.502 0 0 0-5.492-5.493c-3.04 0-5.506 2.466-5.506 5.493 0 .6.093 1.173.28 1.72h-8.346l-11.025 20.237h66.164l-10.425-20.237zm-27.356 0a4.149 4.149 0 0 1-3.786 2.453c-1.693 0-3.146-1-3.8-2.453a4.107 4.107 0 0 1-.373-1.72 4.167 4.167 0 0 1 8.332 0c0 .614-.133 1.2-.373 1.72zm9.772 0c.147-.027.293-.04.453-.04.16 0 .307.013.453.04a2.999 2.999 0 0 1 2.547 2.96c0 1.653-1.346 3-3 3-1.653 0-3-1.346-3-3a3.001 3.001 0 0 1 2.547-2.96z" fill="#00A551" data-color="2"></path>
                  <path d="M86.588 117.024c0 14.665-11.892 26.57-26.556 26.57-14.678 0-26.57-11.905-26.57-26.57h53.126z" fill="#00A551" data-color="2"></path>
                  <path d="M72.59 90.641V73.657c0-.48-.133-.947-.36-1.333.227-.4.36-.853.36-1.346v-6.666c0-1.48-1.2-2.666-2.666-2.666H49.553a2.657 2.657 0 0 0-2.666 2.666v6.666c0 .493.133.947.36 1.346-.227.387-.36.853-.36 1.333v17.264c-9.532 4.813-16.091 14.718-16.091 26.103 0 16.118 13.118 29.236 29.236 29.236s29.223-13.118 29.223-29.236c-.001-11.625-6.814-21.677-16.665-26.383zm-5.333-14.318v12.372a29.297 29.297 0 0 0-7.226-.907c-2.706 0-5.333.373-7.812 1.067V76.323h15.038zm-15.038-9.345h15.038v1.333H52.219v-1.333zm7.812 73.95c-13.185 0-23.904-10.732-23.904-23.903 0-13.185 10.719-23.904 23.904-23.904 13.172 0 23.89 10.719 23.89 23.904 0 13.171-10.718 23.903-23.89 23.903z" fill="#F7F5F5" data-color="1"></path>
                  <path d="M168.91 140.861l-16.544-32.089c-.013-.013-.013-.027-.027-.04l-9.625-17.824V65.805a2.7 2.7 0 0 0-.387-1.386c.227-.4.36-.853.36-1.346v-6.666a2.666 2.666 0 0 0-2.666-2.666h-13.838a2.674 2.674 0 0 0-2.666 2.666v6.666c0 .52.147 1 .4 1.413-.227.387-.347.84-.347 1.32v25.143l-9.025 17.824-16.544 32.089a2.682 2.682 0 0 0 .093 2.613 2.679 2.679 0 0 0 2.28 1.28h66.164c.933 0 1.8-.493 2.28-1.28a2.691 2.691 0 0 0 .092-2.614zm-40.061-81.789h8.506v1.333h-8.506v-1.333zm-24.104 80.349l14.545-28.223 9.319-18.411c.2-.373.293-.787.293-1.2V68.471h8.479v23.117c0 .44.107.88.32 1.267l9.932 18.384 14.531 28.183h-57.419z" fill="#F7F5F5" data-color="1"></path>
                  <path fill="#F7F5F5" d="M121.692 129.441a2.893 2.893 0 1 1-5.786 0 2.893 2.893 0 0 1 5.786 0z" data-color="1"></path>
                  <path fill="#F7F5F5" d="M130.171 133.6a2.13 2.13 0 1 1-4.26 0 2.13 2.13 0 0 1 4.26 0z" data-color="1"></path>
                  <path fill="#F7F5F5" d="M152.528 133.172a1.708 1.708 0 1 1-3.416 0 1.708 1.708 0 0 1 3.416 0z" data-color="1"></path>
              </g>
            </svg>
            </div>
          </h2>
          <p>@lang('messages.Quality-p1') </p>
          <ul>
            <li>@lang('messages.Quality-li-1')</li>
            <li>@lang('messages.Quality-li-2')</li>
            <li>@lang('messages.Quality-li-3')</li>
            <li>@lang('messages.Quality-li-4') </li>
          </ul>
          <p> @lang('messages.Quality-p2') </p>
          <ul>
            <li>@lang('messages.Quality-li-5')</li>
            <li>@lang('messages.Quality-li-6')</li>
            <li>@lang('messages.Quality-li-7')</li>
            <li>@lang('messages.Quality-li-8')</li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="{{ asset('frontend/assets/images/2020 vision background concept on street.webp')}}"  id="quality_img" alt="quality_img">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <p>@lang('messages.Quality-details-1') </p>
          <p>@lang('messages.Quality-details-2')</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-md-2 col-lg-2"></div>
      <div class="col-sm-8 col-md-8 col-lg-8 quality_slider" >
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:500px;overflow:hidden;visibility:hidden;">
          <!-- Loading Screen -->
          <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
              <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
          </div>
          <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:500px;overflow:hidden;">
            @foreach ($quality_sliders as $slider)
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


@endsection
@push('vendor_js')

@endpush
@push('page_js')
<script type="text/javascript">jssor_1_slider_init();</script>
@endpush
