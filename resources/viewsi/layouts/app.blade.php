<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}
    <!-- Bangla Font -->
    {{-- <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet"> --}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo.webp')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
    <!-- FontAwsome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css')}} ">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
    <script src="{{ asset('frontend/assets/js/bundle.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- responsive style -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">
    <!-- laravel-toastr css -->
    <link href="{{ asset('backend/assets/css/toastr.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('frontend/assets/js/parallax.min.js')}}"></script>
    @stack('vendor_css')
    @stack('page_css')
</head>
<body>
    <!-- nav bar -->
    @include('layouts.partials.navbar')
    <!-- main content -->
    @yield('content')
    <!-- footer -->
    @include('layouts.partials.footer')
    <!-- Optional JavaScript; choose one of the two! -->
    {{-- <script src="{{ asset('frontend/assets/css/custom.js')}}"></script> --}}
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    {{-- <script src="{{ asset('frontend/assets/js/jquery-3.5.1.slim.min.js')}}"></script> --}}
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- laravel-toastr css -->
    <script src="{{ asset('backend/assets/js/toastr.min.js')}}"> </script>
    {!! Toastr::message() !!}
        <script>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error('{{ $error }}','Error',{
                    closeButton:true,
                    progressBar: true,
                });
                @endforeach
            @endif
        </script>
    @stack('vendor_js')
    @stack('page_js')

</body>
</html>
