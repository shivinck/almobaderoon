@extends('layouts.web')

@section('title', '')
@section('description', '')

@section('content')
<style>
    .f-title {
        text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    min-height: 40px;
    }

    .f-description {
        text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 4;
    overflow: hidden;
    min-height: 80px;
    }
</style>
<section class="title-banner mb-80">
    <div class="container-fluid">
        <h1 class="h2">Blogs</h1>
    </div>
</section>



<section class="blog-detail-sec mb-80">
    <div class="container-fluid">
        <p class="light-gray mb-4p"> {{ $blog->formatted_created_at }} - {{ $blog->author->name }} - Blogs</p>
        <h3 class="fw-bold light-black mb-24">{{ $blog->title }}</h3>
        <div class="image-effect br-24 mb-24">
            <img class="w-100" src="{{ $blog->image }}" alt="">
        </div>

        {!! $blog->content !!}




    </div>
</section>
@endsection
