
@extends('master')
@section('title')
    A-propos - ISN-Bafoussam
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
                <a href="{{route('about')}}" class="nav-item nav-link active">Présentation</a>
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
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{route('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
@endsection


@section('content')

<div class="container-xxl py-5">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3 text-uppercase">Qui sommes nous?</h6>
                <h1 class="mb-5">Découvrez notre Origine</h1>
            </div>
        </div>

        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/img/formations/3.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" data-wow-delay="0.5s">
                    <h3 class="mb-4">Bienvenue à l’Institut Supérieur du Numérique et du Paramédical</h3>
                    <p class="mb-4" style="text-align: justify">
                        L'Institut supérieur du Numérique est un Centre de Formation professionnel agrée par le Ministère de l'Emploi et de la Formation Professionnelle selon l'arreté :
                        <strong>N° 000582/MINEFOP/SG/DFOP/SDGSF/CSACD/CBAC 2023 </strong> sous le nom centre de formation professionnel aux métiers du numérique (CFP-MN) orientée dans le domaine des formations dont l'axe principale est porté sur le Numérique (informatique) et des Langues (Allemand, Anglais, Italien, Espagnol, ...)
                        </p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><strong>Formations en Informatique</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><strong>Formations Paramédicales</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><strong>Cours de Langues</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><strong>Certifications Reconnues</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><strong>Experts formateurs</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><strong>Coûts de formation abordables</strong></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3 text-uppercase">
                Pourquoi choisir l'ISNP ?
            </h6>
            <h1 class="mb-5">Notre vision et notre raison d’être</h1>
        </div>

        <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-lg-10">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">

                        <!-- Un constat clair -->
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-lightbulb-fill text-primary fs-1 me-3"></i>
                            <h4 class="fw-bold text-primary">Un constat clair</h4>
                        </div>
                        <p class="mb-4" style="text-align: justify;">
                            Aucun pays ne s’est développé sans un <strong>système éducatif solide</strong>, capable de répondre
                            efficacement aux besoins de son environnement. Le Cameroun, malheureusement, souffre encore
                            d’un retard à ce niveau.
                        </p>

                        <!-- Notre réponse -->
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-flag-fill text-success fs-1 me-3"></i>
                            <h4 class="fw-bold text-success">Notre réponse</h4>
                        </div>
                        <p class="mb-4" style="text-align: justify;">
                            Face à ce défi, <strong>l’Institut Supérieur du Numérique et du Paramédical (ISNP)</strong>
                            s’engage à poser les jalons d’une <strong>révolution éducative</strong> en Afrique, avec des
                            formations ancrées dans l’innovation, la pratique et l’excellence académique.
                        </p>

                        <!-- Notre vision -->
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-people-fill text-warning fs-1 me-3"></i>
                            <h4 class="fw-bold text-warning">Notre vision</h4>
                        </div>
                        <p class="mb-4" style="text-align: justify;">
                            Nous aidons l’école au Cameroun à former une jeunesse <strong>compétente, consciente et
                            entreprenante</strong>, capable de contribuer à une véritable autonomisation économique
                            et au développement durable du pays.
                        </p>

                        <!-- Notre mission -->
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-bullseye text-info fs-1 me-3"></i>
                            <h4 class="fw-bold text-info">Notre mission</h4>
                        </div>
                        <p class="mb-4" style="text-align: justify;">
                            Forger et accompagner l’<strong>excellence numérique africaine</strong>. 
                            Nous sommes déterminés à fournir aux Camerounais et aux Africains des compétences de haut niveau 
                            en informatique et dans le numérique, des domaines stratégiques dans lesquels l’Afrique doit 
                            pouvoir jouer sa partition, au risque de voir son avenir définitivement compromis.
                        </p>
                        <p class="mb-4" style="text-align: justify;">
                            Nous voulons démocratiser une formation technique de qualité en la rendant accessible aux 
                            moins privilégiés afin qu’eux aussi puissent apporter une réelle valeur à la société. 
                            Car nous croyons que chaque jeune, quelle que soit son origine, doit avoir l’opportunité 
                            de participer activement au développement économique et technologique du continent.
                        </p>

                        <!-- Notre engagement -->
                        <div class="d-flex align-items-start">
                            <i class="bi bi-stars text-danger fs-1 me-3"></i>
                            <h4 class="fw-bold text-danger">Notre engagement</h4>
                        </div>
                        <p class="mb-0" style="text-align: justify;">
                            À l’ISNP, nous travaillons chaque jour à bâtir un système éducatif tourné vers l’avenir,
                            en formant des jeunes prêts à relever les défis du Cameroun et du monde.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Counts Section -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3 text-uppercase">
                Nos indicateurs
            </h6>
            <h1 class="mb-5">L’excellence de l’ISNP en chiffres</h1>
        </div>
    </div>
    <div class="container counts light-background">
            <div class="row gy-4 ">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100 text-primary">
                        <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" data-purecounter-prefix="+" class="purecounter"></span>
                        <p class="text-secondary">Étudiants formés</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100 text-primary">
                        <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" data-purecounter-prefix="+" class="purecounter"></span>
                        <p class="text-secondary">Formations proposées</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100 text-primary">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" data-purecounter-prefix="+" class="purecounter"></span>
                        <p class="text-secondary">Formateurs</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100 text-primary">
                        <span data-purecounter-start="0" data-purecounter-end="512" data-purecounter-duration="1" data-purecounter-prefix="+" class="purecounter"></span>
                        <p class="text-secondary">Certifications délivrées</p>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /Counts Section -->

<!-- Testimonial Start -->
    @include('layouts.pages.testimonial')
<!-- Testimonial End -->

@endsection
