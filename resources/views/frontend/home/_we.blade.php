<section id="we-wrapper" class="section-wrapper we-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
                <div class="section-about">
                    <div class="section-title">
                        <h3 class="heading">About Us</h3>
                    </div>
                    <div class="text-block">
                        <p>{!! $configs['home']['about_us'] ?? null !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-1 col-lg-1 col-xl-1">
            </div>
            <div class="col-12 col-md-5 col-lg-5 col-xl-5">
                <div class="section-contact shadow-sm">
                    <div class="section-title">
                        <h3 class="heading">Contact Us</h3>
                    </div>
                    <div class="text-block">
                        @include('frontend.home._contact')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
