@extends('layouts.masterpage')

@section('title', 'blog')

@section('body')
<div class="blog">
    <img src="{{ asset('images/banner_blog.jpg') }}" alt="Imagen Página Blog" class="d-block w-100">
    @include('partials.whatsapp')
    <div class="container pt-5">
        <div class="row">
            <div class="col-xl-10 mx-auto mb-5">
                <h1 class="text-center main-title mb-5">ALFERZA BLOG</h1>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <a href="{{ route('blogDetail', $blog->url_slug) }}" class="card-main-img d-block">
                                    <img src="{{ asset('images/blog/' . $blog->picture) }}" alt="{{ $blog->title }}" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <a href="{{ route('blogDetail', $blog->url_slug) }}">
                                        <h5 class="card-title" title="{{ $blog->title }}">{{ $blog->title }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
