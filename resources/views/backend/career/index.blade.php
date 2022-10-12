@extends('layouts.backend.app')
@section('title','Career')
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
                    <li class="breadcrumb-item active" aria-current="page">Career</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Career</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Career<button class="btn btn-info btn-xs float-right" data-toggle="modal" data-target="#addNewcareer">Add New</button></h4>
                    <p class="sub-header">

                    </p>

                    {{-- <table id="basic-datatable" class="table dt-responsive nowrap"> --}}
                    <table   class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Vacancy</th>
                                <th>Deadline</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($careers as $key=>$career)
                            <tr>
                                <td>
                                    <textarea hidden="hidden" id="catpro{{$career->id}}">{{ json_encode($career) }}</textarea>
                                    {{ $key+1 }}
                                </td>
                                <td>{{ $career->title }}</td>
                                <td>{!! Str::limit(strip_tags($career->description), 50) !!}</td>
                                <td>{{ $career->total_vacancy}}</td>
                                <td>{{ date('d M Y',strtotime($career->deadline))}}</td>
                                <td style="text-align: center">
                                    @if ($career->status == true)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>

                                <td style="text-align: center">
                                    <a href="#" class="btn btn-info btn-sm" onclick="javascript:viewCareer({{$career->id}})" data-toggle="modal" data-target="#viewCareer">
                                        <div class="icon-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

                                        </div>
                                    </a>
                                    <a href="#" class="btn btn-info btn-sm" onclick="javascript:updateCareer({{$career->id}})" data-toggle="modal" data-target="#editcareer">
                                        <div class="icon-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </div>
                                    </a>

                                    <button class="btn btn-danger btn-xs"  type="button" onclick="deleteItem({{$career->id }})">
                                        <div class="icon-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                        </div>
                                    </button>
                                    <form id="delete-form-{{$career->id }}" action="{{ route('admin.career.destroy',$career->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--  career Add -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addNewcareer" id="addNewcareer" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Add New Career</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.career.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="title">Title <span style="color: red">*</span></label>
                                                    <input type="text" id="title" name="title" class="form-control" placeholder="Title" autocomplete="off" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="deadline">Deadline</label>
                                                    <input type="date" id="deadline" name="deadline" class="form-control" value="{{ date('Y-m-d')}}" placeholder="2021-01-01" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="vacancy">Vacancy</label>
                                                    <input type="text" id="vacancy" name="vacancy" class="form-control" placeholder="Vacancy" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
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
                    <!--career Add End -->
                    <!--  career Edit -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="editcareer" id="editcareer" aria-hidden="true">
                        <div class="modal-dialog  modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="addNewcareer">Edit career</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.career.update','1') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="careerTitle">Title <span style="color: red">*</span></label>
                                                    <input type="text" id="careerTitle" name="title" class="form-control" placeholder="Title" autocomplete="off" required>
                                                    <input type="hidden" name="career_id" id="careerId">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="careerDeadline">Deadline</label>
                                                    <input type="date" id="careerDeadline" name="deadline" class="form-control" value="{{ date('Y-m-d')}}" placeholder="2021-01-01" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="careerVacancy">Vacancy</label>
                                                    <input type="text" id="careerVacancy" name="vacancy" class="form-control" placeholder="Vacancy" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="description" id="careerDescription" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="status" id="careerStatus" class="form-control">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="button"  data-dismiss="modal" class=" btn btn-secondary waves-effect">Cancel</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1 pull-right">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--career Edit End -->
                    <!--  career view -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="viewCareer" id="viewCareer" aria-hidden="true">
                        <div class="modal-dialog  modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="addNewcareer">View Career</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="careerViewTitle">Title <span style="color: red">*</span></label>
                                                <input type="text" id="careerViewTitle" name="title" class="form-control"readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="careerVuewDeadline">Deadline</label>
                                                <input type="date" id="careerVuewDeadline" name="deadline" class="form-control" value="{{ date('Y-m-d')}}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="careerViewVacancy">Vacancy</label>
                                                <input type="text" id="careerViewVacancy" name="vacancy" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="description" id="careerViewDescription" cols="30" rows="10" class="form-control" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="status" id="careerViewStatus" class="form-control" readonly>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="button"  data-dismiss="modal" class=" btn btn-secondary waves-effect">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--career view End -->
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
        // Edit career
        function  updateCareer(catid) {
            let info = $('#catpro'+catid).val();
            try {
                let obj = JSON.parse(info);
                $('#careerId').val(obj.id);
                $('#careerTitle').val(obj.title);
                $('#careerDeadline').val(obj.deadline);
                $('#careerDescription').val(obj.description);
                $('#careerVacancy').val(obj.total_vacancy);
                $('#careerStatus').val(obj.status);
            }catch(err){
                console.err(err);
            }
        }
         // view career
         function  viewCareer(catid) {
            let info = $('#catpro'+catid).val();
            try {
                let obj = JSON.parse(info);
                $('#careerViewId').val(obj.id);
                $('#careerViewTitle').val(obj.title);
                $('#careerViewDeadline').val(obj.deadline);
                $('#careerViewDescription').val(obj.description);
                $('#careerViewVacancy').val(obj.total_vacancy);
                $('#careerViewStatus').val(obj.status);
            }catch(err){
                console.err(err);
            }
        }
        // summbernot
        $('#summernote').summernote({
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
        $('#careerDescription').summernote({
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
