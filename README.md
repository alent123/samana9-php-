/**
 * ========================================================
 * 🧭 RUTAS EN LARAVEL
 * ========================================================
 * En Laravel, las rutas definen las URL que la aplicación puede manejar.
 * Cuando el usuario accede a una URL, Laravel ejecuta el código asociado.
 * 
 * PASOS:
 * 1. Abrir el proyecto en tu editor.
 * 2. Buscar y abrir el archivo routes/web.php.
 *
 * Ejemplo inicial:
 * --------------------------------------------------------
 * Route::get('/', function () {
 *     return view('welcome');
 * });
 *
 * Modificación del archivo web.php:
 * --------------------------------------------------------
 * Route::get('/', function () {
 *     return "Bienvenidos alumnos de Tecsup";
 * });
 *
 * Route::get('/demo', function () {
 *     return "Aquí se muestra el contenido de Demo";
 * });
 *
 * Route::get('/tienda', function () {
 *     return "Aquí se muestra el contenido de Tienda";
 * });
 *
 * Route::get('/tienda/create', function () {
 *     return "Aquí se muestra el entorno de la creación de la Tienda";
 * });
 *
 * // Con un parámetro
 * Route::get('/tienda/{post}', function ($post) {
 *     return "Aquí se muestra todo el contenido de {$post}";
 * });
 *
 * // Con dos parámetros
 * Route::get('/contenido/{post}/{categoria}', function ($post, $categoria) {
 *     return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
 * });
 *
 * // Con parámetro opcional
 * Route::get('/lista/{post}/{categoria?}', function ($post, $categoria = 'hogar') {
 *     return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
 * });
 *
 * ========================================================
 * 🎮 CONTROLADORES EN LARAVEL
 * ========================================================
 * Los controladores organizan la lógica del manejo de solicitudes HTTP.
 * 
 * PASOS:
 * 1. Crear HomeController:
 *    php artisan make:controller HomeController
 *
 * 2. Verificar que se creó en app/Http/Controllers.
 *
 * 3. Editar HomeController.php:
 * --------------------------------------------------------
 * namespace App\Http\Controllers;
 * use Illuminate\Http\Request;
 *
 * class HomeController extends Controller {
 *     public function index() {
 *         return "Bienvenidos alumnos de Tecsup";
 *     }
 * }
 *
 * 4. Editar routes/web.php:
 * --------------------------------------------------------
 * use App\Http\Controllers\HomeController;
 * Route::get('/', [HomeController::class, 'index']);
 *
 * 5. Ejecutar la app:
 *    php artisan serve
 *
 * --------------------------------------------------------
 * 6. Crear TiendaController:
 *    php artisan make:controller TiendaController
 *
 * 7. Editar TiendaController.php:
 * --------------------------------------------------------
 * namespace App\Http\Controllers;
 * use Illuminate\Http\Request;
 *
 * class TiendaController extends Controller {
 *     public function index() {
 *         return "Aquí se muestra todo el contenido de tienda";
 *     }
 *     public function create() {
 *         return "Aquí se muestra el entorno de la creación de la tienda";
 *     }
 *     public function show($post) {
 *         return "Aquí se muestra todo el contenido {$post}";
 *     }
 * }
 *
 * 8. Editar routes/web.php:
 * --------------------------------------------------------
 * use App\Http\Controllers\TiendaController;
 *
 * Route::get('/tienda', [TiendaController::class, 'index']);
 * Route::get('/tienda/create', [TiendaController::class, 'create']);
 * Route::get('/tienda/{post}', [TiendaController::class, 'show']);
 *
 * 9. Ejecutar nuevamente si es necesario:
 *    php artisan serve
 *
 * ========================================================
 * ✅ Fin del resumen de rutas y controladores
 * ========================================================
 */
