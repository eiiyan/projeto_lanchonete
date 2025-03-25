<?php

use App\Http\Controllers\CadastroProdutoController;
use App\Livewire\ClienteCadastro;
use App\Livewire\ProdutoCadastro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente-cadastro', ClienteCadastro::class);
Route::get('/produto-cadastro', ProdutoCadastro::class);
