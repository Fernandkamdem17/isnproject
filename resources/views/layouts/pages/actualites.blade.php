
@extends('admin')
@section('title')
    Actualités - ISN-Bafoussam
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
                <a href="{{route('actualites')}}" class="nav-item nav-link active">Actualités</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Inscription<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
@endsection

@section('content')

    <!-- Actualités / Annonces -->
    <div class="container-xxl py-5">
        <div class="container text-center  wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-primary px-3 text-uppercase">Annonces</h6>
            <h1 class="mb-5">Soyez au courant de l’actualité de notre centre en temps réel</h1>
        </div>

        <div class="container announces" >
            <div class="row">
                <!-- Carte 1 -->
                <div class="col-md-4 d-flex align-items-stretch wow zoomIn" data-wow-delay="0.1s">
                    <div class="card shadow-sm">
                        <div class="card-img">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="Rentrée Académique ISNP">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Rentrée Académique 2025-2026</h5>
                            <p class="card-text">Lancement officiel des cours pour la nouvelle année académique au sein de l’ISNP, pour nos filières numérique, paramédical et langues étrangères.</p>
                            <p class="text-muted mt-2 text-end text-primary">
                                <small>Publié le : 22/09/2025 - 10h00</small>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 2 -->
                <div class="col-md-4 d-flex align-items-stretch wow zoomIn" data-wow-delay="0.2s">
                    <div class="card shadow-sm">
                        <div class="card-img">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="Séminaire Marketing Digital">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Séminaire Marketing Digital</h5>
                            <p class="card-text">Nos étudiants en marketing et communication découvrent les dernières stratégies digitales pour booster la visibilité des entreprises.</p>
                            <p class="text-muted mt-2 text-end text-primary">
                                <small>Publié le : 22/09/2025 - 10h00</small>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 3 -->
                <div class="col-md-4 d-flex align-items-stretch wow zoomIn" data-wow-delay="0.3s">
                    <div class="card shadow-sm">
                        <div class="card-img">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="Atelier Langues">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Atelier Pratique en Langues Étrangères</h5>
                            <p class="card-text">Session interactive pour perfectionner l’anglais et le français professionnel de nos étudiants et améliorer leurs compétences de communication.</p>
                            <p class="text-muted mt-2 text-end text-primary">
                                <small>Publié le : 22/09/2025 - 10h00</small>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 4 -->
                <div class="col-md-4 d-flex align-items-stretch wow zoomIn" data-wow-delay="0.4s">
                    <div class="card shadow-sm">
                        <div class="card-img">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="Atelier Langues">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Atelier Pratique en Langues Étrangères</h5>
                            <p class="card-text">Session interactive pour perfectionner l’anglais et le français professionnel de nos étudiants et améliorer leurs compétences de communication.</p>
                            <p class="text-muted mt-2 text-end text-primary">
                                <small>Publié le : 22/09/2025 - 10h00</small>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 5 -->
                <div class="col-md-4 d-flex align-items-stretch wow zoomIn" data-wow-delay="0.5s">
                    <div class="card shadow-sm">
                        <div class="card-img">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="Atelier Langues">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Atelier Pratique en Langues Étrangères</h5>
                            <p class="card-text">Session interactive pour perfectionner l’anglais et le français professionnel de nos étudiants et améliorer leurs compétences de communication.</p>
                            <p class="text-muted mt-2 text-end text-primary">
                                <small>Publié le : 22/09/2025 - 10h00</small>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Carte 6 -->
                <div class="col-md-4 d-flex align-items-stretch wow zoomIn" data-wow-delay="0.6s">
                    <div class="card shadow-sm">
                        <div class="card-img">
                            <img src="{{asset('assets/img/3.jpg')}}" alt="Atelier Langues">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Atelier Pratique en Langues Étrangères</h5>
                            <p class="card-text">Session interactive pour perfectionner l’anglais et le français professionnel de nos étudiants et améliorer leurs compétences de communication.</p>
                            <p class="text-muted mt-2 text-end text-primary">
                                <small>Publié le : 22/09/2025 - 10h00</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Événements -->
    <div class="container-xxl py-5">
        <div class="container text-center  wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-primary px-3 text-uppercase">Événements</h6>
            <h1 class="mb-5">Revivez nos événements en vidéos</h1>
        </div>

        <div class="container events">

            <div class="row gy-4 gx-5">
                <div class="col-lg-6 position-relative align-self-start wow zoomIn" data-wow-delay="0.1s">
                    <img src="assets/img/3.jpg" class="img-fluid" alt="">
                    <a href="#" class="glightbox pulsating-play-btn"></a>
                    <div class="video-caption text-center mt-2">
                        <h5>Atelier Web Design</h5>
                        <p class="text-muted">Découvrez les bases du design web et des interfaces modernes.</p>
                    </div>
                </div>

                <div class="col-lg-6 position-relative align-self-start wow zoomIn" data-wow-delay="0.2s">
                    <img src="assets/img/3.jpg" class="img-fluid" alt="">
                    <a href="#" class="glightbox pulsating-play-btn"></a>
                    <div class="video-caption text-center mt-2">
                        <h5>Atelier Web Design</h5>
                        <p class="text-muted">Découvrez les bases du design web et des interfaces modernes.</p>
                    </div>
                </div>
                <div class="col-lg-6 position-relative align-self-start wow zoomIn" data-wow-delay="0.3s">
                    <img src="assets/img/3.jpg" class="img-fluid" alt="">
                    <a href="#" class="glightbox pulsating-play-btn"></a>
                    <div class="video-caption text-center mt-2">
                        <h5>Atelier Web Design</h5>
                        <p class="text-muted">Découvrez les bases du design web et des interfaces modernes.</p>
                    </div>
                </div>

                <div class="col-lg-6 position-relative align-self-start wow zoomIn" data-wow-delay="0.4s">
                    <img src="assets/img/3.jpg" class="img-fluid" alt="">
                    <a href="#" class="glightbox pulsating-play-btn"></a>
                    <div class="video-caption text-center mt-2">
                        <h5>Atelier Web Design</h5>
                        <p class="">Découvrez les bases du design web et des interfaces modernes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Galerie -->
    <div class="container-xxl py-5">
        <div class="container text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-primary px-3 text-uppercase">Galerie</h6>
            <h1 class="mb-5">Découvrez la vie de notre centre en images</h1>
        </div>

        <div class="container gallery">

            <div class="row g-0">

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.2s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.5s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.7s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.8s">
                    <div class="gallery-item">
                    <a href="{{asset('assets/img/3.jpg')}}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{asset('assets/img/3.jpg')}}" alt="" class="img-fluid">
                    </a>
                    </div>
                </div><!-- End Gallery Item -->
            </div>

        </div>
    </div>


@endsection
