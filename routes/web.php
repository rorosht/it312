<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Views 
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');


// Action Methods
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::post('/students/{id}', [StudentController::class,'update'])->name('students.update');
Route::get('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');