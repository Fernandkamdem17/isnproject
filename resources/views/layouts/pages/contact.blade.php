
@extends('admin')
@section('title')
    Contact - ISN-Bafoussam
@endsection

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{route('home')}}" class="navbar-brand logo d-flex align-items-center px-4 px-lg-5">
            <img class="d-flex flex-column align-items-center justify-content-center" src="{{asset('assets/img/logo.png')}}" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('home')}}" class="nav-item nav-link">Accueil</a>
                <a href="{{route('about')}}" class="nav-item nav-link">A propos</a>
                <div class="nav-item dropdown">
                    <a href="{{ route('formations') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Formations</a>
                    <div class="dropdown-menu fade-down m-0">
                        <!-- Section Numérique -->
                        <h6 class="dropdown-header">Numérique</h6>
                        <a href="#" class="dropdown-item">Développement Web</a>
                        <a href="#" class="dropdown-item">Cybersécurité</a>
                        <a href="#" class="dropdown-item">Data Science</a>

                        <div class="dropdown-divider"></div>

                        <!-- Section Paramédical -->
                        <h6 class="dropdown-header">Paramédical</h6>
                        <a href="#" class="dropdown-item">Infirmier</a>
                        <a href="#" class="dropdown-item">Aide-soignant</a>
                        <a href="#" class="dropdown-item">Pharmacie</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ route('formations') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Langues</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item">Anglais</a>
                        <a href="#" class="dropdown-item">Allemand</a>
                        <a href="#" class="dropdown-item">Italien</a>
                        <a href="#" class="dropdown-item">Espagnol</a>
                    </div>
                </div>
                <a href="{{route('faqs')}}" class="nav-item nav-link">FAQs</a>
                <a href="{{route('actualites')}}" class="nav-item nav-link">Actualités</a>
                <a href="{{route('contact')}}" class="nav-item nav-link active">Contact</a>
            </div>
            <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscription<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
@endsection

@section('content')

  <!-- Contact Start -->

<!-- Contact End -->

@endsection
