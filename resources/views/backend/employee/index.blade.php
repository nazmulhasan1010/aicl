@extends('layouts.backend.app')
@section('title','Employee')
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
                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Employees</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Employees
                            <button class="btn btn-info btn-xs float-right" data-toggle="modal"
                                    data-target="#addNewEmployee">Add New
                            </button>
                        </h4>
                        <p class="sub-header">

                        </p>

                        {{-- <table id="basic-datatable" class="table dt-responsive nowrap"> --}}
                        <table class="table dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Position</th>
                                <th>Designation</th>
                                <th>Address</th>
                                <th>Join Date</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($employees as $key=>$employee)
                                <tr>
                                    <td>
                                        <textarea hidden="hidden"
                                                  id="catpro{{$employee->id}}">{{ json_encode($employee) }}</textarea>
                                        {{ $key+1 }}
                                    </td>
                                    <td><img src="{{ asset('storage/employee/'.$employee->image)}}" alt="" width="100px"
                                             height="60px">
                                    </td>

                                    <td>
                                        {{ $employee->employee_name}}
                                    </td>
                                    <td>
                                        {{ $employee->employee_email}}
                                    </td>
                                    <td>
                                        {{ $employee->employee_phone}}
                                    </td>
                                    <td>
                                        {{ $employee->position}}
                                    </td>
                                    <td>
                                        {{ $employee->designation}}
                                    </td>
                                    <td>
                                        {{ \Str::limit($employee->employee_address,50)}}
                                    </td>
                                    <td style="text-align: center">
                                        {{ date('d-M-Y',strtotime( $employee->join_date))}}
                                    </td>
                                    <td style="text-align: center">
                                        @if ($employee->status == true)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>

                                    <td style="text-align: center">

                                        <a href="{{ route('admin.employee.edit',$employee->id)}}"
                                           class="btn btn-info btn-sm"
                                           onclick="javascript:updateEmployee({{$employee->id}})" data-toggle="modal"
                                           data-target="#editEmployee">
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
                                                onclick="deleteItem({{$employee->id }})">
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
                                        <form id="delete-form-{{$employee->id }}"
                                              action="{{ route('admin.employee.destroy',$employee->id) }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--  Employee Add -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="addNewEmployee" id="addNewEmployee" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add New Employee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.employee.store') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Employee Name <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" id="name" name="name" class="form-control"
                                                               placeholder="Employee Name" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Employee Phone <span
                                                                style="color: red"></span></label>
                                                        <input type="text" id="phone" name="phone" class="form-control"
                                                               placeholder="Employee Phone" autocomplete="off" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Employee Email <span
                                                                style="color: red"></span></label>
                                                        <input type="email" id="email" name="email" class="form-control"
                                                               placeholder="Employee Email" autocomplete="off" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Address <span
                                                                style="color: red"></span></label>
                                                        <input type="text" id="address" name="address"
                                                               class="form-control" placeholder="Address"
                                                               autocomplete="off" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="designation">Designation <span
                                                                style="color: red">*</span></label>
                                                        <input type="text" id="designation" name="designation"
                                                               class="form-control" placeholder="Designation"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="position">Position <span style="color: red">*</span></label>
                                                        <input type="number" id="position" name="position"
                                                               class="form-control" placeholder="position"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="join">Join Date</label>
                                                        <input type="date" id="join" name="join" class="form-control"
                                                               value="{{ date('Y-m-d')}}" placeholder="2021-04-01"
                                                               autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Image <span
                                                                style="color: red">*</span></label>
                                                        <input type="file" id="image" name="image" class="form-control"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="degree">Degree Title<span style="color: red"></span></label>
                                                        <input type="text" id="degree" name="degree"
                                                               class="form-control" placeholder="Eg: MSc in Chemistry"
                                                               autocomplete="off" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group float-right">
                                                        <label for=""></label>
                                                        <button type="button" data-dismiss="modal"
                                                                class=" btn btn-secondary waves-effect">Cancel
                                                        </button>
                                                        <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light mr-1 pull-right">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Employee Add End -->
                        <!--  Employee Edit -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="editEmployee" id="editEmployee" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="addNewEmployee">Edit Employee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.employee.update','1') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EmployeeName">Employee Name</label>
                                                        <input type="text" id="EmployeeName" name="name"
                                                               class="form-control" placeholder="Employee Name"
                                                               autocomplete="off" required>
                                                        <input type="hidden" name="employee_id" id="EmployeeId">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EmployeePhone">Employee Phone</label>
                                                        <input type="text" id="EmployeePhone" name="phone"
                                                               class="form-control" placeholder="Employee Phone"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EmployeeEmail">Employee Email</label>
                                                        <input type="email" id="EmployeeEmail" name="email"
                                                               class="form-control" placeholder="Employee Email"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EmployeeAddress">Address</label>
                                                        <input type="text" id="EmployeeAddress" name="address"
                                                               class="form-control" placeholder="Address"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EmployeeDesignation">Designation</label>
                                                        <input type="text" id="EmployeeDesignation" name="designation"
                                                               class="form-control" placeholder="Designation"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EmployeePosition">Position <span style="color: red">*</span></label>
                                                        <input type="number" id="EmployeePosition" name="position"
                                                               class="form-control" placeholder="Position"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="EmployeeJoin">Join Date</label>
                                                        <input type="date" id="EmployeeJoin" name="join"
                                                               class="form-control" value="{{ date('Y-m-d')}}"
                                                               placeholder="2021-04-01" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="degreeEdit">Degree Title<span style="color: red"></span></label>
                                                        <input type="text" id="degreeEdit" name="degreeEdit"
                                                               class="form-control" placeholder="Eg: MSc in Chemistry"
                                                               autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Status</label>
                                                        <select name="status" id="EmployeeStatus" class="form-control">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="file" id="image" name="image" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group float-right">
                                                        <button type="button" data-dismiss="modal" class=" btn btn-secondary
                                                    waves-effect"> Cancel
                                                        </button>
                                                        <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light mr-1  pull-right">
                                                            Update
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Employee Edit End -->
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
        // Edit Employee
        function updateEmployee(catid) {
            let info = $('#catpro' + catid).val();
            try {
                let obj = JSON.parse(info);
                $('#EmployeeId').val(obj.id);
                $('#EmployeeName').val(obj.employee_name);
                $('#EmployeeEmail').val(obj.employee_email);
                $('#EmployeePhone').val(obj.employee_phone);
                $('#degreeEdit').val(obj.degree);
                $('#EmployeeAddress').val(obj.employee_address);
                $('#EmployeeDesignation').val(obj.designation);
                $('#EmployeePosition').val(obj.position);
                $('#EmployeeJoin').val(obj.join_date);
                $('#EmployeeStatus').val(obj.status);
            } catch (err) {
                console.err(err);
            }
        }
    </script>
@endpush
