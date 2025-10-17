<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{('assets/img/logo.jpg')}}" rel="icon">
    <link href="{{('assets/img/logo.jpg')}}" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- GLightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">

    
    <!-- DataTables -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />


    <!-- Template Stylesheet -->
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/datatables-custom.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('layouts.partials.admin-sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                @include('layouts.partials.admin-navbar')
            <!-- Navbar End -->


            @yield('main')

            <!-- Footer Start -->
                @include('layouts.partials.admin-footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('assets/admin/js/datatables-simple-demo.js')}}"></script>
    <script src="{{asset('assets/admin/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script src="{{asset('assets/admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    
    <!-- Template Javascript -->
    <script src="{{asset('assets/admin/js/main.js')}}"></script>
</body>

</html>