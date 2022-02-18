<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EstudianteController::class, "index"])->name("index");

Route::get("/create", [EstudianteController::class, "create"])->name("create");

Route::post("/store", [EstudianteController::class, "store"])->name("store");

Route::get("/{studentId}", [EstudianteController::class, "destroy"])->name("destroy");
