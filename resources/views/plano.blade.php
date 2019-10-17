<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link href="css/estilos.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.translate.js"></script>
    <script src="js/diccionario.js"></script>
</head>
<body>
    <div id=traductores>
        <input type="image" src="img/esp.jpg" class="bandera" onclick="cambiarEsp()">
        <input type="image" src="img/ing.png" class="bandera" onclick="cambiarIng()">
    </div>
    <header>
        <div id="icono">
            <img src="img/icono.jpg">
        </div>
        <div id=infobasica>
            <p>Abierto de 10:00 a 22:00</p>
        </div>
        <div id="botones">
            <button class="boton trn" data-trn-key="inicio"><a href="<?php echo route('welcome');?>">Inicio</button>
        </div>

    </header>
    <section>
      
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