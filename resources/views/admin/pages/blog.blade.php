<img src="{{ asset('images/' . $page->banner) }}" alt="Banner {{ $pageSelected }}" class="img-fluid w-100 mb-3">
<div class="mb-4">
    <label for="banner" class="form-label">Banner Principal</label>
    <input type="file" class="form-control" name="banner" id="banner">
</div>
<div class="mb-5">
    <label for="title" class="form-label">Titulo</label>
    <div class="row">
        <div class="col-md-6">
            <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}">
        </div>
        <div class="col-md-6">
            <input type="text" name="title_2" id="title_2" class="form-control" value="{{ $page->title_2 }}">
        </div>
    </div>
</div>
