 <!-- footer -->
 <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 ">
          <div class="socal_icon">
            <a href="https://www.facebook.com/athertonbd/"><img src="{{ asset('frontend/assets/images/facebook.png')}}" alt="facebook" ></a>
            <a href="https://www.linkedin.com/company/atherton-imbros-company-limited/"><img src="{{ asset('frontend/assets/images/linkedin.png')}}" alt="linkedin"></a>
          </div>
          <img id="footer_icon" src="{{ asset('frontend/assets/images/crop_protection.gif')}}" alt="crop" >
        </div>
        <div class="col-md-6 text-center">
          <p class=" mt-4">Developed & Managed by IT Department, AICL
            <br/>
            © 1994 - 2021 Atherton, All Rights Reserved.</p>
            <img src="{{ asset('frontend/assets/images/aicl_.webp')}}" alt="">
        </div>
        <div class="col-md-3 quick_link" >
          <h5 style="text-align: left; margin-top: 20px;">Quick Links</h5>
          <ul>
            <li><a href="{{ route('support-functions')}}">@lang('messages.Company')</a></li>
            <li><a href="{{ route('contact-us')}}">@lang('messages.Contact')</a></li>
            <li><a href="{{ route('units')}}">@lang('messages.Business')</a></li>
            <li><a href="{{ route('careers')}}">@lang('messages.Jobs')</a></li>
            <li><a href="{{ route('support-functions')}}">@lang('messages.Functions')</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
