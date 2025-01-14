<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlumnosSeeder extends Seeder
{
    public function run()
    {
        DB::table('alumnos')->insert([
            ['nombre' => 'Juan Pérez', 'email' => 'juan.perez@example.com', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'María González', 'email' => 'maria.gonzalez@example.com', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Carlos López', 'email' => 'carlos.lopez@example.com', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
