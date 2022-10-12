@extends('layouts.backend.app')
@section('title','Category')
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
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Categories</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Categories  <button class="btn btn-info btn-xs float-right" data-toggle="modal" data-target="#addNewCategory">Add New</button></h4>
                    <p class="sub-header">

                    </p>

                    {{-- <table id="basic-datatable" class="table dt-responsive nowrap"> --}}
                    <table   class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Name Bn</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Editable</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key=>$category)
                            <tr>
                                <td>
                                    <textarea hidden="hidden" id="catpro{{$category->id}}">{{ json_encode($category) }}</textarea>
                                    {{ $key+1 }}
                                </td>
                                <td>
                                @php
                                    $length = (strlen($category->auto_code) - 2);
                                    $widthSpace = ($length * 3);
                                @endphp
                                 @php echo str_repeat('&nbsp;', $widthSpace)  @endphp {{ $category->category_name}}
                                </td>
                                <td>
                                @php
                                    $length = (strlen($category->auto_code) - 2);
                                    $widthSpace = ($length * 3);
                                @endphp
                                 @php echo str_repeat('&nbsp;', $widthSpace)  @endphp {{ $category->category_name_bn}}
                                </td>
                                <td style="text-align: center">
                                    @if ($category->status == true)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td style="text-align: center">
                                    @if ($category->editable == true)
                                        Yes
                                    @else
                                        No
                                    @endif</td>

                                <td style="text-align: center">
                                    @if ($category->editable == true)
                                    <a href="{{ route('admin.category.edit',$category->id)}}" class="btn btn-info btn-sm"> <div class="icon-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </div> </a>


                                    <button class="btn btn-danger btn-xs"  type="button" onclick="deleteItem({{$category->id }})">
                                        <div class="icon-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                        </div>
                                    </button>
                                        <form id="delete-form-{{$category->id }}" action="{{ route('admin.category.destroy',$category->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @else

                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--  Category Add -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addNewCategory" id="addNewCategory" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Add New Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="parent">Parent Category</label>
                                                    <select name="parent" id="" class="form-control">
                                                        <option value="" selected>No Parent</option>
                                                        @foreach ($categories as $item)
                                                        <?php
                                                            $length = (strlen($item->auto_code) - 2);
                                                            $widthSpace = ($length * 3);
                                                        ?>
                                                        <option value="{{ $item->id}}"><?php echo str_repeat('&nbsp;', $widthSpace) ?>{{ $item->category_name }}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Category Name</label>
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Category Name" autocomplete="off" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name_bn">Category Name Bangla</label>
                                                    <input type="text" id="name_bn" name="name_bn" class="form-control" placeholder="Category Name Bangla" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="page_design">Page Custom Design</label>
                                                <textarea name="page_design" id="page_design" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="button"  data-dismiss="modal" class=" btn btn-secondary waves-effect">Cancel</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1 pull-right">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Category Add End -->
                    <!--  Category Edit -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="editCategory" id="editCategory" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="addNewCategory">Edit Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.category.update','1') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="categoryParent">Parent Category</label>
                                            <select name="parent" id="categoryParent" class="form-control">
                                                <option value="" selected>No Parent</option>
                                                @foreach ($categories as $item)
                                                <?php
                                                    $length = (strlen($item->auto_code) - 2);
                                                    $widthSpace = ($length * 3);
                                                ?>
                                                <option value="{{ $item->id}}"><?php echo str_repeat('&nbsp;', $widthSpace) ?>{{ $item->category_name }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryName">Category Name</label>
                                            <input type="text" id="categoryName" name="name" class="form-control" placeholder="Category Name" autocomplete="off" required>
                                            <input type="hidden" name="update_id" id="categoryId" >
                                        </div>
                                        <div class="form-group">
                                            <label for="categoryNameBn">Category Name Bangla</label>
                                            <input type="text" id="categoryNameBn" name="name_bn" class="form-control" placeholder="Category Name Bangla" autocomplete="off" required>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="categoryDesign">Page Custom Design</label>
                                                <textarea name="categoryDesign" id="categoryDesign" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <select name="status" id="categoryStatus" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="button"  data-dismiss="modal" class=" btn btn-secondary waves-effect">Cancel</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1 pull-right">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Category Edit End -->
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
        // Edit Category
        function  updateCategory(catid) {
            let info = $('#catpro'+catid).val();
            try {
                let obj = JSON.parse(info);
                $('#categoryId').val(obj.id);
                $('#categoryName').val(obj.category_name);
                $('#categoryNameBn').val(obj.category_name_bn);
                $('#categoryParent').val(obj.parent_id);
                $('#categoryDesign').val(obj.design);
                // $('.modal-body textarea.categoryDesign').val(obj.design);

                $('#categoryStatus').val(obj.status);
            }catch(err){
                console.err(err);
            }
        }
        // summbernote
        $('#page_design').summernote({
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
        // $('#categoryDesign').summernote({
        //     tabsize: 2,
        //     height: 120,
        //     toolbar: [
        //     ['style', ['style']],
        //     ['font', ['bold', 'underline', 'clear']],
        //     ['color', ['color']],
        //     ['para', ['ul', 'ol', 'paragraph']],
        //     ['table', ['table']],
        //     ['insert', ['link', 'picture', 'video']],
        //     ['view', ['fullscreen', 'codeview', 'help']]
        //     ]
        // });
    </script>
@endpush
