@extends('layouts.masterpage')

@section('title', 'Libro de reclamaciones')

@section('body')
<div class="libro-reclamaciones">
    <div class="container">
        <div class="col-lg-8 mx-auto pt-5 pb-5">
            <h1 class="text-center main-title">LIBRO DE RECLAMACIONES</h1>
            <p class="mb-5">Conforme a lo establecido en el Código de Protección y Defensa del Consumidor (Ley N°29571) y el Reglamento del Libro de Reclamaciones, este establecimiento cuenta con un libro de reclamaciones de naturaleza virtual a su disposición, a efectos de que pueda formular su queja o reclamo.</p>
            @include('partials.errors_form_messages')
            <form action="{{ route('sendLibroReclamaciones') }}" method="POST" id="form-libro-reclamaciones" novalidate>
                {{ csrf_field() }}
                <div class="mb-4">
                    @php
                        $oldProject = old('proyecto');
                        if ($oldProject != null) {
                            $oldProject = explode('|', $oldProject)[1];
                        }
                    @endphp
                    <select name="proyecto" id="proyecto" class="form-select" required>
                        <option value="">Seleccione un proyecto</option>
                        @foreach ($projects as $project)
                            <option value="{{ $project->name }}|{{ $project->id }}" {{ $oldProject == $project->id ? 'selected' : ''}}>{{ $project->name }} - {{ $project->address}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>
                <div class="mb-3 sub-title">
                    <h5 class="mb-0">1. Identificacion del Consumidor reclamante</h5>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="consumidor" placeholder="Nombre o razón social" value="{{ old('consumidor') }}" required>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" value="{{ old('correo') }}" required>
                        <div class="invalid-feedback">
                            Escriba una dirección de correo
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="tel" class="form-control" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}" maxlength="9" required>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <input type="text" class="form-control" name="direccion" placeholder="Domicilio" value="{{ old('direccion') }}" required>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <select name="departamento" id="departamento" class="form-select" required>
                            <option value="">Departamento</option>
                            <option value="01,Amazonas">Amazonas</option>
                            <option value="02,Áncash">Áncash</option>
                            <option value="03,Apurímac">Apurímac</option>
                            <option value="04,Arequipa">Arequipa</option>
                            <option value="05,Ayacucho">Ayacucho</option>
                            <option value="06,Cajamarca">Cajamarca</option>
                            <option value="07,Callao">Callao</option>
                            <option value="08,Cusco">Cusco</option>
                            <option value="09,Huancavelica">Huancavelica</option>
                            <option value="10,Huánuco">Huánuco</option>
                            <option value="11,Ica">Ica</option>
                            <option value="12,Junín">Junín</option>
                            <option value="13,La">La Libertad</option>
                            <option value="14,Lambayeque">Lambayeque</option>
                            <option value="15,Lima">Lima</option>
                            <option value="16,Loreto">Loreto</option>
                            <option value="17,Madre">Madre de Dios</option>
                            <option value="18,Moquegua">Moquegua</option>
                            <option value="19,Pasco">Pasco</option>
                            <option value="20,Piura">Piura</option>
                            <option value="21,Puno">Puno</option>
                            <option value="22,San">San Martín</option>
                            <option value="23,Tacna">Tacna</option>
                            <option value="24,Tumbes">Tumbes</option>
                            <option value="25,Ucayali">Ucayali</option>
                        </select>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-6">
                        <select name="provincia" id="provincia" class="form-select" required>
                            <option value="" selected disabled>Provincia</option>
                        </select>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                    <div class="col-6">
                        <select name="distrito" id="distrito" class="form-select" required>
                            <option value="" selected disabled>Distrito</option>
                        </select>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-6">
                        <select name="tipo_documento" id="tipo_documento" class="form-select" required>
                            <option value="">Tipo de documento</option>
                            <option value="DNI" {{ old('tipo_documento') == 'DNI' ? 'selected' : '' }}>DNI</option>
                            <option value="CARNET DE EXTRANJERIA" {{ old('tipo_documento') == 'CARNET DE EXTRANJERIA' ? 'selected' : '' }}>CARNET DE EXTRANJERIA</option>
                            <option value="PASAPORTE" {{ old('tipo_documento') == 'PASAPORTE' ? 'selected' : '' }}>PASAPORTE</option>
                            <option value="OTROS" {{ old('tipo_documento') == 'OTROS' ? 'selected' : '' }}>OTROS</option>
                        </select>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" name="numero_documento" value="{{ old('numero_documento') }}" placeholder="Número de documento" maxlength="8" required>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col-6">
                        <input type="text" class="form-control" name="tutor" placeholder="Padre o madre" value="{{ old('tutor') }}">
                        <span class="small">* esto es para los casos de menores de edad</span>
                    </div>
                    <div class="col-6">
                        <input type="tel" class="form-control" name="tutor_documento" placeholder="Documento de padre o madre" value="{{ old('tutor_documento') }}">
                        <span class="small">* esto es para los casos de menores de edad</span>
                    </div>
                </div>

                <div class="mb-3 sub-title">
                    <h5 class="mb-0">2. Identificacion del Bien contratado:</h5>
                </div>
                <div class="mb-3">
                    @php
                        $bienContratado = old('bien_contratado');
                    @endphp
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="bien_contratado" type="radio" id="servicio" value="Servicio" {{ $bienContratado === 'Servicio' ? 'checked' : ''}} required>
                        <label class="form-check-label" for="servicio">Servicio</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="bien_contratado" type="radio" id="producto" value="Producto" {{ $bienContratado === 'Producto' ? 'checked' : ''}} required>
                        <label class="form-check-label" for="producto">Producto</label>
                    </div>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>
                <div class="mb-5">
                    <textarea name="detalle_bien_contratado" id="detalle_bien_contratado" rows="5" class="form-control" placeholder="Descripción" required>{{ old('detalle_bien_contratado') }}</textarea>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>

                <div class="mb-3 sub-title">
                    <h5 class="mb-0">3. Detalle de la Reclamación y Pedido del consumidor:</h5>
                </div>
                <div class="mb-3">
                    @php
                        $quejaReclamo = old('queja_reclamo');
                    @endphp
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="queja_reclamo" type="radio" id="queja" value="Queja" {{ $quejaReclamo == 'Queja' ? 'checked' : ''}} required>
                        <label class="form-check-label" for="queja">Queja</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="queja_reclamo" type="radio" id="reclamo" value="Reclamo" {{ $quejaReclamo == 'Reclamo' ? 'checked' : ''}} required>
                        <label class="form-check-label" for="reclamo">Reclamo</label>
                    </div>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>
                <div class="mb-3">
                    <textarea name="detalle_reclamo_queja" id="detalle_reclamo_queja" rows="5" class="form-control" placeholder="Descripción" required>{{ old('detalle_reclamo_queja') }}</textarea>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>
                <div class="mb-5">
                    <textarea name="pedido" id="pedido" rows="5" class="form-control" placeholder="Pedido" required>{{ old('pedido') }}</textarea>
                    <div class="invalid-feedback">
                        Este campo es obligatorio
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-5">Todos los campos son obligatorios (*)</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" name="politicas" type="checkbox" value="1" id="politicas" {{ old('politicas') != '' ? 'checked' : ''}} required>
                        <label class="form-check-label" for="politicas">
                            He leido las <a href="{{ route('politicas') }}" target="_blank">políticas de privacidad.</a>
                        </label>
                        <div class="invalid-feedback">
                            Este campo es obligatorio
                        </div>
                    </div>
                    <p class="small mt-2 mb-3">* Al brindar mi correo electrónico, autorizo a cualquier comunicación respecto al reclamo se realize a través del mismo.</p>
                    <p class="small mt-2 mb-3">* La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es requisito previo.</p>
                    <p class="small">* El proveedor deberá dar respuesta al reclamo en un plazo no mayor a treinta (30) días calendario, pudiendo ampliar el plazo hasta por (30) días más, previa comunicación al consumidor.</p>
                </div>
                <div class="text-center">
                    <button class="btn btn-secondary alferza-btn" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/libro-reclamaciones.js"></script>
@endsection
