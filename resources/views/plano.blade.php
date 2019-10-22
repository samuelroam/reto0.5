
<!DOCTYPE html>
<html>
<head>
    <title>Plano</title>
    <link href="css/estilos.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.translate.js"></script>
    <script src="js/diccionario.js"></script>
    <script src="js/javaScript.js"></script>
</head>
<body>
    {{--@include('header')--}}
        
    
    <header>
        <div id="icono">
            <a href="{{route('landing')}}"><img src="{{ url('img/icono.jpg')}}"></a>
        </div>
        <div id=infobasica>
            <p class="trn" data-trn-key="horario" >Abierto de 10:00 a 22:00</p>
        </div>
        <div id="botones">
            <button class="boton"><a class="trn" data-trn-key="inicio" href="{{ route('landing')}}">Inicio</a></button>
        </div>
        <div id=traductores>
        <input type="image" src="img/esp.jpg" class="bandera" onclick="ctrlEsp()">
        <input type="image" src="img/ing.png" class="bandera" onclick="ctrlIng()">
    </div>
    </header>
    <section>
    <div class="imagenes" align="center">
            <img src="img/garbera.PNG">
        </div>
    </section>
    @include('footer')
    

</body>
</html>