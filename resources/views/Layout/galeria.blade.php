@extends('Layout.plantilla')

@section('cabecera')
    <h1>Mi Galeria</h1>
    <h3>This is mi imagen</h3>
    <img src="" alt="Imagen">
@endsection

@section('cuerpo')
        <!--Casos-->
        @switch($numero)
            @case(1)
                <h4>El numero es 1</h4>
                @break

            @case(2)
                <h4>El numero es 2</h4>
                @break

            @default
            <h4>El numero es otro</h4>
        @endswitch      
        
        
        <!--Bucle for-->
        @for ($i = 0; $i < 10; $i++)
                <h3>Los valores son: {{ $i }}</h3>
        @endfor

        <!--Bucle foreach-->
        @foreach ($usuarios as $user)
            <p>Usuario: {{ $user }}</p>
        @endforeach

        @forelse ($usuarios as $user)
            <li>{{ $user }}</li>
        @empty
            <p>No hay usuarios</p>
        @endforelse

       


@endsection

@section('pie')
    <p>Mi página 2020/05/15</p>
@endsection