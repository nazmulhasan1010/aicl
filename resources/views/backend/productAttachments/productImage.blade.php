@extends('layouts.backend.app')
@section('title','Product Images')
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
    <script src="https://kit.fontawesome.com/2a7bedc40f.js" crossorigin="anonymous"></script>
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

        .image-upload table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr, table tr td, table tr th {
            border-top: 1px solid rgba(51, 51, 51, 0.34);
            padding: 5px;
        }


        .imageModal {
            display: flex;
            flex-wrap: wrap;
        }

        .attachImage {
            height: 150px;
            width: 140px;
            border-radius: 4px;
        }

        .imageBox {
            height: 150px;
            width: 140px;
            position: relative;
            margin: 10px 5px;
        }

        .imageDelButton {
            position: absolute;
            right: 5px;
            bottom: 5px;
            display: none;
            background-color: red;
            padding: 5px 15px;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
        }

        .imageBox:hover .attachImage {
            opacity: .5;
        }

        .imageBox:hover .imageDelButton {
            display: block;
        }

        .imagePreViewMain {
            position: relative;
        }

        .image-upload-field, .image-upload {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .images {
            height: 120px;
            width: 125px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(51, 51, 51, 0.25);
        }

        .imagePreview {
            height: 120px;
            width: 125px;
            border-radius: 5px;
            z-index: 1;
        }

        .count-text {
            position: absolute;
            top: 50px;
            left: 50px;
            color: #333;
            font-size: 17px;
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.53);
            padding: 1px 5px;
            border-radius: 2px;
            z-index: 5;
        }

        .progress-bar {
            width: 100%;
            background-color: rgba(51, 51, 51, 0.33);
            position: relative;
            display: none;
        }

        .percentage {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
        }

        .indicator-bar {
            width: 50%;
            height: 20px;
            background-color: #249e14;
        }

        .success-message {
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #249e14;
            color: #fff;
            font-size: 18px;
            display: none;
        }

        span {
            margin-left: 10px;
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
                        <li class="breadcrumb-item active" aria-current="page">Specification</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Specification</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Specification
                            <button class="btn btn-info btn-xs float-right" data-toggle="modal"
                                    data-target="#addNewSpecification">Add New
                            </button>
                        </h4>
                        <br>
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <tbody>
                            @foreach ($product as $key=> $products)
                                @php
                                    $image =  getProductImageByProductId($products->id);
                                @endphp
                                <tr>
                                    <td>
                                        <h4>{{$products->product_name}}</h4>
                                        <div class="imageModal">
                                            @foreach($image as $images)
                                                <div class="imageBox">
                                                    <img class="attachImage"
                                                         src="{{asset('storage/product/'.$images->image)}}" alt="">
                                                    <button class=" imageDelButton"
                                                            style="font-size:22px"
                                                            type="button"
                                                            onclick="deleteItem({{$images->id }})">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                    <form id="delete-form-{{$images->id }}"
                                                          action="{{ route('admin.image.destroy',$images->id) }}"
                                                          method="POST"
                                                          style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--  Images Add -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="addNewSpecification" id="addNewSpecification" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="progress-bar">
                                        <div class="indicator-bar"></div>
                                        <div class="percentage"></div>
                                    </div>
                                    <div class="success-message">
                                        <i class="fa-solid fa-circle-check"></i><span>Photos successfully uploaded</span>
                                    </div>
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add New Images</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @php
                                                    $products = getProduct('all');
                                                @endphp
                                                <input type="hidden" value="" name="products" id="disProducts">
                                                <label for="product">Select Product </label>
                                                <div class="dropdown">
                                                    <div data-toggle="dropdown" id="productModal"
                                                         aria-haspopup="true" aria-expanded="false">
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
                                            <div class="col-md-12 image-upload">
                                                <br>
                                                <label>Image upload </label>
                                                <br>
                                                <div class="image-upload-field">
                                                    <div class="imagePreViewMain">
                                                        <img src="{{asset('backend/fake-image.png')}}" alt=""
                                                             class="imagePreview"
                                                             id="imagePreview">
                                                    </div>
                                                    <br>
                                                    <div id="size"></div>
                                                </div>
                                                <br>
                                                <div class="image-upload">
                                                    <label for="imageFile" class="btn btn-primary">Chose
                                                        images</label>
                                                    <input type="file" class="imageFile" hidden multiple
                                                           id="imageFile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="button" data-dismiss="modal"
                                                    class=" btn btn-secondary waves-effect">Cancel
                                            </button>
                                            <button type="button" id="upload"
                                                    class="btn btn-primary waves-effect waves-light mr-1 pull-right">
                                                Upload
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    $("#" + $(this).data('id')).prop("checked", false);
                    $(this).parent(".item").css('display', 'none');
                });
                $("#disProducts").val($(this).val());
            }
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


        // image preview
        $('#imageFile').change(function () {
            var file = $(this).prop('files')[0],
                files = $(this).prop('files'),
                reader = new FileReader(),
                len = files.length - 1;
            if (files.length > 1) {
                $('.images').remove();
                $('.count-text').remove();
                $('.imagePreViewMain').append('' +
                    ' <div class="images"></div>' +
                    ' <div class="count-text">+' + len + '</div>'
                )
                $('.imagePreview').css({
                    'position': 'absolute',
                    'top': '-10px',
                    'left': '-10px',
                });
            }
            for (var i = 0, j = 0; i < files.length; i++) {
                j = files[i].size + j;
                if (i === len) {
                    let size = (j / (1024 * 1024)).toFixed(2);
                    $('#size').html('<p>Total: ' + size + ' mb</p>')
                    break
                }
            }
            reader.readAsDataURL(file);
            reader.onload = function (event) {
                var source = event.target.result;
                $('#imagePreview').attr('src', source);
            }
        })
        $('#upload').click(function () {
            let product_id = $("#disProducts").val(),
                files = $('#imageFile').prop('files'),
                uploadStatus = $(this);
            let data = new FormData();
            for (var i = 0; i < files.length; i++) {
                data.append('file[]', files[i]);
            }
            data.append('product_id', product_id);
            fileUpload(data)
        })

        function fileUpload(data) {
            const config = {
                headers: {'Content-Type': 'multipart/form-data'},
                onUploadProgress: function (progressEvent) {
                    let percentage = Math.round((progressEvent.loaded * 100) / progressEvent.total).toFixed(2);
                    $('.progress-bar').css('display', 'block');
                    $('.indicator-bar').css('width', percentage + '%');
                    $('.percentage').text(percentage + ' %');
                }
            };
            axios.post('imageUpload', data, config).then(function (response) {
                if (response.data === 1) {
                    $('.success-message').css('display', 'block');
                    $('.progress-bar').css('display', 'none');
                }
            }).catch(function (error) {
                console.log(error)
            })
        }
    </script>
@endpush
