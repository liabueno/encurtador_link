<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Acesso EncurtaLink</title>

    <!-- ÍCONE -->
    <link rel="shortcut icon" type="imagex/png" href="{{ asset('img/logo.png') }}">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS PRÓPRIO -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <img src=" {{ asset('img/recover.png') }} " class="img-thumbnail capa" alt="">
            </div>
            <div class="col-6 justify-content-center align-items-center">
                <form action="" class="recuperar">
                    <h1 class="text-center">Recuperar Senha</h1>
                    <br>
                    <label for="inputEmail4" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Informe o e-mail cadastrado">
                    <br>
                </form>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" id="btn"><a class="acessar" href="{{ route('site.index') }}">Enviar</a></button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>