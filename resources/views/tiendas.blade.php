<!DOCTYPE html>
<html>
<head>
    <title>Tiendas</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
</head>
<body>
    

    
    <header>
        <div id="icono">
            <a href="<?php echo route('landing');?>"><img src="{{ url('img/icono.jpg')}}"></a>
        </div>
        <div id=infobasica>
            <p class="trn" data-trn-key="horario" >Abierto de 10:00 a 22:00</p>
        </div>
        <div id="botones">
            <button class="boton"><a class="trn" data-trn-key="inicio" href="<?php echo route('landing');?>">Inicio</a></button>
        </div>
        <div id=traductores>
        <input type="image" src="{{ url('img/esp.jpg')}}" class="bandera" onclick="cambiarEsp()">
        <input type="image" src="{{ url('img/ing.png')}}" class="bandera" onclick="cambiarIng()">
    </div>

    </header>
    <section>
      <form action="{{route('select')}}" method="post">
        @csrf
      <legend class="trn" data-trn-key="legend">¿En que tienda trabajas?</legend>
        <select size="1" name="tiendas" id="lista">
            <option value="1">Zara</option>
            <option value="2">MediaMarkt</option>
            <option value="3">Eroski</option>
        </select><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    </section>
    <footer>
        <div>
            <p class="trn" data-trn-key="footer1">Landing page realizada por Samuel</p>
            <p class="trn" data-trn-key="footer2">Grupo Garbera</p>
            <p class="trn" data-trn-key="footer3">Reto 0.5</p>
        </div>
    </footer>

</body>
</html>