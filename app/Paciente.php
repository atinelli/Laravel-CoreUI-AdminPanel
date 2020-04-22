<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use SoftDeletes;

    protected $dates = [
        'dt_nascimento',
        'dt_internacao',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'paciente',
        'dt_nascimento',
        'dt_internacao',
        'origem',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
