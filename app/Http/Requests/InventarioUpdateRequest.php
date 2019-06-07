<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarioUpdateRequest extends FormRequest
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
            'articulo_id'   =>'required',
            //'cantidad'      =>'required',
            'codigo'        =>'required|unique:inventarios,codigo,' . $this->inventario,
            'grupo_id'         =>'required',
            'independiente' =>'required',
            //'serial'        =>'required',
            //'modelo'        =>'required',
            'marca_id'         =>'required',
            'color_id'         =>'required',
            //'incorp'        =>'required',
            //'desincorp'     =>'required',
            //'observacion'   =>'required',
        ];       
    }
}
