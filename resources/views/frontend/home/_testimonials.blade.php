<section class="section-wrapper testimonials-wrapper">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="heading">Testimonials</h2>
        </div>
        <div class="section-content flexslider testimonials-slider mt-5">
            <ul class="slides">
                @foreach ($testimonials as $testimonial)
                <li class="testimonial-item">
                    <div class="row align-items-center">
                        <div class="col-sm-3 testimonial-image">
                            <img src="{{ publicSrc($testimonial->avatar) }}" alt="{{ $testimonial->first_name }}" />
                        </div>
                        <div class="col-sm-9 testimonial-content">
                            <p>{{ $testimonial->message }}</p>
                            <p class="testimonial-name">{{ sprintf('– %s %s, %s', $testimonial->first_name, $testimonial->last_name, $testimonial->company) }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
