<link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
<img src="{{ asset('images/' . $page->banner) }}" alt="Banner {{ $pageSelected }}" class="img-fluid w-100 mb-3">
<div class="mb-3">
    <label for="banner" class="form-label">Banner Principal</label>
    <input type="file" class="form-control" name="banner" id="banner">
</div>
<div class="mb-3">
    <div class="row">
        <div class="col-md-6">
            <textarea name="main_text" id="main_text" cols="30" rows="8" class="form-control text-justify">{{ $page->main_text }}</textarea>
        </div>
        <div class="col-md-6">
            <textarea name="alter_text" id="alter_text" cols="30" rows="8" class="form-control text-justify">{{ $page->alter_text }}</textarea>
        </div>
    </div>
</div>
<div class="mb-5">
    <textarea name="other_text" id="other_text" cols="30" rows="4" class="form-control text-justify">{{ $page->other_text }}</textarea>
</div>
<div class="mb-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <input type="text" name="small_text" id="small_text" class="form-control" value="{{ $page->small_text }}">
        </div>
    </div>
</div>
<div class="mb-5">
    <div class="row">
        <div class="col-md-6">
            <label for="mision" class="form-label">Misión</label>
            <textarea name="mision" id="mision" cols="30" rows="6" class="form-control text-justify">{{ $page->mision }}</textarea>
        </div>
        <div class="col-md-6">
            <label for="vision" class="form-label">Misión</label>
            <textarea name="vision" id="vision" cols="30" rows="6" class="form-control text-justify">{{ $page->vision }}</textarea>
        </div>
    </div>
</div>
<div class="mb-3">
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <img src="{{ asset('images/' . $page->profile_picture_1) }}" alt="Imagen Luis Delgado">
                <input type="file" name="profile_picture_1" id="profile_picture_1" class="form-control">
            </div>
            <div class="mb-3">
                <label for="profile_name_1" class="form-label">Nombres y Apellidos</label>
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" name="profile_name_1" id="profile_name_1" class="form-control" value="{{ $page->profile_name_1 }}" placeholder="Nombre">
                    </div>
                    <div class="col-md-7">
                        <input type="text" name="profile_lastname_1" id="profile_lastname_1" class="form-control" value="{{ $page->profile_lastname_1 }}" placeholder="Apellidos">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <input name="profile_text_1" id="profile_text_1" type="hidden" value="{{ $page->profile_text_1 }}">
                <div id="quill_profile_text_1">{!! $page->profile_text_1 !!}</div>
            </div>
            <div class="mb-3">
                <label for="profile_extra_1" class="form-label">M2 desarrollados</label>
                <input type="text" name="profile_extra_1" id="profile_extra_1" class="form-control" value="{{ $page->profile_extra_1 }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <img src="{{ asset('images/' . $page->profile_picture_2) }}" alt="Imagen Luis Delgado">
                <input type="file" name="profile_picture_2" id="profile_picture_2" class="form-control">
            </div>
            <div class="mb-3">
                <label for="profile_name_2" class="form-label">Nombre y Apellidos</label>
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" name="profile_name_2" id="profile_name_2" class="form-control" value="{{ $page->profile_name_2 }}" placeholder="Nombres">
                    </div>
                    <div class="col-md-7">
                        <input type="text" name="profile_lastname_2" id="profile_lastname_2" class="form-control" value="{{ $page->profile_lastname_2 }}" placeholder="Apellidos">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <input type="hidden" name="profile_text_2" id="profile_text_2" value="{{ $page->profile_text_2 }}">
                <div id="quill_profile_text_2">{!! $page->profile_text_2 !!}</div>
            </div>
            <div class="mb-3">
                <label for="profile_extra_2" class="form-label">M2 proyectados</label>
                <input type="text" name="profile_extra_2" id="profile_extra_2" class="form-control" value="{{ $page->profile_extra_2 }}">
            </div>
            <div class="mb-3">
                <label for="profile_extra_3" class="form-label">M2 ejecutados, supervisados en jefatura</label>
                <input type="text" name="profile_extra_3" id="profile_extra_3" class="form-control" value="{{ $page->profile_extra_3 }}">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    let quillBio1 = new Quill('#quill_profile_text_1', {
      theme: 'snow'
    });

    let quillBio2 = new Quill('#quill_profile_text_2', {
      theme: 'snow'
    });

    document.getElementById('page-form').addEventListener('submit', function(e) {
        document.getElementById('profile_text_1').value = quillBio1.root.innerHTML;
        document.getElementById('profile_text_2').value = quillBio2.root.innerHTML;
        e.target.disabled = true;
    });
</script>
