@extends('layouts.frontend')

@section('title', isset($heading) ? $heading : __('repositories.frontend.contact'))

@section('page-content')

    <main class="site-main bg-grey">
        <div class="page-header blog-bg-image" style="background-image: url({{ publicSrc($configs['contact']['banner']) }});">
            <div class="container">
                <h2 class="page-header-title">Contact us</h2>
                <p class="page-header-desc">{{ $configs['contact']['description'] ?? null }}</p>
            </div>
        </div>

        <section class="section-wrapper contact-block-wrapper">
            <div class="container">
                <div class="row m-0">
                    <div class="contact-block image-bottom col-md-6 p-0 bg-less-dark">
                        <div class="contact-block-text">
                            <h2>24/7 Customer Service</h2>
                            <p>{!! $configs['contact']['custom_service'] !!}</p>
                        </div>
                        <div class="contact-block-image">
                            <img src="{{ publicSrc($configs['contact']['banner_1'] ?? null) }}" alt="Brad Filliponi">
                        </div>
                    </div>
                    <div class="contact-block col-md-6 p-0 bg-dark">
                        <div class="contact-block-image">
                            <img src="{{ publicSrc($configs['contact']['banner_2'] ?? null) }}" alt="Brad Filliponi">
                        </div>
                        <div class="contact-block-text">
                            <h2>Contact Information</h2>
                            <p>{!! $configs['contact']['contact_information'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-wrapper contact-work-wrapper py-0">
            <div class="row m-0">
                <div class="contact-work col-md-6 text-right p-0 bg-less-dark">
                    <div class="crazy-style">
                        <h2><span class="sub-title">Our Editing Team</span> Work 24/7</h2>
                    </div>
                </div>
                <div class="contact-work col-md-6 p-0 bg-dark d-flex align-items-end">
                    <h3 class="text-uppercase">Around the Clock</h3>
                </div>
            </div>
        </section>

        <section class="section-wrapper contact-map-wrapper">
            <div class="container">
                <div class="row">
                    <div class="contact-form-block col-lg-6">
                        <iframe src="{{ $configs['map'][0] ?? null }}" width="100%" height="345" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                    <div class="contact-form-block col-lg-6">
                        <h2>How Can We Help?</h2>

                        <form class="form contact-form" autocomplete="off">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email address" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="company" name="company" placeholder="Your company" />
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message and may be link to trial images included"></textarea>
                            </div>

                            <button type="submit" class="btn btn-theme">Send Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
