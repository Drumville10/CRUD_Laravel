<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

/*
Route::get('/empleado',function(){
    return view(('empleado.index'));
});
// esta linea de codigo llama a un solo metodo de el controllador especificadp
Route::get('/empleado/create',[EmpleadoController::class,'create']);
*/


//esta linea de codigo llama a todos los metodos que estan en el controllador
Route::resource('empleado',EmpleadoController::class);
