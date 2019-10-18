<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
    <?php
      session_start();
      if (isset($_SESSION["tienda"])){

      }else{
       $_SESSION["tienda"]=$id; 
      }
      
     ?>
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
     	<h1>Bienvenido a <?php if($_SESSION["tienda"]==1){
            echo "Zara";
        }
        elseif ($_SESSION["tienda"]==2) {
            echo "MediaMarkt";
         }
        elseif ($_SESSION["tienda"]==3) {
             echo "Eroski";
         } ?></h1><br>
        <button class="boton trn" data-trn-key="inicio"><a href="<?php echo route('añadir');?>">Añadir producto</a></button>
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