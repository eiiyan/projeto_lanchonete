<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ClienteCadastro;
use App\Livewire\ClienteCadastro as LivewireClienteCadastro;
use Livewire\Livewire;

Route::get('/cliente/cadastro', LivewireClienteCadastro::class);


 
