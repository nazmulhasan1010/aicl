@extends('layouts.app')
@section('title','')
@push('vendor_css')

@endpush
@push('page_css')

@endpush
@section('content')
<div class="container">
    <div class="col-md-12 mt-5">
        <div class="row">
            <aside id="column-right" class="col-sm-3 hidden-xs">
                 @include('layouts.partials.user-sidebar');
            </aside>
            <div id="content" class="col-sm-9">
                <h1>@lang('messages.Address')</h1>
                <hr/>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form action="{{ route('user.address-update')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">@lang('messages.Address')</label>
                                <textarea name="address" id="address" rows="5" class="form-control">{{ $user->address }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('messages.Update')</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@push('vendor_js')

@endpush
@push('page_js')

@endpush
