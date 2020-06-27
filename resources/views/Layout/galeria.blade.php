@extends('Layout.plantilla')

@section('cabecera')
    <h1>Mi Galeria</h1>
    <h3>This is mi imagen</h3>
    <img src="" alt="Imagen">
@endsection

@section('cuerpo')
                    <!--Uso de la variable nombre-->    
    <h3>El Nombre es: {{ $nombre }}</h3>

    <h3>El Tiempo es: {{ time() }}</h3>
    
    <!--Estructuras de control-->
    @if ($numero == 0)
         <h4>Elnúmero es 0</h4>
    @elseif($numero > 0 && $numero < 10)
        <h4>EL número es mayor que 0</h4>
    @else
        <h4>EL número es mayor que 10 </h4>
    @endif
    

@endsection

@section('pie')
    <p>Mi página 2020/05/15</p>
@endsection