
@extends('admin')
@section('title')
    Dahboard Admin
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link active">
        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
    </a>
    @role('superadmin')
        <a href="{{route('trainings.index')}}" class="nav-item nav-link">
            <i class="fa fa-graduation-cap me-2"></i> Formations
        </a>
        <a href="{{route('modules.index')}}" class="nav-item nav-link">
            <i class="fa fa-book-open me-2"></i> Modules
        </a>
    @endrole
    <a href="{{route('lessons.index')}}" class="nav-item nav-link">
        <i class="fa fa-layer-group me-2"></i> UE
    </a>
    <a href="{{route('recentsnews.index')}}" class="nav-item nav-link">
        <i class="fa fa-newspaper me-2"></i> Infos récentes
    </a>
    <a href="{{route('faqs.index')}}" class="nav-item nav-link">
        <i class="fa fa-question-circle me-2"></i> FAQs
    </a>
    <a href="{{route('announces.index')}}" class="nav-item nav-link">
        <i class="fa fa-bullhorn me-2"></i> Annonces
    </a>
    <a href="{{route('testimonials.index')}}" class="nav-item nav-link">
        <i class="fa fa-bullhorn me-2"></i> Témoignages
    </a>
    <a href="{{route('events.index')}}" class="nav-item nav-link">
        <i class="fa fa-calendar-alt me-2"></i> Évènements
    </a>
    <a href="{{route('galleries.index')}}" class="nav-item nav-link">
        <i class="fa fa-images me-2"></i> Galerie
    </a>
@endsection

@section('main')
    <!-- Formation & Statistiques Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-user-graduate fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Inscriptions aujourd'hui</p>
                            <h6 class="mb-0">24</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-users fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Inscriptions totales</p>
                            <h6 class="mb-0">320</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chalkboard-teacher fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Sessions en cours</p>
                            <h6 class="mb-0">5</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-calendar-check fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Événements à venir</p>
                            <h6 class="mb-0">3</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Formation & Statistiques End -->

    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <!-- Annonces récentes -->
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="h-100 bg-secondary p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0 text-primary">Annonces récentes</h6>
                        <a href="#">Voir tout</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <i class="fa fa-bullhorn fa-2x text-primary flex-shrink-0"></i>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Nouvelle session Web Dev</h6>
                                <small>Il y a 10 minutes</small>
                            </div>
                            <span>Inscrivez-vous à notre formation Web Développement...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <i class="fa fa-bullhorn fa-2x text-primary flex-shrink-0"></i>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Stage paramédical</h6>
                                <small>Il y a 1 heure</small>
                            </div>
                            <span>Ouverture des inscriptions pour le stage infirmier...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <i class="fa fa-bullhorn fa-2x text-primary flex-shrink-0"></i>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Nouvel atelier UX/UI</h6>
                                <small>Hier</small>
                            </div>
                            <span>Atelier pratique pour maîtriser la conception UX/UI...</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calendrier -->
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="h-100 bg-secondary p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-primary">Calendrier des formations</h6>
                    </div>
                    <div id="calender"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->

@endsection
