<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Paciente;

class PacientesApiController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();

        return $pacientes;
    }

    public function store(StorePacienteRequest $request)
    {
        return Paciente::create($request->all());
    }

    public function update(UpdatePacienteRequest $request, Paciente $Paciente)
    {
        return $Paciente->update($request->all());
    }

    public function show(Paciente $Paciente)
    {
        return $Paciente;
    }

    public function destroy(Paciente $Paciente)
    {
        return $Paciente->delete();
    }
}
