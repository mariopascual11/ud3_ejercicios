<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\AsignaturaController;

Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('notas', NotaController::class);
Route::apiResource('asignaturas', AsignaturaController::class);
