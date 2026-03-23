<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/suma', function () {
    return view('suma');
});

Route::post('/suma', function (Request $request) {

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado = $num1 + $num2;
    echo "La suma de $num1 + $num2 es: $resultado";

    return view('suma', ['resultado' => $resultado]);
});