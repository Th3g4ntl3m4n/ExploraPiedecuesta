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

Route::get('/galeria', function () {
    return view('gallery');
});

Route::get('/ciudad-garrotera', function () {
    return view('general-info');
});

Route::get('/herencia-garrotera', function () {
    return view('herencia-garrotera');
});

Route::get('/fiestas-celebraciones', function () {
    return view('fiestas-celebraciones');
});

Route::get('/como-llegar', function () {
    return view('como-llegar');
});

Route::get('/guia-del-viajero', function () {
    return view('guia-del-viajero');
});

Route::get('/naturaleza', function () {
    return view('nature');
});

Route::get('/senderismo', function () {
    return view('senderismo');
});

Route::get('/cultura', function () {
    return view('culture');
});

Route::get('/guias-turisticos', function () {
    return view('tour-guide');
});



Route::get('/registro', function () {
    return view('register');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
* Agency
* Routes
*/
//Route::resource('empresas', 'App\Http\Controllers\AgencyController');
//Route::get('/crear-empresa', function () {
//    return view('agency.create');
//});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
    * Agency Routes
    */
    Route::group(['prefix' => 'agency'], function() {
            Route::get('/empresas', 'AgencyController@index')->name('empresas.index');
            Route::get('/create', 'AgencyController@create')->name('agency.create');
            Route::post('/create', 'AgencyController@store')->name('agency.store');
            Route::get('/{agency}/show', 'AgencyControllerr@show')->name('agency.show');
            Route::get('/{agency}/edit', 'AgencyController@edit')->name('agency.edit');
            Route::patch('/{agency}/update', 'AgencyController@update')->name('agency.update');
            Route::delete('/{agency}/delete', 'AgencyController@destroy')->name('agency.destroy');
    });
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
    * user Routes
    */
    Route::group(['prefix' => 'user'], function() {
            Route::get('/users', 'UserController@index')->name('users.index');
            //Route::get('/create', 'AgencyController@create')->name('agency.create');
            //Route::post('/create', 'AgencyController@store')->name('agency.store');
            //Route::get('/{agency}/show', 'AgencyControllerr@show')->name('agency.show');
            //Route::get('/{agency}/edit', 'AgencyController@edit')->name('agency.edit');
            //Route::patch('/{agency}/update', 'AgencyController@update')->name('agency.update');
            //Route::delete('/{agency}/delete', 'AgencyController@destroy')->name('agency.destroy');
    });
});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
    * plan Routes
    */
    Route::group(['prefix' => 'plan'], function() {
            Route::get('/plans', 'PlanController@index')->name('plans.index');
            Route::get('/create', 'PlanController@create')->name('plan.create');
            Route::post('/create', 'PlanController@store')->name('plan.store');
            //Route::get('/{agency}/show', 'AgencyControllerr@show')->name('agency.show');
            //Route::get('/{agency}/edit', 'AgencyController@edit')->name('agency.edit');
            //Route::patch('/{agency}/update', 'AgencyController@update')->name('agency.update');
            //Route::delete('/{agency}/delete', 'AgencyController@destroy')->name('agency.destroy');
    });
});

//dataTables
Route::get('datatable/agencies', 'App\Http\Controllers\DatatableController@hqs')->name('datatable.agencies');
