@if ($errors->any())
<div class="alert alert-warning">
    <ul class="mb-0">
        @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('send'))
    <div class="alert alert-success">
        Su mensaje ha sido enviado
    </div>
@elseif (session('send') === false)
    <div class="alert alert-danger">
        Su mensaje NO ha sido enviado, intente nuevamente
    </div>
@endif
