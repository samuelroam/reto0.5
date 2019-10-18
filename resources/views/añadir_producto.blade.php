<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
    <script src="{{ url('/js/javaScript.js') }}"></script>
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
      Nombre: <input type="text" name="nombre" onkeyup="this.value=NumText(this.value)"><br><br>
      Descripcion: <textarea name="comentarios" onkeyup="this.value=NumText(this.value)"></textarea> <br><br>
      Stock: <input type="numeric" name="stock" onkeyup="this.value=Numeros(this.value)"><br><br>
      Imagen: <input type="text" name="imagen"><br><br>
      Enlace: <input type="text" name="enlace" onkeyup="this.value=TextURL(this.value)"><br><br>
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