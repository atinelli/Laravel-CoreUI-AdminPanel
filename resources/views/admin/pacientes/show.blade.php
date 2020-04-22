@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.paciente.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.paciente.fields.paciente') }}
                    </th>
                    <td>
                        {{ $paciente->paciente }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.paciente.fields.dt_nascimento') }}
                    </th>
                    <td>
                        {{ \Carbon\Carbon::parse($paciente->dt_nascimento)->format('d/m/Y') }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.paciente.fields.dt_internacao') }}
                    </th>
                    <td>
                        {{ \Carbon\Carbon::parse($paciente->dt_internacao)->format('d/m/Y') }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.paciente.fields.origem') }}
                    </th>
                    <td>
                        {{ $paciente->origem }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.paciente.fields.status') }}
                    </th>
                    <td>
                        {{ $paciente->status }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection