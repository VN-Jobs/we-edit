<section class="section-wrapper we-wrapper">
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
                        <form class="form questions-form" autocomplete="off">
                            <div class="form-group">
                                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email address" />
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" rows="3" placeholder="Message..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-theme"><i class="fa fa-envelope"></i> Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
