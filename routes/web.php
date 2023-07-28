<?php


//Clase importada de la ruta debajo, de este modo al ejecutar ya reconoce la ruta
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Creando nuestra ruta de un formulario resource, nomre y controlador y se importa la clase
//Con esta linea se crean diferentes rutas para accedera diferentes metodo

Route::resource('product', ClientController::class);