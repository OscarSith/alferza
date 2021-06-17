@extends('layouts.masterpage')

@section('title', 'blog')

@section('body')
<div class="blog pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto mb-5">
                <h1 class="fw-bold mb-5">ALFERZA BLOG</h1>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <a href="{{ route('blogDetail', $blog->url_slug) }}">
                                    <img src="{{ asset('images/blog/' . $blog->picture) }}" alt="{{ $blog->title }}" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <a href="{{ route('blogDetail', $blog->url_slug) }}">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
