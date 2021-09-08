<img src="{{ asset('images/' . $page->banner) }}" alt="Banner {{ $pageSelected }}" class="img-fluid w-100 mb-3">
<div class="mb-3">
    <label for="banner" class="form-label">Banner Principal</label>
    <input type="file" class="form-control" name="banner" id="banner">
</div>
<div class="mb-5">
    <div class="row">
        <div class="col-md-7 mx-auto mb-2">
            <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}">
        </div>
        <div class="col-md-7 mx-auto">
            <input type="text" name="title_2" id="title_2" class="form-control" value="{{ $page->title_2 }}">
        </div>
    </div>
</div>
<div class="mb-5">
    <textarea name="main_text" id="main_text" cols="30" rows="6" class="form-control text-justify">{{ $page->main_text }}</textarea>
</div>
