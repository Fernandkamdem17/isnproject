
@extends('master')
@section('title')
    Accueil - ISN-Bafoussam
@endsection

@section('content')
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/cat-1.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Formations Numériques</h5>
                                <h1 class="display-3 text-white animated slideInDown">Devenez Expert en Métiers du Digital</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Boostez votre carrière dans le numérique avec des certifications reconnues.</p>
                                <a href="#numerique" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSf7VphuUBwHUXSuiVmsq1lfxZT9La0cxULh2ZeIXwpJ82Dn7w/viewform" target="_blank" class="btn btn-light py-md-3 px-md-5 animated slideInRight">S’inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/cat-1.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Formations Paramédicales</h5>
                                <h1 class="display-3 text-white animated slideInDown">Préparez votre Carrière en Santé</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Préparez-vous aux métiers de la santé avec des certifications professionnelles.</p>
                                <a href="#paramedical" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Découvrir</a>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSf7VphuUBwHUXSuiVmsq1lfxZT9La0cxULh2ZeIXwpJ82Dn7w/viewform" target="_blank" class="btn btn-light py-md-3 px-md-5 animated slideInRight">S’inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('assets/img/cat-1.jpg')}}" alt="Cours de langues">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Cours de Langues</h5>
                            <h1 class="display-3 text-white animated slideInDown">Communiquez avec le Monde</h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                Maîtrisez les langues et ouvrez de nouvelles opportunités.
                            </p>
                            <a href="#langue" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Découvrir</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSf7VphuUBwHUXSuiVmsq1lfxZT9La0cxULh2ZeIXwpJ82Dn7w/viewform" target="_blank" class="btn btn-light py-md-3 px-md-5 animated slideInRight">S’inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Atout Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Atout 1 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="atout-item text-center pt-3 h-100">
                        <div class="p-4 d-flex flex-column justify-content-between h-100">
                            <i class="fa fa-graduation-cap text-primary mb-4" style="font-size: 3rem;"></i>
                            <h5 class="mb-3">Formations Orientées Compétences</h5>
                            <p>Nos formations sont centrées autour de la réalisation de projets concrets.</p>
                        </div>
                    </div>
                </div>

                <!-- Atout 2 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="atout-item text-center pt-3 h-100">
                        <div class="p-4 d-flex flex-column justify-content-between h-100">
                            <i class="fa fa-chalkboard-teacher text-primary mb-4" style="font-size: 3rem;"></i>
                            <h5 class="mb-3">Formateurs Professionnels Chevronnés</h5>
                            <p>Nos formateurs sont des experts triés sur le volet, avec une grande expérience pratique.</p>
                        </div>
                    </div>
                </div>

                <!-- Atout 3 -->
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="atout-item text-center pt-3 h-100">
                        <div class="p-4 d-flex flex-column justify-content-between h-100">
                            <i class="fa fa-certificate text-primary mb-4" style="font-size: 3rem;"></i>
                            <h5 class="mb-3">Certifications Internationales</h5>
                            <p>À l’Institut Supérieur du Numérique, vous pouvez obtenir des certifications reconnues à l’international.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Atout End -->

    

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="text-center">Centre de Formation professionnel Aux Métiers du Numérique & Paramédical</h3>
                    <p class="text-center">Au CFP-MNP, les apprenants sont au centre du programme éducatif. Les formations dispensées sont à 90% pratique pour une meilleure compréhension.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/img/formations/3.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">À propos de nous</h6>
                    <h3 class="mb-4">Bienvenue à l’Institut Supérieur du Numérique et du Paramédical</h3>
                    <p class="mb-4">
                        Nous formons aux métiers de l’informatique, du numérique et du paramédical, 
                        avec des programmes pratiques, encadrés par des experts, et reconnus par des certifications nationales et internationales.
                    </p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Formations en Informatique & Numérique</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Formations Paramédicales</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Experts Formateurs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Certifications Reconnues</p>
                        </div>
                    </div>

                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('web.about')}}">En savoir plus</a>
                </div>

            </div>
        </div>
    </div>



    <!-- Domaines Start -->
    <div class="container-xxl py-5 domain">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Nos Formations</h6>
                <h1 class="mb-5">Découvrez Nos Domaines</h1>
            </div>
            <div class="row g-4">
                <!-- Bloc Numérique -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid w-100" src="{{asset('assets/img/3.jpg')}}" alt="Formation Numérique" style="height: 250px; object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 w-100 py-3">
                            <h5 class="m-0">Informatique & Numérique</h5>
                            <small class="text-primary">{{$numerique}}&nbsp;&nbsp;Spécialités</small>
                        </div>
                    </a>
                </div>

                <!-- Bloc Paramédical -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid w-100" src="{{asset('assets/img/3.jpg')}}" alt="Formation Paramédical" style="height: 250px; object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 w-100 py-3">
                            <h5 class="m-0">Paramédical</h5>
                            <small class="text-primary">{{$paramedical}}&nbsp;&nbsp;Spécialités</small>
                        </div>
                    </a>
                </div>

                <!-- Bloc Langues -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid w-100" src="{{asset('assets/img/3.jpg')}}" alt="Cours de Langues" style="height: 250px; object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 w-100 py-3">
                            <h5 class="m-0">Cours de Langues</h5>
                            <small class="text-primary">{{$langue}}&nbsp;&nbsp;Spécialités</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Domaines Start -->


    {{-- numerique start --}}
    <div class="container-xxl pb-5" id="numerique">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="text-center">Nos Offres de Formations Professionnelles et Certifiantes Accélérées.</h3>
                        <p class="text-center">Nos formations certifiantes en informatique et numérique offrent une immersion rapide et pratique pour acquérir des compétences recherchées par les entreprises.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row g-4">
                        @if ($trainings!=null && count($trainings)>0)
                            @php $delays = [0.1, 0.2, 0.3]; $i = 0; @endphp
                            @foreach ($trainings as $training)
                                @if ($training->category->title=='numérique')
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ $delays[$i] }}s">
                                        <a class="position-relative d-block overflow-hidden" href="">
                                            <img class="img-fluid w-100" src="{{ asset('storage/' . $training->img) }}" alt="{{$training->title}}" >
                                            <div class="text-center my-2">
                                                <a href="{{route('web.training.details', ['training'=>Str::slug($training->slug)])}}" class="btn btn-primary text-white w-50">
                                                    <i class="fas fa-info-circle"></i> Plus d'infos
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                                @php
                                    $i++;
                                    if ($i >= count($delays)) $i = 0;
                                @endphp
                            @endforeach
                        @endif;
                </div>
            </div>
    </div>
    {{-- numerique end --}}


    {{-- paramédical start --}}
    <div class="container-xxl pb-5" id="paramedical">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="text-center">Nos Formations Paramédicales Accélérées : Professionnelles et Certifiantes.</h3>
                        <p class="text-center">Destinées aux étudiants, professionnels de la santé et demandeurs d’emploi, nos formations paramédicales certifiantes offrent une immersion rapide pour acquérir des compétences clés, directement valorisées sur le marché du travail.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row g-4">
                    @if ($trainings!=null && count($trainings)>0)
                        @php $delays = [0.1, 0.2, 0.3]; $i = 0; @endphp
                            @foreach ($trainings as $training)
                                @if ($training->category->title=='paramédicale')
                                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ $delays[$i] }}s">
                                        <a class="position-relative d-block overflow-hidden" href="">
                                            <img class="img-fluid w-100" src="{{ asset('storage/' . $training->img) }}" alt="{{$training->title}}" >
                                            <div class="text-center my-2">
                                                <a href="{{route('web.training.details', ['training'=>Str::slug($training->slug)])}}" class="btn btn-primary text-white w-50">
                                                    <i class="fas fa-info-circle"></i> Plus d'infos
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                                @php
                                    $i++;
                                    if ($i >= count($delays)) $i = 0;
                                @endphp
                            @endforeach
                    @endif;
                </div>
            </div>
    </div>
    {{-- paramédical end --}}


    {{-- langue start --}}
    <div class="container-xxl pb-5" id="langue">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="text-center">Nos Formations En langues étrangères.</h3>
                        <p class="text-center">Nos formations linguistiques vous ouvrent les portes d'un univers de possibilités. Que vous souhaitiez décrocher votre job de rêve, voyager sans frontières ou simplement élargir vos horizons, nos cours intensifs et personnalisés vous permettront d'atteindre la fluidité dont vous rêvez. Parlez le monde.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row g-4">
                    @if ($trainings!=null && count($trainings)>0)
                            @foreach ($trainings as $training)
                                @if ($training->category->title=='langue')
                                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                        <a class="position-relative d-block overflow-hidden" href="">
                                            <img class="img-fluid w-100" src="{{ asset('storage/' . $training->img) }}" alt="{{$training->title}}" >
                                            <div class="text-center my-2">
                                                <a href="{{route('web.training.details', ['training'=>Str::slug($training->slug)])}}" class="btn btn-primary btn-sm text-white w-50">
                                                    <i class="fas fa-info-circle"></i> Plus d'infos
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                    @endif;
                </div>
            </div>
    </div>
    {{-- paramédical end --}}



    <!-- Testimonial Start -->
    @include('layouts.pages.testimonial')
    <!-- Testimonial End -->
    

    <!-- Why Us Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Pourquoi nous choisir?</h6>
                <h1 class="mb-5">09 raisons éssentielles</h1>
            </div>
        </div>

        <div class="container light-background why-us">
            <div>
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="why-us-item item-cyan position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                            </svg>
                            <i class="bi bi-wifi"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Connexion Internet Gratuite</h3>
                        </a>
                        <p>Profitez d'une connexion internet haut débit pour vos recherches et travaux en ligne.</p>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                        <div class="why-us-item item-orange position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                            </svg>
                            <i class="bi-tv"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Vidéos Projecteurs</h3>
                        </a>
                        <p>Chaque salle est équipée de vidéo projecteurs pour un apprentissage visuel interactif.</p>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="why-us-item item-teal position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                            </svg>
                            <i class="bi-laptop"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Laptops & Desktops Disponibles</h3>
                        </a>
                        <p>Des ordinateurs portables sont mis à disposition des apprenants pour les cours pratiques.</p>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="why-us-item item-red position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                            </svg>
                            <i class="bi-compass"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Service d'Orientation</h3>
                        </a>
                        <p>Votre boussole pour naviguer dans le monde des études.L'orientation, c'est notre métier. Votre réussite, notre passion.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                        <div class="why-us-item item-indigo position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bi-cash-stack"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Des prix de formation abordables</h3>
                        </a>
                        <p>Avec l'ISN, vous apprenez sans vous ruiner. Des tarifs qui s'adaptent à votre budget.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="why-us-item item-pink position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="fa fa-user-tie"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Formateurs Qualifiés</h3>
                        </a>
                        <p>Nos formateurs sont des professionnels expérimentés, à votre écoute pour vous accompagner dans votre apprentissage.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="why-us-item item-deep-orange position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bi-tools"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Des formations axées sur la pratique</h3>
                        </a>
                        <p>Développez vos savoir-faire grâce à des exercices concrets et des projets réels.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                        <div class="why-us-item item-deep-purple position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="bi-award"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Une Attestation de fin de formation</h3>
                        </a>
                        <p>Obtenez votre attestation de formation, document officiel attestant de vos nouvelles compétences et valorisez votre parcours professionnel.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Why Us Item -->

                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="why-us-item item-purple position-relative">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                            </svg>
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Polo & Jogging  Offerts à l'inscription</h3>
                        </a>
                        <p>En vous inscrivant, recevez gratuitement un polo et d'un jogging à votre taille.Profitez de notre offre spéciale : un polo personnalisé offert pour toute inscription.</p>
                        <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Why Us Item -->

                </div>
            </div>
        </div>
    </div>
@endsection







<!-- Font Awesome (icône WhatsApp) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
