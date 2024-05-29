@extends('site.layouts.basico')

@section('titulo', 'Login - EncurtaLink')

@section('conteudo')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <img src=" {{ asset('img/login.png') }} " class="img-thumbnail capa" alt="">
            </div>
            <div class="col-md-6 col-12 justify-content-center align-items-center">
                <h1 class="text-center login">Login</h1>
                @component('site.layouts._components.form_login')
                @endcomponent
            </div>
        </div>
    </div>

@endsection