<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link href="css/estilos.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.translate.js"></script>
    <script src="js/diccionario.js"></script>
    <script src="js/javaScript.js"></script>

   


</head>
<body>
 

    

<header>
    
        
    

        <div id="icono">
            <img src="img/icono.jpg">
        </div>
        <div id=infobasica>
            <p>Abierto de 10:00 a 22:00</p>
        </div>
        <!--botones para navegar entre páginas-->
        <div id="botones">
            <button class="boton trn" data-trn-key="plano"><a href="<?php echo route('plano');?>">Plano</a></button>
            <button class="boton trn" data-trn-key="tiendas"><a href="<?php echo route('tiendas');?>">Tiendas</a></button>
        </div>
        <!--botones para la traduccion de la pagina-->
    <div id=traductores>
        <input type="image" src="img/esp.jpg" class="bandera" onclick="cambiarEsp()">
        <input type="image" src="img/ing.png" class="bandera" onclick="cambiarIng()">
    </div>


    </header>
    
    </body>
    </html>