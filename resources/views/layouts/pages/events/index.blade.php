
@extends('admin')
@section('title')
    Events
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link">
        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
    </a>
    <a href="{{route('trainings.index')}}" class="nav-item nav-link">
        <i class="fa fa-graduation-cap me-2"></i> Formations
    </a>
    <a href="{{route('modules.index')}}" class="nav-item nav-link">
        <i class="fa fa-book-open me-2"></i> Modules
    </a>
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
    <a href="{{route('events.index')}}" class="nav-item nav-link active">
        <i class="fa fa-calendar-alt me-2"></i> Évènements
    </a>
    <a href="{{route('galleries.index')}}" class="nav-item nav-link">
        <i class="fa fa-images me-2"></i> Galerie
    </a>
@endsection

@section('main')

@endsection
