<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;

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

Route::get('/', function () {
    return view('welcome');

});



Route::get('/autor/index' , [AutorController::class,'index'])->name('autor.index'); //para ler uso get
Route::get('/autor/create', [AutorController::class, 'create'])->name('autor.create');
Route::post('/autor/store/{id}', [AutorController::class,'store'])->name('autor.store');
Route::get('/autor/edit/{id}' , [AutorController::class,'edit'])->name('autor.edit'); 
Route::get('/autor/destroy/{id}' , [AutorController::class,'destroy'])->name('autor.destroy'); 
Route::get('/autor/show/{id}' , [AutorController::class,'show'])->name('autor.show');