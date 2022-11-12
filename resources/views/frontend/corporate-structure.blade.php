@extends('layouts.app')
@section('title','corporate-structure')
@push('vendor_css')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/dpt-image.css')}}">
@endpush
@push('page_css')

@endpush
@section('content')
    @php
        $start = 0;
         $scroll='';
        $pages = 4;
        $clickPage = 0;
        $employees = getEmployees($start, $pages, 'all');
        $item = count($employees);
        $page = ceil($item/5);
        if (isset($_GET['page'])){
            $clickPage = $_GET['page'];
            $start = ($clickPage-1)*$pages;
            $scroll='ok';
        }
        $employees = getEmployees($start, $pages, 'spe');
    @endphp
        <!-- corporate-structure -->
    <div class="corporate-parallax-window" data-parallax="scroll"
         data-image-src="{{ asset('frontend/assets/images/corporate-structure.webp')}}">
    </div>
    <div class="container">
        <div class="row ">
            <div class=" col-md-12 corporate-info">
                <p>@lang('messages.Career-p') </p>
                <h2>@lang('messages.Career-title') </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($employees as $employee)
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <div class="employee_box">
                        <img src="{{ asset('storage/employee/'.$employee->image)}}" alt="{{ $employee->employee_name}}">
                        <h2>{{ $employee->employee_name}}</h2>
                        <h4 style="font-weight: bold; color: rgba(51,51,51,0.50)">{{ $employee->designation }}</h4>
                        @if($employee->degree != null)
                            <h5 style="font-weight: bold;">{{$employee->degree}}</h5>
                        @endif
                        @if($employee->employee_email != null)
                            <p>{{ $employee->employee_email}}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        @if($item>4)
            <nav aria-label="Page navigation example ">
                <ul class="pagination justify-content-center ">
                    <li class="page-item {{$start===0?'disabled':''}}">
                        <a class="page-link" href="?page={{$clickPage-1}}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only"></span>
                        </a>
                    </li>
                    @for($i= 1; $i <= $page; $i++)
                        <li class="page-item {{$clickPage == $i?'active-pagi':''}}"><a class="page-link"
                                                                                       href="?page={{$i}}">{{$i}}</a>
                        </li>
                    @endfor
                    <li class="page-item {{$start>$item-6?'disabled':''}}">
                        <a class="page-link" href="?page={{$clickPage+1}}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only"></span>
                        </a>
                    </li>
                </ul>
            </nav>
        @endif
        @endsection
        @push('vendor_js')

        @endpush
        @push('page_js')
            <script>
                @if( $scroll==='ok')
                windowScroll();
                @endif
                function windowScroll() {
                    window.scroll({
                        top: 500,
                        behavior: 'smooth'
                    });
                }
            </script>
    @endpush
