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
            <button class="boton trn" data-trn-key="plano"><a href="#">Plano</a></button>
            <button class="boton trn" data-trn-key="tiendas"><a href="<?php echo route('tiendas');?>">Tiendas</a></button>
        </div>

    </header>
    <section>
        <div id="imagenes" align="center">
            <img src="img/garbera.jpg">
        </div>
        <div id=divtiendas>
            <div id=mediamarkt class="tiendas">
                <img src="img/mediamarkt.jpg">
                <p class="descripcion trn" data-trn-key="mediamarkt_landing">Tienda para compra de aparatos electronicos y tecnologias</p>
            </div>
            <div id=zara class=tiendas>
                <img src="img/zara.png">
                <p class="descripcion trn" data-trn-key="zara_landing">Tienda para comprar ropajes y vestimentas</o>
            </div>
            <div id=eroski class=tiendas>
                <img src="img/eroski.jpg">
                <p class="descripcion trn" data-trn-key="eroski_landing">Hipermercado para comprar alimentacion y cosas del hogar</p>
        </div>
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