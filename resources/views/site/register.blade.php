@extends('site.layouts.basico')

@section('titulo', 'Registrar-se - EncurtaLink')

@section('conteudo')

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <img src=" {{ asset('img/register.png') }} " class="img-thumbnail capa" alt="">
            </div>
            <div class="col-6 justify-content-center align-items-center">
                <h1 class="text-center">Cadastro</h1>
                @component('site.layouts._components.form_register')
                @endcomponent
            </div>
        </div>
    </div>
    
@endsection