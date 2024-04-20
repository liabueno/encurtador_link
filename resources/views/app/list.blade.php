<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Links</title>

    <!-- ÍCONE -->
    <link rel="shortcut icon" type="imagex/png" href="{{ asset('img/logo.png') }}">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS PRÓPRIO -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

@include('site.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="lista">Meus Links Criados</h1>
                <br>
                <div class="col-6">
                    <div class="row">
                        <div class="col-9 text-center">
                            <p class="criado">http://localhost/estudos</p>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-danger excluir"><img src="{{ asset('img/lixeira.png') }}" class="lixeira" alt="">Excluir</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-9 text-center">
                            <p class="criado">http://localhost/trabalho</p>
                        </div>
                        <div class="col-3 text-center">
                            <button type="submit" class="btn btn-danger excluir"><img src="{{ asset('img/lixeira.png') }}" class="lixeira" alt="">Excluir</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-9 text-center">
                            <p class="criado">http://localhost/formulario</p>
                        </div>
                        <div class="col-3 text-center">
                            <button type="submit" class="btn btn-danger excluir" ><img src="{{ asset('img/lixeira.png') }}" class="lixeira" alt="">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('site.footer')

    
