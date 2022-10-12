@extends('layouts.backend.app')
@section('title','Update Password')
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
                    <li class="breadcrumb-item active" aria-current="page">Update Password</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Update Password</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Update Password</h4>
                    <hr/>
                    <form action="{{ route('admin.update-password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="old-password">Old Password: <span style="color:red">*</span></label>
                                <input type="password" name="old_password" placeholder=" Old Password :" id="old-password" class="form-control" required/>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label  for="input-password">Password: <span style="color:red">*</span></label>
                                    <input type="password" name="password" placeholder="Password" id="input-password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label  for="password-confirm">Confirm Password: <span style="color:red">*</span></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
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