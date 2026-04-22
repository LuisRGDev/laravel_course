<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

//Rutas autenticadas
Route::middleware('auth')->group(function (){

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', fn() => view('dashboard.dashboard'))->name('dashboard');
    Route::get('/tareas', fn() => view('tareas'))->name('tareas');
    Route::get('/notas', fn() => view('notas'))->name('notas');

    Route::middleware('is_admin')->prefix('admin')->name('admin.')->group(function () { //addmin, para rutear al index, ya que sin el punto no encuentra el archivo
        Route::get('/users', [UserController::class, 'index'])->name('index');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

});



// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// })->name('dashboard');

Route::get('/notas', function () {
    return view('notas');
})->name('notas');


// Route::get('/tareas', function () {
//     return view('tareas');
// })->name('tareas');



// Route::get('/suma', [SumaController::class, 'index']);

// Route::post('/suma', [SumaController::class, 'suma']);

