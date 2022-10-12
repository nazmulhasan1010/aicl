@extends('layouts.app')
@section('title','financial-partners')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
<div class="financial-partners">
    <div class="container partners">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h3>@lang('messages.Financial-partners')</h3>
        </div>
        @foreach ($partners as $partner)
          <div class="col-sm-12 col-md-12 col-lg-12 partners_box">
            <img src="{{ asset('storage/partner/'.$partner->image)}}" class="img-fluid" alt="islami_bank">
          </div>
        @endforeach

      </div>
    </div>
  </div>

@endsection
@push('vendor_js')

@endpush
@push('page_js')

@endpush
