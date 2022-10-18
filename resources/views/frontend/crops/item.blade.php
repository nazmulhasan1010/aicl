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
    <div class="container-fluid">
        <div class="row item-main-row">
            <div class="col-12 ">
                <div class="row g-5 prod-list-div">
                    @foreach($disorder as $disorders)
                        <div class="product">
                            {{--                            <div class="offer">offer show</div>--}}
                            <div class="img-product">
                                <img class="product-img" src="{{asset('storage/disorder/'.$disorders->image)}}"
                                     class="img-fluid">
                            </div>
                            <div class="info-div">
                                <label for="check" class="details">
                                    <h5>{{$disorders->disorder_name}}</h5>
                                    <strong><u>Symptoms</u></strong><span> : {{$disorders->symptoms}}</span>
                                </label>
                            </div>

                            <div class="rating d-flex mt-1">
                                @php
                                    $disProduct = getDisProduct('disId',$disorders->disorder_id);
                                    $productItem = count($disProduct)-1;
                                     $products = getProductById($disProduct[1]->product_id);
                                @endphp
                                <span><strong><u>Product</u></strong> : {{$products[0]->product_name.' / '.$productItem}}more..</span>
                            </div>
                            <button type="button" class="mt-3 btn-danger modalShow"
                                    data-pid="{{$disorders->disorder_id}}" data-session="{{Session::get('locale')}}">
                                Details
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="disorderShow" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Descriptions</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col prod-img">
                            <img id="modalDisImage" src="" alt="img-loading">
                        </div>
                        <div class="col-12 description">
                            <h5 id="modalDisName"></h5>
                            <strong>Symptoms:</strong><span id="modalSymptoms"></span><br>
                            <strong>Affect:</strong><span class="mb-1" id="modalAffect"></span>
                            <p>Solution</p>
                            <strong>Product:</strong><span id="modalProduct"></span><br>
                            <strong>Soil/Drip:</strong><span id="modalSoil"></span>
                            <br>
                            <strong>Benefit: </strong><span
                                id="modalBenefit"></span>
                            <div class="detailBTN" id="detailBTN"></div>
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
@endpush
@push('page_js')

    <script>
        $('.modalShow').click(function () {
            let disId = $(this).data('pid');
            let session = $(this).data('session');

            if (disId) {
                axios.post('disorderDisId/' + disId).then(function (response) {
                    let data = response.data;
                    $('#modalDisImage').attr('src', '{{asset('storage/disorder')}}' + '/' + data[0].image);
                    if (session === 'bn') {
                        $('#modalDisName').html(data[0].disorder_name_bn);
                        $('#modalSymptoms').html(data[0].symptoms_bn);
                        $('#modalAffect').html(data[0].affect_bn);
                        // $('#modalProduct').html( data[0].);
                        $('#modalSoil').html(data[0].soil_drip_bn);
                        $('#modalBenefit').html(data[0].benefit_bn);
                    } else {
                        $('#modalDisName').html(data[0].disorder_name);
                        $('#modalSymptoms').html(data[0].symptoms);
                        $('#modalAffect').html(data[0].affect);
                        // $('#modalProduct').html( data[0].);
                        $('#modalSoil').html(data[0].soil_drip);
                        $('#modalBenefit').html(data[0].benefit);
                    }
                    axios.post('disorderProduct/' + disId).then(function (response) {
                        let products = response.data;
                        var lanName;
                        $.each(products, function (i, item) {
                            if (session === 'bn') {
                                 lanName = products[i].product[0].product_name_bn;
                            } else {
                                 lanName = products[i].product[0].product_name;
                            }
                            $('#modalProduct').html(lanName);
                            $('<a class="btn btn-primary modalProductLink" href="{{url('disorder/product')}}/'+products[i].product[0].id+'">').html(lanName).appendTo('#detailBTN');
                        });
                    }).catch(function (error) {
                        console.log(error);
                    });
                }).catch(function (error) {
                    console.log(error)
                })
                $('#disorderShow').modal('show');
            }
        });

    </script>
@endpush
