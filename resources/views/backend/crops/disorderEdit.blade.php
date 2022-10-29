@extends('layouts.backend.app')
@section('title','Category Edit')
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
        #productModalEdit {
            padding: 2px 10px;
            display: flex;
            align-items: center;
            min-height: 40px;
            max-height: 150px;
            flex-wrap: wrap;
            border: 1px solid rgba(0, 0, 0, 0.16);
            border-radius: 5px
        }

        #productModalEdit:focus {
            border: 1px solid #5369f8;
        }

        #productModalEdit .item .fa-circle-xmark {
            color: rgba(255, 255, 255, 0.37);
            margin-left: 5px;
        }

        #productModalEdit .item .fa-circle-xmark:hover {
            color: #fff;
        }

        #productModalEdit .item {
            height: auto;
            border-radius: 5px;
            color: rgba(255, 255, 255, 0.78);
            margin: 5px;
            padding: 2px 10px;
            background-color: rgba(0, 0, 0, 0.51);
        }

        #productNameEdit {
            max-width: 100%;
            height: 100%;
            border: none
        }
    </style>
@endpush
@section('content')
    <!-- Start Content-->
    @if($data)

        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb" class="float-right mt-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Disorder</li>
                        </ol>
                    </nav>
                    <h4 class="mb-1 mt-0">Disorder</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1"><a class="btn btn-info btn-xs float-right"
                                                                  href="{{ route('admin.disorder.index')}}">Disorder</a>
                            </h4>
                            <p class="sub-header">
                            </p>
                                <!--  Disorder update -->
                            <form action="{{ route('admin.disorder.update',$id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <input type="hidden" value="{{$data[0]->disorder_id}}" name="disorder_id">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="disorder_name_edit">Disorder Name <span
                                                    style="color: red">*</span></label>
                                            <input type="text" id="disorder_name_edit" name="disorder_name_edit"
                                                   class="form-control" placeholder="Disorder Name"
                                                   autocomplete="off" value="{{$data[0]->disorder_name}}" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="disorder_name_edit_bn">Disorder Name (Bangla) <span
                                                    style="color: red">*</span></label>
                                            <input type="text" id="disorder_name_edit_bn"
                                                   value="{{$data[0]->disorder_name_bn}}" name="disorder_name_edit_bn"
                                                   class="form-control" placeholder="Product Name (Bangla)"
                                                   autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        @php
                                            $crops = getCropsData('','','all');
                                        @endphp
                                        <label for="crops">Select crops</label>
                                        <select name="crops" id="crops"
                                                class="form-control">
                                            <option value="">--select crops--</option>
                                            @foreach ($crops as $crop)
                                                <option
                                                    value="{{ $crop->id}}" {{$crop->id == $data[0]->crops_id?'selected':''}}>{{ $crop->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        @php
                                            $product_group_edit = getProductCategory();
                                        @endphp
                                        <label for="product_group_edit">Select Product Group</label>
                                        <select name="product_group_edit" id="product_group_edit"
                                                class="form-control">
                                            <option value="">--select product group--</option>
                                            @foreach ($product_group_edit as $groups)
                                                <option
                                                    value="{{ $groups->id}}">{{ $groups->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        @php
                                            $products = getProduct('all');
                                            $existProducts = getProductWithDisId($data[0]->disorder_id);
                                        @endphp

                                        <input type="hidden" value="" name="products" value=""
                                               id="disProductsEdit">
                                        <label for="product">Select Product </label>
                                        <div class="dropdown">
                                            <div data-toggle="dropdown" id="productModalEdit"
                                                 aria-haspopup="true" aria-expanded="false">
                                                @foreach($existProducts as $existProduct)
                                                    <div class='item' id='{{$existProduct['product'][0]->id}}'>
                                                        {{$existProduct['product'][0]->product_name}}
                                                        <i class='fa-regular fa-circle-xmark product-cancel'
                                                           data-id='product{{$existProduct['product'][0]->id}}'></i>
                                                    </div>
                                                @endforeach

                                                <input type="text" type="button"
                                                       id="productNameEdit"
                                                       placeholder="--select product--"
                                                       autocomplete="off">
                                            </div>
                                            <div class="dropdown-menu" style="width: 100%;"
                                                 aria-labelledby="dropdownMenuButton" id="productListEdit">
                                                @foreach($products as $product)
                                                    <div class="form-check">
                                                        <div class="selectList"
                                                             data-id="{{ $product->product_name }}">
                                                            @php
                                                                $existance = getDisProduct($data[0]->disorder_id, $product->id);
                                                            @endphp
                                                            <input class="form-check-input"
                                                                   style="margin: 5px"
                                                                   type="checkbox"
                                                                   value="{{$product->id}}"
                                                                   id="product{{$product->id}}"
                                                                   {{count($existance)>0?'checked':''}}
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
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="symptoms">Symptoms<span
                                                style="color: red">*</span></label>
                                        <textarea name="symptoms" class="form-control" value="{{$data[0]->symptoms}}"
                                                  id="symptoms"
                                                  cols="30" rows="3">{{$data[0]->symptoms}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="symptoms_bn">Symptoms (Bangla)<span
                                                style="color: red">*</span></label>
                                        <textarea name="symptoms_bn" value="{{$data[0]->symptoms}}" class="form-control"
                                                  id="symptoms_bn"
                                                  cols="30" rows="3">{{$data[0]->symptoms_bn}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="affect">Affect<span style="color: red">*</span></label>
                                        <textarea name="affect" value="{{$data[0]->affect}}" class="form-control"
                                                  id="affect" cols="30"
                                                  rows="3">{{$data[0]->affect}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="affect_bn">Affect (Bangla)<span
                                                style="color: red">*</span></label>
                                        <textarea name="affect_bn" value="{{$data[0]->affect_bn}}" class="form-control"
                                                  id="affect_bn"
                                                  cols="30" rows="3">{{$data[0]->affect_bn}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="soil_drip">Soil/drip<span
                                                style="color: red">*</span></label>
                                        <textarea name="soil_drip" value="{{$data[0]->soil_drip}}" class="form-control"
                                                  id="soil_drip"
                                                  cols="30" rows="3">{{$data[0]->soil_drip}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="soil_drip_bn">Soil/drip (Bangla)<span
                                                style="color: red">*</span></label>
                                        <textarea name="soil_drip_bn" value="{{$data[0]->soil_drip_bn}}"
                                                  class="form-control" id="soil_drip_bn"
                                                  cols="30" rows="3">{{$data[0]->soil_drip_bn}}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="benefit">Benefit<span
                                                style="color: red">*</span></label>
                                        <textarea name="benefit" value="{{$data[0]->benefit}}" class="form-control"
                                                  id="benefit" cols="30"
                                                  rows="3">{{$data[0]->benefit}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="benefit_bn">Benefit (Bangla)<span
                                                style="color: red">*</span></label>
                                        <textarea name="benefit_bn" value="{{$data[0]->benefit_bn}}"
                                                  class="form-control"
                                                  id="benefit_bn"
                                                  cols="30" rows="3">{{$data[0]->benefit_bn}}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="image">Image<span style="color: red">*</span></label>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <button type="button" data-dismiss="modal"
                                            class=" btn btn-secondary waves-effect">Cancel
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light mr-1 pull-right">
                                        Update
                                    </button>
                                </div>
                            </form>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
    @endif
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
        const product = [];
        $("#product_group_edit").change(function () {
            axios.post('getProduct', {
                id: $(this).val()
            }).then(function (response) {
                let products = response.data;
                $('#productListEdit').empty();
                var itemsValue = document.querySelectorAll('.item');
                var existItem = [];
                for (var i = 0; i < itemsValue.length; i++) {
                    existItem.push(itemsValue[i].innerText);
                }
                $.each(products, function (i, item) {
                    const target = products[i].product_name;
                    var checked;
                    if (existItem.indexOf(target) !== -1) {
                        checked = 'checked';
                    } else {
                        checked = '';
                    }
                    $("<div class='form-check' >").html("" +
                        "<div class='selectList' data-id='" + products[i].product_name + "'" + ">" +
                        "<input class='form-check-input chacked- ' style='margin: 5px' type ='checkbox' value ='" + products[i].id + "'" +
                        "data-name = " + products[i].product_name +
                        " id = 'product" + products[i].id + "' " + checked + " >" +
                        "<label class= 'form-check-label'" +
                        "style = 'margin-left: 25px'" +
                        "for= 'product" + products[i].id + "' >" + products[i].product_name + "</label>" +
                        "</div>"
                    ).appendTo('#productListEdit');
                });
                $(".form-check .selectList .chacked-").click(function () {
                    if ($(this).is(':checked')) {
                        let oldVal = $('#productModalEdit').html();

                        $('#productModalEdit').html("" +
                            "<div class='item' id='" + $(this).val() + "'>" +
                            $(this).data('name') + "<i class='fa-regular fa-circle-xmark product-cancel' data-id='" + $(this).attr('id') + "'></i>" +
                            " </div>" + "  " + oldVal);

                        $(".product-cancel").click(function () {
                            $("#" + $(this).data('id')).prop("checked", false);
                            $(this).parent(".item").css('display', 'none');

                            const target = $("#" + $(this).data('id')).val();
                            var i = 0;
                            while (i < product.length) {
                                if (product[i] === target) {
                                    product.splice(i, 1);
                                } else {
                                    ++i;
                                }
                            }
                            $("#disProductsEdit").val(product);
                        });

                        $('#productModalEdit #productNameEdit').keyup(function () {
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
                        product.push($(this).val());
                        $("#disProductsEdit").val(product);
                    } else {
                        $('#' + $(this).val()).css('display', 'none');
                        const target = $(this).val();
                        var i = 0;
                        while (i < product.length) {
                            if (product[i] === target) {
                                product.splice(i, 1);
                            } else {
                                ++i;
                            }
                        }
                        $("#disProductsEdit").val(product);
                    }
                });

            }).catch(function (error) {
                alert(error);
            });
        });
        $(".product-cancel").click(function () {
            $("#" + $(this).data('id')).prop("checked", false);
            $(this).parent(".item").css('display', 'none');

            const target = $("#" + $(this).data('id')).val();
            var i = 0;
            while (i < product.length) {
                if (product[i] === target) {
                    product.splice(i, 1);
                } else {
                    ++i;
                }
            }
            $("#disProductsEdit").val(product);
        });

        $(".form-check-input").change(function () {
            if ($(this).is(':checked')) {
                let oldVal = $('#productModalEdit').html();
                // $("#productModalEdit").attr('data-toggle', '')
                $('#productModalEdit').html("" +
                    "<div class='item' id='" + $(this).val() + "'>" +
                    $(this).data('name') + "<i class='fa-regular fa-circle-xmark product-cancel' data-id='" + $(this).attr('id') + "'></i>" +
                    " </div>" + "  " + oldVal);

                $(".product-cancel").click(function () {
                    $("#" + $(this).data('id')).prop("checked", false);
                    $(this).parent(".item").css('display', 'none');

                    const target = $("#" + $(this).data('id')).val();
                    var i = 0;
                    while (i < product.length) {
                        if (product[i] === target) {
                            product.splice(i, 1);
                        } else {
                            ++i;
                        }
                    }
                    $("#disProductsEdit").val(product);
                });

                $('#productModalEdit #productNameEdit').keyup(function () {
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
                product.push($(this).val());
                $("#disProductsEdit").val(product);
            } else {
                $('#' + $(this).val()).css('display', 'none');
                const target = $(this).val();
                var i = 0;
                while (i < product.length) {
                    if (product[i] === target) {
                        product.splice(i, 1);
                    } else {
                        ++i;
                    }
                }
                $("#disProductsEdit").val(product);
            }
        });

        $('#productModalEdit #productNameEdit').keyup(function () {
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
                    product.push(productCkField[i].value);
                    $("#disProductsEdit").val(product);
                }
            }
        })
    </script>
@endpush
