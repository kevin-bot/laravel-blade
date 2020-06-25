<!--Extender o heredar de plantilla-->
@extends('plantilla')

<!--Inyectamos el código que va a tener la etiqueta @yield => cabecera -->
@section('cabecera')
    <h1>Mis contactos</h1>
@endsection


<!--Inyectamos el código que va a tener la etiqueta @yield => cuerpo -->
@section('cuerpo')

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
         non, ipsam quos tempora rerum illo dolor? Harum vitae rem, recusandae,
         alias, laboriosam est beatae neque incidunt asperiores ipsam atque officiis?</p>

@endsection


<!--Inyectamos el código que va a tener la etiqueta @yield => pie -->
@section('pie')
    <p>Mi página 2020/04/12</p>
@endsection