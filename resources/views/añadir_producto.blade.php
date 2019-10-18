<!DOCTYPE html>
<html>
<head>
    <title>Añadir Producto</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
    <script src="{{ url('/js/javaScript.js') }}"></script>
    <?php session_start(); ?>
</head>
<body>
    
    <header>
        <div id="icono">
            <img src="{{ url('img/icono.jpg')}}">
        </div>
        <div id=infobasica>
            <p class="trn" data-trn-key="horario">Abierto de 10:00 a 22:00</p>
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
      <form action="{{route('add')}}" method="post">
        @csrf
      <p class="trn" data-trn-key="nombre">Nombre: </p><input type="text" name="nombre" onkeyup="this.value=NumText(this.value)"><br><br>
      <p class="trn" data-trn-key="descripcion">Descripción: </p><textarea name="comentarios" onkeyup="this.value=NumText(this.value)"></textarea> <br><br>
      <p>Stock: </p><input type="numeric" name="stock" onkeyup="this.value=Numeros(this.value)"><br><br>
      <p class="trn" data-trn-key="imagen">Imagen: </p><input type="text" name="imagen"><br><br>
      <p class="trn" data-trn-key="enlace">Enlace: </p><input type="text" name="enlace" onkeyup="this.value=TextURL(this.value)"><br><br>
      <input type="hidden" name="id" value="<?php echo $_SESSION['tienda'] ?>">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    </section>
    <footer>
        <div>
            <p class="trn" data-trn-key="footer1" >Landing page realizada por Samuel</p>
            <p class="trn" data-trn-key="footer2" >Grupo Garbera</p>
            <p class="trn" data-trn-key="footer3" >Reto 0.5</p>
        </div>
    </footer>

</body>
</html>