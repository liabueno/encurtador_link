@extends('site.layouts.basico')

@section('titulo', 'Login - EncurtaLink')

@section('conteudo')

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <img src=" {{ asset('img/login.png') }} " class="img-thumbnail capa" alt="">
            </div>
            <div class="col-6 justify-content-center align-items-center">
                <h1 class="text-center">Login</h1>
                @component('site.layouts._components.form_login')
                @endcomponent
            </div>
        </div>
    </div>

@endsection