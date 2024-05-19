@extends('site.layouts.basico')

@section('titulo', 'Gerar Link Encurtado')

@section('conteudo')
    @include('site.layouts._partials.header')

    <!-- FORMS -->
    <div class="container">
        <div class="row g-3 align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center gerar">Gerar Meu Link Encurtado</h1>
            </div>
            <div class="col-auto">
            @component('site.layouts._components.form_generate')
            @endcomponent
    </div>

    @include('site.layouts._partials.footer')
@endsection