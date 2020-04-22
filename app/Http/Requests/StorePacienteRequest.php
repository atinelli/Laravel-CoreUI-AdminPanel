<?php

namespace App\Http\Requests;

use App\Paciente;
use Illuminate\Foundation\Http\FormRequest;

class StorePacienteRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('paciente_create');
    }

    public function rules()
    {
        return [
            'paciente' => [
                'required',
            ],
        ];
    }
}
