@extends('layouts.backend.app')
@section('title','Update Profile')
@push('vendor_css')
    
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
                    <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Update Profile</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Update Profile</h4>
                    <hr/>
                    <form action="{{ route('admin.update-profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name <span style="color: red">*</span></label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" autocomplete="off" value="{{ $info->name}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email <span style="color: red">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" autocomplete="off" value="{{ $info->email}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mobile">Mobile Number <span style="color: red">*</span></label>
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" autocomplete="off" value="{{ $info->phone_number}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address </label>
                                    <textarea name="address" id="address" cols="30" rows="3" class="form-control">{{ $info->address}}</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mt-3 float-right">Update</button>
                                </div>
                            </div>
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
    
@endpush
@push('page_js')
    
@endpush