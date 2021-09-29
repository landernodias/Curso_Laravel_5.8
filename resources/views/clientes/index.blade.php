{{-- Chama o layout para o index --}}
@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('content')

    <h3>{{$titulo}}:</h3>
    <a href="{{ route('clientes.create') }}">NOVO CLIENTE</a>

    @if (count($clientes) > 0)
        
        <ul>
            @foreach ($clientes as $c)
            <li> 
                {{ $c['id'] }} | {{ $c['nome'] }} 
                <a href="{{ route('clientes.edit', $c['id'] )}}">Editar</a>
                <a href="{{ route('clientes.show', $c['id'] )}}">Info</a>
                
                <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Apagar">
                    
                </form>
                
            </li> {{-- usado para executar comandos php no laravel --}}
            @endforeach
        </ul>

        <hr>
        
        @for ($i=0;$i<10;$i++)
            {{ $i }},
        @endfor
        <br>
        @for ($i=0;$i<count($clientes);$i++)
            {{ $clientes[$i]['nome'] }},
        @endfor
        <br>


        @foreach ($clientes as $c)

            <p>
                {{ $c['nome'] }} |
                @if ($loop->first) {{-- Verifica se oelemento é o primeiro no loop--}}
                    (primeiro) |
                @endif
                
                @if ($loop->last) {{-- Verifica se oelemento é o ultimoo no loop--}}
                    (primeiro) |
                @endif
                {{ $loop->index }} - {{ $loop->iteration }} / {{ $loop->count }}
                
            </p>

        @endforeach
     @else
        <h4>Não exite Usuarios cadastrados!</h4>
    @endif
            
    {{-- Faz a mesma tarefa do else --}}
    @empty($clientes)
        <h4>Não exite Usuarios cadastrados!</h4>
    @endempty
@endsection