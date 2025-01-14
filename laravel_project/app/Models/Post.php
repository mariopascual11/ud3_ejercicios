<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'usuario_id');
    }
}
