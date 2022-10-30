@extends('layouts.backend.app')
@section('title','Specification Edit')
@push('vendor_css')
    <!-- plugin css -->
    <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
@push('page_css')
    <style>
        #productModal {
            padding: 2px 10px;
            display: flex;
            align-items: center;
            min-height: 40px;
            max-height: 150px;
            flex-wrap: wrap;
            border: 1px solid rgba(0, 0, 0, 0.16);
            border-radius: 5px
        }

        #productModal:focus {
            border: 1px solid #5369f8;
        }

        #productModal .item .fa-circle-xmark {
            color: rgba(255, 255, 255, 0.37);
            margin-left: 5px;
        }

        #productModal .item .fa-circle-xmark:hover {
            color: #fff;
        }

        #productModal .item {
            height: auto;
            border-radius: 5px;
            color: rgba(255, 255, 255, 0.78);
            margin: 5px;
            padding: 2px 10px;
            background-color: rgba(0, 0, 0, 0.51);
        }

        #productName {
            max-width: 100%;
            height: 100%;
            border: none
        }
    </style>
@endpush
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Specification</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Specification</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">
                            <a class="btn btn-info btn-xs float-right" href="{{ route('admin.specification.index')}}">Specification</a>
                        </h4>
                        <p class="sub-header">
                        </p>
                        <!--  Disorder update -->
                        <form action="{{ route('admin.specification.update',1) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <input type="hidden" value="{{$spe[0]->id}}" name="id">
                            <div class="row">
                                <div class="col-md-12">
                                    @php
                                        $products = getProduct('all');
                                        $existProduct = getProductById($spe[0]->product_id);
                                    @endphp
                                    <input type="hidden" value="" name="products" id="disProducts">
                                    <label for="product">Select Product </label>
                                    <div class="dropdown">
                                        <div data-toggle="dropdown" id="productModal"
                                             aria-haspopup="true" aria-expanded="false">
                                            <div class='item' id='{{$existProduct[0]->id}}'>
                                                {{$existProduct[0]->product_name}}
                                                <i class='fa-regular fa-circle-xmark product-cancel'
                                                   data-id='product{{$existProduct[0]->id}}'></i>
                                            </div>
                                            <input type="text" type="button"
                                                   id="productName"
                                                   placeholder="--select product--"
                                                   autocomplete="off">
                                        </div>
                                        <div class="dropdown-menu" style="width: 100%;"
                                             aria-labelledby="dropdownMenuButton" id="productList">
                                            @foreach($products as $product)
                                                <div class="form-check">
                                                    <div class="selectList"
                                                         data-id="{{ $product->product_name }}">
                                                        <input class="form-check-input"
                                                               style="margin: 5px"
                                                               type="checkbox"
                                                               value="{{$product->id}}"
                                                               {{$spe[0]->product_id==$product->id?'checked':''}}
                                                               id="product{{$product->id}}"
                                                               data-name="{{ $product->product_name }}">
                                                        <label class="form-check-label"
                                                               style="margin-left: 25px"
                                                               for="product{{$product->id}}">
                                                            {{ $product->product_name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-12">
                                    <label for="composition">Product specification </label>
                                    <textarea name="composition" id="composition" cols="30" rows="3"
                                              class="form-control">{{$spe[0]->specification}}</textarea>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" data-dismiss="modal"
                                        class=" btn btn-secondary waves-effect">Cancel
                                </button>
                                <button type="submit"
                                        class="btn btn-primary waves-effect waves-light mr-1 pull-right">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    </div>
    <!-- container-fluid -->
@endsection
@push('vendor_js')
    <!-- datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js')}}"></script>
    <!-- summernote init -->
    <script src="{{ asset('backend/assets/js/summernote-lite.min.js')}}"></script>

    {{--    axois--}}
    <script src="{{asset('backend/assets/js/axios.min.js')}}"></script>
@endpush
@push('page_js')
    <script>
        // summbernote
        $('#composition').summernote({
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $(".form-check-input").change(function () {
            if ($(this).is(':checked')) {
                let oldVal = $('#productModal').html();
                // $("#productModal").attr('data-toggle', '')
                $('#productModal').html("" +
                    "<div class='item' id='" + $(this).val() + "'>" +
                    $(this).data('name') + "<i class='fa-regular fa-circle-xmark product-cancel' data-id='" + $(this).attr('id') + "'></i>" +
                    " </div>" + "  " + oldVal);

                $(".product-cancel").click(function () {
                    alert('ok')
                    $("#" + $(this).data('id')).prop("checked", false);
                    $(this).parent(".item").css('display', 'none');
                });
                $("#disProducts").val($(this).val());
            }
        });
        $(".product-cancel").click(function () {
            $("#" + $(this).data('id')).prop("checked", false);
            $(this).parent(".item").css('display', 'none');
        });
        $('#productModal #productName').keyup(function () {
            let input = $(this).val().toUpperCase();
            let list = $('.selectList');
            for (var i = 0; i < list.length; i++) {
                let txtValue = list[i].innerText;
                if (txtValue.toUpperCase().indexOf(input) > -1) {
                    list[i].style.display = "";
                } else {
                    list[i].style.display = "none";
                }
            }
        })

        $(document).ready(function () {
            let productCkField = document.querySelectorAll('.form-check-input');
            for (var i = 0; i < productCkField.length; i++) {
                if (productCkField[i].checked === true) {
                    $("#disProducts").val(productCkField[i].value);
                }
            }
        })
    </script>
@endpush
