@extends('layouts.principal')

@section('titulo', 'Departamentos')

@section('content')

    <h3>Departamentos</h3>

    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>

    @alerta(['titulo'=>'Alerta','tipo'=>'info'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @alerta(['titulo'=>'Alerta','tipo'=>'success'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @alerta(['titulo'=>'Alerta','tipo'=>'warning'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @alerta(['titulo'=>'Alerta','tipo'=>'error'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endalerta


@endsection