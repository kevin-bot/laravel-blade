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
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
         non, ipsam quos tempora rerum illo dolor? Harum vitae rem, recusandae,
         alias, laboriosam est beatae neque incidunt asperiores ipsam atque officiis?</p>

@endsection

@section('pie')
    <p>Mi página 2020/05/15</p>
@endsection