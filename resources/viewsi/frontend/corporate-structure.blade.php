@extends('layouts.app')
@section('title','corporate-structure')
@push('vendor_css')
    
@endpush
@push('page_css')
    
@endpush
@section('content')
 <!-- corporate-structure -->
 <div class="corporate-parallax-window" data-parallax="scroll" data-image-src="{{ asset('frontend/assets/images/corporate-structure.webp')}}">
 </div>
 <div class="container">
   <div class="row">
     <div class="col-sm-12 col-md-12 col-lg-12 corporate-info">
       <p>Committed to Quality</p>
       <h1>EXPERIENCE ATHERTON GROUP</h1>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-1 col-md-1 col-lg-1"></div>
      @foreach ($employees as $employee)
      <div class="col-sm-5 col-md-5 col-lg-5">
        <div class="employee_box">
            <img src="{{ asset('storage/employee/'.$employee->image)}}" alt="{{ $employee->employee_name}}">
            <h2>{{ $employee->employee_name}}</h2>
            <h6>{{ $employee->designation }}</h6>
            <p>{{ $employee->employee_email}}</p>
        </div>
      </div>
      @endforeach
   </div>
 </div>

@endsection
@push('vendor_js')
    
@endpush
@push('page_js')
    
@endpush