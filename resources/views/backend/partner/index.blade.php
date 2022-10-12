@extends('layouts.backend.app')
@section('title','Financial Partner')
@push('vendor_css')
     <!-- plugin css -->
     <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
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
                    <li class="breadcrumb-item active" aria-current="page">Financial Partner</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Financial Partners</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Financial Partners  <button class="btn btn-info btn-xs float-right" data-toggle="modal" data-target="#addNewpartner">Add New</button></h4>
                    <p class="sub-header">
                      
                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $key=>$partner)
                            <tr>
                                <td>
                                    <textarea hidden="hidden" id="catpro{{$partner->id}}">{{ json_encode($partner) }}</textarea>
                                    {{ $key +1 }}
                                </td>
                                <td> <img src="{{ asset('storage/partner/'.$partner->image)}}" alt="{{ $partner->partner_name}}" width="100px" height="60px"></td>
                                <td>{{ $partner->partner_name}}</td>
                                
                                <td style="text-align: center">
                                    @if ($partner->status == true)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td style="text-align: center">
                                    <a href="{{ route('admin.partner.edit',$partner->id)}}" class="btn btn-info btn-sm" onclick="javascript:updatepartner({{$partner->id}})" data-toggle="modal" data-target="#editpartner"> <div class="icon-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </div> </a>
                                 
                                    <button class="btn btn-danger btn-xs"  type="button" onclick="deleteItem({{$partner->id }})">
                                        <div class="icon-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                           
                                        </div>
                                    </button>
                                    <form id="delete-form-{{$partner->id }}" action="{{ route('admin.partner.destroy',$partner->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--  partner Add -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addNewpartner" id="addNewpartner" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Add New Partner</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Partner Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Partner Name" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Partner Image</label>
                                            <img id="image_review" alt="your image" width="100%" height="300" />
                                            <input type="file" id="image" name="image"  class="form-control"  onchange="document.getElementById('image_review').src = window.URL.createObjectURL(this.files[0])" />
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
                    <!--partner Add End -->
                    <!--  partner Edit -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="editpartner" id="editpartner" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="addNewpartner">Edit partner</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.partner.update','1') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="partnerName">Partner Name</label>
                                            <input type="text" id="partnerName" name="name" class="form-control" placeholder="partner Title" autocomplete="off" required>
                                            <input type="hidden" name="partner_id" id="partnerId">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="image">Partner Image</label>
                                            <img id="edit_image_review" alt="your image" width="100%" height="300" />
                                            <input type="file" id="image" name="image"  class="form-control"  onchange="document.getElementById('edit_image_review').src = window.URL.createObjectURL(this.files[0])" />
                                        </div>
                                        <div class="form-group">
                                            <select name="status" id="partnerStatus" class="form-control">
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
                    <!--partner Edit End -->
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
@endpush
@push('page_js')
    <script>
        // Edit partner
        function  updatepartner(catid) {
            let info = $('#catpro'+catid).val();
            try {
                let obj = JSON.parse(info);
                $('#partnerId').val(obj.id);
                $('#partnerName').val(obj.partner_name);
                $('#partnerStatus').val(obj.status);
            }catch(err){
                console.err(err);
            }
        }
    </script>
@endpush