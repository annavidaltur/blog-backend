<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        
        <!-- tailwind v3 styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >

        <!-- bootstrap v4 styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <x-app-layout></x-app-layout>
        <!-- @php 
            $color = 'danger';
            $alert = 'alert';
        @endphp
        <x-alert :color="$color" class="mb-4">
            <x-slot name="title">
                titulo
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos cumque atque provident libero aperiam mollitia dicta, asperiores quod, praesentium eligendi dolorem inventore repudiandae saepe est quia aspernatur iusto. Quae?
        </x-alert>

        <x-alert2 color="danger">   
            <x-slot name="title">
                Títulooo
            </x-slot>         
        </x-alert2>

        <x-dynamic-component :component="$alert">
            <x-slot name="title">
                titulo
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos cumque atque provident libero aperiam mollitia dicta, asperiores quod, praesentium eligendi dolorem inventore repudiandae saepe est quia aspernatur iusto. Quae?
        </x-dynamic-component> -->
    </body>
</html>
