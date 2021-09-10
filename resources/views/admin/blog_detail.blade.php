@extends('layouts.app')

@section('content')
<link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('blogsIndex') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-level-up-alt fa-rotate-270 fa-lg fa-fw"></i> Volver al listado
                    </a>
                </div>

                <div class="card-body">
                    @include('partials.single_messages')

                    <form action="{{ route('blogUpdate', $blog->id) }}" enctype="multipart/form-data" method="POST" id="formBlog">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title" class="form-label">Título</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="sub_title" class="form-label">Subtitulo</label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ old('sub_title', $blog->sub_title) }}">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="info" id="info" value="{{ $blog->info }}">
                            <input type="hidden" name="info_quill" id="info_quill">
                            <div id="editor" style="min-height: 300px"></div>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Autor</label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $blog->author) }}">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="picture" class="form-label">Imagen principal</label>
                                    <input class="form-control" type="file" id="picture" name="picture">
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('images/blog/' . $blog->picture) }}" alt="{{ $blog->title }}" class="img-fluid">
                                </div>
                            </div>
                          </div>
                        <button type="submit" id="prueba" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{ asset('js/quill.imageUploader.min.js') }}"></script>
<script>
    const urlUpload = "{{ route('uploadImage') }}";
    const urlDeleteUpload = "{{ route('deleteUploadImage') }}";
</script>
<script src="{{ asset('js/admin.js') }}"></script>
<script>
    quill.setContents({!! old('info_quill', $blog->info_quill != null ? $blog->info_quill : '[]') !!}, 'user');
</script>
@endsection
