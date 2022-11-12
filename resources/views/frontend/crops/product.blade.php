@extends('layouts.app')
@section('title','Product Detail')
@push('vendor_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a7bedc40f.js" crossorigin="anonymous"></script>
    {{--    <link rel="stylesheet" href="{{asset('frontend/assets/crops/item.css')}}">--}}
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/singleProduct.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/crops/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/owl/owl.theme.default.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush
@push('page_css')
    <style media="screen">
        figure.zoom {
            background-position: 50% 50%;
            position: relative;
            overflow: hidden;
            cursor: zoom-in;
        }

        figure.zoom img:hover {
            opacity: 0;
        }

        figure.zoom img {
            transition: opacity 0.5s;
            display: block;
        }

        .QuantityInDe:hover {
            opacity: .8;
        }

        .star-rating {
            line-height: 32px;
            font-size: 1.25em;
        }

        .star-rating .fa-star-o {
            color: #1267a4;
        }

        .star-rating .fa-star {
            color: #fff;
            background-color: #1267a4;
        }

        .star-rating .fa {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #1267a4;
        }

        .modal {
            background-color: rgba(51, 51, 51, 0.41);
        }

        @media (min-width: 960px) {
            .modal .modal-dialog .modal-content {
                width: 600px;
            }
        }

        @media (min-width: 960px) {
            .sticky {
                position: fixed;
                top: 80px;
                right: 0px;
            }
        }

        .borderTop:nth-child(n+2) {
            border-top: 1px solid rgba(51, 51, 51, 0.32);
        }

        #cartModalClose {
            color: rgba(51, 51, 51, 0.51);
        }

        #cartModalClose:hover {
            color: #333;
        }

        #gallery_pdp .owl-carousel {
            transform: rotate(90deg);
            width: 400px;
            margin-top: 140px;
            margin-left: -140px;
        }

        #gallery_pdp .item {
            transform: rotate(-90deg);
            margin: 0 10px;
            height: 100px;
            padding: 0 10px;
            position: relative;
        }

        .item .bookImage {
            margin: 20px 0;
            border-radius: 5px;
        }

        #gallery_pdp {
            position: relative;
            height: auto;
        }

        #gallery_pdp #carousel_prev_item {
            position: absolute;
            top: -15px;
            left: 20%;
            z-index: 100;
            padding: 0 15px;
            border: none;
            border-radius: 3px;
            background-color: rgba(51, 51, 51, 0.37);
        }

        #gallery_pdp #carousel_next_item {
            background-color: red;
            position: absolute;
            bottom: -139px;
            left: 20%;
            z-index: 100;
            padding: 0 15px;
            border: none;
            border-radius: 3px;
            background-color: rgba(51, 51, 51, 0.37);
        }

        #gallery_pdp #carousel_next_item:hover {
            background-color: rgb(51, 51, 51);
            color: #fff;
        }

        #gallery_pdp #carousel_prev_item:hover {
            background-color: rgb(51, 51, 51);
            color: #fff;
        }

        #product_image_show {
            margin-bottom: 20px;
            width: 100%;
        }

        #carouselExampleControls {
            height: 0px;
            width: 0px;
        }

        @media screen and (max-width: 1200px) {
            .gallery_pdp_container {
                display: none;
            }

            #product_image_show {
                display: none;
            }

            #carouselExampleControls {
                height: auto;
                width: auto;
            }

            .pdp-image-gallery-block {
                display: flex;
                justify-content: center;
                padding: 0;
            }

            .gallery-viewer {
                width: 100%;
                padding: 0;
            }

        }

        .ans-qus button {
            margin: 0 0 10px 15px;
            background-color: rgba(51, 51, 51, 0.05);
            padding: 5px 10px;
            border: none;
            border-radius: 2px;
        }

        .ans-qus button:hover {
            border: 1px solid #333;
            padding: 4px 10px;
        }

        .ans-qus .ansModal {
            margin-left: 15px;
            background-color: rgba(51, 51, 51, 0.05);
            color: rgba(51, 51, 51, 0.70);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .ans-qus .ansModal .ans:nth-child(n+2) {
            margin-top: 30px;
        }

        .ans-qus .ansModal .replayName {
            font-weight: bold;
            color: #0075e8;
            margin-right: 5px;
        }

        .ans-qus .ansModal .reactModal {
            display: flex;
            align-items: center;
        }
    </style>
@endpush
@section('content')
    @php
        $review = getReview($product[0]->product_id);
        $images = getImages($product[0]->product_id);
        $question = getQuestion($product[0]->product_id);
    @endphp
    <div class="container-fluid  pt-4">
        <!-- slider and details part -->
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <!-- single product slider -->
                <div class="pdp-image-gallery-block">
                    <!-- Gallery -->
                    <div class="gallery_pdp_container">
                        <div id="gallery_pdp">
                            <div class="owl-carousel owl-theme" id="imageGallerySlide">
                                @foreach($images as $image)
                                    <div class="item">
                                        <img class=" img-responsive bookImage"
                                             src="{{asset('storage/product/'.$image)}}" data-image="{{$image}}"
                                             alt="{{$image}}"/>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Up and down button for vertical carousel -->
                            <button type="button" id="carousel_prev_item"><i class="fa-solid fa-caret-up"></i></button>
                            <button type="button" id="carousel_next_item"><i class="fa-solid fa-caret-down"></i>
                            </button>
                        </div>

                    </div>
                    <!-- gallery Viewer -->
                    <div class="gallery-viewer">
                        {{--                       <figure id="zoom_product_image" class="zoom" --}}{{-- onmousemove="zoom(event)"--}}
                        {{--                                style="background-image: url({{asset('storage/product/'.$product[0]->image)}})">--}}
                        {{--                            <img id="product_image_show" src="{{asset('storage/product/'.$product[0]->image)}}" alt=""/>--}}
                        {{--                        </figure>--}}
                        <img id="product_image_show" src="{{asset('storage/product/'.$product[0]->image)}}" alt=""/>

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($images as $key=>$image)
                                    <div class="carousel-item {{$key==0?'active':''}}">
                                        <img class="d-block w-100" src="{{asset('storage/product/'.$image)}}"
                                             data-image="{{$image}}" alt="First slide">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-md-12 rightmenu" id="addCartModal">
                <div class="card p-1" style="width: auto;">
                    <div class="card-body">
                        <h4 class="card-title">
                            @php
                                if (Session::get('locale')==='bn'){
                                    echo $product[0]->product_name_bn;
                                }else{
                                    echo $product[0]->product_name;
                                }
                            @endphp
                        </h4>
                        <p class="card-text">{{$product[0]->composition}}</p>
                        @php
                            $totalRating = count($review['allData']);
                            $rating = 0;
                            if ($totalRating>0){
                                 $rating = round($review['ratings']/$totalRating,1);
                            }
                        @endphp
                        <span
                            class="fa {{$rating>0&&$rating<1?'fa-star-half-o checked':''}} {{$rating>=1?'fa-star checked':'fa-star'}}  "></span>
                        <span
                            class="fa {{$rating>1&&$rating<2?'fa-star-half-o checked':''}} {{$rating>=2?'fa-star checked':'fa-star'}} "></span>
                        <span
                            class="fa {{$rating>2&&$rating<3?'fa-star-half-o checked':''}} {{$rating>=3?'fa-star checked':'fa-star'}}"></span>
                        <span
                            class="fa {{$rating>3&&$rating<4?'fa-star-half-o checked':''}} {{$rating>=4?'fa-star checked':'fa-star'}}"></span>
                        <span
                            class="fa {{$rating>4&&$rating<5?'fa-star-half-o checked':'fa-star'}} {{$rating>=5?'fa-star checked':'fa-star'}}"></span>
                        <span>{{$rating}}</span>
                        <p>
                            <span style="font-size:24px;">
                                {{$product[0]->size_name.' - '.$product[0]->price.' BDT'}}
                            </span>
                        </p>
                        <hr>
                        <h6>Quantity:</h6>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="buton1 QuantityInDe" data-inst="de">-</button>
                            <h5 id="quantity"> 1 </h5>
                            <button type="button" class="buton2 QuantityInDe" data-inst="in">+</button>
                            <form action="{{ route('dis-product-add-cart')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product[0]->product_id  }}">
                                <input type="hidden" name="price" value="{{ $product[0]->price}}" class="productPrice">
                                <input type="hidden" name="size" value="{{$product[0]->size_name}}" class="productSize">
                                <input type="hidden" name="qty" value="1" class="productQuantity">
                                <button type="submit"
                                        class="buton3 addCartButton">@lang('messages.Add-to-cart')</button>
                            </form>

                        </div>

                        <br/>
                        <div id="ot-info">
                            <br/>
                            <h6><i class="fa-solid fa-bahai"></i> Sold & shipped by
                                <img src="{{asset('frontend/assets/images/logo.webp')}}" style="height: 30px;">
                            </h6>
                            <hr>
                            <h6><i class="fa-solid fa-arrow-rotate-left"></i>
                                <a style="color: #000; " href="#returnPolicy">
                                    Return policy</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- other detail part-->
        <div class="wrapper row detailsPosition">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne"><h4>Description</h4>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                @php
                                    if (Session::get('locale')==='bn'){
                                        $productDes = $product[0]->product_details_bn;
                                    }else{
                                        $productDes = $product[0]->product_details;
                                    }
                                @endphp
                                {!! $productDes !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="accordion accordion-flush mt-5" id="returnPolicy">
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                <h4>Return policy</h4>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse show"
                             aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>If you buy something online but it's not everything you dreamed it to be, no
                                    worries!
                                    We're here for you.</p>
                                <span>You can return this item within <strong>45 days </strong>from the day you receive your online order.</span>
                                <label>There are two easy ways to return this item:</label>
                                <ul>
                                    <li>Return this item to a Walmart store</li>
                                    <li>Return this item by mail</li>
                                </ul>
                                <br/>
                                <p>
                                    <a href="#" style="color:#000;" class="">Learn more </a><i
                                        class="fa-solid fa-arrow-up-right-from-square"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-4">You may also like</h4>
                <div class="row my-5 item-scroll g-4 owl-carousel owl-carousel-group owl-theme">
                    @php
                        $similar_product = getProductDetailsByCat($product[0]->category_id);
                    @endphp
                    @foreach($similar_product as $smProduct)
                        <div class="col product-item card d-flex" style=" justify-content: left; padding:0">
                            <div class="product-info" style=" width: 100%">
                                <div class="img-size " style=" width: 100%">
                                    <a href="{{url('disorder/product/'.$smProduct->product_id)}}"
                                       class="d-block text-dark text-decoration-none product-name">
                                        <img src="{{asset('storage/product/'.$smProduct->image)}}" style=" width: 100%"
                                             alt="">
                                    </a>
                                </div>
                                <div class="p-2">
                                    <strong>
                                        @php
                                            if (Session::get('locale')==='bn'){
                                                echo $smProduct->product_name_bn;
                                            }else{
                                                echo $smProduct->product_name;
                                            }
                                        @endphp
                                    </strong>
                                    @php
                                        $productsRatings = getReview($smProduct->product_id);
                                        $totalProRating = count($productsRatings['allData']);

                                        $proRating = 0;
                                        if ($totalProRating>0){
                                            $proRating = round($productsRatings['ratings']/$totalProRating,1);
                                        }
                                    @endphp
                                    <p class="card-text detail">{{$smProduct->composition}}</p>
                                    <div class="rating d-flex">
                                         <span
                                             class="fa {{$proRating>0&&$proRating<1?'fa-star-half-o checked':''}} {{$proRating>=1?'fa-star checked':'fa-star'}}  "></span>
                                        <span
                                            class="fa {{$proRating>1&&$proRating<2?'fa-star-half-o checked':''}} {{$proRating>=2?'fa-star checked':'fa-star'}} "></span>
                                        <span
                                            class="fa {{$proRating>2&&$proRating<3?'fa-star-half-o checked':''}} {{$proRating>=3?'fa-star checked':'fa-star'}}"></span>
                                        <span
                                            class="fa {{$proRating>3&&$proRating<4?'fa-star-half-o checked':''}} {{$proRating>=4?'fa-star checked':'fa-star'}}"></span>
                                        <span
                                            class="fa {{$proRating>4&&$proRating<5?'fa-star-half-o checked':'fa-star'}} {{$proRating>=5?'fa-star checked':'fa-star'}}"></span>
                                        <span> ({{$totalProRating}})</span>
                                    </div>
                                    <p>{{$smProduct->size_name}}</p>
                                    <h5 class="product-price">{{$smProduct->price.' BDT'}}</h5>
                                    <div class="addCardButtonModal"
                                         style="display:flex; width: 100%; justify-content: center">
                                        <form action="{{ route('dis-product-add-cart')}}" method="POST"
                                              style="width: 100%">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$smProduct->product_id  }}">
                                            <input type="hidden" name="price" value="{{$smProduct->price}}"
                                                   class="productPrice">
                                            <input type="hidden" name="size" value="{{$smProduct->size_name}}"
                                                   class="productSize">
                                            <input type="hidden" name="qty" value="1" class="productQuantity">
                                            <button type="submit"
                                                    class="btn btn-primary">@lang('messages.Add-to-cart')</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h4>Top items in this department</h4>
                <div class="row my-5 item-scroll g-4 owl-carousel owl-carousel-group owl-theme">
                    @php
                        $similar_product = getProductDetailsAll();
                    @endphp
                    @foreach($similar_product as $smProduct)
                        <div class="col product-item card d-flex" style=" justify-content: left; padding:0">
                            <div class="product-info" style=" width: 100%">
                                <div class="img-size " style=" width: 100%">
                                    <a href="{{url('disorder/product/'.$smProduct->product_id)}}"
                                       class="d-block text-dark text-decoration-none product-name">
                                        <img src="{{asset('storage/product/'.$smProduct->image)}}" style=" width: 100%"
                                             alt="">
                                    </a>
                                </div>
                                <div class="p-2">
                                    <strong>
                                        @php
                                            if (Session::get('locale')==='bn'){
                                                echo $smProduct->product_name_bn;
                                            }else{
                                                echo $smProduct->product_name;
                                            }
                                        @endphp
                                    </strong>
                                    @php
                                        $productsRatings = getReview($smProduct->product_id);
                                        $totalProRating = count($productsRatings['allData']);

                                        $proRating = 0;
                                        if ($totalProRating>0){
                                            $proRating = round($productsRatings['ratings']/$totalProRating,1);
                                        }
                                    @endphp
                                    <p class="card-text detail">{{$smProduct->composition}}</p>
                                    <div class="rating d-flex">
                                         <span
                                             class="fa {{$proRating>0&&$proRating<1?'fa-star-half-o checked':''}} {{$proRating>=1?'fa-star checked':'fa-star'}}  "></span>
                                        <span
                                            class="fa {{$proRating>1&&$proRating<2?'fa-star-half-o checked':''}} {{$proRating>=2?'fa-star checked':'fa-star'}} "></span>
                                        <span
                                            class="fa {{$proRating>2&&$proRating<3?'fa-star-half-o checked':''}} {{$proRating>=3?'fa-star checked':'fa-star'}}"></span>
                                        <span
                                            class="fa {{$proRating>3&&$proRating<4?'fa-star-half-o checked':''}} {{$proRating>=4?'fa-star checked':'fa-star'}}"></span>
                                        <span
                                            class="fa {{$proRating>4&&$proRating<5?'fa-star-half-o checked':'fa-star'}} {{$proRating>=5?'fa-star checked':'fa-star'}}"></span>
                                        <span> ({{$totalProRating}})</span>
                                    </div>
                                    <p>{{$smProduct->size_name}}</p>
                                    <h5 class="product-price">{{$smProduct->price.' BDT'}}</h5>
                                    <div class="addCardButtonModal"
                                         style="display:flex; width: 100%; justify-content: center">
                                        <form action="{{ route('dis-product-add-cart')}}" method="POST"
                                              style="width: 100%">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$smProduct->product_id  }}">
                                            <input type="hidden" name="price" value="{{$smProduct->price}}"
                                                   class="productPrice">
                                            <input type="hidden" name="size" value="{{$smProduct->size_name}}"
                                                   class="productSize">
                                            <input type="hidden" name="qty" value="1" class="productQuantity">
                                            <button type="submit"
                                                    class="btn btn-primary">@lang('messages.Add-to-cart')</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Specifications-->
                <div class="accordion " id="accordionPanelsStayOpenExample">
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                <h4>Specifications</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                             aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                @php
                                    $spe =  getSpecificition($product[0]->product_id);
                                @endphp
                                @if(count($spe)>0)
                                    {!! $spe[0]->specification !!}
                                @else
                                    <h5>No specification added</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                <h4>Ratings & reviews</h4>
                            </button>
                        </h2>

                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                             aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                {{--rating star--}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="star-rating">
                                                <span class="fa fa-star-o" data-rating="1"></span>
                                                <span class="fa fa-star-o" data-rating="2"></span>
                                                <span class="fa fa-star-o" data-rating="3"></span>
                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                <input type="hidden" name="whatever1" class="rating-value" value="3">
                                            </div>
                                        </div>
                                    </div>
                                </div>{{--rating star end --}}
                                @php
                                    $totalRating = count($review['allData']);
                                    $totalQuestion = count($question);
                                    $rating = 0;
                                    if ($totalRating>0){
                                         $rating = round($review['ratings']/$totalRating,1);
                                    }
                                @endphp
                                <div class="row p-3 mt-3 border-bottom" style="background-color:#F0f0f0 ;">
                                    <div class="col-6 rStar">
                                        <span
                                            class="fa {{$rating>0&&$rating<1?'fa-star-half-o checked':''}} {{$rating>=1?'fa-star checked':'fa-star'}}  "></span>
                                        <span
                                            class="fa {{$rating>1&&$rating<2?'fa-star-half-o checked':''}} {{$rating>=2?'fa-star checked':'fa-star'}} "></span>
                                        <span
                                            class="fa {{$rating>2&&$rating<3?'fa-star-half-o checked':''}} {{$rating>=3?'fa-star checked':'fa-star'}}"></span>
                                        <span
                                            class="fa {{$rating>3&&$rating<4?'fa-star-half-o checked':''}} {{$rating>=4?'fa-star checked':'fa-star'}}"></span>
                                        <span
                                            class="fa {{$rating>4&&$rating<5?'fa-star-half-o checked':'fa-star'}} {{$rating>=5?'fa-star checked':'fa-star'}}"></span>
                                        <span>{{$rating}}</span>
                                    </div>
                                </div>
                                <div class="row border-bottom" style="background-color:#F0f0f0 ;">
                                    <div class="col-4 pt-2 text-center">
                                        <h6 class="reviw-h6">{{$totalRating}}</h6>
                                        <span style="font-size: 12px;"><a href="">Reviews</a></span>
                                    </div>
                                    <div class="col-4 pt-2 text-center"
                                         style="border-left: 1px solid #bdbdbd; border-right: 1px solid #bdbdbd">
                                        <h6 class="reviw-h6">{{$totalQuestion}}</h6>
                                        <span style="font-size: 12px;"><a href="#question_modal">Questions</a></span>
                                    </div>
                                    <div class="col-4 pt-2 text-center">
                                        <h6 class="reviw-h6">0</h6>
                                        <span style="font-size: 12px;"><a href="#question_modal">Answers</a></span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6 text-start">
                                        <h6>Reviews</h6>
                                    </div>
                                </div>

                                <div class="row mt-4 p-3">
                                    <div class="col-md-6 text-start">
                                        <label class="revTs">Rating Snapshot</label>
                                        <!-- review raiting -->
                                        <div class="row">
                                            <div class="col-2 strf text-end">5 <span class="fa fa-star "></span>
                                            </div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file"
                                                          value="{{$review['fiveSat']>0?($totalRating*100)/(($totalRating/$review['fiveSat'])*$totalRating):0}}"
                                                          max="100">
                                                </progress>
                                            </div>
                                            <div class="col-2 strf">{{$review['fiveSat']}}</div>
                                        </div>
                                        <!--    2nd progress bar -->
                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">4 <span class="fa fa-star "></span>
                                            </div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file"
                                                          value="{{$review['fourStar']>0?($totalRating*100)/(($totalRating/$review['fourStar'])*$totalRating):0}}"
                                                          max="100">
                                                </progress>
                                            </div>
                                            <div class="col-2 strf">{{$review['fourStar']}}</div>
                                        </div>
                                        <!--    3nd progress bar -->
                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">3 <span class="fa fa-star "></span>
                                            </div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file"
                                                          value="{{$review['threeStar']>0?($totalRating*100)/(($totalRating/$review['threeStar'])*$totalRating):0}}"
                                                          max="100">
                                                </progress>
                                            </div>
                                            <div class="col-2 strf">{{$review['threeStar']}}</div>
                                        </div>
                                        <!--    4nd progress bar -->
                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">2 <span class="fa fa-star "></span>
                                            </div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file"
                                                          value="{{$review['towStar']>0?($totalRating*100)/(($totalRating/$review['towStar'])*$totalRating):0}}"
                                                          max="100">
                                                </progress>
                                            </div>
                                            <div class="col-2 strf">{{$review['towStar']}}</div>
                                        </div>
                                        <!--    5nd progress bar -->
                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">1 <span class="fa fa-star "></span>
                                            </div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file"
                                                          value="{{$review['oneStar']>0?($totalRating*100)/(($totalRating/$review['oneStar'])*$totalRating):0}}"
                                                          max="100">
                                                </progress>
                                            </div>
                                            <div class="col-2 strf">{{$review['oneStar']}}</div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row"
                                     style="background-color:#f0f0f0 ; font-size: 14px; padding:5px;">
                                    <div class="col text-start">
                                        <span>1–{{$totalRating>5?5:$totalRating}} of {{$totalRating}} Reviews </span>
                                    </div>
                                    <div class="col text-end">
                                        <span>Sort by:</span>
                                        <div class="btn-group most">
                                            <button class="btn btn-sm dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                Most Recent
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="?">All</a>
                                                </li>
                                                <li>
                                                    <a href="#">Most Relevant</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $reviews = $review['allDataSFive'];
                                @endphp
                                @foreach($reviews as $review)
                                    <div class="row borderTop">
                                        <div class="col-md-6 mt-3">
                                            <div
                                                style="display: flex; align-items: center; margin-bottom: 10px; background-color: #e7f1ff; padding: 5px; border-radius: 5px;">
                                            <span>
                                                <i class="fa-regular fa-user"
                                                   style="border: 2px solid #333; display: flex; justify-content:center; align-items:center; font-size: 25px; height: 40px; width: 40px; border-radius:50%; margin-right:10px">
                                                </i>
                                            </span>
                                                <div style="height:45px;">
                                                    <strong>{{$review->nickname}}</strong>
                                                    <p>{{  date("d-m-y", strtotime($review->created_at)) }}</p>
                                                </div>
                                            </div>
                                            <h5 class="mt-2" style="margin:15px 0">
                                                <strong>{{$review->reviewTitle}}</strong></h5>
                                            <div class="rating" style="margin-bottom:10px">
                                                <span
                                                    class="fa {{$review->ratings>0&&$review->ratings<1?'fa-star-half-o checked':''}} {{$review->ratings>=1?'fa-star checked':'fa-star'}}  "></span>
                                                <span
                                                    class="fa {{$review->ratings>1&&$review->ratings<2?'fa-star-half-o checked':''}} {{$review->ratings>=2?'fa-star checked':'fa-star'}} "></span>
                                                <span
                                                    class="fa {{$review->ratings>2&&$review->ratings<3?'fa-star-half-o checked':''}} {{$review->ratings>=3?'fa-star checked':'fa-star'}}"></span>
                                                <span
                                                    class="fa {{$review->ratings>3&&$review->ratings<4?'fa-star-half-o checked':''}} {{$review->ratings>=4?'fa-star checked':'fa-star'}}"></span>
                                                <span
                                                    class="fa {{$review->ratings>4&&$review->ratings<5?'fa-star-half-o checked':'fa-star'}} {{$review->ratings>=5?'fa-star checked':'fa-star'}}"></span>
                                            </div>
                                            <p>{{$review->review}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom" id="question_modal">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                <h4>Questions & answers</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                             aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body d-flex justify-content-between align-items-center">
                                <strong>Questions</strong>
                                <button class="btn btn-primary" type="button" id="addQuestion">Ask a question</button>
                            </div>

                            <div class="row p-3">
                                @foreach($question as $questions)
                                    <div class="col-md-12 ">
                                        <div
                                            style="display: flex; align-items: center; margin-bottom: 10px; background-color: #e7f1ff; padding: 5px; border-radius: 5px; color: rgba(51,51,51,0.90)">
                                            <span>
                                                <i class="fa-regular fa-user"
                                                   style="border: 2px solid #333; display: flex; justify-content:center; align-items:center; font-size: 25px; height: 40px; width: 40px; border-radius:50%; margin-right:10px">
                                                </i>
                                            </span>
                                            <div style="height:45px;">
                                                <strong>{{$questions->name}}</strong>
                                                <p>{{date("d-m-y", strtotime($questions->created_at))}}</p>
                                            </div>
                                        </div>
                                        @php
                                            $answers = getAns($questions->id);
                                        @endphp
                                        <div class="ans-qus">
                                            <p style="font-weight:bold; color: rgba(51,51,51,0.70)">{{$questions->question}}</p>
                                            <button type="button" class="ansButton" data-id="{{$questions->id}}">Answer
                                                This Question
                                            </button>
                                            @if(count($answers)>0)
                                                <div class="ansModal">
                                                    @foreach($answers as $answer)
                                                        <div class="ans">
                                                            <div class="d-flex"><p
                                                                    class="replayName">{{$answer->name}}</p>
                                                                <span> . {{date("d-m-y", strtotime($answer->created_at))}}</span></div>
                                                            <p>{{$answer->answer}}</p>
                                                            <div class="reactModal">
                                                                <p>Helpful?</p>
                                                                <button data-id="{{$answer->id}}" class="qnaAnsReactYesNo">
                                                                    <input type="hidden" value="yes">Yes . 0</button>
                                                                <button data-id="{{$answer->id}}" class="qnaAnsReactYesNo"><input type="hidden" value="no">No . 0</button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        </div>
        <!-- Question Modal -->
        <div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{route('customer_question')}}" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Question</h5>
                            <button type="button" class="close questionModalClose" id="questionModalClose">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product[0]->product_id  }}">
                            <div class="form-group">
                                <label for="sender_name" class="col-form-label">Your Name</label>
                                <input type="text" class="form-control" id="sender_name" name="sender_name">
                            </div>
                            <div class="form-group">
                                <label for="message_text" class="col-form-label">Your Question</label>
                                <textarea class="form-control" id="message_text" name="message_text"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary questionModalClose" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Question Modal end -->

        <!-- Answer Modal -->
        <div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{route('question_ans')}}" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close ansModalClose" id="ansModalClose">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" id="questionId" name="questionId">
                            <div class="form-group">
                                <label for="sender_name" class="col-form-label">Your Name</label>
                                <input type="text" class="form-control" id="sender_name" name="sender_name">
                            </div>
                            <div class="form-group">
                                <label for="message_text" class="col-form-label">Your Answer</label>
                                <textarea class="form-control" id="message_text" name="message_text"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary ansModalClose" data-dismiss="modal">Close
                            </button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Answer Modal end -->

        <!-- Review Modal -->
        <div class="modal fade " id="reviewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <div class="left d-flex">
                            <img class="img-responsive"
                                 src="{{asset('storage/product/'.$product[0]->image)}}" data-zoom-image=""
                                 alt="{{$product[0]->product_name}}" style="height: 50px"/>
                            <div class="card-title" style="margin-left: 10px">
                                <h4 style="margin: -2px; padding: 0">
                                    @php
                                        if (Session::get('locale')==='bn'){
                                            echo $product[0]->product_name_bn;
                                        }else{
                                            echo $product[0]->product_name;
                                        }
                                    @endphp
                                </h4>
                                <p class="card-text">{{$product[0]->composition}}</p>
                            </div>
                        </div>
                        <button type="button" class="close" id="reviewModalClose">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row ">
                            <form action="{{route('ratings')}}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product[0]->product_id  }}">
                                <h5>Your review </h5>
                                {{--rating star--}}
                                <div class="col-md-12 ">
                                    <div class="star-rating">
                                        <span class="fa fa-star-o" data-rating="1"></span>
                                        <span class="fa fa-star-o" data-rating="2"></span>
                                        <span class="fa fa-star-o" data-rating="3"></span>
                                        <span class="fa fa-star-o" data-rating="4"></span>
                                        <span class="fa fa-star-o" data-rating="5"></span>
                                        <input type="hidden" name="ratings" class="rating-value" id="ratingValue"
                                               value="3">
                                        <input type="hidden" class="temp-value" value="">
                                    </div>
                                </div>{{--rating star end --}}
                                <p style=" margin-top:10px; font-size:15px" class="product-quality">
                                    <span id="tRating"></span> out of 5 stars
                                    selected. Product is <span id="pQuality"></span>.</p>
                                <div class="form-group">
                                    <label for="ratingsReviews">Ratings & Reviews</label>
                                    <textarea class="form-control" id="ratingsReviews" rows="3"
                                              name="ratingsReviews"></textarea>
                                    <div class="requirBox d-flex " style="justify-content: right;font-size: 14px"><span
                                            id="ratingsReviewsReq">0</span>/20
                                        minimum
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="reviewTitle">Review Title</label>
                                    <input type="text" class="form-control" id="reviewTitle"
                                           placeholder="Example: Great Features" name="reviewTitle">
                                    <div class="requirBox d-flex " style="justify-content: right;font-size: 14px"><span
                                            id="ratingTitleReq">0</span>/50
                                        maximum
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nickName">Nickname*</label>
                                    <input type="text" class="form-control" id="nickName" placeholder="Example: Nahid"
                                           name="nickName">
                                    <div class="requirBox d-flex " style="justify-content: right;font-size: 14px"><span
                                            id="nickNameReq">0</span>/10
                                        maximum
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address*</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="name@example.com">
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                           value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">I agree to the terms &
                                        conditions</label>
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" id="ratingSubmit" class="btn btn-secondary disabled p-2 px-5">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- Review Modal End -->

        <!-- Cart Modal  -->
        <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content p-2">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-circle-check"
                                                                          style="color: green"></i>
                            @if (\Session::has('success'))
                                {{Session::get('success')}}
                            @endif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if (\Session::has('data'))
                            @php
                                $addProductData = Session::get('data');
                            @endphp
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="col-md-2">
                                            <img src="{{asset('storage/product/'.$addProductData[0]->image)}}"
                                                 style="width: 100%" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="card-title">
                                                @php
                                                    if (Session::get('locale')==='bn'){
                                                        echo $addProductData[0]->product_name_bn;
                                                    }else{
                                                        echo $addProductData[0]->product_name;
                                                    }
                                                @endphp
                                            </h4>
                                            <p class="card-text">{{$addProductData[0]->composition}}</p>
                                            @php
                                                $review = getReview($addProductData[0]->product_id);
                                                   $totalRating = count($review['allData']);
                                                   $rating = 0;
                                                   if ($totalRating>0){
                                                        $rating = round($review['ratings']/$totalRating,1);
                                                   }
                                            @endphp
                                            <span
                                                class="fa {{$rating>0&&$rating<1?'fa-star-half-o checked':''}} {{$rating>=1?'fa-star checked':'fa-star'}}  "></span>
                                            <span
                                                class="fa {{$rating>1&&$rating<2?'fa-star-half-o checked':''}} {{$rating>=2?'fa-star checked':'fa-star'}} "></span>
                                            <span
                                                class="fa {{$rating>2&&$rating<3?'fa-star-half-o checked':''}} {{$rating>=3?'fa-star checked':'fa-star'}}"></span>
                                            <span
                                                class="fa {{$rating>3&&$rating<4?'fa-star-half-o checked':''}} {{$rating>=4?'fa-star checked':'fa-star'}}"></span>
                                            <span
                                                class="fa {{$rating>4&&$rating<5?'fa-star-half-o checked':'fa-star'}} {{$rating>=5?'fa-star checked':'fa-star'}}"></span>
                                            <span>{{$rating}}</span>
                                            <p>
                                                <span style="font-size:24px;">
                                                     {{$addProductData[0]->size_name.' - '.$addProductData[0]->price.' BDT'}}
                                                </span>
                                            </p>
                                        </div>
                                        @php
                                            $cart_items = Cart::getContent();
                                        @endphp
                                        <div class="col-md-4">
                                            <div class="right">
                                                <div class="card p-2">
                                                    <div class="d-flex">
                                                        <span>Subtotal:</span>
                                                        @foreach($cart_items as $cart_item)
                                                            @if($cart_item->id == Session::get('id'))

                                                                <div class="productPriceShow  "
                                                                     style="display: flex; align-items: center; padding: 0 0 0 10px; float: right"> {{ $cart_item->price * $cart_item->quantity}}
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                        <span> BDT</span>
                                                    </div>
                                                    <p></p>
                                                    <a href="{{route('dis-shopping-cart')}}" class="btn btn-primary"
                                                       style="border-radius: 20px; margin-bottom: 10px">Chackout</a>
                                                    <button type="button" onclick="history.back()"
                                                            style="border-radius: 20px"
                                                            class="btn btn-outline-secondary">Continue
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="d-flex justify-content-between">
                                                <div class="left">
                                                    <h6>Quantity:</h6>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <div class="countable d-flex">
                                                            <button type="button" class="buton1 QuantityInDeModal"
                                                                    data-inst="de">-
                                                            </button>
                                                            @foreach($cart_items as $cart_item)
                                                                @if($cart_item->id == Session::get('id'))
                                                                    <h5 class="quantity">
                                                                        {{$cart_item->quantity}}
                                                                    </h5>
                                                                    <input type="hidden" class="finalQuantityEditPrice"
                                                                           value="{{$cart_item->price}}">
                                                                    <input type="hidden" class="finalQuantityEditId"
                                                                           value="{{$cart_item->id}}">
                                                                @endif
                                                            @endforeach

                                                            <button type="button" class="buton2 QuantityInDeModal"
                                                                    data-inst="in">+
                                                            </button>
                                                            <input type="hidden" class="finalQuantityEdit" value="">

                                                        </div>
                                                        <form action="{{ route('add-to-cart')}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                   value="{{$addProductData[0]->product_id  }}">
                                                            <input type="hidden" name="price"
                                                                   value="{{ $addProductData[0]->price}}"
                                                                   class="productPrice">
                                                            <input type="hidden" name="price"
                                                                   value="{{ $addProductData[0]->price}}"
                                                                   class="productActualPrice">
                                                            <input type="hidden" name="size"
                                                                   value="{{$addProductData[0]->size_name}}"
                                                                   class="productSize">
                                                            <input type="hidden" name="qty" value="1"
                                                                   class="productQuantity">
                                                        </form>
                                                    </div>
                                                    <br/>
                                                    <div id="ot-info">
                                                        <br/>
                                                        <h6><i class="fa-solid fa-bahai"></i> Sold & shipped by
                                                            <img src="{{asset('frontend/assets/images/logo.webp')}}"
                                                                 style="height: 30px;">
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="">Recomanded for you</h4>
                                        <div class="row item-scroll owl-carousel  owl-theme" id="recomandedProduct">
                                            @php
                                                $similar_product = getProductDetailsByCat($product[0]->category_id);
                                            @endphp
                                            @foreach($similar_product as $smProduct)
                                                <div class="col product-item card " style=" padding:0">
                                                    <div class="product-info d-flex" style=" width: 100%">
                                                        <div class="" style=" width: 30%; display :flex;
                                                justify-content: center;padding: 5px">
                                                            <a href="{{url('disorder/product/'.$smProduct->product_id)}}">
                                                                <img
                                                                    src="{{asset('storage/product/'.$smProduct->image)}}"
                                                                    style="  max-height: none; position: static; "
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div style="width:70%; padding: 5px">
                                                            <strong>
                                                                @php
                                                                    if (Session::get('locale')==='bn'){
                                                                        echo $smProduct->product_name_bn;
                                                                    }else{
                                                                        echo $smProduct->product_name;
                                                                    }
                                                                @endphp
                                                            </strong>
                                                            @php
                                                                $productsRatings = getReview($smProduct->product_id);
                                                                $totalProRating = count($productsRatings['allData']);

                                                                $proRating = 0;
                                                                if ($totalProRating>0){
                                                                    $proRating = round($productsRatings['ratings']/$totalProRating,1);
                                                                }
                                                            @endphp
                                                            <p class="card-text detail">{{$smProduct->composition}}</p>
                                                            <div class="rating d-flex">
                                                                <span
                                                                    class="fa {{$proRating>0&&$proRating<1?'fa-star-half-o checked':''}} {{$proRating>=1?'fa-star checked':'fa-star'}}  "></span>
                                                                <span
                                                                    class="fa {{$proRating>1&&$proRating<2?'fa-star-half-o checked':''}} {{$proRating>=2?'fa-star checked':'fa-star'}} "></span>
                                                                <span
                                                                    class="fa {{$proRating>2&&$proRating<3?'fa-star-half-o checked':''}} {{$proRating>=3?'fa-star checked':'fa-star'}}"></span>
                                                                <span
                                                                    class="fa {{$proRating>3&&$proRating<4?'fa-star-half-o checked':''}} {{$proRating>=4?'fa-star checked':'fa-star'}}"></span>
                                                                <span
                                                                    class="fa {{$proRating>4&&$proRating<5?'fa-star-half-o checked':'fa-star'}} {{$proRating>=5?'fa-star checked':'fa-star'}}"></span>
                                                                <span> ({{$totalProRating}})</span>
                                                            </div>
                                                            <p>{{$smProduct->size_name}}</p>
                                                            <h5 class="product-price">{{$smProduct->price.' BDT'}}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>  <!-- Cart Modal End -->
        </div>
        @endsection
        @push('vendor_js')
            <!-- javaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js "
                    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 "
                    crossorigin="anonymous "></script>
            {{--    axois--}}
            <script src="{{asset('backend/assets/js/axios.min.js')}}"></script>

            {{--    owl--}}
            <script src="{{asset('frontend/assets/crops/owl/owl.carousel.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script src="{{asset('frontend/assets/crops/js/main.js')}}"></script>
        @endpush

        @push('page_js')
            <script type="text/javascript">

                @if (\Session::has('success'))
                showModalCart('show')

                $("#cartModalClose").click(function () {
                    $('#cartModal').modal('hide');
                });

                function showModalCart(sta) {
                    $('#cartModal').modal('show');
                }

                @endif
                $("#reviewModalClose").click(function () {
                    $('#reviewModal').modal('hide');
                });

                // function zoom(e) {
                //     var zoomed = e.currentTarget;
                //     e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX;
                //     e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX;
                //     x = offsetX / zoomed.offsetWidth * 100;
                //     y = offsetY / zoomed.offsetHeight * 100;
                //     console.log(zoomed.offsetWidth)
                //     zoomed.style.backgroundPosition = x + '% ' + y + '%';
                // }

                $('.QuantityInDe').click(function () {
                    let inst = $(this).data('inst'),
                        quantityField = $('#quantity'),
                        quantityField_2 = $('#quantityField_2'),
                        quantity = parseInt(quantityField.text());
                    if (inst === 'in') {
                        quantity++
                        quantityField.text(quantity);
                        quantityField_2.text(quantity);
                        $('.productQuantity').val(quantity)
                        $('.productPriceShow').text($('.productPrice').val() * quantity);
                    } else if (inst === 'de') {
                        if (quantity > 1) {
                            quantity--
                            quantityField.text(quantity);
                            quantityField_2.text(quantity);
                            $('.productQuantity').val(quantity)
                            $('.productPriceShow').text($('.productPrice').val() * quantity);
                        } else {
                            alert('Minimum quantity')
                        }
                    }
                });

                // ratings
                var star_rating = $('.star-rating .fa');
                star_rating.on('mouseover', function () {
                    star_rating.siblings('input.temp-value').val($(this).data('rating'));
                    star_rating.each(function () {
                        if (parseInt(star_rating.siblings('input.temp-value').val()) >= parseInt($(this).data('rating'))) {
                            $(this).removeClass('fa-star-o').addClass('fa-star');
                        } else {
                            $(this).removeClass('fa-star').addClass('fa-star-o');
                        }
                    });
                })
                star_rating.on('mouseout', function () {
                    ratingRole();
                })
                ratingRole()

                function ratingRole() {
                    star_rating.each(function () {
                        if (parseInt(star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                            $(this).removeClass('fa-star-o').addClass('fa-star');
                        } else {
                            $(this).removeClass('fa-star').addClass('fa-star-o');
                        }
                    });
                }

                star_rating.on('click', function () {
                    star_rating.siblings('input.rating-value').val($(this).data('rating'));
                    ratingRole()
                    productQualityCheck()
                    $('#reviewModal').modal('show');
                });

                function productQualityCheck() {
                    let rating = parseInt($('#ratingValue').val()),
                        quality;
                    if (rating === 1) {
                        quality = 'Poor';
                    } else if (rating === 2) {
                        quality = 'Fair';
                    } else if (rating === 3) {
                        quality = 'Average';
                    } else if (rating === 4) {
                        quality = 'Good';
                    } else if (rating === 5) {
                        quality = 'Excellent';
                    }
                    $('#tRating').text(rating);
                    $('#pQuality').text(quality);
                }

                $('#ratingsReviews').keyup(function () {
                    let value = $(this).val();
                    $('#ratingsReviewsReq').text(value.length)
                    if (value.length >= 5) {
                        $('#ratingsReviewsReq').parent('.requirBox').css('color', 'green')
                        if ($('.form-check-input').is(':checked')) {
                            let value1 = $('#nickName').val();
                            let value2 = $('#reviewTitle').val();
                            if (value1.length < 10 && value2.length < 50) {
                                $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
                            }
                        }
                    } else {
                        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
                        $('#ratingsReviewsReq').parent('.requirBox').css('color', 'red')
                    }
                });
                $('#reviewTitle').keyup(function () {
                    let value = $(this).val();
                    $('#ratingTitleReq').text(value.length)
                    if (value.length > 50) {
                        $('#ratingTitleReq').parent('.requirBox').css('color', 'red')
                        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
                    } else {
                        if (value.length > 10) {
                            $('#ratingTitleReq').parent('.requirBox').css('color', 'green')
                        }
                        if ($('.form-check-input').is(':checked')) {
                            let value1 = $('#nickName').val();
                            let value3 = $('#ratingsReviews').val();
                            if (value1.length < 10 && value3.length > 20) {
                                $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
                            }
                        }
                    }
                });
                $('#nickName').keyup(function () {
                    let value = $(this).val();
                    $('#nickNameReq').text(value.length)
                    if (value.length > 10) {
                        $('#nickNameReq').parent('.requirBox').css('color', 'red')
                        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
                    } else {
                        if (value.length > 4) {
                            $('#nickNameReq').parent('.requirBox').css('color', 'green')
                        }
                        if ($('.form-check-input').is(':checked')) {
                            let value2 = $('#reviewTitle').val();
                            let value3 = $('#ratingsReviews').val();
                            if (value2.length < 50 && value3.length > 20) {
                                $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
                            }
                        }
                    }
                });
                $(".form-check-input").change(function () {
                    if ($(this).is(':checked')) {
                        let value1 = $('#nickName').val();
                        let value2 = $('#reviewTitle').val();
                        let value3 = $('#ratingsReviews').val();
                        if (value1.length < 10 && value2.length < 20 && value3.length > 20) {
                            $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
                        }
                    } else {
                        $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
                    }
                });

                var navbar = document.getElementById("addCartModal");
                window.onscroll = function () {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        navbar.classList.add("sticky")
                        navbar.style.top = '70px';
                        var windowHeight = window.innerHeight;
                        var elementTop = $(".footer")[0].getBoundingClientRect().top;
                        var elementVisible = 100;
                        if (elementTop < windowHeight - elementVisible) {
                            navbar.style.top = elementTop - 430 + 'px';
                        } else {
                            navbar.style.top = '70px';
                        }
                    } else {
                        navbar.classList.remove("sticky");
                        navbar.style.top = '0px';
                    }
                };

                $('.QuantityInDeModal').click(function () {
                    let inst = $(this).data('inst'),
                        quantityField = $(this).parent('.countable').children('.quantity'),
                        quantityInputField = $(this).parent('.countable').children('.finalQuantityEdit'),
                        quantityId = $(this).parent('.countable').children('.finalQuantityEditId'),
                        productTotal = $(this).parent('.countable').next('.remove-price').children('.price').children('.productTotal'),
                        thisPrice = $('.finalQuantityEditPrice').val(),
                        quantity = parseInt(quantityField.text());
                    if (inst === 'in') {
                        quantity++
                        quantityField.text(quantity);
                        $('.productPriceShow').text(quantity * thisPrice);
                        quantityInputField.val(quantity);
                        cartQuantityUpdate(quantity, quantityId.val(), productTotal);
                    } else if (inst === 'de') {
                        if (quantity > 1) {
                            quantity--
                            quantityField.text(quantity);
                            $('.productPriceShow').text(quantity * thisPrice);
                            quantityInputField.val(quantity);
                            cartQuantityUpdate(quantity, quantityId.val(), productTotal);
                        } else {
                            alert('Minimum quantity')
                        }
                    }
                });

                // cart quantity upadate
                function cartQuantityUpdate(quantity, id, pTotal) {
                    axios.post('dis-update-item', {
                        id: id,
                        quantity: quantity
                    }).then(function (response) {
                        if (response.status === 200) {
                            $('#sub_total_').text(response.data.total);
                            $('#subTotal').val(response.data.total);
                            $.each(response.data.all, function (i, item) {
                                if (item.id === id) {
                                    pTotal.text(item.quantity * item.price);
                                }
                            });
                        }
                    }).catch(function (error) {

                    })
                }

                // question
                $('#addQuestion').click(function () {
                    $('#questionModal').modal('show');
                });
                $('.questionModalClose').click(function () {
                    $('#questionModal').modal('hide');
                });

                $("#imageGallerySlide").owlCarousel({
                    loop: true,
                    items: 4,
                    margin: 3,
                    dots: false,
                });
                var owl = $('#imageGallerySlide');
                owl.owlCarousel();
                $('#carousel_next_item').click(function () {
                    owl.trigger('next.owl.carousel');
                })
                $('#carousel_prev_item').click(function () {
                    owl.trigger('prev.owl.carousel', [300]);
                })
                $('.bookImage').on('click', function () {
                    let image = $(this).data('image');
                    $('#product_image_show').attr('src', '{{asset('storage/product')}}/' + image);
                    $('#zoom_product_image').css('background-image', 'url({{asset('storage/product/')}})/' + image);
                });

                $('.ansButton').click(function () {
                    $('#answerModal').modal('show');
                    let questionId = $(this).data('id');
                    $('#questionId').val(questionId);
                });
                $('.ansModalClose').click(function () {
                    $('#answerModal').modal('hide');
                });

                $('.qnaAnsReactYesNo').click(function () {
                   let answerId = $(this).data('id'),
                   react = $(this).children('input').val();
                    axios.post('question_ans_react', {
                        id: answerId,
                        react: react
                    }).then(function (response) {
                        if (response.status === 200) {
                          alert('ok');
                        }
                    }).catch(function (error) {

                    })
                });
            </script>
    @endpush
