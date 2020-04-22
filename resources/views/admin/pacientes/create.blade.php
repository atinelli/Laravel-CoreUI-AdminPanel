@extends('layouts.admin')
@section('content')


<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.paciente.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.pacientes.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('paciente') ? 'has-error' : '' }}">
                <label for="paciente">{{ trans('global.paciente.fields.paciente') }}*</label>
                <input type="text" id="paciente" name="paciente" class="form-control" autofocus="true" autocomplete="true"  value="{{ old('paciente', isset($paciente) ? $paciente->paciente : '') }}">
                @if($errors->has('paciente'))
                    <em class="invalid-feedback">
                        {{ $errors->first('paciente') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.paciente.fields.paciente_helper') }}
                </p>
            </div>
            <div class="row">
            <div class="form-group col-sm-6 {{ $errors->has('dt_nascimento') ? 'has-error' : '' }}">
                <label for="dt_nascimento">{{ trans('global.paciente.fields.dt_nascimento') }}</label>
                <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" value="{{ old('dt_nascimento', isset($paciente) ? $paciente->dt_nascimento : '') }}">
                @if($errors->has('dt_nascimento'))
                    <em class="invalid-feedback">
                        {{ $errors->first('dt_nascimento') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.paciente.fields.dt_nascimento_helper') }}
                </p>
            </div>          
            <div class="form-group col-sm-6 {{ $errors->has('dt_internacao') ? 'has-error' : '' }}">
                <label for="dt_internacao">{{ trans('global.paciente.fields.dt_internacao') }}</label>
                <input type="date" id="dt_internacao" name="dt_internacao" class="form-control" value="{{ old('dt_internacao', isset($paciente) ? $paciente->dt_internacao : '') }}">
                @if($errors->has('dt_internacao'))
                    <em class="invalid-feedback">
                        {{ $errors->first('dt_internacao') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.paciente.fields.dt_internacao_helper') }}
                </p>
            </div>
            </div>
            <div class="form-group {{ $errors->has('origem') ? 'has-error' : '' }}">
                <label for="origem">{{ trans('global.paciente.fields.origem') }}</label>
                <input type="text" id="origem" name="origem" class="form-control" value="{{ old('origem', isset($paciente) ? $paciente->origem : '') }}">
                @if($errors->has('origem'))
                    <em class="invalid-feedback">
                        {{ $errors->first('origem') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.paciente.fields.origem_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status">{{ trans('global.paciente.fields.status') }}</label>
                <input type="text" id="status" name="status" class="form-control" value="{{ old('status', isset($paciente) ? $paciente->status : '') }}">
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.paciente.fields.status_helper') }}
                </p>
            </div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection