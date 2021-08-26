@extends('layouts.app')

@section('content')
<link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear blog') }}</div>

                <div class="card-body">
                    @include('partials.validations_errors')
                    @include('partials.single_messages')

                    <form action="{{ route('blogStore') }}" enctype="multipart/form-data" method="POST" id="formBlog">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        </div>
                        <div class="mb-3">
                            <label for="sub_title" class="form-label">Subtitulo</label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ old('sub_title') }}">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="info" id="info">
                            <input type="hidden" name="info_quill" id="info_quill">
                            <div id="editor" style="min-height: 300px"></div>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Autor</label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Imagen principal</label>
                            <input class="form-control" type="file" id="picture" name="picture">
                        </div>
                        <button type="submit" id="prueba" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var toolbarOptions = [
        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'link'],
        [{ 'align': [] }],

        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme

        ['clean']                                         // remove formatting button
    ];

    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });

    quill.setContents({!! old('info_quill', '[]') !!}, 'user');

    var form = document.getElementById('formBlog');
    form.onsubmit = function(e) {
        document.getElementById('info').value = quill.root.innerHTML;
        document.getElementById('info_quill').value = JSON.stringify(quill.getContents());
    }
  </script>
@endsection