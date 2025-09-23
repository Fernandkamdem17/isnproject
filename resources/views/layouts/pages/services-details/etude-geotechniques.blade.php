@extends('layouts.pages.service-detail')

@section('sub-title')
    Études Géotechniques
@endsection
@section('service-detail')
    <div id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">

                <!-- Colonne gauche : liste des services + contact -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                    <h4>Liste des Services</h4>
                    <div class="services-list">
                        <a href="{{ route('etude-geotechnique.details') }}" class="active"><i class="bi bi-arrow-right-circle"></i><span>Études Géotechniques</span></a>
                        <a href="{{ route('controles-essais.details') }}#"><i class="bi bi-arrow-right-circle"></i><span>Contrôles & Essais</span></a>
                        <a href="{{ route('realisation-btp.details') }}"><i class="bi bi-arrow-right-circle"></i><span>Réalisation BTP</span></a>
                        <a href="{{ route('sondages-prospections.details') }}"><i class="bi bi-arrow-right-circle"></i><span>Sondages & Prospections</span></a>
                        <a href="{{ route('etude-des-materiaux.details') }}"><i class="bi bi-arrow-right-circle"></i><span>Études des Matériaux</span></a>
                        <a href="{{ route('formation-expertise.details') }}"><i class="bi bi-arrow-right-circle"></i><span>Formation & Expertise</span></a>
                    </div>
                    </div><!-- End Services List -->

                    <div class="service-box">
                    <h4>Obtenez votre devis gratuit</h4>
                    <div class="contact-catalog">
                        <div class="col-auto text-center">
                            <a href="{{ route('contact') }}" class="btn btn-secondary py-3 px-5">
                                <i class="fas fa-file-invoice-dollar me-2"></i> Obtenir un devis gratuit
                            </a>
                        </div>
                    </div>
                    </div>

                    <div class="help-box d-flex flex-column justify-content-center align-items-center mt-3">
                    <i class="bi bi-headset help-icon"></i>
                    <h4>Besoin d'aide ?</h4>
                    <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+237 675 30 16 20 / +237 699 34 71 19 </span></p>
                    <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:cerbtpsarl@gmail.com">cerbtpsarl@gmail.com</a></p>
                    </div>

                </div>

                <!-- Colonne droite : contenu du service -->
                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('assets/img/31.jpg')}}" alt="Études Géotechniques" class="img-fluid services-img">
                    <h3>Études Géotechniques pour des fondations solides et durables</h3>
                    <p>
                    Nos études géotechniques permettent d’analyser le sol et les fondations afin d’assurer la sécurité et la pérennité de vos projets de construction.
                    </p>
                    <ul>
                    <li><i class="bi bi-check-circle"></i> <span>Étude complète du sol (forages et sondages)</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Analyse mécanique et chimique du sol</span></li>
                    <li><i class="bi bi-check-circle"></i> <span>Recommandations pour les fondations et structures adaptées</span></li>
                    </ul>
                    <p>
                    Nous fournissons un rapport détaillé comprenant les résultats des tests, les recommandations techniques et les solutions adaptées à votre projet.
                    </p>
                    <p>
                    Nos ingénieurs expérimentés vous accompagnent depuis l’analyse initiale jusqu’à la mise en œuvre sur site, garantissant des constructions sûres et conformes aux normes en vigueur.
                    </p>
                </div>

                </div>

            </div>

    </div>
@endsection