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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Ruta /contacto
 *  @return 
 * vista contactos.blade.php que hereda de plantilla
 */
Route::get('/contacto', function(){
    return view('Layout.contacto');
});

/**
 * Ruta /contacto
 *  @return 
 * vista contactos.blade.php que hereda de plantilla
 */
Route::get('/galeria', function(){
                                //*****************!!!!***************** */
    return view('Layout.galeria', ['nombre'=>'Daniela Andrea Gonzalez']);
});
