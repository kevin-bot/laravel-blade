<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Se agregó un etiqueta yield para que este titulo sea dinamico en cada página-->
    <title> @yield('titulo') </title>

    <style>
    .cabecera{
            background-color: red;
            text-emphasis: center;            
        }
        .cuerpo{
            background-color: blueviolet;
            margin: 200px 0;
            color: white            
        }        
        .pie{
            background-color: chartreuse;
        }
    </style>

</head>
<body>

    <div class="cabecera">
        <!--Identificador para la seccion cabecera-->
        @yield('cabecera')

    </div>

    <div class="cuerpo">
        <!--Identificador para la seccion Cuerpo-->
        @yield('cuerpo')

    </div >

    <div class="pie">
        <!--Identificador para la seccion pie-->
        @yield('pie')

    </div>
    
</body>
</html>