@extends('site.layouts.basico')

@section('titulo', 'Recuperar Acesso - EncurtaLink')

@section('conteudo')

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <img src=" {{ asset('img/recover.png') }} " class="img-thumbnail capa" alt="">
            </div>
            <div class="col-6 justify-content-center align-items-center">
                <h1 class="text-center recover">Recuperar Senha</h1>
                @component('site.layouts._components.form_recover')
                @endcomponent
            </div>
        </div>
    </div>
    
@endsection