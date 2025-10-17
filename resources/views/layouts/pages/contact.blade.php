
@extends('master')
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
            <a href="{{route('login')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
@endsection

@section('content')

<!-- Contact Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Contactez-Nous</h6>
                <h1 class="mb-5">Votre avis compte</h1>
            </div>
        </div>

        <div class="container contact">
            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.6564810046293!2d10.4149228!3d5.4689741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f9bfb8779b5b9%3A0x34757cedb5e20b2d!2sINSTITUT%20SUPERIEUR%20DU%20NUMERIQUE!5e0!3m2!1sfr!2scm!4v1758760840511!5m2!1sfr!2scm" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->
            <div class="row gy-4">
                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Votre Nom" required="">
                        </div>

                        <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Votre Email" required="">
                        </div>

                        <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Sujet" required="">
                        </div>

                        <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                    </form>
                </div><!-- End Contact Form -->

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Localisations</h3>
                            <p>Place des fêtes de Bafoussam en face de la CAPLAMI;</p>
                            <p>Bandjoun, Immeuble PMUC</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Applez Nous</h3>
                            <p>(+237) 659 717 141;</p>
                            <p>(+237) 682 628 659;</p>
                            <p>(+237) 659 717 141</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>isnbafoussam@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
            </div>
        </div>
    </div>
<!-- Contact End -->

@endsection
