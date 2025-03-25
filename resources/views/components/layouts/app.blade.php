<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Cadastro Cliente' }}</title>

        @livewireStyles {{--parte de estilos--}}
    </head>
    <body>
        {{ $slot }}

      @livewireScripts {{--parte do script--}}
    </body>
</html>
