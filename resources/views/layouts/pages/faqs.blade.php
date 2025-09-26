
@extends('admin')
@section('title')
    Faqs - ISN-Bafoussam
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
                <a href="{{route('faqs')}}" class="nav-item nav-link active">FAQs</a>
                <a href="{{route('actualites')}}" class="nav-item nav-link">Actualités</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscription<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
        <!-- Bouton visible partout -->
            {{-- <a href="#" class="btn-inscription d-block d-lg-inline-flex">
        <span class="d-none d-sm-inline">Inscription</span> 
        <i class="fa fa-arrow-right"></i>
        </a> --}}

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
            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Quels sont les prérequis pour suivre une formation en numérique ?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Nos formations numériques sont accessibles à tous. Toutefois, une maîtrise de base en informatique est recommandée. Selon le parcours choisi (développement web, bureautique, design, etc.), un test de positionnement pourra être proposé.
                </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Les formations paramédicales sont-elles reconnues ?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Oui, nos formations paramédicales sont encadrées par des professionnels du secteur et conformes aux normes en vigueur. À l’issue, vous recevez une attestation de formation validant vos compétences.
                </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Proposez-vous des cours de langues adaptés aux débutants ?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Bien sûr ! Nos cours de langues (anglais, français, espagnol, allemand, etc.) sont organisés par niveaux : débutant, intermédiaire et avancé. Un test de niveau gratuit est disponible avant inscription.
                </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Quelles sont les modalités de paiement ?
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Nous proposons un paiement flexible : comptant, en plusieurs tranches ou via financement par nos partenaires. Contactez notre service administratif pour plus d’informations.
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    @include('layouts.pages.testimonial')
    <!-- Testimonial End -->
  </div>
</div>

@endsection
