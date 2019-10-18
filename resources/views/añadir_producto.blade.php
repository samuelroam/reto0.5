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
    <div id=traductores>
        <input type="image" src="{{ url('img/esp.jpg')}}" class="bandera" onclick="cambiarEsp()">
        <input type="image" src="{{ url('img/ing.png')}}" class="bandera" onclick="cambiarIng()">
    </div>
    <header>
        <div id="icono">
            <img src="{{ url('img/icono.jpg')}}">
        </div>
        <div id=infobasica>
            <p>Abierto de 10:00 a 22:00</p>
        </div>
        <div id="botones">
            <button class="boton trn" data-trn-key="inicio"><a href="<?php echo route('landing');?>">Inicio</a></button>
        </div>

    </header>
    <section>
      <form action="{{route('add')}}" method="post">
        @csrf
      Nombre: <input type="text" name="nombre"><br><br>
      Descripcion: <textarea name="comentarios"></textarea> <br><br>
      Stock: <input type="numeric" name="stock"><br><br>
      Imagen: <input type="text" name="imagen"><br><br>
      Enlace: <input type="text" name="enlace"><br><br>
      <input type="hidden" name="id" value="<?php echo $_SESSION['tienda'] ?>">
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