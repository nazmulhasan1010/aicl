@extends('layouts.backend.app')
@section('title','Category Edit')
@push('vendor_css')
    <!-- plugin css -->
    <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
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
                        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Categories</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">  <a class="btn btn-info btn-xs float-right" href="{{ route('admin.cropsCat.index')}}">Categories</a></h4>
                        <p class="sub-header">
                        </p>
                        <form action="{{ route('admin.cropsCat.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="categoryName">Category Name</label>
                                <input type="text" id="categoryName" value="{{ $data->category_name}}" name="name" class="form-control" placeholder="Category Name" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="categoryNameBn">Category Name Bangla</label>
                                <input type="text" id="categoryNameBn" value="{{ $data->category_name_bn}}" name="name_bn" class="form-control" placeholder="Category Name Bangla" autocomplete="off" required>

                            </div>
                            <br>
                            <div class="form-group">
                                <select name="status" id="categoryStatus" class="form-control">
                                    <option {{ $data->status == true ? 'selected' : ''}} value="1">Active</option>
                                    <option {{ $data->status == false ? 'selected' : ''}}  value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="oldImage" value="{{$data->image}}">
                                    <label for="image">Image<span style="color: red">*</span></label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="editImage">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button"  data-dismiss="modal" class=" btn btn-secondary waves-effect">Cancel</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1 pull-right">Update</button>
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
@endpush
@push('page_js')
    <script>

        // summbernote
        $('#categoryDesign').summernote({
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

    </script>
@endpush
