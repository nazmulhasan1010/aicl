@extends('layouts.backend.app')
@section('title','Crops Category')
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
                        <li class="breadcrumb-item active" aria-current="page">Crops Category</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Crops Category</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Crops Category
                            <button class="btn btn-info btn-xs float-right" data-toggle="modal"
                                    data-target="#addNewCategory">Add New
                            </button>
                        </h4>
                        <p class="sub-header">

                        </p>
                        <table class="table dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Name Bn</th>
                                <th>Image</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Editable</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $key=>$cropsCat)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>
                                        {{$cropsCat->category_name}}
                                    </td>
                                    <td>
                                        {{$cropsCat->category_name_bn}}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/cropcat/'.$cropsCat->image)}}"
                                             alt="{{ $cropsCat->image}}" width="100px" height="60px">
                                    </td>
                                    <td style="text-align: center">
                                        @if ($cropsCat->status == true)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td style="text-align: center">
                                        @if ($cropsCat->editable == true)
                                            Yes
                                        @else
                                            No
                                        @endif</td>

                                    <td style="text-align: center">
                                        @if ($cropsCat->editable == true)
                                            <a href="{{ route('admin.cropsCat.edit',$cropsCat->id)}}"
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
                                                    onclick="deleteItem({{$cropsCat->id }})">
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
                                            <form id="delete-form-{{$cropsCat->id }}"
                                                  action="{{ route('admin.cropsCat.destroy',$cropsCat->id) }}"
                                                  method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--  Category Add -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="addNewCategory" id="addNewCategory" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add New Crops Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.cropsCat.store') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Crops Category Name</label>
                                                        <input type="text" id="name" name="name" class="form-control"
                                                               placeholder="Crops Category Name" autocomplete="off"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name_bn">Crops Category Name Bangla</label>
                                                        <input type="text" id="name_bn" name="name_bn"
                                                               class="form-control"
                                                               placeholder="Crops Category Name Bangla"
                                                               autocomplete="off" required>
                                                    </div>
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
                                            <div class="form-group">
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
                        <!--Crops Category Add End -->
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
        // Edit Crops Category
        function updateCrops(catid) {
            let info = $('#catpro' + catid).val();
            try {
                let obj = JSON.parse(info);
                $('#cropsCatId').val(obj.id);
                $('#cropsCatName').val(obj.cropsCat_name);
                $('#cropsCatNameBn').val(obj.cropsCat_name_bn);
                $('#cropsCatParent').val(obj.parent_id);
                $('#cropsCatDesign').val(obj.design);
                // $('.modal-body textarea.cropsCatDesign').val(obj.design);

                $('#cropsCatStatus').val(obj.status);
            } catch (err) {
                console.err(err);
            }
        }


    </script>
@endpush
