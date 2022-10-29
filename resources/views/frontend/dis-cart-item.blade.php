@extends('layouts.app')
@section('title','Shopping Cart')
@push('vendor_css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a7bedc40f.js" crossorigin="anonymous"></script>
    {{--    <link rel="stylesheet" href="{{asset('frontend/assets/crops/item.css')}}">--}}
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/singleProduct.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/crops/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/owl/owl.theme.default.css')}}">
    @push('page_css')
        <style>
            .cartItem {
                padding: 10px 0;
                border-top: 1px solid rgba(51, 51, 51, 0.20);
            }

            .cartItem:nth-last-child(1) {
                border-bottom: 1px solid rgba(51, 51, 51, 0.20);
            }

            #payment-method .col-md-6 img {
                width: 100%;
            }

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
                    top: 40px;
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
        </style>
    @endpush
    @section('content')
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-8">
                    <h4>@lang('messages.Shopping-cart')</h4>
                    @if ($cart_items->count() != NULL)
                        @foreach ($cart_items as $key=>$item)
                            @php
                                $product = getProductById($item->conditions);
                            @endphp
                            @if(count($product)>0)
                                <div class="d-flex align-items-center justify-content-between cartItem">
                                    <img src="{{asset('storage/product/'.$product[0]->image)}}"
                                         alt="" style="height: 90px">
                                    <div class="name-composition" style="width: 50%">
                                        <h4><strong>
                                                @php
                                                    if (Session::get('locale')==='bn'){
                                                        echo $product[0]->product_name_bn;
                                                    }else{
                                                        echo $product[0]->product_name;
                                                    }
                                                @endphp
                                            </strong></h4>
                                        <h5>{{$product[0]->composition}}</h5>
                                    </div>
                                    <div class="countable " style="display: flex; margin: 5px 0">
                                        <button type="button" class="buton1 QuantityInDe" data-inst="de">-</button>
                                        <h5 class="quantity">{{$item->quantity}}  </h5>
                                        <button type="button" class="buton2 QuantityInDe" data-inst="in">+</button>
                                        <input type="hidden" class="finalQuantityEdit" value="">
                                        <input type="hidden" class="finalQuantityEditId" value="{{$item->id}}">
                                    </div>
                                    <div class="remove-price d-flex " style="flex-direction:column;
                                    justify-content:space-between; height: 90px">
                                        <div class="price"><span
                                                class="productTotal">{{ number_format($item->quantity * $item->price,2)}}</span>BDT
                                        </div>
                                        <a href="{{ route('remove-item',$item->id)}}">Remove</a>
                                    </div>
                                </div>
                            @endif

                        @endforeach
                    @endif
                    <h4 class="mt-4">You may also like</h4>
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
                                            <img src="{{asset('storage/product/'.$smProduct->image)}}"
                                                 style=" width: 100%"
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
                                                <input type="hidden" name="product_id"
                                                       value="{{$smProduct->product_id  }}">
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
                </div>
                <div class="col-md-4">
                    <div class="total-modal"
                         style="border:1px solid rgba(51, 51, 51, 0.20); padding:  10px; border-radius:10px">
                        @if ($cart_items->count() != NULL)
                            @php
                                $product = getProductById($item->conditions);
                            @endphp
                            <div class="pricing d-flex">
                                <div class="price-title d-flex justify-content-between " style="width: 100%">
                                    <div class="title" style="width: auto">@lang('messages.Sub-total')</div>
                                    <div style=" text-align: right; float: right">
                                        <strong style="">@lang('messages.Tk')
                                            <span id="sub_total_">
                                                {{number_format(\Cart::getTotal(),2) }}
                                            </span>
                                            <input id="subTotal" type="hidden" value="{{Cart::getTotal()}}">
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing d-flex">
                                <div class="price-title d-flex justify-content-between " style="width: 100%">
                                    <div class="title" style="width: auto">Discount</div>
                                    <div style="float: right;  text-align: right;">
                                        <strong><span id="discount">0</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing d-flex">
                                <div class="price-title d-flex justify-content-between " style="width: 100%">
                                    <div class="title" style="width: auto">Sub total after discount</div>
                                    <div style="float: right; text-align: right;">
                                        <strong><span
                                                id="finalTotal"></span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing d-flex">
                                <div class="price-title d-flex justify-content-between " style="width: 100%">
                                    <div class="title" style="width: auto">Delivery Charge</div>
                                    <div style="float: right; text-align: right;">
                                        <strong><span
                                                id="delivertCharge">FREE</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing d-flex"
                                 style=" border-top: 1px solid rgba(51,51,51,0.3); margin-top: 10px">
                                <div class="price-title d-flex justify-content-between " style="width: 100%">
                                    <div class="title" style="width: auto">
                                        <strong>@lang('messages.Grand-total')</strong></div>
                                    <div style="float: right; text-align: right;">
                                        <strong>@lang('messages.Tk')<span
                                                id="EstimatedTotal">{{number_format(\Cart::getTotal(),2) }}</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-2">
                                <a class="btn btn-primary" style="width: 100%; border-radius:20px"
                                   href="{{ route('user-check')}}" id="cart_item_btn"
                                   class="btn btn-info">@lang('messages.Order-now')</a>
                            </div>
                            <div class="d-flex justify-content-center flex-md-column mt-2">
                                <h5 class="p-2 m-3" style="border-bottom: 1px solid rgba(51,51,51,0.3)"><strong>Accept
                                        payment method</strong></h5>
                                <div class="row" id="payment-method">
                                    <div class="col-md-6">
                                        <img src="{{asset('frontend/assets/images/payments/bkash-seeklogo.com.png')}}"
                                             alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img
                                            src="{{asset('frontend/assets/images/payments/dutch-bangla-rocket-seeklogo.com.png')}}"
                                            alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('frontend/assets/images/payments/master-card.png')}}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('frontend/assets/images/payments/upay-seeklogo.com.png')}}"
                                             alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('frontend/assets/images/payments/nagad-seeklogo.com.png')}}"
                                             alt="">
                                    </div>
                                </div>
                            </div>

                        @endif
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

        {{--    axois--}}
        <script src="{{asset('backend/assets/js/axios.min.js')}}"></script>
    @endpush
    @push('page_js')
        <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
        <script>
            @if (\Session::has('success'))
            showModalCart('show')
            @endif

            function showModalCart(sta) {
                $('#cartModal').modal(sta);
            }

            $("#cartModalClose").on('click', function () {
                $('#cartModal').modal('hide');
            });

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
                    quantityField = $(this).parent('.countable').children('.quantity'),
                    quantityInputField = $(this).parent('.countable').children('.finalQuantityEdit'),
                    quantityId = $(this).parent('.countable').children('.finalQuantityEditId'),
                    productTotal = $(this).parent('.countable').next('.remove-price').children('.price').children('.productTotal'),
                    quantity = parseInt(quantityField.text());
                if (inst === 'in') {
                    quantity++
                    quantityField.text(quantity);
                    quantityInputField.val(quantity);
                    cartQuantityUpdate(quantity, quantityId.val(), productTotal);
                } else if (inst === 'de') {
                    if (quantity > 1) {
                        quantity--
                        quantityField.text(quantity);
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
                        totalPrice();
                    }
                }).catch(function (error) {

                })
            }

            totalPrice();

            function totalPrice() {
                let subTotal = $('#subTotal').val(),
                    replace = subTotal.replace(/\,/g, '');
                discount = parseInt($('#discount').text()),
                    finalTotal = $('#finalTotal');
                finalTotal.text(replace - discount)

            }

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

            var navbar = document.getElementById("addCartModal");
            var sticky = navbar.offsetBottom;
            window.onscroll = function () {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            };
        </script>
    @endpush
