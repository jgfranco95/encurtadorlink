<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\PrincipalController::class, 'Principal' ]) ->name("site.principal");
 
Route::get('/contato',[App\Http\Controllers\ContatoController::class, 'contato'])->name("site.contato");

Route::get('/sobre-nos',[App\Http\Controllers\SobrenosController::class, 'Sobrenos'])->name("site.Sobrenos");

route::prefix('app')->group(function(){

    Route::get('/login',[App\Http\Controllers\login::class,'login']);
    
    Route::get('/clientes',[App\Http\Controllers\clientes::class,'clientes']);
    
    Route::get('/fornecedores',[App\Http\Controllers\fornecedores::class,'fornecedores']);
    
    Route::get('/produtos',[App\Http\Controllers\produtos::class,'produtos']);

});