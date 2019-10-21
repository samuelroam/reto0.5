<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
    <script src="{{ url('/js/javaScript.js') }}"></script>
    <?php session_start();
    session_destroy(); ?>


</head>
<body>
    

    
    <header>
        <div id="icono">
            <a href="<?php echo route('landing');?>"><img src="{{ url('img/icono.jpg')}}"></a>
        </div>
        <div id=infobasica>
            <p class="trn" data-trn-key="horario">Abierto de 10:00 a 22:00</p>
        </div>
        
        <div id="botones">
            <button class="boton"><a class="trn" data-trn-key="plano" href="<?php echo route('plano');?>">Plano</a></button>
            <button class="boton"><a class="trn" data-trn-key="tiendas" href="<?php echo route('tiendas');?>">Tiendas</a></button>
        </div>

        <div id=traductores>
        <input type="image" src="{{ url('img/esp.jpg')}}" class="bandera" onclick="ctrlEsp()">
        <input type="image" src="{{ url('img/ing.png')}}" class="bandera" onclick="ctrlIng()">
        </div>

    </header>
    <section>
       <div class="carousel">
            
            <div id="imagenes"></div>
            
        </div>
        

        <div id=divtiendas>
            <!--Media Martkt-->
            <div id=mediamarkt class="tiendas">
                <p><b>Media Markt</b></p>
                <img src="img/mediamarkt.jpg" alt="Media Markt">
                <p class="descripcion trn" data-trn-key="mediamarkt_landing">Tienda para compra de aparatos electronicos y tecnologias</p>
            </div>
            <!--Zara-->
            <div id=zara class=tiendas>
                <p><b>Zara</b></p>
                <img src="img/zara.png" alt="Zara">
                <p class="descripcion trn" data-trn-key="zara_landing">Tienda para comprar ropajes y vestimentas</p>
            </div>
            <!--Eroski-->
            <div id=eroski class=tiendas>
                <p><b>Eroski</b></p>
                <img src="img/eroski.jpg" alt="Eroski">
                <p class="descripcion trn" data-trn-key="eroski_landing">Hipermercado para comprar alimentacion y cosas del hogar</p>
            </div>
            <!--Forum Sport-->
            <div id=forumSport class=tiendas>
                <p><b>Forum Sport</b></p>
                <img src="img/forum_sport.jpg" alt="Forum Sport">
                <p class="descripcion trn" data-trn-key="forum_landing">Tienda de deportes y equipamiento deportivo</p>
            </div>
            <!--McDonalds-->
                <div id=mcdonalds class=tiendas>
                <p><b>McDonald's</b></p>
                <img src="img/mcdonalds.png" alt="McDonald's">
                <p class="descripcion trn" data-trn-key="mc_landing">Restaurante familiar de comida rápida y hamburguesas </p>
            </div>
            <!--H&M-->
            <div id=H&M class=tiendas>
                <p><b>H&M</b></p>
                <img src="img/h&m.png" alt="H&M">
                <p class="descripcion trn" data-trn-key="hm_landing">Tienda de ropa y artículos de moda</p>
            </div>
            <!--Vans-->
            <div id=vans class=tiendas>
                <p><b>Vans</b></p>
                <img src="img/vans.png" alt="Vans">
                <p class="descripcion trn" data-trn-key="vans_landing">Tienda de zapatos y calzados</p>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <p class="trn" data-trn-key="footer1">Landing page realizada por Samuel</p>
            <p class="trn" data-trn-key="footer2">Grupo Garbera</p>
            <p class="trn" data-trn-key="footer3">Reto 0.5</p>
        </div>
    </footer>

</body>
</html>