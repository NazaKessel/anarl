<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
    'nombre',
    'apellido',
    'telefono',
    'email',
    'especialidad_id',
    'activo'
];

    public function especialidad()
        {
            return $this->belongsTo(Especialidad::class);
        }
}
