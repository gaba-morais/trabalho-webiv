<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/categoria/listar', [CategoriaController::class, 'listar']);
Route::get('/categoria/novo', [CategoriaController::class, 'novo']);
Route::post('/categoria/salvar', [CategoriaController::class, 'salvar']);
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'editar']);
Route::get('/categoria/excluir/{id}', [CategoriaController::class, 'excluir']);

Route::get('/fornecedor/listar', [FornecedorController::class, 'listar']);
Route::get('/fornecedor/novo', [FornecedorController::class, 'novo']);
Route::post('/fornecedor/salvar', [FornecedorController::class, 'salvar']);
Route::get('/fornecedor/editar/{id}', [FornecedorController::class, 'editar']);
Route::get('/fornecedor/excluir/{id}', [FornecedorController::class, 'excluir']);

Route::get('/produto/listar', [ProdutoController::class, 'listar']);
Route::get('/produto/novo', [ProdutoController::class, 'novo']);
Route::post('/produto/salvar', [ProdutoController::class, 'salvar']);
Route::get('/produto/editar/{id}', [ProdutoController::class, 'editar']);
Route::get('/produto/excluir/{id}', [ProdutoController::class, 'excluir']);