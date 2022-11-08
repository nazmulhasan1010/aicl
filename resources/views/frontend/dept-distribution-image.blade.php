@extends('layouts.app')
@section('title','dept-distribution')
@push('vendor_css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/dpt-image.css')}}">
@endpush
@push('page_css')

@endpush
@section('content')
    <!-- objective -->
    <div class="container-fluid" style="background: #ccc">
        <div class="container width-70">
            <div class="row banner">
                <div class=" banner-content">
                    <h2>@lang('messages.Dist-img-title')</h2>
                </div>
                <div class=" banner-content banner-image ">
                    <div class="banner-img-svg">
                        <div class="animation-hidden"></div>
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="10 37.5 180 125" viewBox="10 37.5 180 125"
                             height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color"
                             aria-hidden="true">
                            <defs>
                                <style>#comp-jhehbntt svg [data-color="1"] {
                                        fill: #F8F8F8;
                                    }</style>
                            </defs>
                            <g>
                                <path
                                    d="M190 70.415l-1.865-.463-.466-.116-3.03-.752-7.662-1.91v-4.72l-5.788-1.576V54.72l-7.908-2.435-5.982 1.014v-7.42l-2.801-.908-1.829.341v4.503l-8.392-2.541v6.257-6.266l-6.367 1.236V38.232l-2.026-.732v11.128-10.89l-2.894.663v11.043l-2.12.398-6.561-1.793v3.067-3.076l-56.72 11.44v5.004l-8.988 1.65-2.877.53v3.689l2.894-.474v12.056l-45.498 5.48-3.12.374v4.283l2.315-.219v53.231l18.521 2.899V125.39l11.865.664v23.748l15.899 2.469 65.419 10.193v-43.598l-6.077-.115v-15.78l6.077-.201v-5.72l-6.077.316V81.327l6.077-.632v-5.486l-56.431 6.577V68.402l56.431-9.466.289-.921v.862l20.055 4.57.492.115 32.122 7.33v12.705l-52.669-8.336v5.461l11.286 1.523v15.551l-11.286-.747v5.72l11.286.46v15.637h-11.286V162.5l8.103-1.782v-31.531l52.09-3.796v24.105l3.473-.751-.118-75.326 1.854.438.29-3.453v.011zM26.785 117.178l-10.418-.203v-11.104l10.418-.32v11.627zm0-15.324l-10.418.494V91.39l10.418-1.046v11.51zm16.205 15.433l-11.865-.231v-11.641l11.865-.376v12.248zm-.289-16.285l-11.286.545V89.963l11.286-1.118v12.157zm18.81 16.214l-2.847-.057-10.755-.2v-12.024l10.755-.343 2.847-.086v12.71zm0-17.157l-2.847.143-10.755.514V88.834l10.755-1.057 2.847-.286v12.568zm21.994 18.067l-16.206-.319v-13.573l16.206-.522v14.414zm6.945-34.068l19.1-1.897v15.608l-19.1.92V84.058zm0 19.517l19.1-.604v15.608l-19.1-.374v-14.63zM83.505 84.68v14.414l-16.206.783V86.304l16.206-1.624zm71.19 33.899l-13.312.374V103.23l13.312.575v14.774zm0-19.517l-13.312-.891V82.994l13.312 1.811v14.257zm16.495 19.086l-11.865.349v-14.811l11.865.524v13.938zm0-17.903l-11.865-.786V85.375l11.865 1.6v13.27zm13.312 17.757l-9.55.285v-13.758l9.55.427v13.046zm0-17.005l-10.129-.659V87.497l10.129 1.376v12.124z"
                                    fill="#ffffff" data-color="1"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $depot = getDepot();
    @endphp
    <div class="container dpt-img width-70">
        @foreach($depot as $depots)
            @if($depots->status == 1)
                <div class="image-modal">
                    <div class="row dpt-img-main align-items-end">
                        <div class="col-md-9 image d-flex justify-content-end">
                            <img src="{{asset('storage/depot/'.$depots->image)}}" alt="{{$depots->image}}" class="dpt-image">
                        </div>
                        <div class="col-md-3 button">
                            <a href="{{$depots->link}}" role="button" class="btn view-button">360 View</a>
                        </div>
                    </div>
                    <div class="row dpti-title">
                        <p class="col-md-10 pt-3 text-center">
                            {{$depots->location}}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
@push('vendor_js')

@endpush
@push('page_js')
    <script>
        $(window).on("scroll", function () {
            var reveals = $(".view-button"),
                title = $(".dpti-title p");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].style.animation = '1s fadeUp';
                    reveals[i].style.opacity = 1;
                    title[i].style.animation = '1s titleShow';
                    title[i].style.opacity = 1;
                } else {
                    // reveals[i].classList.remove("active");
                }
            }
        });
    </script>
@endpush
