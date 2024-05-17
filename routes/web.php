<?php

use Illuminate\Support\Facades\Route;
//use App\Models\task;
use App\Http\Controllers\Taskcontoller;
use App\Http\Controllers\tacheController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AssuranceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route pour le formulaire

Route::get('tache',[tacheController::class, 'index'])->name('index');
Route::get('tache/create',[tacheController::class, 'create'])->name('create');
Route::post('tache/store',[tacheController::class,'store'])->name('store');

Route::get('/', function (){
    return view('welcome');
});

Route::get('crud', function(){
    return "hello laravel";
});
/*
Route::get('/task',[Taskcontoller::class,'index'])->name('index');

Route::get('/task/create',[Taskcontoller::class,'create']);

Route::post('/task/store', [Taskcontoller::class,'store']);

Route::get('/task/{id}',[Taskcontoller::class,'edit'])->name('edit');

Route::delete('/task/{id}',[Taskcontoller::class,'destroy'])->name('destroy');

Route::post('task/{id}',[Taskcontoller::class,'update'])->name('update');*/


// routes pour les pages de l'application INTIA
Route::get('/accueil',[ClientController::class,'accueil'])->name('accueil');
Route::get('/client',[ClientController::class, 'index'])->name('index');
Route::get('/client/create',[ClientController::class,'create'])->name('creation');
Route::post('/client/store',[ClientController::class,'store']);
Route::get('/clien{id}',[ClientController::class,'edit'])->name('modifier');
Route::delete('/client{id}',[ClientController::class,'destroy'])->name('delete');
Route::post('/client{id}',[ClientController::class,'update'])->name('modification');
