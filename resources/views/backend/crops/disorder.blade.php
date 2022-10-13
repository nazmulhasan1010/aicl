@extends('layouts.backend.app')
@section('title','Disorders')
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

@endpush
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Disorders</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Disorders</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Disorders
                            <button class="btn btn-info btn-xs float-right" data-toggle="modal"
                                    data-target="#addNewproduct">Add New
                            </button>
                        </h4>
                        <p class="sub-header">

                        </p>

                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            {{-- <table   class="table dt-responsive nowrap"> --}}
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Disorder Name</th>
                                <th>Crops</th>
                                <th>affect</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach ($disorder as $key=> $product)
                                <tr>
                                    <td>{{$key+i}}</td>
                                    <td>{{$product->disorder_name}}</td>
                                    <td></td>
                                    <td>{{ $product->affect }}</td>
                                    {{--                                    <td style="text-align: center">--}}
                                    {{--                                        @if ($product->status == true)--}}
                                    {{--                                            Active--}}
                                    {{--                                        @else--}}
                                    {{--                                            Inactive--}}
                                    {{--                                        @endif--}}
                                    {{--                                    </td>--}}

                                    <td style="text-align: center">
                                        <a href="{{ route('admin.disorder.show',$product->id)}}"
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
                                        <a href="{{ route('admin.disorder.edit',$product->id)}}"
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
                                                onclick="deleteItem({{$product->id }})">
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
                                        <form id="delete-form-{{$product->id }}"
                                              action="{{ route('admin.disorder.destroy',$product->id) }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--  Disorder Add -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="addNewproduct" id="addNewproduct" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add New Disorder</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.disorder.store') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="disorder_name">Disorder Name <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" id="disorder_name" name="disorder_name"
                                                               class="form-control" placeholder="Disorder Name"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="disorder_name_bn">Disorder Name (Bangla) <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" id="disorder_name_bn" name="disorder_name_bn"
                                                               class="form-control" placeholder="Product Name (Bangla)"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    @php
                                                        $crops = getCrops();
                                                    @endphp
                                                    <label for="crops">Select crops</label>
                                                    <select name="crops" id="crops"
                                                            class="form-control">
                                                        <option value="">--select crops--</option>
                                                        @foreach ($crops as $crop)
                                                            <option
                                                                value="{{ $crop->auto_code}}">{{ $crop->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    @php
                                                        $product_group = getProductCategory();
                                                    @endphp
                                                    <label for="product_group">Select Product Group</label>
                                                    <select name="product_group" id="product_group"
                                                            class="form-control">
                                                        <option value="">--select product group--</option>
                                                        @foreach ($product_group as $groups)
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
                                                    @endphp
                                                    <label for="product">Select Product </label>
                                                    <div class="dropdown">
                                                        <input type="text" class="form-control" type="button"
                                                               id="productName" data-toggle="dropdown"
                                                               aria-haspopup="true" aria-expanded="false"
                                                               placeholder="--select product--">
                                                        <div class="dropdown-menu" style="width: 100%;"
                                                             aria-labelledby="dropdownMenuButton" id="productList">
                                                            @foreach($products as $product)
                                                                <div class="form-check">
                                                                    <div class="selectList"
                                                                         data-id="{{ $product->product_name }}">
                                                                        <input class="form-check-input"
                                                                               style="margin: 5px"
                                                                               type="checkbox"
                                                                               value="product{{$product->id}}"
                                                                               id="product{{$product->id}}"
                                                                               data-name="{{ $product->product_name }}"
                                                                               name="product{{$product->id}}">
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
                                                    <textarea name="symptoms" class="form-control" id="symptoms"
                                                              cols="30" rows="3"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="symptoms_bn">Symptoms (Bangla)<span
                                                            style="color: red">*</span></label>
                                                    <textarea name="symptoms_bn" class="form-control" id="symptoms_bn"
                                                              cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="affect">Affect<span style="color: red">*</span></label>
                                                    <textarea name="affect" class="form-control" id="affect" cols="30"
                                                              rows="3"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="affect_bn">Affect (Bangla)<span
                                                            style="color: red">*</span></label>
                                                    <textarea name="affect_bn" class="form-control" id="affect_bn"
                                                              cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="soil_drip">Soil/drip<span
                                                            style="color: red">*</span></label>
                                                    <textarea name="soil_drip" class="form-control" id="soil_drip"
                                                              cols="30" rows="3"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="soil_drip_bn">Soil/drip (Bangla)<span
                                                            style="color: red">*</span></label>
                                                    <textarea name="soil_drip_bn" class="form-control" id="soil_drip_bn"
                                                              cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="benefit">Benefit<span
                                                            style="color: red">*</span></label>
                                                    <textarea name="benefit" class="form-control" id="benefit" cols="30"
                                                              rows="3"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="benefit_bn">Benefit (Bangla)<span
                                                            style="color: red">*</span></label>
                                                    <textarea name="benefit_bn" class="form-control" id="benefit_bn"
                                                              cols="30" rows="3"></textarea>
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

    {{--    axois--}}
    <script src="{{asset('backend/assets/js/axios.min.js')}}"></script>

@endpush
@push('page_js')
    <script type="text/javascript">

        $('#productName').keyup(function () {
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

        $("#product_group").change(function () {
            axios.post('getProduct', {
                id: $(this).val()
            }).then(function (response) {
                let products = response.data;
                $('#productList').empty();
                $.each(products, function (i, item) {
                    $("<div class='form-check' >").html("" +
                        "<div class='selectList' data-id='" + products[i].product_name + "'" + ">" +
                        "<input class='form-check-input chacked- ' style='margin: 5px' type ='checkbox' value ='product" + products[i].id + "'" +
                        "data-name = " + products[i].product_name +
                        " id = 'product" + products[i].id + "' name = 'product" + products[i].id + "' >" +
                        "<label class= 'form-check-label'" +
                        "style = 'margin-left: 25px'" +
                        "for= 'product" + products[i].id + "' >" + products[i].product_name + "</label>" +
                        "</div>"
                    ).appendTo('#productList');
                });
                $(".form-check .selectList .chacked-").click(function () {
                    let oldVal = $('#productName').val();
                    $('#productName').val(oldVal +"  "+ $(this).data('name'));
                });

            }).catch(function (error) {
                alert(error);
            });
        });
        $(".form-check-input").change(function () {
            let oldVal = $('#productName').val();
            $('#productName').val(oldVal +"  "+ $(this).data('name'));
        });

    </script>
@endpush
