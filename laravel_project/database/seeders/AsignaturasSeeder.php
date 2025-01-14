<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsignaturasSeeder extends Seeder
{
    public function run()
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'descripcion' => 'Curso de matemáticas básicas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Física', 'descripcion' => 'Curso de física avanzada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Historia', 'descripcion' => 'Historia mundial', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
