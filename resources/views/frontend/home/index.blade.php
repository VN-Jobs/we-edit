@extends('layouts.frontend')

@section('title', $configs['name'][0] ?? null)

@section('page-content')
    <main class="site-main">
        @include('frontend.home._slideshow')
        @include('frontend.home._introduction')
        @include('frontend.home._products')
        @include('frontend.home._howto')
        @include('frontend.home._testimonials')
        @include('frontend.home._we')
    </main>
@endsection
