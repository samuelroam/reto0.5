<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
    <?php session_start(); ?>
</head>
<body>
    
    <header>
        <div id="icono">
            <a href="<?php echo route('landing');?>"><img src="{{ url('img/icono.jpg')}}"></a>
        </div>
        <div id=infobasica>
            <p>Abierto de 10:00 a 22:00 </p>
        </div>
        <div id="botones">
             <button class="boton"><a class="trn" data-trn-key="inicio" href="<?php echo route('landing');?>">Inicio</a></button>
            <button class="boton"><a class="trn" data-trn-key="tiendas" href="<?php echo route('tiendas');?>">Tiendas</a></button>
            <button class="boton"><a class="trn" data-trn-key="tienda" href="<?php echo route('tienda');?>">Tienda</a></button>
        </div>
        <div id=traductores>
            <input type="image" src="{{ url('img/esp.jpg')}}" class="bandera" onclick="cambiarEsp()">
            <input type="image" src="{{ url('img/ing.png')}}" class="bandera" onclick="cambiarIng()">
        </div>
    </header>
    <section>
      <form action="{{route('update')}}" method="post">
        @csrf
      Stock: <input type="text" name="stock"><br><br>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    </section>
    <footer>
        <div>
            <p>Landing page realizada por Samuel</p>
            <p>Grupo Garbera</p>
            <p>reto0.5</p>
        </div>
    </footer>
</body>
</html>