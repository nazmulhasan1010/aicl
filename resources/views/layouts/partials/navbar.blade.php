<div class="container mb-5">
    <style>

        .app_login_btn {
            border: 3px solid #edbbbb !important
        }

        .app_login_btn:hover {
            border: 3px solid #000 !important;
            background: #000 !important;
            color: #ffffff !important;
        }

        /* .order_form_btn {border: 3px solid #edbbbb !important} */
        .order_form_btn:hover {
            border-color: #67bd31 !important;
            background: #67bd31 !important;
            color: #ffffff !important;
        }

        .btn_group {
            box-shadow: 0px 4px 14px #000 !important;
            border: 1px solid #353434 !important;
        }

        .lang_active {
            border: none;
            background-color: transparent;
            color: #0e0e0e;
            margin: 0px !important;
            padding-top: 10px;
        }

        .top_btn:hover {

            background-color: rgb(16 38 68);
            color: #f3f0f0;
            margin: 0px !important;
            padding-top: 10px;
        }

        .menuHover:hover {
            background: #67bd31 !important;
            color: #ffffff !important;
        }

        .company_logo_title {
            font-family: noticia text, serif;
            font-style: italic;
            text-align: right;
            font-size: 16px;
            text-shadow: rgba(0, 0, 0, 0.4) 0px 4px 5px;
            display: block;
        }

        .company_logo_p {
            margin-bottom: -8px;
        }

    </style>
    <!-- nav bar -->
    @php
        $routrName = \Request::route()->getName();
    @endphp
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home')}}">
            <div class="d-flex justify-content-between">
                <img src="{{ asset('frontend/assets/images/logo.webp')}}" style="margin-left: 14px;" alt="logo"/>
                <div class="company_logo_title">

                    <p class="company_logo_p">ATHERTON</p>
                    <p class="company_logo_p">GROUP</p>
                </div>
            </div>
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="btn top_btn m-auto border border-warning app_login_btn" href="https://203.82.193.74/aicl/"
                   target="_blank"> @lang('messages.Login') </a>&nbsp;
                <a class="btn top_btn m-auto border border-dark order_form_btn"
                   href="{{ route('order-form')}}"> @lang('messages.Order-form') </a>&nbsp;&nbsp;

                @if(\Session::get('locale')== "en")
                @else
                @endif
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="btn-group btn_group rounded" role="group" aria-label="Basic example">
                    <a href="{{ url('/setlocale/en')}}"
                       class="btn top_btn {{ \Session::get('locale')== "en" ? 'lang_active' :'' }} m-auto">English <img
                            class="flag_img" src="{{ asset('frontend/assets/images/CAN.png')}}" alt="can flag"/></a>
                    <a href="{{ url('/setlocale/bn')}}"
                       class="btn top_btn {{ \Session::get('locale')== "bn" ? 'lang_active' :'' }} m-auto"> @lang('messages.Bangla')
                        <img class="flag_img" src="{{ asset('frontend/assets/images/BGD.png')}}" alt="bd flag"/></a>
                </div>


                <div class="m-auto">
                    <img src="{{ asset('frontend/assets/images/27_years.webp')}}" class="nav_img " alt="27 Years"/>&nbsp;&nbsp;&nbsp;
                </div>
                {{-- @if (\Request::is('home'))
                    Home
                @else
                    Others
                @endif --}}
                {{-- <a class="nav-link {{ Request::is('home') ? 'active' : ''}}" href="{{ route('home')}}" --}}
                <a class="nav-link {{ ($routrName == 'home' || Request::is('home')) ? 'active' : ''}}"
                   href="{{ route('home')}}"
                   @if (\Session::get('locale')== "bn")
                       style="margin-left: 20px;"
                    @endif
                > @lang('messages.Home') <span class="sr-only">(current)</span></a>
                @php
                    $aboutActive = '';
                    if( Request::is('company-profile') || Request::is('financial-partners') || Request::is('dept-distribution') || Request::is('dept-distribution-image') || Request::is('corporate-structure') || Request::is('quality-control') ) {
                      $aboutActive = 'active';
                    }
                @endphp
                <li class="nav-item dropdown {{$aboutActive}}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('messages.About')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item menuHover {{ Request::is('company-profile') ? 'active' : ''}} "
                           href="{{ route('profile')}}"> @lang('messages.Company')</a>
                        <a class="dropdown-item menuHover {{ Request::is('financial-partners') ? 'active' : ''}} "
                           href="{{ route('partners')}}"> @lang('messages.Financial')</a>
                        <a class="dropdown-item menuHover {{ Request::is('dept-distribution') ? 'active' : ''}} "
                           href="{{ route('distribution')}}"> @lang('messages.Distribution')</a>
                        <a class="dropdown-item menuHover {{ Request::is('dept-distribution-image') ? 'active' : ''}} "
                           href="{{ route('distribution_image')}}"> @lang('messages.Distribution-with-image')</a>
                        <a class="dropdown-item menuHover {{ Request::is('corporate-structure') ? 'active' : ''}} "
                           href="{{ route('employee')}}"> @lang('messages.Employee')</a>
                        <a class="dropdown-item menuHover {{ Request::is('quality-control') ? 'active' : ''}} "
                           href="{{ route('quality-control')}}">@lang('messages.Quality')</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('messages.Product-list')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @php
                            $categories = \App\Category::where('status',true)->get();
                        @endphp
                        @foreach ($categories as $category)
                            @if ($loop->first)
                                @php
                                    $first = Session::put('first_category',$category->id);
                                @endphp
                            @endif
                            <a class="dropdown-item menuHover" href="{{ route('product-by-category',$category->id)}}">
                                @if (\Session::get('locale')== "bn")
                                    {{ $category->category_name_bn}}
                                @else
                                    {{ $category->category_name}}
                                @endif
                            </a>
                        @endforeach
                        <a class="dropdown-item menuHover"
                           href="{{ route('order-form')}}">@lang('messages.Order-form')</a>
                    </div>
                </li>

                {{--crops--}}
                <li class="nav-item nav-hover">
                    <a class="nav-link " id="cropsDrop" href="{{url('cropsCat')}}" role="button">
                        @lang('messages.crops') <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class="nav-drop-item" id="cropDropMenu">
                        <div class="crops-items-modal">
                            @php
                                $cropsCat = getCropsData('','','all');
                                $col = ceil(count($cropsCat)/5) ;
                                $limit = 5;
                                $start = 0;
                            @endphp
                            @if($col>0)
                                <div class='cropsMain'>
                                    @php
                                        $cropsCatCol_1 = getCropsData($limit,$start,'spe');
                                    @endphp
                                    @foreach ($cropsCatCol_1 as $category)
                                        <a class="dropdown-item menuHover cropsCatItem"
                                           href="{{ route('disorder',$category->id)}}">
                                            @if (\Session::get('locale')== "bn")
                                                {{ $category->category_name_bn}}
                                            @else
                                                {{ $category->category_name}}
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            @if($col>1)
                                <div class='cropsMain'>
                                    @php
                                        $start = $cropsCatCol_1[4]->id;
                                        $cropsCatCol_2 = getCropsData($limit,$start,'spe');
                                    @endphp
                                    @foreach ($cropsCatCol_2 as $category)
                                        <a class="dropdown-item menuHover cropsCatItem"
                                           href="{{ route('disorder',$category->id)}}">
                                            @if (\Session::get('locale')== "bn")
                                                {{ $category->category_name_bn}}
                                            @else
                                                {{ $category->category_name}}
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            @if($col>2)
                                <div class='cropsMain'>
                                    @php
                                        $start = $cropsCatCol_2[4]->id;
                                        $cropsCatCol_3 = getCropsData($limit,$start,'spe');
                                    @endphp
                                    @foreach ($cropsCatCol_3 as $category)
                                        <a class="dropdown-item menuHover cropsCatItem"
                                           href="{{ route('disorder',$category->id)}}">
                                            @if (\Session::get('locale')== "bn")
                                                {{ $category->category_name_bn}}
                                            @else
                                                {{ $category->category_name}}
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            @if($col>3)
                                <div class='cropsMain'>
                                    @php
                                        $start = $cropsCatCol_3[4]->id;
                                         $cropsCatCol_4 = getCropsData($limit,$start,'spe');
                                    @endphp
                                    @foreach ($cropsCatCol_4 as $category)
                                        <a class="dropdown-item menuHover cropsCatItem"
                                           href="{{ route('disorder',$category->id)}}">
                                            @if (\Session::get('locale')== "bn")
                                                {{ $category->category_name_bn}}
                                            @else
                                                {{ $category->category_name}}
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </li>

                {{--crops end--}}


                <a class="nav-link menuHover {{ Request::is('support-functions') ? 'active' : ''}}"
                   href="{{ route('support-functions')}}">@lang('messages.Functions')</a>
                <a class="nav-link menuHover {{ Request::is('units') ? 'active' : ''}}"
                   href="{{ route('units')}}">@lang('messages.Business')</a>
                <a class="nav-link menuHover {{ Request::is('careers') ? 'active' : ''}}"
                   href="{{ route('careers')}}">@lang('messages.Career')</a>
                <a class="nav-link menuHover {{ Request::is('contact-us') ? 'active' : ''}}"
                   href="{{ route('contact-us')}}">@lang('messages.Contact')</a>
                @guest
                    {{-- <a href="{{ route('user.login')}}" class="nav-link ">@lang('messages.Login') </a> --}}
                    <a href="{{ route('user.login')}}" class="nav-link menuHover ">@lang('messages.Admin-login') </a>
                @else
                    <a href="{{ route('user.dashboard')}}" class="nav-link menuHover ">@lang('messages.My-account') </a>
                @endguest

                <a class="nav-link" href="{{ route('shopping-cart')}}" style="font-size: 24px">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
                <span class="cart-count">{{ \Cart::getTotalQuantity()}}</span>
            </div>
        </div>
    </nav>
</div>

