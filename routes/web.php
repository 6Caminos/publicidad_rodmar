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
    return view('pages.puertas');
});

Route::get('/ventanas', function () {
    return view('pages.ventanas');
});
Route::get('/canceles', function () {
    return view('pages.canceles');
});
Route::get('/domos', function () {
    return view('pages.domos');
});
Route::get('/vitrinas', function () {
    return view('pages.vitrinas');
});
Route::get('/barandales', function () {
    return view('pages.barandales');
});



Route::get('/vidrios', function () {
    return view('pages.vidrios');
});
Route::get('/policarbonatos', function () {
    return view('pages.policarbonatos');
});
Route::get('/aluminios', function () {
    return view('pages.aluminios');
});
Route::get('/herrajes', function () {
    return view('pages.herrajes');
});


Route::get('/esquineros', function () {
    return view('pages.esquineros');
});
Route::get('/jardin', function () {
    return view('pages.jardin');
});
Route::get('/hurnas', function () {
    return view('pages.hurnas');
});
Route::get('/peceras', function () {
    return view('pages.peceras');
});
Route::get('/arreglos', function () {
    return view('pages.arreglos');
});

Route::get('/error404', function () {
    return view('error.error404'); // El nombre de la vista corresponde al archivo HTML personalizado
});




Route::get('/presupuesto', function () {
    return view('pages.presupuesto');
});