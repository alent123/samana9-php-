<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/demo', function () {
    return "Aquí se muestra el contenido de Demo";
});

// Rutas para Tienda usando TiendaController
Route::get('/tienda', [TiendaController::class, 'index']);

Route::get('/tienda/create', [TiendaController::class, 'create']);

Route::get('/tienda/{post}', [TiendaController::class, 'show']);

// Rutas con funciones anónimas que no fueron indicadas para cambiar (las dejamos igual)
Route::get('/contenido/{post}/{categoria}', function ($post, $categoria) {
    return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
});

Route::get('/lista/{post}/{categoria?}', function ($post, $categoria = 'hogar') {
    return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
});