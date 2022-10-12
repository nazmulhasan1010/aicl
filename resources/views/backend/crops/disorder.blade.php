@extends('layouts.backend.app')
@section('title','Disorders')
@push('vendor_css')
    <!-- plugin css -->
    <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
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
                        <h4 class="header-title mt-0 mb-1">Disorders<button class="btn btn-info btn-xs float-right" data-toggle="modal" data-target="#addNewproduct">Add New</button></h4>
                        <p class="sub-header">

                        </p>

                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            {{-- <table   class="table dt-responsive nowrap"> --}}
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i= 1;
                            @endphp
                            @foreach ($disorder as $key=> $product)
                                <tr>
                                    <td>
                                        <textarea hidden="hidden" id="catpro{{$product->id}}">{{ json_encode($product) }}</textarea>
                                        {{ $i }}
                                    </td>
                                    <td><img src="{{ asset('storage/product/'.$product->image)}}" alt="{{ $product->name }}" width="50px" height="80px"></td>
                                    <td>{{ $product->product_name }} <br> ( {{ $product->composition}})</td>
                                    <td>{{ $product->category->category_name }}</td>
                                    <td>{!! Str::limit(strip_tags($product->product_details), 50) !!}</td>
                                    <td style="text-align: center">
                                        @if ($product->status == true)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>

                                    <td style="text-align: center">
                                        <a href="{{ route('admin.product.show',$product->id)}}" class="btn btn-info btn-sm">
                                            <div class="icon-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

                                            </div>
                                        </a>
                                        <a href="{{ route('admin.product.edit',$product->id)}}" class="btn btn-info btn-sm" >
                                            <div class="icon-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                </svg>
                                            </div>
                                        </a>

                                        <button class="btn btn-danger btn-xs"  type="button" onclick="deleteItem({{$product->id }})">
                                            <div class="icon-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                            </div>
                                        </button>
                                        <form id="delete-form-{{$product->id }}" action="{{ route('admin.product.destroy',$product->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </td>
                                </tr>
                                @php
                                    $i += 1;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                        <!--  product Add -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addNewproduct" id="addNewproduct" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add New product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Product Name  <span style="color: red">*</span></label>
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Product Name" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name_bn">Product Name (Bangla) <span style="color: red">*</span></label>
                                                        <input type="text" id="name_bn" name="name_bn" class="form-control" placeholder="Product Name (Bangla)" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="category">Category<span style="color: red">*</span></label>
                                                    <select name="category" id="category" class="form-control">
                                                        @foreach ($categories as $item)
                                                                <?php
                                                                $length = (strlen($item->auto_code) - 2);
                                                                $widthSpace = ($length * 3);
                                                                ?>
                                                            <option value="{{ $item->id}}"><?php echo str_repeat('&nbsp;', $widthSpace) ?>{{ $item->category_name }}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="image">Image<span style="color: red">*</span></label>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Pack Size</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                        <th><a href="#" class="addRow">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="customtbl">
                                                    <tr>
                                                        <td>
                                                            <select name="rows[0][size_id]"  class="form-control">
                                                                <option value="0">-- Select Pack Size--</option>
                                                                @foreach ($sizes as $size)
                                                                    <option value="{{ $size->id }}">{{ $size->size_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input type="text" name="rows[0][qty]" class="form-control" required=""/></td>
                                                        <td><input type="text" name="rows[0][price]" class="form-control" required=""/></td>


                                                        <td><button type="button" class="btn btn-danger btn-sm btn-rect" onclick="javascript:remove25(this);">Close</button></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="composition">Product Composition </label>
                                                    <textarea name="composition" id="composition" cols="30" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="meta">Product Meta  <span style="color: red">*</span></label>
                                                    <textarea name="meta" id="meta" cols="30" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="description">Product Description <span style="color: red">*</span></label>
                                                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="description_bn">Product Description (Bangla) <span style="color: red">*</span></label>
                                                    <textarea name="description_bn" id="description_bn" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="button"  data-dismiss="modal" class=" btn btn-secondary waves-effect">Cancel</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1 pull-right">Save</button>
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
        $('#description').summernote({
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
        $('#description_bn').summernote({
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
        $('#productDescription').summernote({
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
    <script type="text/javascript">
        var i75 = 0;
        $('.addRow').on('click',function(){
            addRow();
        });
        function addRow()
        {
            i75++;
            var tr='<tr>'+
                '<td>'+'<select name="rows['+i75+'][size_id]" onchange=\'PaymentType(this,'+i75+');\' class="form-control">\n' +
                '<option value="0">-- Select Category--</option>\n'+
                '@foreach ($sizes as $size)'+
                '<option value="{{$size->id}}">{{ $size->size_name }}</option>'+
                '@endforeach'+
                '</select>' +
                '</td>'+
                '<td><input type="text" name="rows['+i75+'][qty]" class="form-control" required=""></td>'+
                '<td><input type="text" name="rows['+i75+'][price]" class="form-control" required=""></td>'+
                '<td><button type=\'button\' class=\'btn btn-danger btn-sm btn-rect\' onclick=\'javascript:remove25(this);\'>Close</button></td>'+
                '</tr>';
            $('#customtbl').append(tr);
        };
        function remove25(index){
            //console.log("hello");
            $(index).parent().parent().remove();
        }
    </script>
@endpush
