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
Route::get ('/store/{p1}/' , [\App\Http\Controllers\products::class , 'productssell'])->name('Lista Produtos ');
Route::get ('/store/{p1}/produto/{p2}/' , [\App\Http\Controllers\products::class , 'productdata'])->name('Detalhes do Produto');

Route::get ('/store/{p1}/produto/{p2}/updateform' , [\App\Http\Controllers\products::class , 'updateForm'])->name('Formulario de Atualização ');
Route::post ('/store/{p1}/produto/{p2}/update/action' , [\App\Http\Controllers\products::class , 'updateProduct'])->name('Formulario de Atualização ');
Route::get ('/store/{p1}/produto/{p2}/delete' , [\App\Http\Controllers\products::class , 'deleteProduct'])->name('Formulario de Atualização ');


Route::get ('/store/{p1}/cadastrar/' , [\App\Http\Controllers\products::class , 'NewProductForm'])->name('Lista Produtos ');
Route::post ('/store/{p1}/action' , [\App\Http\Controllers\products::class , 'newproduct'])->name('Novo Produto');

Route::get('/login/surpresesexy', function () {
    return view('LoginStore');
});
Route::post ('/store' , [\App\Http\Controllers\profile::class , 'clientLogin'])->name('Login Script ');
Route::get ('/login/cadastroglorioso' , [\App\Http\Controllers\profile::class , 'storeform'])->name('Formulario De Cadastro ');
Route::post ('/login/cad/action' , [\App\Http\Controllers\profile::class , 'storeclient'])->name('Ativador De cadastro ');


Route::get ('/buynow/{p1}' , [\App\Http\Controllers\profile::class , 'buynow'])->name('Link de COmpra');
