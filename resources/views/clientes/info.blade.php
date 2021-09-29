@extends('layouts.principal')

@section('titulo', 'Informação do Cliente')

@section('content')

    <h3>Informações do cliente</h3>

    <p>Id: {{$cliente['id']}}</p>
    <p>Nome: {{$cliente['nome']}}</p>
    <br>
    <a href="{{ route('clientes.index') }}">Voltar</a>

@endsection