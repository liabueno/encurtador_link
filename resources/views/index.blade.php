@extends('site.layouts.basico')

@section('titulo', 'EncurtaLink')

@section('conteudo')
    @include('site.layouts._partials.header')

    @component('site.layouts._components.cards_index')
    @endcomponent

    @component('site.layouts._components.form_contact')
    @endcomponent

    @include('site.layouts._partials.footer')

@endsection