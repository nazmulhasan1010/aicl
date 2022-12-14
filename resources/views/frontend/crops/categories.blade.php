@extends('layouts.app')
@section('title','Crops')
@push('vendor_css')
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/item.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/singleProduct.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/crops/responsive.css')}}">
@endpush
@push('page_css')

@endpush
@section('content')
    <!-- header section-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 pt-3" style="height: 40px;">
                <h2 class="text-center" style="margin-bottom:20px !important;">CROPS</h2>
                <hr>
            </div>
        </div>
    </div>

    <!-- menu item section -->

    <div class="container-fluid">
        <div class="row flex-row justify-content-start m-2 mt-5">
            @php
                $cropsCat = getCropsData('','','all');
            @endphp
            @foreach($cropsCat as $categories)
                <div class="col-md-2 col-6 col-sm-4 hoverCircle">
                    <a href="{{route('disorder',$categories->id)}}">
                        <img src="{{asset('storage/cropcat/'.$categories->image)}}" alt="" class="img-fluid" ><br>
                        <label>
                            <strong>
                                @php
                                    if (Session::get('locale')==='bn'){
                                            echo $categories->category_name_bn;
                                        }else{
                                            echo $categories->category_name;
                                        }
                                @endphp
                            </strong>
                        </label>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

@endsection
@push('vendor_js')

@endpush
@push('page_js')
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endpush
