<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar URL Curta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <!-- MENU NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Link Shortener</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('site.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.generate') }}">Gerar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.list') }}">Listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>