@extends('layouts.frontend')

@section('title', isset($heading) ? $heading : __('repositories.index'))

@section('page-content')

    <main class="site-main bg-grey">
        <div class="page-header blog-bg-image">
            <div class="container">
                <h2 class="page-header-title">About us</h2>
                <p class="page-header-desc">{!! $configs['about']['description'] ?? null !!}</p>
            </div>
        </div>

        <section class="section-wrapper introduction-wrapper">
            <div class="container">
                <div class="section-content text-center">
                    <div class="section-content-wrapper">
                        <p>{!! $configs['about']['information'] ?? null !!}</p>
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
                    <p>{!! $configs['about']['trusted'] ?? null !!}</p>
                </div>
            </div>
        </section>

        <section class="section-wrapper about-block-wrapper">
            <div class="row">
                <div class="about-block-text col-md-6">
                    <h2>INNOVATIVE</h2>
                    <p>{!! $configs['about']['innovative'] ?? null !!}</p>
                </div>
                <div class="about-block-image col-md-6">
                    <img src="assets/img/profile4.png" alt="Brad Filliponi">
                </div>
            </div>
        </section>
    </main>

@endsection
