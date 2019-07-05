<?php
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

Route::get('/', 'InicioController@index');
Route::get('/proveedor','ProductoController@create');
Route::post('/guardar','ProductoController@store')->name('guardar_producto');
Route::get('cliente/producto/{id}','ProductoController@edit')->name('comprar_producto');
Route::get('/cliente','ProductoController@getClienteProductos')->name('visualizacion_cliente');
Route::patch('/producto/{id}', 'ProductoController@update')->name('actualizar_inventario');
Route::get('/visualizacion','ProductoController@index')->name('visualizacion');
Route::get('/visualizacion/restore/{id}','ProductoController@restore')->name('restaurar');
Route::delete('visualizacion/{id}', 'ProductoController@destroy')->name('eliminar');