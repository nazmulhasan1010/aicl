@extends('layouts.app')
@section('title','Crops Item')
@push('vendor_css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/item.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/singleProduct.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/style.css')}}">
@endpush
@push('page_css')

@endpush
@section('content')
@php
    echo $product;
@endphp
    <div class="container-fluid">

        <!-- header section-->
        <div class="row">
            <div class="col-12 bg-primary" style="height: 40px;">

            </div>
        </div>
        <!--Navbar section -->

        <br/>
        <!-- slider and details part -->
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <!-- single product slider -->

                <div class="pdp-image-gallery-block">
                    <!-- Gallery -->
                    <div class="gallery_pdp_container">
                        <div id="gallery_pdp">
                            <img class="img-responsive" style="width:100px ;" src="img/viewpro1.webp" data-zoom-image="" />

                        </div>
                        <!-- Up and down button for vertical carousel -->
                        <a href="#" id="ui-carousel-next" style="display: inline;"></a>
                        <a href="#" id="ui-carousel-prev" style="display: inline;"></a>
                    </div>
                    <br><br>
                    <!-- Gallery -->

                    <!-- gallery Viewer -->
                    <div class="gallery-viewer">
                        <img class="img-responsive" style="width:300px ;margin-left: 50px;" src="img/viewpro1.webp" data-zoom-image="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-md-12 rightmenu">
                <div class="card p-3" style="width: auto;">
                    <div class="card-body">
                        <h4 class="card-title">মিক্সট</h4>
                        <h6><a href="#">Aicl</a></h6>
                        <p class="card-text">Bensulfuron Methyl-4% + Acetachlor- 14%</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>
                            <span style="font-size:24px; font-weight:bold">100 gm - ৳ 100.00</span>

                        </p>

                        <div class="card" id="emi">
                            <div class="card-body emi"><i class="fa-solid fa-calendar-week"></i>
                                <span>এ্যাথারটন ইমব্রোস কোম্পানী লিমিটেড হল মাতৃ সংস্থা বাংলাদেশ এগ্রিকালচারাল ইন্ডাস্ট্রিজ এর একটি সিস্টার কনসার্ন, যা কৃষকদের বিশেষত কীটনাশক ও সারের সম্পূর্ণ সমাধান দেওয়ার লক্ষ্যে ১৯৯৪ সালে প্রতিষ্ঠিত হয়েছিল।</span>

                            </div>
                        </div>
                        <div id="delivery">
                            <h6 style="font-size:12px; margin-top:10px">*Excludes Quebec / <a href="#">Terms and Conditions</a> apply</h6>
                            <hr>
                            <h5><i class="fa-solid fa-arrow-up-from-bracket"></i> PiKup</h5>
                            <h6>Pick up today if ordered within 10 hours (free)</h6>
                            <h5><i class="fa-solid fa-truck-pickup"></i> Delivery</h5>
                            <h6>Get it by Thu Jun 30 (free shipping)</h6>
                        </div>

                        <hr>
                        <h6>Quantity:</h6>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="buton1">-</button>
                            <h5> 1 </h5>
                            <button type="button" class="buton2">+</button>
                            <button type="button" class="buton3">Add to Card</button>
                        </div>

                        <br/>
                        <div id="ot-info">
                            <br/>
                            <br/>
                            <br/>
                            <h6><i class="fa-solid fa-bahai"></i> Sold & shipped by<img src="img/smLogo.png" style="height: 30px;"> </h6>
                            <hr>
                            <h6><i class="fa-solid fa-arrow-rotate-left"></i>
                                <a style="color: #000; " href=" # ">
                                    Free returns</a>
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><h4>Description</h4>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">MSI Optix G24C4 1920 x 1080 FHD 24" 144Hz HDMI, DisplayPort FreeSync Curve Gaming Monitor Curved Gaming display (1500R) – The best gameplay immersion. 144Hz Refresh Rate – Even smoother gaming experience than other gaming monitors
                                in the industry. 1ms Fast Response Time – Eliminate screen tearing and choppy frame rates with 1ms response time. Wide Color Gamut – Game colors and details will look more realistic and refined, to push game immersion to
                                its limits. AMD FreeSync Premium Technology - Tear free, stutter free, fluid gaming. Anti-Flicker and Less Blue Light – Game even longer and prevent eye strain and fatigue. Frameless design – Ultimate gameplay experience.
                                178° wide view angle – Share your gaming journey with close ones around you..</div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <h4>Frequently bought together</h4>
                <div class="row">
                    <div class="col-5">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 mt-5">
                        <h1>+</h1>
                    </div>
                    <div class="col-5">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 mt-5">
                        <h1>=</h1>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <h4>Subtotal =$325.97</h4>
                    <button class="buton3" type="button">Add to Cart</button>
                </div>
                <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <h4>Return policy</h4>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>If you buy something online but it's not everything you dreamed it to be, no worries! We're here for you.</p>
                                <span>You can return this item within <strong>45 days </strong>from the day you receive your online order.</span>
                                <label>There are two easy ways to return this item:</label>
                                <ul>
                                    <li>Return this item to a Walmart store</li>
                                    <li>Return this item by mail</li>
                                </ul>
                                <br/>
                                <p>
                                    <a href="#" style="color:#000;" class="">Learn more </a><i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-4">You may also like</h4>
                <div class="row my-5 item-scroll g-4 owl-carousel owl-theme">
                    <!-- 1st item-->
                    <div class="col product-item  mx-auto">
                        <div class="product-info p-3">
                            <div class="img-size overflow-hidden">
                                <img src="img/freeze.webp" alt="" class="img-fluid">
                            </div>

                            <a href="#" class="d-block text-dark text-decoration-none py-2 product-name"><span>এ্যাথারটন ইমব্রোস কোম্পানী লিমিটেড হল মাতৃ সংস্থা বাংলাদেশ এগ্রিকালচারাল ইন্ডাস্ট্রিজ.</span></a>
                            <div class="rating d-flex mt-1">
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <p>100 gm</p>
                            <h5 class="product-price">৳ 100.00</h5>

                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>
                    <!-- 2nd product-->
                    <div class="col product-item  mx-auto">
                        <div class="product-info p-3">
                            <div class="img-size overflow-hidden">
                                <img src="img/aroma.webp" alt="" class="img-fluid">
                            </div>

                            <a href="#" class="d-block text-dark text-decoration-none py-2 product-name"><span>এ্যাথারটন ইমব্রোস কোম্পানী লিমিটেড হল মাতৃ সংস্থা বাংলাদেশ এগ্রিকালচারাল ইন্ডাস্ট্রিজ</span></a>
                            <div class="rating d-flex mt-1">
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <p>25 gm</p>
                            <h5 class="product-price">৳ 100.00</h5>

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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <h5 class="product-price">$400.50</h5>
                            <p>Almost sold out</p>
                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>

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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <h4>Specifications</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <h4>Find in-store</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>We always try our best to show you the most accurate in-store availability. However, it may vary slightly as a fellow shopper could currently have this item in their cart.</p>

                                <table class="table">
                                    <tbody class="fw-bold justify-content-between">
                                    <tr>
                                        <td scope="row">Where can you get it?</td>
                                        <td>Is it available?</td>
                                        <td>What is the price in-store?</td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Heartland Supercentre Matheson Blvd & Mavis Rd 0.2 km from your location</td>
                                        <td class="text-success">In stock</td>
                                        <td>$199.98 <br/> <del>$249.98</del>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Square One Supercentre Highway 10 & Highway 403 4.7 km from your location</td>
                                        <td colspan="2">Out of stock</td>

                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <h4>Ratings & reviews</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div class="row p-3 mt-3 border-bottom" style="background-color:#F0f0f0 ;">
                                    <div class="col-6 rStar">

                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star text-li"></span>
                                        <span>4.2</span>
                                        <span>  | </span>
                                        <span><a href="#"> 37 Reviews</a></span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <img class="img-fluid " style="height: 25px;" src="img/trustmark_en.png ">
                                    </div>
                                </div>
                                <div class="row border-bottom" style="background-color:#F0f0f0 ;">
                                    <div class="col-6 pt-2">
                                        <form class="d-flex" role="search">
                                            <input class=" r-sr " type="search" placeholder="Search topics and review" aria-label="Search">
                                            <button class="sbtn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </form>
                                    </div>
                                    <div class="col-2 pt-2 text-center">
                                        <h6 class="reviw-h6">37</h6>
                                        <span style="font-size: 12px;"><a href="#">Reviews</a></span>
                                    </div>
                                    <div class="col-2 pt-2 text-center" style="border-left: 1px solid #bdbdbd; border-right: 1px solid #bdbdbd">
                                        <h6 class="reviw-h6">0</h6>
                                        <span style="font-size: 12px;"><a href="#">Questions</a></span>
                                    </div>
                                    <div class="col-2 pt-2 text-center">
                                        <h6 class="reviw-h6">0</h6>
                                        <span style="font-size: 12px;"><a href="#">Answers</a></span>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-6 text-start">
                                        <h6>Reviews</h6>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="revBtn" type="button">Write a review</button>
                                    </div>
                                </div>

                                <div class="row mt-4 p-3">
                                    <div class="col-6 text-start">
                                        <label class="revTs">Rating Snapshot</label>
                                        <p style="font-size:12px; margin-top: 5px;">Select a row below to filter reviews.</p>

                                        <!-- review raiting -->
                                        <div class="row">
                                            <div class="col-2 strf text-end">5 <span class="fa fa-star "></span></div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file" value="74" max="100"> 74% </progress>
                                            </div>
                                            <div class="col-2 strf">26</div>
                                        </div>
                                        <!--    2nd progress bar -->

                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">4 <span class="fa fa-star "></span></div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file" value="20" max="100"> 20% </progress>
                                            </div>
                                            <div class="col-2 strf">18</div>
                                        </div>
                                        <!--    3nd progress bar -->
                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">3 <span class="fa fa-star "></span></div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file" value="15" max="100"> 15% </progress>
                                            </div>
                                            <div class="col-2 strf">14</div>
                                        </div>
                                        <!--    4nd progress bar -->
                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">2 <span class="fa fa-star "></span></div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file" value="12" max="100"> 12% </progress>
                                            </div>
                                            <div class="col-2 strf">11</div>
                                        </div>
                                        <!--    5nd progress bar -->
                                        <div class="row mt-2">
                                            <div class="col-2 strf text-end">1 <span class="fa fa-star "></span></div>
                                            <div class="col-8 text-start">
                                                <progress class="progress" id="file" value="5" max="100"> 5% </progress>
                                            </div>
                                            <div class="col-2 strf">5</div>
                                        </div>

                                    </div>
                                    <div class="col-6 text-start">
                                        <label class="revTs">Average Customer Ratings</label>
                                        <br/><br>
                                        <span style="font-size:12px; margin-right: 20px;">Overall</span>
                                        <span class="fa fa-star act"></span>
                                        <span class="fa fa-star act"></span>
                                        <span class="fa fa-star act"></span>
                                        <span class="fa fa-star act"></span>
                                        <span class="fa fa-star "></span>
                                    </div>
                                </div>

                                <div class="row" style="background-color:#f0f0f0 ; font-size: 14px; padding:5px;">
                                    <div class="col text-start">
                                        <span>1–6 of 38 Reviews </span>
                                    </div>
                                    <div class="col text-end">
                                        <span>Sort by:</span>
                                        <div class="btn-group most">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                <h4>Questions & answers</h4>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                <strong>Questions</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <p>Sponsored</p>
                <h4>Items you may be interested in</h4>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
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
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span>
                                    <i class = "fa fa-star"></i>
                                </span>
                                <span> (23)</span>
                            </div>
                            <h5 class="product-price">$400.50</h5>
                            <p>Almost sold out</p>
                            <button class="atc justify-content-center" type="button"> Add to cart</button>
                        </div>

                    </div>

                </div>

                <!--   -->

            </div>
            <!--Right side section-->
            <div class="col-lg-5 col-sm-12 col-md-12 rightmenu2" id="rightmenu2">
                <div class="card p-3" style="width: auto;">
                    <div class="card-body">
                        <h4 class="card-title">মিক্সট</h4>
                        <h6><a href="#">Aicl</a></h6>
                        <p class="card-text">Bensulfuron Methyl-4% + Acetachlor- 14%</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <p>
                            <span style="font-size:24px; font-weight:bold">100 gm - ৳ 100.00</span>

                        </p>

                        <hr>
                        <h6>Quantity:</h6>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="buton1">-</button>
                            <h5> 1 </h5>
                            <button type="button" class="buton2">+</button>
                            <button type="button" class="buton3 ">Add to Card</button>
                        </div>

                        <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light buttom-btn">
            <div class="col bott">
                <button type="button" class="buton4">Add to Card</button>
            </div>
        </div>

    </div>
@endsection
@push('vendor_js')
    <script src="{{asset('frontend/assets/crops/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    {{--    axois--}}
    <script src="{{asset('backend/assets/js/axios.min.js')}}"></script>
@endpush
@push('page_js')
    <script>

    </script>
@endpush
