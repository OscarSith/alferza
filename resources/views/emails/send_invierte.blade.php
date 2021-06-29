@component('mail::message')
# Formulario de Invierte

@component('mail::table')
|                           |                         |
| ------------------------- |-------------------------|
| <strong>Nombre</strong>   | {{ $data['nombre'] }}   |
| <strong>Correo</strong>   | {{ $data['email'] }}   |
| <strong>Celular</strong> | {{ $data['celular'] }} |
@endcomponent

@component('mail::panel')
<strong>Mensaje:</strong>
<br>
{{ $data['mensaje'] }}
@endcomponent

@endcomponent
