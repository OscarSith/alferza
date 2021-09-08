<img src="{{ asset('images/' . $page->banner) }}" alt="Banner {{ $pageSelected }}" class="img-fluid w-100 mb-3">
<div class="mb-5">
    <label for="banner" class="form-label">Banner Principal</label>
    <input type="file" class="form-control" name="banner" id="banner">
</div>
<div class="mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}">
        </div>
        <div class="col-md-5">
            <input type="text" name="title_2" id="title_2" class="form-control" value="{{ $page->title_2 }}">
        </div>
    </div>
</div>
<div class="mb-3">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $page->picture ) }}" alt="Imagen alterna invierte" class="img-fluid mb-3">
            <input type="file" class="form-control" name="picture" id="picture">
            <div class="mb-3 mt-3">
                <textarea name="small_text" id="small_text" class="form-control" rows="3">{{ $page->small_text }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <textarea name="main_text" id="main_text" cols="30" rows="10" class="form-control text-justify">{{ $page->main_text }}</textarea>
        </div>
    </div>
</div>
