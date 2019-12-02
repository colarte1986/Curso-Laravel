<?php

namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
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
            //unique:menu,nombre hace que el nombre sea único para un registro
            //$this->route('id') para cuando venga en edición no valida el nombre en el registo
            //donde estamos parados sino en los demás registros para que no se repita el nombre
            'nombre' => 'required|max:50|unique:menu,nombre,' . $this->route('id'),
            //Validación por medio de reglas, Revisar en app/Rules/ValidarCampoUrl
            'url' => ['required','max:100',new ValidarCampoUrl],
            'icono' => 'nullable|max:50'
        ];
    }

    /*public function messages()
    {
        return[
            'nombre.required' => 'El campo nombre es requerido',
            'url.required' => 'El campo url es requerido'
        ];
    }*/
}
