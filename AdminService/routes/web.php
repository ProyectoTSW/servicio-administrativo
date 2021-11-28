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

// Route::get('/', function () {
//     return view('welcome');
// });


//Rutas a nuestras views
Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('sign_in', function()
{
    return View::make('pages.sign_in');
});
Route::get('ventas', function()
{
    return View::make('pages.ventas');
});
Route::get('almacen', function()
{
    return View::make('pages.almacen');
});
Route::get('perfil', function()
{
    return View::make('pages.perfil');
});
Route::get('recursos_humanos', function()
{
    return View::make('pages.rh');
});

