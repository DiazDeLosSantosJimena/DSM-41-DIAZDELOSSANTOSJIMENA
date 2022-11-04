<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Mnadamos a llamar al controller que se utiliza
//use App\Http\Controllers\Practica5;
//use App\Http\Controllers\Practica6;
use App\Http\Controllers\ApiGroupsController;
use App\Http\Controllers\ApiStudentsController;
use App\Http\Controllers\ApiSubjectsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//Definimos nuestra ruta get accedemosa nuetsro controlador Practica 5 y accedemos a la función index
//Route::get('mirutaapi',[Practica5::class, 'index'])->name('resourceapi');

/*Route::get('mirutaapiG',[SubjectsController::class, 'index'])->name('subject');
Route::post('mirutaapiP',[SubjectsController::class, 'index'])->name('subject');
Route::put('mirutaapiPU',[SubjectsController::class, 'index'])->name('subject');
Route::delete('mirutaapiD',[SubjectsController::class, 'index'])->name('subject');
//Route::edit('mirutaapiE',[SubjectsController::class, 'index'])->name('subject');*/

//Definimos una ruta Apiresource
Route::Apiresource('subjects',ApiSubjectsController::class); 
Route::Apiresource('groups',ApiGroupsController::class); 
Route::Apiresource('students',ApiStudentsController::class); 

//Definimos una ruta pero solo especifico ciertos resource a utilizar
/*Route::Apiresource('rapi',Practica6::class)->only(['index','show']);*/

/*Definimos una api resource y hacemos la ecepcion de que no ocuparemos edit y destroy */
//Route::Apiresource('rapi',Practica6::class)->except(['edit','destroy']);