<?php

namespace App\Http\Requests;

use App\Paciente;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyPacienteRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('paciente_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:pacientes,id',
        ];
    }
}
