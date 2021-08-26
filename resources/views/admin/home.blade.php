@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Páginas') }}
                </div>

                <div class="card-body">
                    @include('partials.single_messages')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
