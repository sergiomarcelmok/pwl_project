<?php

use
Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

route::get('/', function () {
    return view('welcome');
});

route::get('/mahasiswa', [MahasiswaController::class, 'index']);
route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
route::get('/mahasiswa-create',[MahasiswaController::class,'create'])->name('mahasiswa.create');
route::post('/mahasiswa',[MahasiswaController::class,'store'])->name('mahasiswa.save');
route::get('/mahasiswa-edit/{id}', [MahasiswaController::class,'edit']);
route::get('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name ('mahasiswa.edit');
route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name(',mahasiswa.delete');


