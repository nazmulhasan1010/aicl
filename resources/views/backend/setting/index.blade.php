@extends('layouts.backend.app')
@section('title','Company Information')
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
                    <li class="breadcrumb-item active" aria-current="page">Company Information</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Company Information</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Company Information</h4>
                    <hr/>
                    <form action="{{ route('admin.setting.update',$info->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Company Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Company Email" autocomplete="off" value="{{ $info->company_email}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="mobile">Company Mobile</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Company Mobile" autocomplete="off" value="{{ $info->company_mobile}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Company Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Company Phone" autocomplete="off" value="{{ $info->company_phone}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fax">Company Fax</label>
                                    <input type="text" id="fax" name="fax" class="form-control" placeholder="Company Fax" autocomplete="off" value="{{ $info->company_fax}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Company Logo</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="address">Company Address</label>
                                <textarea class="form-control" name="address" id="address" cols="30" rows="4">{{ $info->company_address}}</textarea>
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