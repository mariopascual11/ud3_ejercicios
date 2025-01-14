<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = ['biografia'];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'usuario_id');
    }
}
