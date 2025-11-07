<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/logo.jpg')}}" rel="icon">
    <link href="{{asset('assets/img/logo.jpg')}}" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- GLightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    <!-- Featherlight CSS -->
    <link href="https://cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" rel="stylesheet">

     <!--Select2 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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

    <!-- Choices.js CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/choices-custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js"></script>
    <script src="{{asset('assets/admin/js/datatables-simple-demo.js')}}"></script>
    <script src="{{asset('assets/admin/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    
    
    <!-- Template Javascript -->
    <script src="{{asset('assets/admin/js/main.js')}}"></script>

    <!-- Choices.js JS -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const trainingSelect = document.getElementById('training_id');

            const choices = new Choices(trainingSelect, {
                searchEnabled: true,         // active la recherche
                itemSelectText: '',          // supprime le texte "Press to select"
                placeholder: true,
                placeholderValue: '--Sélectionner une formation--',
                searchPlaceholderValue: 'Tapez pour rechercher...',
                shouldSort: false, // désactive le tri automatique
                noResultsText: 'Aucun résultat trouvé'      
            });
        });
    </script>


</body>

</html>