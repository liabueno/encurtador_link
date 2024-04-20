<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EncurtaLink</title>
    <!-- ÍCONE -->
    <link rel="shortcut icon" type="imagex/png" href="{{ asset('img/logo.png') }}">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS PRÓPRIO -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

@include('site.header')

    <!-- CARDS -->
    <div class="card-group">
        <div class="card text-center">
            <img src="{{ asset('img/card1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Livre-se de URLs Longas!</h5>
                <p class="card-text">Facilite seu acesso aos seus sites preferidos</p>
                <button class="btn btn-info "> <a class="chamada" href="{{ route('app.generate') }}">Gerar URL Encurtada</a></button>
            </div>
        </div>
        <div class="card text-center">
            <img src="{{ asset('img/card2.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tenha a lista de seus Links!</h5>
                <p class="card-text">Manipule seus links de uma forma simples e eficiente</p>
                <button class="btn btn-info "><a class="chamada" href="{{ route('app.list') }}">Listar URLs</a></button>
            </div>
        </div>
        <div class="card text-center">
            <img src="{{ asset('img/card3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Faça seu cadastro!</h5>
                <p class="card-text">Desfrute de nossos serviços</p>
                <button class="btn btn-info"><a class="chamada" href="{{ route('site.register') }}">Cadastre-se</a></button>
            </div>
        </div>
    </div>

@include('site.footer')
