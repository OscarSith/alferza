@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    {{ __('Página') }}
                    <form action="{{ route('home') }}?page=:PAGE" class="d-inline-block ms-2" id="form-select-pages">
                        <select name="page" id="selectPage" class="form-select">
                            @foreach ($pages as $_page)
                            <option value="{{ $_page->page }}" {{ $_page->page === $pageSelected ? 'selected' : ''}}>{{ $_page->page }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="card-body">
                    @include('partials.single_messages')

                    <form action="{{ route('pageUpdate', $page) }}" enctype="multipart/form-data" method="POST" id="page-form">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $page->id }}">
                    @switch($pageSelected)
                        @case('HOME')
                            @include('admin.pages.home')
                        @break

                        @case('NOSOTROS')
                            @include('admin.pages.nosotros')
                        @break

                        @case('TRABAJA CON NOSOTROS')
                            @include('admin.pages.trabaja_con_nosotros')
                        @break

                        @case('INVIERTE')
                            @include('admin.pages.invierte')
                        @break

                        @case('BLOG')
                            @include('admin.pages.blog')
                        @break

                        @case('CONTACTO')
                            @include('admin.pages.contacto')
                        @break

                        @case('CALCULADORA')
                            @include('admin.pages.calculadora')
                        @break

                        @case('ASESORES')
                            @include('admin.pages.asesores')
                        @break
                        @default
                    @endswitch
                    <hr>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        let selectPages = document.getElementById('selectPage');
        selectPages.addEventListener('change', (e) => {
            const form = document.getElementById('form-select-pages');
            let action = form.getAttribute('action').replace(':PAGE', e.target.value);
            form.setAttribute('action', action);
            form.submit();
        });
    </script>
@endsection
