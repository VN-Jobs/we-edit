<section class="section-wrapper slider-wrapper py-0">
    <div class="flexslider control-paging-vertical control-paging-large flexslider-hidden">
        <ul class="slides">
            @if (count($slides))
                @foreach ($slides as $slide)
                <li>
                    <div class="slide-item" href="#">
                        <div class="img-wrapper">
                            <img src="{{ $slide }}" alt="" />
                        </div>
                        <div class="slide-item-text container shadow-lg crazy-style-1">
                            <h1 class="animate_left_to_right">World Class</h1>
                            <h2 class="animate_right_to_left">Combination</h2>
                        </div>
                    </div>
                </li>
                @endforeach
            @endif
        </ul>
    </div>
</section>
