   <!-- Bandeau d'annonces fixe -->
    <div class="announcement-bar bg-primary text-white py-2 sticky-top-top" id="announcementBar">
        <div class="container-fluid">
           <div class="marquee-wrapper overflow-hidden position-relative">
                <div class="marquee d-flex">
                    @if ($recentsnews && $recentsnews->count() > 0)
                        @foreach ($recentsnews as $recentsnew)
                            <span class="me-5">{{ $recentsnew->title }}</span>
                        @endforeach

                        <!-- DUPLICATION pour défilement continu -->
                        @foreach ($recentsnews as $recentsnew)
                            <span class="me-5">{{ $recentsnew->title }}</span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    @php
        $currentTraining = null;
        $isLangPage = false;

        if (Request::routeIs('web.training.details')) {
            $trainingSlug = request()->route('training');
            $currentTraining = \App\Models\Training::where('slug', $trainingSlug)->first();

            if ($currentTraining->category->title=='langue') {
                $isLangPage=true;
            }
        }
    @endphp


    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('web.home') }}" class="navbar-brand logo d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto p-4 p-lg-0">

                {{-- Accueil --}}
                <a href="{{ route('web.home') }}" class="nav-item nav-link {{ Request::routeIs('web.home') ? 'active' : '' }}">
                    Accueil
                </a>

                {{-- Présentation --}}
                <a href="{{ route('web.about') }}" class="nav-item nav-link {{ Request::routeIs('web.about') ? 'active' : '' }}">
                    Présentation
                </a>

                {{-- Formations (hors Langues) --}}
                <div class="nav-item dropdown">
                    <a href="{{ route('web.formations') }}"
                    class="nav-link dropdown-toggle {{ !$isLangPage && Request::routeIs(['web.formations','web.training.details']) ? 'active' : '' }}"
                    data-bs-toggle="dropdown">
                        Formations
                    </a>
                    <div class="dropdown-menu fade-down m-0">
                        <!-- Section Numérique -->
                        <h6 class="dropdown-header">Numérique</h6>

                        @if ($trainings!=null && count($trainings)>0)
                            @foreach ($trainings as $training)
                                @if ($training->category->title=='numérique')
                                    <a href="{{route('web.training.details', ['training'=>$training->slug])}}" class="dropdown-item">{{$training->title}}</a>
                                @endif
                            @endforeach
                        @endif

                        <div class="dropdown-divider"></div>

                        <!-- Section Paramédical -->
                        <h6 class="dropdown-header">Paramédical</h6>
                        @if ($trainings!=null && count($trainings)>0)
                            @foreach ($trainings as $training)
                                @if ($training->category->title=='paramédicale')
                                    <a href="{{route('web.training.details', ['training'=>$training->slug])}}" class="dropdown-item">{{$training->title}}</a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- Langues --}}
                <div class="nav-item dropdown">
                    <a href="{{ route('web.langues') }}"
                    class="nav-link dropdown-toggle {{ $isLangPage && Request::routeIs(['web.langues','web.training.details']) ? 'active' : '' }}"
                    data-bs-toggle="dropdown">
                        Langues
                    </a>

                    <div class="dropdown-menu fade-down m-0">
                        @if ($trainings!=null && count($trainings)>0)
                            @foreach ($trainings as $training)
                                @if ($training->category->title=='langue')
                                    <a href="{{route('web.training.details', ['training'=>$training->slug])}}" class="dropdown-item">{{$training->title}}</a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- Autres liens --}}
                <a href="{{ route('web.faqs') }}" class="nav-item nav-link {{ Request::routeIs('web.faqs') ? 'active' : '' }}">FAQs</a>
                <a href="{{ route('web.actualites') }}" class="nav-item nav-link {{ Request::routeIs('web.actualites') ? 'active' : '' }}">Actualités</a>
                <a href="{{ route('web.contact') }}" class="nav-item nav-link {{ Request::routeIs('web.contact') ? 'active' : '' }}">Contact</a>

            </div>

            <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
                Connexion<i class="fa fa-arrow-right ms-3"></i>
            </a>

        </div>
    </nav>
