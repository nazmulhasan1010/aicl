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


        .lang_active {
            border: none;
            background-color: transparent;
            color: #0e0e0e;
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

        .navbar {
            display: flex;
            justify-content: space-between;
        }

        .left {
            margin-top: -5px;
            display: flex;
            align-items: center;
        }

        .btn_group {
            margin-right: 20px;
            border-radius: 10px;
            margin-left: -20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.65);
            border: 1px solid rgba(51, 51, 51, 0.50);
        }

        a.top_btn {
            border-radius: 10px;
            padding: 8px 10px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all .7s;
        }

        a.top_btn_le {
            width: 100px;
            height: 100%;
            text-align: center;
            border-radius: 8px 0 0 8px;
            border-right: 1px solid rgba(51, 51, 51, 0.50);
            transition: all .2s;
        }

        a.top_btn_ri {
            height: 100%;
            width: 100px;
            text-align: center;
            border-radius: 0 8px 8px 0;
            transition: all .2s;
        }

        a.top_btn_ri:hover, a.top_btn_le:hover {
            background-color: rgb(16 38 68);
            color: #f3f0f0;
        }

        a.top_btn_ri img, a.top_btn_le img{
          margin-left: 5px;
        }

    </style>
    <!-- nav bar -->
    @php
        $routrName = \Request::route()->getName();
    @endphp
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="left">
            <a class="navbar-brand" href="{{ route('home')}}">
                <div class="d-flex justify-content-between">
                    <img src="{{ asset('frontend/assets/images/logo.webp')}}" style="margin-left: 14px;" alt="logo"/>
                    <div class="company_logo_title">
                        <p class="company_logo_p">ATHERTON</p>
                        <p class="company_logo_p">GROUP</p>
                    </div>
                </div>
            </a>
            <a class=" top_btn m-auto border border-warning app_login_btn" href="https://203.82.193.74/aicl/"
               target="_blank"> @lang('messages.Login') </a>&nbsp;
            <a class=" top_btn m-auto border border-dark order_form_btn "
               href="{{ route('order-form')}}"> @lang('messages.Order-form') </a>&nbsp;&nbsp;
        </div>
        <div class="right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <div class="btn-group btn_group" role="group"
                         aria-label="Basic example">
                        <a href="{{ url('/setlocale/en')}}"
                           class=" top_btn top_btn_le {{ \Session::get('locale')== "en" ? 'lang_active' :'' }} m-auto">English
                            <img
                                class="flag_img" src="{{ asset('frontend/assets/images/CAN.png')}}" alt="can flag"/>
                        </a>
                        <a href="{{ url('/setlocale/bn')}}"
                           class=" top_btn top_btn_ri  {{ \Session::get('locale')== "bn" ? 'lang_active' :'' }} m-auto"> @lang('messages.Bangla')
                            <img class="flag_img" src="{{ asset('frontend/assets/images/BGD.png')}}" alt="bd flag"/>
                        </a>
                    </div>
                    <div class="m-auto">
                        <img src="{{ asset('frontend/assets/images/27_years.webp')}}" class="nav_img " alt="27 Years"/>&nbsp;&nbsp;&nbsp;
                    </div>
                    <a class="nav-link cropsDrop {{ ($routrName == 'home' || Request::is('home')) ? 'active' : ''}}"
                       href="{{ route('home')}}"> @lang('messages.Home')</a>
                    @php
                        $aboutActive = '';
                        if( Request::is('company-profile') || Request::is('financial-partners') || Request::is('dept-distribution') || Request::is('dept-distribution-image') || Request::is('corporate-structure') || Request::is('quality-control') ) {
                          $aboutActive = 'active';
                        }
                    @endphp
                    {{-- about --}}

                    <li class="nav-item nav-hover">
                        <a class="nav-link cropsDrop " id="cropsDrop" role="button">
                            @lang('messages.About') <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <div class="nav-drop-item cropDropMenu" id="cropDropMenu">
                            <div class="crops-items-modal">
                                <div class='cropsMain' style="width: auto; height: auto">
                                    <a class="dropdown-item menuHover cropsCatItem {{ Request::is('company-profile') ? 'active' : ''}} "
                                       href="{{ route('profile')}}"> @lang('messages.Company')</a>
                                    <a class="dropdown-item menuHover cropsCatItem {{ Request::is('financial-partners') ? 'active' : ''}} "
                                       href="{{ route('partners')}}"> @lang('messages.Financial')</a>
                                    <a class="dropdown-item menuHover cropsCatItem {{ Request::is('dept-distribution') ? 'active' : ''}} "
                                       href="{{ route('distribution')}}"> @lang('messages.Distribution')</a>
                                    <a class="dropdown-item menuHover cropsCatItem {{ Request::is('dept-distribution-image') ? 'active' : ''}} "
                                       href="{{ route('distribution_image')}}"> @lang('messages.Distribution-with-image')</a>
                                    <a class="dropdown-item menuHover cropsCatItem {{ Request::is('corporate-structure') ? 'active' : ''}} "
                                       href="{{ route('employee')}}"> @lang('messages.Employee')</a>
                                    <a class="dropdown-item menuHover cropsCatItem {{ Request::is('quality-control') ? 'active' : ''}} "
                                       href="{{ route('quality-control')}}">@lang('messages.Quality')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{-- products--}}
                    <li class="nav-item nav-hover">
                        <a class="nav-link cropsDrop " id="cropsDrop" role="button">
                            @lang('messages.Product-list') <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <div class="nav-drop-item cropDropMenu" id="cropDropMenu">
                            <div class="crops-items-modal">
                                <div class='cropsMain' style="min-width: 100px; height: auto">

                                    @php
                                        $categories = \App\Category::where('status',true)->get();
                                    @endphp
                                    @foreach ($categories as $category)
                                        @if ($loop->first)
                                            @php
                                                $first = Session::put('first_category',$category->id);
                                            @endphp
                                        @endif
                                        <a class="dropdown-item menuHover cropsCatItem "
                                           href="{{ route('product-by-category',$category->id)}}">
                                            @if (\Session::get('locale')== "bn")
                                                {{ $category->category_name_bn}}
                                            @else
                                                {{ $category->category_name}}
                                            @endif
                                        </a>
                                    @endforeach
                                    <a class="dropdown-item menuHover cropsCatItem"
                                       href="{{ route('order-form')}}">@lang('messages.Order-form')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    {{--crops--}}
                    <li class="nav-item nav-hover">
                        <a class="nav-link cropsDrop" id="cropsDrop" href="{{url('cropsCat')}}" role="button">
                            @lang('messages.crops') <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <div class="nav-drop-item cropDropMenu" id="cropDropMenu">
                            <div class="crops-items-modal">
                                @php
                                    $cropsCat = getCropsData('','','all');
                                    $col = ceil(count($cropsCat)/5) ;
                                    $limit = 5;
                                    $start = 0;
                                @endphp
                                @if($col>0)
                                    <div class='cropsMain' style=" height: auto">
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


                    <a class="nav-link menuHover cropsDrop {{ Request::is('support-functions') ? 'active' : ''}}"
                       href="{{ route('support-functions')}}">@lang('messages.Functions')</a>
                    <a class="nav-link menuHover cropsDrop {{ Request::is('units') ? 'active' : ''}}"
                       href="{{ route('units')}}">@lang('messages.Business')</a>
                    <a class="nav-link menuHover cropsDrop {{ Request::is('careers') ? 'active' : ''}}"
                       href="{{ route('careers')}}">@lang('messages.Career')</a>
                    <a class="nav-link menuHover cropsDrop {{ Request::is('contact-us') ? 'active' : ''}}"
                       href="{{ route('contact-us')}}">@lang('messages.Contact')</a>
                    @guest
                        {{-- <a href="{{ route('user.login')}}" class="nav-link ">@lang('messages.Login') </a> --}}
                        <a href="{{ route('user.login')}}"
                           class="nav-link menuHover cropsDrop ">@lang('messages.Admin-login') </a>
                    @else
                        <a href="{{ route('user.dashboard')}}"
                           class="nav-link menuHover cropsDrop ">@lang('messages.My-account') </a>
                    @endguest

                    <a class="nav-link" href="{{ route('shopping-cart')}}" style="font-size: 24px">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                    <span class="cart-count">{{ \Cart::getTotalQuantity()}}</span>
                </div>
            </div>
        </div>
    </nav>
</div>
