
@extends('admin')
@section('title')
    Dahboard Admin
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link active">
                        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
                    </a>
                    <a href="{{route('admin.trainings.index')}}" class="nav-item nav-link">
                        <i class="fa fa-graduation-cap me-2"></i> Formations
                    </a>
                    <a href="admin.modules.index" class="nav-item nav-link">
                        <i class="fa fa-book-open me-2"></i> Modules
                    </a>
                    <a href="admin.ues.index" class="nav-item nav-link">
                        <i class="fa fa-layer-group me-2"></i> Unités d'enseignement
                    </a>
                    <a href="admin.recentsnews.index" class="nav-item nav-link">
                        <i class="fa fa-newspaper me-2"></i> Infos récentes
                    </a>
                    <a href="admin.faqs.index" class="nav-item nav-link">
                        <i class="fa fa-question-circle me-2"></i> FAQs
                    </a>
                    <a href="admin.announces.index" class="nav-item nav-link">
                        <i class="fa fa-bullhorn me-2"></i> Annonces
                    </a>
                    <a href="admin.events.index" class="nav-item nav-link">
                        <i class="fa fa-calendar-alt me-2"></i> Évènements
                    </a>
                    <a href="admin.galleries.index" class="nav-item nav-link">
                        <i class="fa fa-images me-2"></i> Galerie
                    </a>
@endsection

@section('main')
    <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-secondary p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0 text-primary">Annonces récentes</h6>
                                <a href="">Voir tout</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset('assets/admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset('assets/admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset('assets/admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="{{asset('assets/admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-6">
                        <div class="h-100 bg-secondary p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0 text-primary">Calendrier</h6>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->
@endsection
