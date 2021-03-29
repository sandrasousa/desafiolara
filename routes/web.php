<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//rota geral para os produtos, devolve dependendo da classe (index, create, edit, show)
    //GET obter produtos "/products"
    //POST adicionar produtos "/products/create"
    //PUT editar/atualziar produtos "/products/$id/edit"
    //GET obter produtos por id "/products/$id"
Route::resource('products', ProductController::class);