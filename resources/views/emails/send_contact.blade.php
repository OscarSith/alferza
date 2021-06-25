@component('mail::message')
# Formulario de Contacto

@component('mail::table')
|                           |                         |
| ------------------------- |-------------------------|
| <strong>Nombre</strong>   | {{ $data['nombre_completo'] }}   |
| <strong>Correo</strong>   | {{ $data['correo'] }}   |
| <strong>Celular</strong>  | {{ $data['celular'] }}  |
@endcomponent

@component('mail::panel')
<strong>Mensaje:</strong>
<br>
{{ $data['mensaje'] }}
@endcomponent

@endcomponent
