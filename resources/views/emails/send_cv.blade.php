@component('mail::message')
# Enviado desde la sección Trabaja con nosotros

@component('mail::table')
|                   |                               |
| ----------------- |:------------------------------|
| Nombre            | {{ $data['nombre'] }}         |
| Teléfono          | {{ $data['telefono'] }}       |
| Correo            | {{ $data['correo'] }}         |
| Área de interés   | {{ $data['area-interes'] }}   |
@endcomponent

## ¿Porqué te apasiona el rubro?
{{ $data['rubro'] }}
@endcomponent
