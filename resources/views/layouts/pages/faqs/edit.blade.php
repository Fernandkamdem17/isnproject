
@extends('admin')
@section('title')
    Edit Training
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link ">
                        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
                    </a>
                    <a href="{{route('admin.trainings')}}" class="nav-item nav-link active">
                        <i class="fa fa-graduation-cap me-2 active"></i> Formations
                    </a>
                    <a href="#" class="nav-item nav-link">
                        <i class="fa fa-book-open me-2"></i> Modules
                    </a>
                    <a href="#" class="nav-item nav-link">
                        <i class="fa fa-layer-group me-2"></i> Unités d'enseignement
                    </a>
                    <a href="#" class="nav-item nav-link">
                        <i class="fa fa-newspaper me-2"></i> Infos récentes
                    </a>
                    <a href="#" class="nav-item nav-link">
                        <i class="fa fa-question-circle me-2"></i> FAQs
                    </a>
                    <a href="#" class="nav-item nav-link">
                        <i class="fa fa-bullhorn me-2"></i> Annonces
                    </a>
                    <a href="#" class="nav-item nav-link">
                        <i class="fa fa-calendar-alt me-2"></i> Évènements
                    </a>
                    <a href="#" class="nav-item nav-link">
                        <i class="fa fa-images me-2"></i> Galerie
                    </a>
@endsection

@section('main')

@endsection
