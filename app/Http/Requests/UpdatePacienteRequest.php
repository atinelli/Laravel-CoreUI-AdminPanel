<?php

namespace App\Http\Requests;

use App\Paciente;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePacienteRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('paciente_edit');
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
