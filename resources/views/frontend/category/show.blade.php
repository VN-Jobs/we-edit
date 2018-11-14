@extends('layouts.frontend')
@section('title', isset($heading) ? $heading : __('repositories.title.category'))

@section('page-content')
<main class="site-main bg-grey">
    @include('frontend.home._slideshow')
    <section class="section-wrapper introduction-wrapper">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="heading">{{ $category->ceo_title }}</h1>
            </div>
            <div class="section-content text-center">
                <div class="section-content-wrapper">
                    {!! $category->description !!}
                </div>
            </div>
        </div>
    </section>
    @include('frontend.category._products')
    @include('frontend.category._collections')
    @include('frontend.category._other_services')
</main>
@endsection
