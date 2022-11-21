<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
//Routes for admin users
Route::group([
    'prefix' =>'admin',
    'as'=>'admin.',
    
] , function($route){

    Route::get('/home' , [ App\Http\Controllers\Admin\HomeController::class, 'index']);
    Route::resource('/users' , App\Http\Controllers\Admin\UserController::class );
    Route::post('/users/search' , [App\Http\Controllers\Admin\UserController::class, 'search'] )->name('users.search');
    Route::post('/roles/search' , [App\Http\Controllers\Admin\RoleController::class, 'search'] )->name('roles.search');
    Route::post('/quejas/search' , [App\Http\Controllers\Basqyr01Controller::class, 'search'] )->name('quejas.search');
    Route::post('/historica/search' , [App\Http\Controllers\Bashis01Controller::class, 'search'] )->name('historica.search');
    Route::resource('/roles' , App\Http\Controllers\Admin\RoleController::class);
    Route::resource('/quejas' , App\Http\Controllers\Basqyr01Controller::class);
    Route::resource('/historica' , App\Http\Controllers\Bashis01Controller::class);
     Route::get('/historica/status/{basqyr}' , [App\Http\Controllers\Bashis01Controller::class, 'store'])->name('finish');
    Route::get('ciudad-estado', [App\Http\Controllers\Basciu01Controller::class, 'getCiudadesEstado'])->name('getCiudadesEstado');
    Route::get('municipio-estado', [App\Http\Controllers\Basmun01Controller::class, 'getMunicipiosEstado'])->name('getMunicipiosEstado');
    Route::get('parroquia-estado', [App\Http\Controllers\Baspar01Controller::class, 'getParroquiasMuncipio'])->name('getParroquiasMuncipio');

    Route::get('/perfil' , [ App\Http\Controllers\Admin\ProfileController::class, 'index']);
    Route::post('/perfil' , [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');


});

