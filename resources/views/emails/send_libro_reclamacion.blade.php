@component('mail::message')
# Proyecto: {{ explode('|', $data['proyecto'])[0] }}
<br>

## 1. Identificacion del Consumidor reclamante:

@component('mail::table')
|                            |                         |
| ---------------------------|-------------------------|
| <strong>Nombre o razón social</strong>   | {{ $data['consumidor'] }}   |
| <strong>Correo</strong>    | {{ $data['correo'] }}   |
| <strong>Teléfono</strong>  | {{ $data['telefono'] }} |
| <strong>Direccion</strong> | {{ $data['direccion'] }} |
| <strong>Departamento</strong> | {{ explode(',', $data['departamento'])[1] }} |
| <strong>Provincia</strong> | {{ explode(',', $data['provincia'])[1] }} |
| <strong>Distrito</strong>  | {{ $data['distrito'] }} |
| <strong>Tipo documento</strong>  | {{ $data['tipo_documento'] }} |
| <strong>Número documento</strong>  | {{ $data['numero_documento'] }} |
| <strong>Tutor</strong>  | {{ $data['tutor'] }} |
| <strong>Documento del tutor</strong>  | {{ $data['tutor_documento'] }} |
@endcomponent

## 2. Identificacion del Bien contratado:

@component('mail::panel')
<strong>{{ $data['bien_contratado'] }}</strong><br>
{{ $data['detalle_bien_contratado'] }}
@endcomponent
<br>

## 3. Detalle de la Reclamación y Pedido del consumidor:

@component('mail::panel')
<strong>{{ $data['queja_reclamo'] }}</strong><br>
{{ $data['detalle_reclamo_queja'] }}
@endcomponent

@component('mail::panel')
<strong>Pedido:</strong><br>
{{ $data['pedido'] }}
@endcomponent

@endcomponent
