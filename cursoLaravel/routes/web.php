<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/notas', function () {
    return view('notas');
})->name('notas');


Route::get('/tareas', function () {
    return view('tareas');
})->name('tareas');

// Route::get('/suma', function () {
//     return view('suma');
// });

Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma', [SumaController::class, 'suma']);

