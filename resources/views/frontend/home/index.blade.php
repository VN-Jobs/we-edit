@extends('layouts.frontend')

@section('title', isset($heading) ? $heading : __('repositories.index'))

@section('page-content')
    <main class="site-main">
        @include('frontend.home._slideshow')
        @include('frontend.home._introduction')
        @include('frontend.home._categories')
        @include('frontend.home._howto')
        @include('frontend.home._testimonials')
        @include('frontend.home._we')
    </main>
@endsection
