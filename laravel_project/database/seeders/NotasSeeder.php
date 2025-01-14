<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotasSeeder extends Seeder
{
    public function run()
    {
        DB::table('notas')->insert([
            ['alumno_id' => 1, 'asignatura_id' => 1, 'nota' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['alumno_id' => 1, 'asignatura_id' => 2, 'nota' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['alumno_id' => 2, 'asignatura_id' => 1, 'nota' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
