@extends('layouts.principal')

@section('titulo', 'Opções')

@section('content')

<div class="options">
    <ul>
        <li><a class="warning"   href="{{ route('opcoes', 1) }}">warning</a></li>
        <li><a class="info"      href="{{ route('opcoes', 2) }}">info</a></li>
        <li><a class="success"   href="{{ route('opcoes', 3) }}">success</a></li>
        <li><a class="error"     href="{{ route('opcoes', 4) }}">error</a></li>
    </ul>
</div>

@if (isset($opcao))
    @switch($opcao)
        @case(1)
            @alerta(['titulo'=>'Alerta','tipo'=>'warning'])
            <p><strong>Warning</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
        @break
    
        @case(2)
            @alerta(['titulo'=>'Alerta','tipo'=>'info'])
            <p><strong>Info</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
        @break
    
        @case(3)
            @alerta(['titulo'=>'Alerta','tipo'=>'success'])
            <p><strong>Sucesso!</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
        @break
    
        @case(4)
            @alerta(['titulo'=>'Alerta','tipo'=>'error'])
            <p><strong>Erro inesperado</strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
        @break
    
        @default
            
    @endswitch
@endif

@endsection
