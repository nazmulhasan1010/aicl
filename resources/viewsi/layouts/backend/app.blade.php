<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
            {!! SEO::generate() !!}
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo.webp')}}">
        <!-- plugins -->
        <link href="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- laravel-toastr css -->
        <link href="{{ asset('backend/assets/css/toastr.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- sweetalert2 css -->
        <link href="{{ asset('backend/assets/css/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Custom css -->
        <link href="{{ asset('backend/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
        @stack('vendor_css')
        @stack('page_css')
    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            @include('layouts.backend.partials.topbar')
            <!-- end Topbar -->
            <!-- Left Sidebar Start -->
            @include('layouts.backend.partials.left-sidebar')
            <!-- end Left Sidebar -->

            <!-- Start Page Content here -->
            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
                <!-- Footer Start -->
                @include('layouts.backend.partials.footer')
                <!-- Footer Start -->
            </div>
            <!-- End Page content -->
           
        </div>
        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js')}}"></script>
        <!-- laravel-toastr css -->
        {{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
        <script src="{{ asset('backend/assets/js/toastr.min.js')}}"></script>
        <!-- sweetalert2 css -->
        <script src="{{ asset('backend/assets/js/sweetalert2.min.js')}}"></script>
        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js')}}"></script>
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

            // 
        // Delete Item
        function deleteItem(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-danger',
                cancelButtonClass: 'btn btn-success',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
        </script>
        @stack('vendor_js')
        @stack('page_js')
     </body>
 </html>