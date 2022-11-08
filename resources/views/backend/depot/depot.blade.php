@extends('layouts.backend.app')
@section('title','Depot Image')
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
                        <li class="breadcrumb-item active" aria-current="page">Depot</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Depot & Distribution</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Depot & Distribution
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
                                <th>Image</th>
                                <th>Location</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($depot as $key=>$depots)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/depot/'.$depots->image)}}"
                                             alt="{{ $depots->image}}" width="100px" height="60px">
                                    </td>
                                    <td>
                                        {{$depots->location}}
                                    </td>

                                    <td style="text-align: center">
                                        @if ($depots->status == true)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>

                                    <td style="text-align: center">
                                        <a role="button" id="depotEditBtn" data-id="{{$depots->id}}"
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
                                                onclick="deleteItem({{$depots->id }})">
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
                                        <form id="delete-form-{{$depots->id }}"
                                              action="{{ route('admin.depot.destroy',$depots->id) }}"
                                              method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--  Depot Add -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="addNewCategory" id="addNewCategory" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add New Depot & Distribution Image</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.depot.store') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <input type="text" id="location" name="location"
                                                               class="form-control"
                                                               placeholder="location" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="link">360 view map link</label>
                                                        <input type="text" id="link" name="link" class="form-control"
                                                               placeholder="Link" autocomplete="off">
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

                        <!--  Depot Edit -->
                        <div class="modal fade bs-example-modal-lg" id="depotEdit" tabindex="-1" role="dialog"
                             aria-labelledby="addNewCategory" id="addNewCategory" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Edit Depot & Distribution Image</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.depot.update',1) }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" id="depotId" name="depotId">
                                                        <label for="locationEdit">Location</label>
                                                        <input type="text" id="locationEdit" name="locationEdit"
                                                               class="form-control"
                                                               placeholder="location" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="linkEdit">360 view map link</label>
                                                        <input type="text" id="linkEdit" name="linkEdit"
                                                               class="form-control"
                                                               placeholder="Link" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="row_status">Status</label>
                                                        <select name="row_status" id="row_status" class="form-control"
                                                                required>
                                                            <option value="1" {{old('status')==1 ? 'selected' : ''}}>
                                                                Active
                                                            </option>
                                                            <option value="0" {{old('status')==0 ? 'selected' : ''}}>
                                                                Inactive
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="imageEdit">Image<span
                                                            style="color: red">*</span></label>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" name="imageEdit">
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
                                            @method('PUT')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!--Crops Depot edit End -->
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
        $('#depotEditBtn').click(function () {
            $('#depotEdit').modal('show');
            let id = $(this).data('id');
            axios.get('depot/' + id + '/edit',).then(function (response) {
                $('#depotId').val(response.data[0].id);
                $('#row_status').val(response.data[0].status);
                $('#locationEdit').val(response.data[0].location);
            }).catch(function (error) {
                console.log(error)
            })
        })


    </script>
@endpush
