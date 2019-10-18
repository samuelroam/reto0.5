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
            <p class="trn" data-trn-key="horario" >Abierto de 10:00 a 22:00</p>
        </div>
        <div id="botones">
            <button class="boton"><a class="trn" data-trn-key="inicio" href="<?php echo route('landing');?>">Inicio</a></button>
        </div>
    </header>
    <section>
    <div id="imagenes" align="center">
            <img src="img/garbera.PNG">
        </div>
    </section>
    <footer>
        <div>
            <p class="trn" data-trn-key="footer1" >Landing page realizada por Samuel</p>
            <p class="trn" data-trn-key="footer2" >Grupo Garbera</p>
            <p class="trn" data-trn-key="footer3" >reto0.5</p>
        </div>
    </footer>

</body>
</html>