@extends('site.layouts.basico')

@section('titulo', 'Contate - EncurtaLink')

@section('conteudo')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12 d-flex justify-content-center">
                <img src=" {{ asset('img/contact.png') }} " class="img-thumbnail capa" alt="">
            </div>
            <div class="col-md-6 col-12 justify-content-center align-items-center">
                <h1 class="text-center contact">Contate-nos</h1>
                @component('site.layouts._components.form_contact')
                @endcomponent
            </div>
        </div>
    </div>

@endsection