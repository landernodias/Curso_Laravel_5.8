@extends('layouts.principal')

@section('titulo', 'Criar Cliente')

@section('content')

    <h3>Novo Cliente</h3>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Salvar">

    </form>

@endsection