@extends('layouts.backend.app')
@section('title','Product Edit')
@push('vendor_css')

@endpush
@push('page_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
@section('content')
 <!-- Start Content-->
 <div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Edit</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Product Edit</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Product Edit<a class="btn btn-info btn-xs float-right" href="{{ route('admin.product.index')}}">Products</a></h4>
                    <hr/>
                    <div class="modal-body">
                        <form action="{{ route('admin.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Product Name  <span style="color: red">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Product Name" value="{{ $product->product_name}}" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_bn">Product Name (Bangla) <span style="color: red">*</span></label>
                                        <input type="text" id="name_bn" name="name_bn" class="form-control" placeholder="Product Name (Bangla)" value="{{ $product->product_name_bn}}" autocomplete="off" required>
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
                                        <option {{ $product->category_id == $item->id ? 'selected' : ''}}  value="{{ $item->id}}"><?php echo str_repeat('&nbsp;', $widthSpace) ?>{{ $item->category_name }}</option>

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
                                        @foreach ($varients  as $varient)
                                        <tr>
                                            <td>
                                                <select name="rows[0][size_id]"  class="form-control">
                                                    <option value="0">-- Select Pack Size--</option>
                                                    @foreach ($sizes as $size)
                                                        <option {{ $varient->size_id == $size->id ? 'selected' : ''}} value="{{ $size->id }}">{{ $size->size_name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" value="{{ $varient->qty }}" name="rows[0][qty]" class="form-control" required=""/></td>
                                            <td><input type="text" value="{{ $varient->price }}" name="rows[0][price]" class="form-control" required=""/></td>


                                            <td><button type="button" class="btn btn-danger btn-sm btn-rect" onclick="javascript:remove25(this);">Close</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="composition">Product Composition </label>
                                    <textarea name="composition" id="composition" cols="30" rows="3" class="form-control"> {{ $product->composition }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="meta">Product Meta  <span style="color: red">*</span></label>
                                    <textarea name="meta" id="meta" cols="30" rows="5" class="form-control">{{ $product->meta}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="description">Product Description <span style="color: red">*</span></label>
                                    <textarea name="description" id="description" cols="30" rows="10">{{ $product->product_details}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="description_bn">Product Description (Bangla) <span style="color: red">*</span></label>
                                    <textarea name="description_bn" id="description_bn" cols="30" rows="10">{{ $product->product_details_bn}}</textarea>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1 pull-right">Update</button>
                            </div>
                        </form>
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
