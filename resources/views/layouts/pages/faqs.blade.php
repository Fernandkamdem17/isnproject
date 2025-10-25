
@extends('master')
@section('title')
    Faqs - ISN-Bafoussam
@endsection

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{route('web.home')}}" class="navbar-brand logo d-flex align-items-center px-4 px-lg-5">
            <img class="d-flex flex-column align-items-center justify-content-center" src="{{asset('assets/img/logo.png')}}" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('web.home')}}" class="nav-item nav-link">Accueil</a>
                <a href="{{route('web.about')}}" class="nav-item nav-link">Présentation</a>
                <div class="nav-item dropdown">
                    <a href="{{ route('web.formations') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Formations</a>
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
                    <a href="{{ route('web.formations') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Langues</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item">Anglais</a>
                        <a href="#" class="dropdown-item">Allemand</a>
                        <a href="#" class="dropdown-item">Italien</a>
                        <a href="#" class="dropdown-item">Espagnol</a>
                    </div>
                </div>
                <a href="{{route('web.faqs')}}" class="nav-item nav-link active">FAQs</a>
                <a href="{{route('web.actualites')}}" class="nav-item nav-link">Actualités</a>
                <a href="{{route('web.contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{route('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
        </div>

    </nav>
@endsection


@section('content')

   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="text-center mb-5">
      <h6 class="section-title bg-white text-center text-primary px-3">FAQs</h6>
      <h1 class="mb-4">Questions Fréquemment Posées</h1>
      <p class="text-muted">Retrouvez ici les réponses aux questions les plus courantes sur nos formations numériques, paramédicales et cours de langues.</p>
    </div>

    <div class="container">
        <div class="accordion faq-accordion" id="accordionExample">
            @if($faqs && $faqs->count() > 0)
                @foreach ($faqs as $index => $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse{{ $index }}" 
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                    aria-controls="collapse{{ $index }}">
                                {{ $faq->title }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}" 
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                            aria-labelledby="heading{{ $index }}" 
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $faq->description }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center text-muted py-4">Aucune question disponible pour le moment.</p>
            @endif
        </div>
    </div>


    <!-- Testimonial Start -->
    @include('layouts.pages.testimonial')
    <!-- Testimonial End -->
  </div>
</div>

@endsection
