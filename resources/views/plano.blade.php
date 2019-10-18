<!DOCTYPE html>
<html>
<head>
    <title>Plano</title>
    <link href="css/estilos.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.translate.js"></script>
    <script src="js/diccionario.js"></script>
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
        <input type="image" src="img/esp.jpg" class="bandera" onclick="cambiarEsp()">
        <input type="image" src="img/ing.png" class="bandera" onclick="cambiarIng()">
    </div>
    </header>
    <section>
    <div class="imagenes" align="center">
            <img src="img/garbera.PNG">
        </div>
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