<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class personal_requests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool{return true;}
    public function rules(): array{
        return [
            'nombre' => 'required|max:20',
            'app' => 'required|max:20',
            'apm' => 'required|max:20',
            'dni' => 'required|numeric|digits:8'];
    }
    public function attributes()
    {
        return [
            'nombre' => 'Nombre del Personal',
            'app' => 'Apellido paterno',
            'apm' => 'Apellido materno',
            'dni' => 'DNI',
            'cargo' => 'Cargo de trabajo',
        ];
    }
    public function messages(){
        return ['dni.digits' => 'El DNI debe tener 8 cifras',];
    }
}
