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
@endpush
@push('page_css')
    <style media="screen">
        figure.zoom {
            background-position: 50% 50%;
            position: relative;
            border: 5px solid white;
            box-shadow: -1px 5px 15px black;
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

    </style>
@endpush
@section('content')
    @php
        $review = getReview($product[0]->product_id);
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
                            <a href="">
                                <img class="img-responsive"
                                     src="{{asset('storage/product/'.$product[0]->image)}}" data-zoom-image=""
                                     alt="{{$product[0]->product_name}}"/>
                            </a>
                            <a href="">
                                <img class="img-responsive"
                                     src="{{asset('storage/product/'.$product[0]->image)}}" data-zoom-image=""
                                     alt="{{$product[0]->product_name}}"/>
                            </a>
                            <a href="">
                                <img class="img-responsive"
                                     src="{{asset('storage/product/'.$product[0]->image)}}" data-zoom-image=""
                                     alt="{{$product[0]->product_name}}"/>
                            </a>
                        </div>
                        <!-- Up and down button for vertical carousel -->
                        <a href="#" id="ui-carousel-next" style="display: inline;"></a>
                        <a href="#" id="ui-carousel-prev" style="display: inline;"></a>
                    </div>
                    <!-- gallery Viewer -->
                    <div class="gallery-viewer">
                        <figure class="zoom" onmousemove="zoom(event)"
                                style="background-image: url({{asset('storage/product/'.$product[0]->image)}})">
                            <img src="{{asset('storage/product/'.$product[0]->image)}}" alt=""/>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-md-12 rightmenu" id="addCartModal">
                <div class="card p-3" style="width: auto;">
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
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
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
                            <form action="{{ route('add-to-cart')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product[0]->product_id  }}">
                                <input type="hidden" name="price" value="{{ $product[0]->price}}">
                                <input type="hidden" name="size" value="{{$product[0]->size_name}}">
                                <input type="hidden" name="qty" value="1" class="productQuantity">
                                <button type="submit"
                                        class="buton3 addCartButton">@lang('messages.Add-to-cart')</button>
                            </form>
                        </div>

                        <br/>
                        <div id="ot-info">
                            <br/>
                            <h6><i class="fa-solid fa-bahai"></i> Sold & shipped by
                                <img src="img/smLogo.png" style="height: 30px;">
                            </h6>
                            <hr>
                            <h6><i class="fa-solid fa-arrow-rotate-left"></i>
                                <a style="color: #000; " href="#returnPolicy">
                                    Return policy</a>
                            </h6>
                            <hr>
                            <h6><i class="fa-solid fa-map-location-dot "></i><a href="# " style="color: #000; ">
                                    Available at nearby stores for $199.98</a></h6>
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
                                        $productDes = $product[0]->product_details;
                                    }else{
                                        $productDes = $product[0]->product_details_bn;
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
                <div class="row my-5 item-scroll g-4 owl-carousel owl-theme">
                    @php
                        $similar_product = getProductDetailsByCat($product[0]->category_id);
                    @endphp
                    @foreach($similar_product as $smProduct)
                        <div class="col product-item  mx-auto card">
                            <div class="product-info p-3">
                                <div class="img-size overflow-hidden">
                                    <img src="{{asset('storage/product/'.$smProduct->image)}}" alt=""
                                         class="img-fluid">
                                </div>
                                <a href="#"
                                   class="d-block text-dark text-decoration-none py-2 product-name"><span>
                                        @php
                                            if (Session::get('locale')==='bn'){
                                                echo $smProduct->product_name_bn;
                                            }else{
                                                echo $smProduct->product_name;
                                            }
                                        @endphp
                                    </span></a>
                                <p class="card-text">{{$smProduct->composition}}</p>
                                <div class="rating d-flex mt-1">
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                    <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                    <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                    <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                    <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                    <span> (23)</span>
                                </div>
                                <p>{{$smProduct->size_name}}</p>
                                <h5 class="product-price">{{$smProduct->price.' BDT'}}</h5>
                                <button class="atc justify-content-center"
                                        type="button"> @lang('messages.Add-to-cart')</button>
                            </div>

                        </div>
                    @endforeach
                </div>
                <h4>Top items in this department</h4>
                <div class="row my-5 item-scroll g-4 owl-carousel owl-theme">
                    <!-- 1st item-->
                    <div class="col product-item  mx-auto">
                        <div class="product-info p-3">
                            <div class="img-size overflow-hidden">
                                <img src="img/product4.jpeg" alt="" class="img-fluid">
                            </div>

                            <a href="#" class="d-block text-dark text-decoration-none py-2 product-name"><span>Laptop L410, Intel Pentium Silver N5030 Processor, 14” FHD Display,</span></a>
                            <div class="rating d-flex mt-1">
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>

                            <h5 class="product-price">$230.50</h5>
                            <p>Almost sold out</p>
                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>
                    <!-- 2nd product-->
                    <div class="col product-item  mx-auto">
                        <div class="product-info p-3">
                            <div class="img-size overflow-hidden">
                                <img src="img/product2.jpeg" alt="" class="img-fluid">
                            </div>

                            <a href="#" class="d-block text-dark text-decoration-none py-2 product-name"><span>Laptop L410, Intel Pentium Silver N5030 Processor, 14” FHD Display,</span></a>
                            <div class="rating d-flex mt-1">
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <h5 class="product-price">$120.50</h5>
                            <p>Almost sold out</p>
                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>
                    <!-- 3rd item -->
                    <div class="col product-item  mx-auto">
                        <div class="product-info p-3">
                            <div class="img-size overflow-hidden">
                                <img src="img/product1.jpeg" alt="" class="img-fluid">
                            </div>

                            <a href="#" class="d-block text-dark text-decoration-none py-2 product-name"><span>Laptop L410, Intel Pentium Silver N5030 Processor, 14” FHD Display,</span></a>
                            <div class="rating d-flex mt-1">
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <h5 class="product-price">$350.50</h5>
                            <p>Almost sold out</p>
                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>
                    <!--4th item-->
                    <div class="col product-item  mx-auto">
                        <div class="product-info p-3">
                            <div class="img-size overflow-hidden">
                                <img src="img/product4.jpeg" alt="" class="img-fluid">
                            </div>

                            <a href="#" class="d-block text-dark text-decoration-none py-2 product-name"><span>Laptop L410, Intel Pentium Silver N5030 Processor, 14” FHD Display,</span></a>
                            <div class="rating d-flex mt-1">
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <h5 class="product-price">$205.50</h5>
                            <p>Almost sold out</p>
                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>
                    <!-- 5th item-->
                    <div class="col product-item  mx-auto">
                        <div class="product-info p-3">
                            <div class="img-size overflow-hidden">
                                <img src="img/product5.jpeg" alt="" class="img-fluid">
                            </div>

                            <a href="#" class="d-block text-dark text-decoration-none py-2 product-name"><span>Laptop L410, Intel Pentium Silver N5030 Processor, 14” FHD Display,</span></a>
                            <div class="rating d-flex mt-1">
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <h5 class="product-price">$400.50</h5>
                            <p>Almost sold out</p>
                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>

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
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">Assembled Depth (in.)</th>
                                        <td>16.89 in</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Assembled Length (in.)</th>
                                        <td>21.13 in</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Product Type</th>
                                        <td colspan="2">Monitor, LED VA Monitor</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                <h4>Find in-store</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>We always try our best to show you the most accurate in-store availability.
                                    However,
                                    it may vary slightly as a fellow shopper could currently have this item in
                                    their
                                    cart.</p>

                                <table class="table">
                                    <tbody class="fw-bold justify-content-between">
                                    <tr>
                                        <td scope="row">Where can you get it?</td>
                                        <td>Is it available?</td>
                                        <td>What is the price in-store?</td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Heartland Supercentre Matheson Blvd & Mavis Rd 0.2 km
                                            from your
                                            location
                                        </td>
                                        <td class="text-success">In stock</td>
                                        <td>$199.98 <br/>
                                            <del>$249.98</del>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Square One Supercentre Highway 10 & Highway 403 4.7 km
                                            from your
                                            location
                                        </td>
                                        <td colspan="2">Out of stock</td>

                                    </tr>
                                    </tbody>
                                </table>

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
                                    $rating = round($review['ratings']/$totalRating,1);
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
                                        <span style="font-size: 12px;"><a href="#">Reviews</a></span>
                                    </div>
                                    <div class="col-4 pt-2 text-center"
                                         style="border-left: 1px solid #bdbdbd; border-right: 1px solid #bdbdbd">
                                        <h6 class="reviw-h6">{{$totalRating}}</h6>
                                        <span style="font-size: 12px;"><a href="#">Questions</a></span>
                                    </div>
                                    <div class="col-4 pt-2 text-center">
                                        <h6 class="reviw-h6">0</h6>
                                        <span style="font-size: 12px;"><a href="#">Answers</a></span>
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
                                        <p style="font-size:12px; margin-top: 5px;">Select a row below to filter
                                            reviews.</p>

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
                                                          max="100"> 12%
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
                                        <span>1–6 of 38 Reviews </span>
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
                                                    <a href="#">Most Relevant</a>
                                                </li>
                                                <li>
                                                    <a href="#">Most Relevant</a>
                                                </li>
                                                <li>
                                                    <a href="#">Most Relevant</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                <h4>Questions & answers</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                             aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                <strong>Questions</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        </div>
        <div class="row bg-light buttom-btn">
            <div class="col bott">
                <a href="#addCartModal" type="button" class="buton4">Add to Cart</a>
            </div>
        </div>
        <!-- Modal -->
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
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                                            id="ratingsReviewsReq">0</span>/50
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
        </div>
    </div>
@endsection
@push('vendor_js')
    <!-- javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    {{--    axois--}}
    <script src="{{asset('backend/assets/js/axios.min.js')}}"></script>

    {{--    owl--}}
    <script src="{{asset('frontend/assets/crops/owl/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/assets/crops/js/main.js')}}"></script>
@endpush
@push('page_js')
    <script type="text/javascript">
        function zoom(e) {
            var zoomed = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX;
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX;
            x = offsetX / zoomed.offsetWidth * 100;
            y = offsetY / zoomed.offsetHeight * 100;
            console.log(zoomed.offsetWidth)
            zoomed.style.backgroundPosition = x + '% ' + y + '%';
        }

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
            } else if (inst === 'de') {
                if (quantity > 1) {
                    quantity--
                    quantityField.text(quantity);
                    quantityField_2.text(quantity);
                    $('.productQuantity').val(quantity)
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
            if (value.length >= 50) {
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
                    if (value1.length < 10 && value3.length > 50) {
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
                    if (value2.length < 50 && value3.length > 50) {
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
                if (value1.length < 10 && value2.length < 50 && value3.length > 50) {
                    $('#ratingSubmit').addClass('btn-primary').removeClass('disabled').removeClass('btn-secondary')
                }
            } else {
                $('#ratingSubmit').addClass('btn-secondary').addClass('disabled').removeClass('btn-primary')
            }
        });
    </script>
@endpush
