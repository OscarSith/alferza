<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormLibroReclamacionesPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'proyecto' => 'required',
            'consumidor' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'departamento' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'tipo_documento' => 'required',
            'numero_documento' => 'required|numeric',
            'bien_contratado' => 'required|in:Servicio,Producto',
            'detalle_bien_contratado' => 'required',
            'queja_reclamo' => 'required|in:Queja,Reclamo',
            'detalle_reclamo_queja' => 'required',
            'pedido' => 'required',
            'notificacion' => 'required|boolean',
            'politicas' => 'accepted',
        ];
    }
}
