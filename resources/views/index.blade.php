@extends('site.layouts.basico')

@section('titulo', 'EncurtaLink')

@section('conteudo')
    @include('site.layouts._partials.header')

    @component('site.layouts._components.cards_index')
    @endcomponent

    @include('site.layouts._partials.footer')

@endsection