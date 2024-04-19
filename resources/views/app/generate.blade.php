<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar URL Curta</title>

    <!-- ÍCONE -->
    <link rel="shortcut icon" type="imagex/png" href="{{ asset('img/logo.png') }}">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS PRÓPRIO -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

@include('site.header')

    <!-- FORMS -->

    <div class="row g-3 align-items-center justify-content-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label label">https://localhost/</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputURL" class="form-control campo" placeholder="Informe o restante da URL">
        </div>
    </div>

    <div class="row g-3 align-items-center justify-content-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label label2">Minha URL</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputURL" class="form-control campo2" placeholder="Informe como deseja sua URL">
        </div>
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-auto">
            <button type="submit" class="btn btn-success">Gerar Link Encurtado</button>
        </div>
    </div>
    
    @include('site.footer')
