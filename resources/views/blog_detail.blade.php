@extends('layouts.masterpage')

@section('title', $blog->title)

@section('body')
<style>
    .ql-size-small {
        font-size: 0.75em;
    }
    .ql-size-large {
        font-size: 1.5em;
    }
    .ql-size-huge {
        font-size: 2.5em;
    }
    .ql-align-center {
        text-align: center;
    }
    .ql-align-justify {
        text-align: justify;
    }
    .ql-align-right {
        text-align: right;
    }
</style>
<div class="blog-detail pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto pb-5">
                <h1>{{ $blog->title }}</h1>
                @if ($blog->picture != null && $blog->show_main_picture)
                    <img src="{{ asset('images/blog/' . $blog->picture) }}" class="img-fluid mb-3" alt="{{ $blog->title }}">
                @endif
                @if ($blog->sub_title != null)
                    <p>{{ $blog->sub_title }}</p>
                @endif
                <div class="ql-container ql-snow">
                    {!! $blog->info !!}
                </div>
                @if ($blog->author != null)
                    <div class="mt-3 mb-5 author">
                        <em class="d-block small">{{ $blog->created_at->format('d/m/Y') }} - Alferza Desarrolladora Inmobiliaria</em>
                        <em>
                            <strong>Escrito por: {{ $blog->author }}</strong>
                        </em>
                    </div>
                @endif
                <div class="extra-info">
                    {!! $blog->extra_info !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
