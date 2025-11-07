
@extends('master')
@section('title')
    Contact - ISN-Bafoussam
@endsection


@section('content')

<!-- Contact Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            @if(session('success-send'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success-send') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @error('email_send_failure')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
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
                    <form action="{{route('web.contact.send')}}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Votre Nom">
                                @error('name')
                                    <small class="invalid-feedback d-block">
                                        {{$message}}
                                    </small>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Votre Email">
                                @error('email')
                                    <small class="invalid-feedback d-block">
                                        {{$message}}
                                    </small>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{old('subject')}}"  placeholder="Sujet">
                                @error('subject')
                                    <small class="invalid-feedback d-block">
                                        {{$message}}
                                    </small>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <textarea  name="message" class="form-control @error('message') is-invalid @enderror" rows="6" placeholder="Message">{{old('message')}}</textarea>
                                @error('message')
                                    <small class="invalid-feedback d-block">
                                        {{$message}}
                                    </small>
                                @enderror
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
