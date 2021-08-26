@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Listado de blogs') }}
                    <x-button-new :text="'Crear blog'" url="{{ route('blogCreate') }}" class="float-end" />
                </div>

                <div class="card-body">
                    @include('partials.single_messages')

                    {!! $blogs->links() !!}
                    <div class="list-group mb-3">
                        @foreach ($blogs as $blog)
                        <a href="{{ route('blogEdit', $blog) }}" class="list-group-item list-group-item-action" aria-current="true">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $blog->title }}</h5>
                          </div>
                          <p class="mb-1">{{ $blog->sub_title }}</p>
                          <small class="text-muted float-end">{{ $blog->created_at->diffForHumans() }}</small>
                        </a>
                        @endforeach
                    </div>
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
