<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrestamoRequest extends FormRequest
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
          'clave'=>'required|max:10',
          'nombre'=>'required|max:50',
          'categoria'=>'required|max:50',
          'tipo'=>'required|max:50',
          'cantidad'=>'required|max:3',
          'unidad'=>'required|max:20',
          'portador'=>'required|max:150',
        ];
    }
}
