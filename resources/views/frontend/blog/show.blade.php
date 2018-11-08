@extends('layouts.frontend')

{{-- @section('title', isset($heading) ? $heading : __('repositories.index')) --}}

@section('page-content')
    <main class="site-main blog-wrapper">
        <div class="page-header" style="background-image: url({{ publicSrc($configs['blog']['banner']) }});">
            <div class="container">
                <h2 class="page-header-title">Blog Detail</h2>
                <p class="page-header-desc">{!! $configs['blog']['description'] !!}</p>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="post">
                            <div class="post-content">
                                <div class="post-info">
                                    <span class="icon-date"><img width="20" height="17" alt="calendar icon" src="/assets/img/calendar.svg" /></span>
                                    {{ $post->updated_at }}
                                    <span class="post-date">31 May 2018</span>
                                </div>
                                <h1 class="post-title">{{ $post->name }}</h1>
                                <div class="post-description">
                                    {!! $post->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
