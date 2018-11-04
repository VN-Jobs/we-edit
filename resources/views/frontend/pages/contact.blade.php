@extends('layouts.frontend')

@section('title', isset($heading) ? $heading : __('repositories.index'))

@section('page-content')

    <main class="site-main bg-grey">
        <div class="page-header blog-bg-image">
            <div class="container">
                <h2 class="page-header-title">Contact us</h2>
                <p class="page-header-desc">We-Edit &ndash; Work 24/7</p>
            </div>
        </div>

        <section class="section-wrapper contact-block-wrapper">
            <div class="container">
                <div class="row m-0">
                    <div class="contact-block image-bottom col-md-6 p-0 bg-less-dark">
                        <div class="contact-block-text">
                            <h2>24/7 Customer Service</h2>
                            <p>Contact us by phone, live chat and <a href="mailto:Info@We-Edit.Com.Vn">email</a></p>
                            <ul>
                                <li><strong>Phone:</strong> <span>(+84) 97 6243 323</span></li>
                                <li><strong>Email:</strong> <span>Info@We-Edit.Com.Vn</span></li>
                            </ul>
                        </div>
                        <div class="contact-block-image">
                            <img src="assets/img/contact1.jpg" alt="Brad Filliponi">
                        </div>
                    </div>
                    <div class="contact-block col-md-6 p-0 bg-dark">
                        <div class="contact-block-image">
                            <img src="assets/img/contact2.jpg" alt="Brad Filliponi">
                        </div>
                        <div class="contact-block-text">
                            <h2>Contact Information</h2>
                            <p>Contact us today with questions regarding our service offerings and we’ll get back to you as soon as possible.
                            <br>
                            <br>
                            Address: CT1 A1 Building, Hoang Liet Str., Hoang Mai Dis., Hanoi, Vietnam, 100000</p>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.6790075671793!2d105.82015161425761!3d20.96540198603266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acfdc32041f3%3A0xfb0ba343c3f5d627!2zQ1QxLUExLCBC4bqxbmcgQSAyLCBLaHUgxJHDtCB0aOG7iyBUw6J5IE5hbSBMaW5oIMSQw6BtLCBIb8OgbmcgTGnhu4d0LCBIb8OgbmcgTWFpLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1520319639447" width="100%" height="345" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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
