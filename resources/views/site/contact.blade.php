@extends('site.layouts.basico')

@section('titulo', 'Contate EncurtaLink')

@section('conteudo')
    @include('site.layouts._partials.header')
    <h1>Contato</h1>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
              
                @component('site.layouts._components.form_contact')
                @endcomponent
                
            </div>
        </div>
    </div>

    @include('site.layouts._partials.footer')
@endsection