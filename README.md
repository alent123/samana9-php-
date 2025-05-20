Laravel: Rutas y Controladores
Descripción: Ejemplos básicos de cómo definir rutas y usar controladores en Laravel.

📌 Rutas en Laravel
Las rutas definen las URL que la aplicación puede manejar.

📂 Archivo: routes/web.php
Ejemplos de rutas:
php
<?php

use Illuminate\Support\Facades\Route;

// Ruta básica
Route::get('/', function () {
    return "Bienvenidos alumnos de Tecsup";
});

// Ruta con parámetro
Route::get('/tienda/{post}', function ($post) {
    return "Mostrando contenido de {$post}";
});

// Ruta con parámetros opcionales
Route::get('/lista/{post}/{categoria?}', function ($post, $categoria = 'hogar') {
    return "Mostrando {$post} de la categoría {$categoria}";
});
🎛️ Controladores en Laravel
Los controladores organizan la lógica de las rutas en clases.

1. Crear un controlador:
bash
php artisan make:controller HomeController
2. Ejemplo de controlador: app/Http/Controllers/HomeController.php
php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Bienvenidos alumnos de Tecsup";
    }
}
3. Usar el controlador en rutas:
php
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
4. Controlador con múltiples métodos:
php
// En TiendaController.php
public function show($post)
{
    return "Mostrando contenido de {$post}";
}

// En web.php
Route::get('/tienda/{post}', [TiendaController::class, 'show']);
🚀 Ejecutar la aplicación
bash
php artisan serve
🔹 Notas:

Las rutas básicas usan funciones anónimas (closures).

Los controladores ayudan a mantener el código ordenado.

Los parámetros en rutas permiten dinámica en las URL.

📌 Repositorio: [Nombre del Repositorio]
🔗 Licencia: MIT
