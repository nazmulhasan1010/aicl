@extends('layouts.backend.app')
@section('title','Product')
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
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Specification</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($specification as $key=> $specification)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                    @php
                                        echo getProductById($specification->product_id)[0]->product_name;
                                    @endphp</td>
                                    <td>{!! Str::limit(strip_tags($specification->specification), 50) !!}</td>
                                    <td style="text-align: center">
                                        <a href="{{ route('admin.specification.show',$specification->id)}}"
                                           class="btn btn-info btn-sm">
                                            <div class="icon-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="{{ route('admin.specification.edit',$specification->id)}}"
                                           class="btn btn-info btn-sm">
                                            <div class="icon-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit">
                                                    <path
                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path
                                                        d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                        <button class="btn btn-danger btn-xs" type="button"
                                                onclick="deleteItem({{$specification->id }})">
                                            <div class="icon-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>

                                            </div>
                                        </button>
                                        <form id="delete-form-{{$specification->id }}"
                                              action="{{ route('admin.specification.destroy',$specification->id) }}"
                                              method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--  specification Add -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="addNewSpecification" id="addNewSpecification" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add New specification</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.specification.store') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
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
                                                <div class="col-md-12">
                                                    <label for="composition">Product specification </label>
                                                    <textarea name="composition" id="composition" cols="30" rows="3"
                                                              class="form-control"></textarea>
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
    </script>

@endpush
