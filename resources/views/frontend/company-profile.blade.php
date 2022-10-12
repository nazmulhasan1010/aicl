@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
<!-- company profile -->
<div class="info">
    <p>@lang('messages.Company-profile-details')</p>
</div>
<div class="employee">
    <div class="container">
        <div class="row management">
            <div class="col-sm-12 col md-12 col-lg-12">
                <h1>@lang('messages.Management')</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg management-info">
                <h3>এম এ মান্নান</h3>
                <p>ব্যবস্থাপনা পরিচালক<br/>mannan@aicl-bd.com</p>
                <button class="btn btn-info" onclick="myFunction()" id="show_bm_info">Click for more</button>


            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div id="bm_info" style="display:none">
                    <h5>M A Mannan</h5>
                    <p>MSc in Botany
                     <br/>
                     The University of Dhaka</p>
                     <p>Upon completion of Masters of Science in Botany from the University of Dhaka, Mr M A Mannan had a spectacular career in Agrochemical Field in a multinational company namely, Rhône-Poulenc during 80s and 90s and he gathered his initial experience from being a field representative and eventually becoming a zonal manager where he had ample exposure to the need of the farmers and how to meet those needs. He has always been a grateful family man and constantly remembers the teaching from his late father Mvi Izzet Ali Sarder, a freedom fighter and a farmer. In his own words, “I was never cut out to be an entrepreneur, but necessity has made me become one”. Always poised on discipline and hard work he started his business from scratch to what we know as one of the biggest market leaders in the agrochemical business in Bangladesh. A Muslim by heart, Mr M A Mannan has been contributing to numerous philanthropical activities since the fruition of AICL, however, we are encouraged by him not to take pride on what we already did, but to keep on doing the hard work so we can contribute continuously. His philosophy of being sincere, learning from mistakes and treating all the employees as colleagues has propelled the company to work harder and perform better.</p>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg management-info">
                <h3>সুলতানা রাজিয়া</h3>
                <p>পরিচালক</p>
            </div>
        </div>
        <div class="row management-employee">
            <div class="col-sm-4 col-md-4 col-lg-4 management-info">
                <h3>মোঃ আবুল কালাম আজাদ</h3>
                <p>পরিচালক - আমদানী ও ক্রয় <br/>azad@aicl-bd.com</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 management-info">
                <h3>মারুফ হায়দার</h3>
                <p>পরিচালক - বিক্রয় ও বিপনন <br/>maruf.haider@aicl-bd.com</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 management-info">
                <h3>ইমতিয়াজ হায়দার</h3>
                <p>পরিচালক - উৎপাদন <br/>imtiaz.haider@aicl-bd.com</p>
            </div>
        </div>
    </div>
</div>


@endsection
@push('vendor_js')

@endpush
@push('page_js')
<script>
    function myFunction() {
      var info_box = document.getElementById("bm_info");
      var info_button = document.getElementById("show_bm_info");

      if (info_box.style.display === "block") {
        info_box.style.display = "none";
        info_button.innerHTML = "Click for more";
      } else {
        info_box.style.display = "block";
        info_button.innerHTML = "Hidden";
      }
    }
    </script>
@endpush
