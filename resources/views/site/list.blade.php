@extends('site.layouts.basico')

@section('titulo', 'Lista de Links')

@section('conteudo')
    @include('site.layouts._partials.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="lista">Meus Links Criados</h1>
                <br>
                <div class="col-6">
                    <div class="row">
                        <div class="col-9 text-center">
                            <p class="criado">http://localhost/estudos</p>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-danger excluir">Excluir<img src="{{ asset('img/lixeira.png') }}" class="lixeira" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-9 text-center">
                            <p class="criado">http://localhost/trabalho</p>
                        </div>
                        <div class="col-3 text-center">
                            <button type="submit" class="btn btn-danger excluir">Excluir<img src="{{ asset('img/lixeira.png') }}" class="lixeira" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-9 text-center">
                            <p class="criado">http://localhost/formulario</p>
                        </div>
                        <div class="col-3 text-center">
                            <button type="submit" class="btn btn-danger excluir" >Excluir<img src="{{ asset('img/lixeira.png') }}" class="lixeira" alt=""></button>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    @include('site.layouts._partials.footer')

@endsection

    
