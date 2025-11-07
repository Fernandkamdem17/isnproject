
@extends('master')
@section('title')
    Actualités - ISN-Bafoussam
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
                @if (isset($announces) && count($announces)>0)
                    @foreach ($announces as $announce)
                        <div class="col-md-4 d-flex align-items-stretch wow zoomIn" data-wow-delay="0.3s">
                            <div class="card shadow-sm">
                                <div class="card-img">
                                    <img src="{{asset('storage/'. $announce->img)}}" alt="{{$announce->title}}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">{{$announce->title}}</h5>
                                    <p class="card-text">
                                        {{$announce->description}}
                                    </p>
                                    <p class="text-muted mt-2 text-end text-primary">
                                        <small>Publié le : {{ $announce->created_at->format('d/m/Y - H\hi') }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
                @if (isset($events) && count($events)>0)
                    @foreach ($events as $event)
                        <div class="col-lg-6 position-relative align-self-start wow zoomIn" data-wow-delay="0.1s">
                            <img src="{{asset('storage/'.$event->img)}}" class="img-fluid" alt="">
                            <a href="{{$event->link}}" class="glightbox pulsating-play-btn"></a>
                            <div class="video-caption text-center mt-2">
                                <h5>{{$event->title}}</h5>
                                <p class="text-muted">
                                    {{$event->description}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
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

                @if (isset($galleries) && count($galleries)>0)
                    @php
                        $i=0.1;
                    @endphp
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="{{$i}}">
                            <div class="gallery-item">
                            <a href="{{asset('storage/'.$gallery->img)}}" class="glightbox" data-gallery="images-gallery">
                                <img src="{{asset('storage/'.$gallery->img)}}" alt="" class="img-fluid">
                            </a>
                            </div>
                        </div><!-- End Gallery Item -->
                        @php
                            $i+=0.1;
                        @endphp
                    @endforeach
                @endif

                {{-- <div class="col-lg-3 col-md-4 wow zoomIn" data-wow-delay="0.2s">
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
                </div><!-- End Gallery Item --> --}}
            </div>

        </div>
    </div>


@endsection
