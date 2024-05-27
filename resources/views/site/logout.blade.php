@extends('site.layouts.basico')

@section('titulo', 'Logout')

@section('conteudo')

<div class="container-fluid ">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
                <img src=" {{ asset('img/logo.png') }} " alt="Erro 404" width="30%" class="img-fluid mb-4">
                <h1 class="erro">Você se desconectou</h1>
                <p class="pagina">Até a próxima!</p>
                <a href="{{ route('site.index') }}" class="esqueci">Voltar para a página inicial</a>
            </div>
        </div>
    </div>

@endsection