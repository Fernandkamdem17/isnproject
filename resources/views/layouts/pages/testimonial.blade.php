<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Témoignages</h6>
                <h1 class="mb-5">Ce que disent nos étudiants!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @if ($testimonials && $testimonials->count() > 0)
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('storage/' . $testimonial->img)}}" style="width: 80px; height: 80px;">
                            <h5 class="mb-0">{{$testimonial->name}}</h5>
                            <p>{{$testimonial->training}}</p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">
                                    {{$testimonial->description}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
        </div>
    </div>
</div>