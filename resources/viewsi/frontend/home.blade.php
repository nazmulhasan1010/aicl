@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')
<style>


</style>
@endpush
@section('content')
   <!-- slider  -->
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('frontend/assets/images/slider-1.webp')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-style: italic; font-size: 45px;" class="animate__animated animate__fadeInLeft">এ্যাথারটন ইমব্রুস কোম্পানী লিমিটেড</h1>
          <p>গুণগতমানের প্রতিশ্রুতি নিয়ে সেই ১৯৯৪ থেকে
            <br/>
           <strong>কীটনাশক এবং ফার্টিলাইজার আমদানী, সর্বরাহ এবং প্রস্তুতকারক</strong> </p>
           <img class="animate__animated animate__backInDown" id="year_img" src="{{ asset('frontend/assets/images/27 years.webp')}}" alt="">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('frontend/assets/images/slider-2.webp')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>“করোনা প্রতিরোধে সতর্কতা মূলক আচরণ”</h1>
          <p>
            <ul>
              <li>বাইরে থেকে ফেরার পর সাবান দিয়ে হাত ভালভাবে ধুয়ে নিন</li>
              <li>চোখ, মুখ, নাকে হাত দেয়া থেকে বিরত থাকুন</li>
              <li>সামাজিক দুরত্ব বজায় রাখুন, পাবলিক ট্রান্সপোর্টেশানে মাস্ক পরুন</li>
              <li>হালকা গরম পানি অল্প অল্প করে নিয়মিত পান করুন যাতে কন্ঠনালি আর্দ্র থাকে </li>
            </ul>
          </p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="{{ asset('frontend/assets/images/slider-3.webp')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <div class="inside_img">
            <img  class="animate__animated animate__fadeInRight" src="{{ asset('frontend/assets/images/slider-3_inside.webp')}}" alt="">
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Service Crops -->
  <div class="crops" style="padding: 0px 15px">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="crops_text ">
          <div class="h4 animate__animated animate__fadeInLeft">@lang('messages.Save-crop')</div>
          <p class="animate__animated animate__zoomIn">@lang('messages.Save-crop-details')</p>
        </div>
      </div>
      <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 crops_img"> -->
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 crops-parallax-window parallax_img_width" data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/crops_bg.webp')}}">

      </div>
    </div>
  </div>
   <!-- Service farmers -->
   <div class="farmers" id="farmer_desktop">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 farmers-parallax-window parallax_img_width " data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/farmer.webp')}}">

      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="farmers_text">
          <div class="h4 animate__animated animate__fadeInLeft">@lang('messages.Raise-farmer')</div>
          <p class="animate__animated animate__zoomIn">@lang('messages.Raise-farmer-details')</p>
        </div>
      </div>
    </div>
  </div>
  <div class="farmers" id="farmer_mobile">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="farmers_text">
          <div class="h4 animate__animated animate__fadeInLeft">@lang('messages.Raise-farmer')</div>
          <p class="animate__animated animate__zoomIn">@lang('messages.Raise-farmer-details')</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 farmers-parallax-window parallax_img_width " data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/farmer.webp')}}">

      </div>
      
    </div>
  </div>
  <!-- farmers-service  section-1 -->
  <div class="farmers_service" style="padding: 0px 15px">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="farmers_service_text">
          <div class="h4  animate__animated animate__fadeInDown">@lang('messages.Farmer-service')</div>
          <p class="animate__animated animate__zoomIn">@lang('messages.Farmer-service-details')</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 farmers-service-parallax-window parallax_img_width " data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/farmers_service.webp')}}">

      </div>
     
    </div>
  </div>
  <!-- Contact us -->
  <div class="contact">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29207.6496186346!2d90.33620368186813!3d23.784573912626836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1ba4b047d1f%3A0xe385d391a9eb88d2!2sAtherton%20Imbros%20Company%20Limited!5e0!3m2!1sbn!2sbd!4v1617014073642!5m2!1sbn!2sbd" width="100%" height="450" style="margin-top: 23px;border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="mt-3">যোগাযোগ এবং হেল্পলাইন</h3>
        <div class="row">
          <div class="col-md-4">
            <p>Import & Procurement:</p>
            <p>corporate@aicl-bd.com</p>
            <p>Sales & Distribution:</p>
            <p>sales@aicl-bd.com</p>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div id="cont_41258cce897ccf9af35b8ae689a26194"><script type="text/javascript" async src="https://www.theweather.com/wid_loader/41258cce897ccf9af35b8ae689a26194"></script>

            </div>
          </div>
        </div>
      </div>
      <img src="{{ asset('frontend/assets/images/footer_image.webp')}}" alt="d" id="last_footer_img">
    </div>
  </div>
  </div>

@endsection
@push('vendor_js')

@endpush
@push('page_js')


@endpush
