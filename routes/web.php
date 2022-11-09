<?php

use App\Http\Controllers\ControladorVistas;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(ControladorVistas::class)->group(function(){
    Route::get('/','vistaMenu')->name('ini');
    Route::get('proveedores','vistaProveedores')->name('pro');
    Route::get('registro_Proveedores', 'vistaRegistroPro')->name('regpro');
    Route::get('consultaCA','vistaCA')->name('cca');
    Route::get('levantamiento','vistaLevantamiento')->name('lev');
    Route::get('login','vistaLogin')->name('log');
    Route::get('registro_articulos','vistaRegistroA')->name('rega');
    Route::get('registro_comics','vistaRegistroC')->name('regc');
    Route::get('tienda','vistaTienda')->name('shop');
    Route::post('agregar', 'AgregarArticulo') -> name('addArti');
    Route::post('agregar_comic', 'AgregarComic')->name('addCom');
    Route::post('agregar_proveedor', 'AgregarProveedor')->name('addProv');
});

// Route::view('/', 'menu');
