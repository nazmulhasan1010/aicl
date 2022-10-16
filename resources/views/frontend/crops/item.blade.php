@extends('layouts.app')
@section('title','Crops Item')
@push('vendor_css')
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/item.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/singleProduct.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/style.css')}}">
@endpush
@push('page_css')

@endpush
@section('content')
    <div class="container-fluid">
        <!-- header section-->
        <div class="row">
            <div class="col-12 bg-primary" style="height: 40px;">

            </div>
        </div>
        <!--Navbar section -->

        <div class="row mt-3 item-main-row">
            <div class="col-2 mt-1 cat-div">
                <div class="form-check checkBox">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label fs-6" for="flexCheckDefault">
                        Sold & Shipped by
                    </label>
                    <img src="img/smLogo.png" style="height: 16px;" alt="">
                </div>
                <div>
                    <button class="accordion">Category</button>
                    <div class="panel cat-ul">
                        <ul>
                            <li><a href="">category-1</a><span> (23)</span></li>
                            <li><a href="">category-2</a><span> (23)</span></li>
                            <li><a href="">category-3</a><span> (23)</span></li>
                            <li><a href="">category-4</a><span> (23)</span></li>
                            <li><a href="">category-5</a><span> (23)</span></li>
                        </ul>
                    </div>

                    <button class="accordion">Brand</button>
                    <div class="panel">
                        <form class="d-flex cat-search" role="search">
                            <input class="search1" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn-outline-success button1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Brand-1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Brand-2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Brand-3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Brand-4
                            </label>
                        </div>
                    </div>

                    <button class="accordion">Customer Rate</button>
                    <div class="panel">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label star" for="flexRadioDefault1">
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span> 5(122)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label star" for="flexRadioDefault1">
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span> 5(122)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label star" for="flexRadioDefault1">
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span> 5(122)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label star" for="flexRadioDefault1">
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span> 5(122)</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label star" for="flexRadioDefault1">
                                <span><i class="fa-solid fa-star atv"></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span><i class="fa-solid fa-star "></i></span>
                                <span> 5(122)</span>
                            </label>
                        </div>
                    </div>
                    <button class="accordion">Price</button>
                    <div class="panel justify-content-between">
                        <p>Set a custom price range:</p>
                        <input type="text" placeholder="Min" />
                        <br>
                        <br>
                        <input type="text" placeholder="Max" />
                        <br><br>
                        <button type="button" class="btn btn-outline-dark">Clear</button>
                        <button type="button" class="btn btn-primary">Apply</button>
                    </div>
                </div>
                <button class="accordion">Section 4</button>
                <div class="panel">

                </div>
            </div>

            <div class="col-10 mt-5">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Product Name</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row discrip-row">
                                    <div class="col prod-img">
                                        <img src="img/nito.jpg" alt="img-loading">
                                    </div>
                                    <div class="col-12 description">
                                        <h5>Nitrogen deficiency</h5>
                                        <span><strong>Symptoms:</strong>Leaf become uniformly light green or yellow colour.</span><br>
                                        <span class="mb-1"><strong>Affect:</strong>Leaf become uniformly light green or yellow colour.</span>
                                        <p>Solution</p>
                                        <span><strong>Product:</strong>Macrofert 20:20:20 5gm/lit</span><br>
                                        <span class=""><strong>Soil/Drip:</strong>Plantex 20:20:20 3kg/acre</span>
                                        <br>
                                        <span class=""><strong>Benefit: </strong>Ensures strong set and early grape growth</span>
                                        <div class="detailBTN">
                                            <a href="productDelails.html">Macrofert 20:20:20</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 prod-list-div">

                    <div class="product">

                        <div class="offer">offer show</div>
                        <div class="img-product">
                            <img class="product-img" src="img/nito.jpg" class="img-fluid">
                        </div>
                        <div class="info-div">

                            <label for="check" class="details">
                                <h5>Nitrogen deficiency</h5>
                                <strong>Symptoms:</strong>Leaf become uniformly light green or yellow colour.
                            </label>
                        </div>

                        <!-- <div class="sub-details">Premium Bedding Sheet Set</div> -->
                        <div class="rating d-flex mt-1">
                            <span><strong>Product:</strong>Macrofert 20:20:20 5gm/lit</span>

                        </div>

                        <button type="button" class="mt-3 btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Details</button>

                    </div>
                    <!-- 2nd product -->
                    <div class="product">

                        <div class="offer">offer show</div>
                        <div class="img-product">
                            <img class="product-img" src="img/phos-14.jpeg" class="img-fluid">
                        </div>
                        <div class="info-div">

                            <label for="check" class="details">
                                <h5>Phosphorous deficiency</h5>
                                <strong>Symptoms:</strong>Leaf margins and bottom of side of leaves will turn purple
                            </label>
                        </div>

                        <!-- <div class="sub-details">Premium Bedding Sheet Set</div> -->
                        <div class="rating d-flex mt-1">
                            <span><strong>Product:</strong>Fertimax 12:61:00 5gm/lit, Fertimax( 5-10gm/lit)</span>

                        </div>

                        <button type="button" class="mt-3 btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Details</button>

                    </div>



                    <div class="product">

                        <div class="offer">offer show</div>
                        <div class="img-product">
                            <img class="product-img" src="img/sul-14.jpeg" class="img-fluid">
                        </div>
                        <div class="info-div">

                            <label for="check" class="details">
                                <h5>
                                    Sulphur deficiency</h5>
                                <strong>Symptoms:</strong>Yellowing first Appear on the older leaves,followed by gradual discolouring of the entire leaf .
                            </label>
                        </div>

                        <!-- <div class="sub-details">Premium Bedding Sheet Set</div> -->
                        <div class="rating d-flex mt-1">
                            <span><strong>Product:</strong>Primasulf 3-4ml/lit, fertisol 5gm/lit</span>

                        </div>

                        <button type="button" class="mt-3 btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Details</button>

                    </div>

                </div>

                <div class="row cat-footer">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row footer2 " style="background:#1976d2;">
            <div class="col">
                <ul class="arrow2 d-flex justify-content-end">
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="#">Français</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="#">Terms of Use
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="#">Privacy Centre</a>
                    </li>
                    <li class="copyrigh">
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="#">Copyright © Walmart 2022</a>
                    </li>
                </ul>
            </div>

            <!-- responsib footer-->
        </div>
    </div>

@endsection
@push('vendor_js')

@endpush
@push('page_js')
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });

        }
    </script>
@endpush
