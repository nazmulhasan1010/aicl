@extends('layouts.app')
@section('title','careers')
@push('vendor_css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/dpt-image.css')}}">
@endpush
@push('page_css')
@endpush
@section('content')
    <div class="career">
        <div class="career-parallax-window" data-parallax="scroll"
             data-image-src="{{ asset('frontend/assets/images/careers_bg.webp')}}"></div>
        <div class="container">
            <div class="row ">
                <div class=" col-md-12 corporate-info">
                    <p>@lang('messages.Career-p') </p>
                    <h2>@lang('messages.Career-title') </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-10 offset-1 career-modal">
                    <h2 class="career-head">@lang('messages.Career-open') </h2>
                    <p class="contact-mail">@lang('messages.For-more-information') hr@aicl-bd.com</p>
                    <div class="description">
                        @foreach ($careers as $item)
                            <div class="job_post_1"
                                 @if($item->deadline > date('Y-m-d')) style="display: block"
                                 @else style="display: none" @endif>
                                <h3 class="career-title">{{ $item->title}}</h3>
                                <div class="apply">
                                    <h6>Position Available </h6>
                                    <a href="#application_form" class="apply-btn">Apply Now</a>
                                </div>
                                <div class="details">
                                    {!! $item->description !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="application_form" id="application_form">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="col-sm-12 col-md-8 col-lg-8 offset-md-2">
                    <img src="{{ asset('frontend/assets/images/career.webp')}}" id="career_img" alt="career"
                         class="img-fluid">
                    <form action="{{ route('apply-now')}}" method="POST" class="carrer_form"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="fname">@lang('messages.First-name') <span style="color:red">*</span></label>
                            <input type="text" class="form-control" placeholder="@lang('messages.First-name')"
                                   name="fname" id="fname">
                        </div>
                        <div class="form-group">
                            <label for="lname">@lang('messages.Last-name')</label>
                            <input type="text" class="form-control" placeholder="@lang('messages.Last-name')"
                                   name="lname" id="lname">
                        </div>
                        <div class="form-group">
                            <label for="email">@lang('messages.Email')<span style="color:red"> *</span></label>
                            <input type="email" class="form-control" placeholder="@lang('messages.Email')" name="email"
                                   id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">@lang('messages.Phone')<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" placeholder="@lang('messages.Phone')" name="phone"
                                   id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="position">@lang('messages.Position') <span style="color:red"> *</span></label>
                            <select name="position" id="position" class="form-control" required>
                                <option selected disabled>@lang('messages.Position-you')</option>
                                @foreach ($careers as $item)
                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">@lang('messages.Address') <span style="color:red"> *</span></label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cv">CV <span style="color:red">*</span>
                                <small>@lang('messages.CV-must') </small></label>
                            <input type="file" class="form-control" placeholder="CV" name="cv" id="cv" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Submit</button>
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
    <script>
        $(window).on("scroll", function () {
            var reveals = $(".job_post_1"),
                title = $(".job_post_1 .career-title"),
                applyTxt = $(".job_post_1 .apply h6"),
                details = $(".job_post_1 .details"),
                btn = $(".job_post_1 .apply .apply-btn");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    title[i].style.animation = '1s careerLeftFade';
                    applyTxt[i].style.animation = '1s careerRightWidth';
                    btn[i].style.animation = '1s applyFadeRight';
                    details[i].style.animation = '3s visibleFade';
                } else {
                    // reveals[i].classList.remove("active");
                }
            }
        });
    </script>
@endpush
