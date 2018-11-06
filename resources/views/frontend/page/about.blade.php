@extends('layouts.frontend')

@section('title', isset($heading) ? $heading : __('repositories.index'))

@section('page-content')

    <main class="site-main bg-grey">
        <div class="page-header blog-bg-image">
            <div class="container">
                <h2 class="page-header-title">About us</h2>
                <p class="page-header-desc">We-edit.com.vn &ndash; Real Estate Photo Editing, Virtual Staging & Floor Plans</p>
            </div>
        </div>

        <section class="section-wrapper introduction-wrapper">
            <div class="container">
                <div class="section-content text-center">
                    <div class="section-content-wrapper">
                        <p>A homeowner or a realtor can get possible leads in selling their real estate by making an attractive first impression. This is why it is definitely crucial for property agencies and homeowners who are selling their properties to make sure that they are making a massive good impression to their prospective buyers. How can they do that? There is a lot of ways and online is the best platform for that. Online is where most of the businesses are happening today. It is already considered to be the biggest marketplace across the globe due to its broad coverage and influence. It is the perfect place for everyone to look for products and services. This is why creating an impressive online marketing campaign will surely invite more buyers, resulting in higher sales and we can help you with that. So, if you are a realtor for homes for sale, you should have your marketing campaign online. The latter comes in various methods and types. However, in property selling such as houses and apartments, virtual home staging is the most suited method.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-wrapper about-block-wrapper">
            <div class="row">
                <div class="about-block-image col-md-6">
                    <img src="assets/img/profile3.png" alt="Brad Filliponi">
                </div>
                <div class="about-block-text col-md-6">
                    <h2>TRUSTED</h2>
                    <p>WE-EDIT started as a standalone property photography company in 2013.
                    Built on the trust of our customers and aim to always deliver excellent quality, we continue to service the residential and commercial real estate market in USA, Australia and European market, with over 1 million images to date and counting.
                    Today we have an extensive range of product offerings that caters to the diverse visual marketing needs of our clients which include leading real estate groups, real estate professionals, home owners, builders, retailers, architects and property developers.</p>
                </div>
            </div>
        </section>

        <section class="section-wrapper about-block-wrapper">
            <div class="row">
                <div class="about-block-text col-md-6">
                    <h2>INNOVATIVE</h2>
                    <p>WE-EDIT is at the forefront of introducing cutting-edge services. Customer's data hosted on a cloud platform provides secure access and a faster and better user experience to manage products anytime, anywhere and we always backup them at our end for long time. Through our cloud storage you can easily download property images and floor plans onto your desktop and email them to suppliers and vendors with the click of a button. You can further share these images on social media, create video slideshows and instantaneously ask for revisions through the quick and easy redo request system.</p>
                </div>
                <div class="about-block-image col-md-6">
                    <img src="assets/img/profile4.png" alt="Brad Filliponi">
                </div>
            </div>
        </section>
    </main>

@endsection
