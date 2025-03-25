<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Bem-vindo ao Cadastro de Clientes</h1>


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @livewire('cliente-cadastro')
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @livewire('produto-cadastro')
            </div>
        </div>
    </div>
@endsection




