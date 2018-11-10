@extends('layouts.backend')

@section('title', isset($heading) ? $heading : __('repositories.index'))

@push('prescripts')
{{ Html::script(mix('assets/vue/dropzone.js')) }}
    <script>
        $(function () {
            window.flash_message = {!! session("flash_message") ?? '{}' !!};
        });
    </script>
@endpush

@push('prestyles')
{{ Html::style('assets/css/backend/category.css') }}
@endpush

@section('page-content')
<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $heading }}</h3>
                </div>
                <div class="panel-body">
                    @include('backend.category._slides')
                    <br>
                    <h2 class="form-control-static text-center">{{ $item->ceo_title }}</h2>
                    <p class="text-center">{{ $item->description }}</p>
                    <br>
                    @include('backend.category._products')
                    <hr>
                    @include('backend.category._collections')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
