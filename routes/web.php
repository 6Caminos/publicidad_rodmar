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
    return view('index');
});

Route::get('/puertas', function () {
    return view('puertas');
});

Route::get('/ventanas', function () {
    return view('ventanas');
});
Route::get('/canceles', function () {
    return view('canceles');
});
Route::get('/domos', function () {
    return view('domos');
});
Route::get('/vitrinas', function () {
    return view('vitrinas');
});
Route::get('/barandales', function () {
    return view('barandales');
});



Route::get('/vidrios', function () {
    return view('vidrios');
});
Route::get('/policarbonatos', function () {
    return view('policarbonatos');
});
Route::get('/aluminios', function () {
    return view('aluminios');
});
Route::get('/herrajes', function () {
    return view('herrajes');
});


Route::get('/error404', function () {
    return view('error404'); // El nombre de la vista corresponde al archivo HTML personalizado
});




Route::get('/presupuesto', function () {
    return view('presupuesto');
});