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
        <div class="row item-main-row">
            <div class="col-12 ">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Product Name</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
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
                    @foreach($disorder as $disorders)
                        <div class="product">
{{--                            <div class="offer">offer show</div>--}}
                            <div class="img-product">
                                <img class="product-img" src="{{asset('storage/disorder/'.$disorders->image)}}" class="img-fluid">
                            </div>
                            <div class="info-div">
                                <label for="check" class="details">
                                    <h5>{{$disorders->disorder_name}}</h5>
                                    <strong>Symptoms: </strong><span>{{$disorders->symptoms}}</span>
                                </label>
                            </div>

                            <div class="rating d-flex mt-1">
                                <span><strong>Product:</strong>Macrofert 20:20:20 5gm/lit</span>
                            </div>
                            <button type="button" class="mt-3 btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" type="button">Details
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
@push('vendor_js')
    <!-- javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@endpush
@push('page_js')

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
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
