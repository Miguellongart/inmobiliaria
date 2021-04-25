<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropiedadStoreRequest extends FormRequest
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
        $rules = [
            'codigo'            => 'required|unique:propiedads,codigo',
            'slug'              => 'required|unique:propiedads,slug',
            'titulo'            => 'required|unique:propiedads,titulo',
            'user_id'           => 'required|integer',
            't_propiedad_id'    => 'required|integer',
            't_operacion_id'    => 'required|integer',
            'descripcion'       => 'required',
            't_vista'           => 'required',
            'estatus'           => 'required|in:BORRADOR,PUBLICADO',
        ];
        if($this->get('imagen_p'))
            $rules = array_merge($rules, ['imagen_p'         => 'mimes:jpg,jpeg,png']);

        return $rules;
    }
}
