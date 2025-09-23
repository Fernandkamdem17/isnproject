
@extends('admin')
@section('title')
    Services - CER BTP SARL
@endsection

@section('navbar')
    <div class="navbar-nav me-auto">
        <a href="{{route('home')}}" class="nav-item nav-link"><span>accueil</span></a>
        <a href="{{route('enterprise')}}" class="nav-item nav-link"><span>Entreprise</span></a>
        <a href="{{route('services')}}" class="nav-item nav-link"><span class="active">services</span></a>
        <a href="{{route('realisations')}}" class="nav-item nav-link"><span>réalisations</span></a>
        <a href="{{route('blog')}}" class="nav-item nav-link"><span>blog</span></a>
        <a href="{{route('contact')}}" class="nav-item nav-link"><span>Contact</span></a>
    </div>
@endsection

@section('content')

    

    @include('layouts.pages.partner')
    @include('layouts.pages.customer')
  
@endsection
