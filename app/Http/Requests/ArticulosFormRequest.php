<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticulosFormRequest extends FormRequest
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
            'nombre'=>'required|max:50',
            'categoria'=>'required|max:50',
            'cantidad'=>'required|max:3',
            'cantidadp'=>'max:3',
            'cantidadt'=>'max:3',
            'unidad'=>'required|max:20',
            'producto'=>'max:20',
        ];
    }
}
