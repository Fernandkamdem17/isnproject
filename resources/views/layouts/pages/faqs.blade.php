
@extends('master')
@section('title')
    Faqs - ISN-Bafoussam
@endsection


@section('content')

   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="text-center mb-5">
      <h6 class="section-title bg-white text-center text-primary px-3">FAQs</h6>
      <h1 class="mb-4">Questions Fréquemment Posées</h1>
      <p class="text-muted">Retrouvez ici les réponses aux questions les plus courantes sur nos formations numériques, paramédicales et cours de langues.</p>
    </div>

    <div class="container">
        <div class="accordion faq-accordion" id="accordionExample">
            @if($faqs && $faqs->count() > 0)
                @foreach ($faqs as $index => $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse{{ $index }}" 
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                    aria-controls="collapse{{ $index }}">
                                {{ $faq->title }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}" 
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                            aria-labelledby="heading{{ $index }}" 
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $faq->description }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center text-muted py-4">Aucune question disponible pour le moment.</p>
            @endif
        </div>
    </div>


    <!-- Testimonial Start -->
    @include('layouts.pages.testimonial')
    <!-- Testimonial End -->
  </div>
</div>

@endsection
