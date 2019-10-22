<!DOCTYPE html>
<html>
<head>
    <title>Cambiar Stock</title>
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
            <a href="{{route('landing')}}"><img src="{{ url('img/icono.jpg')}}"></a>
        </div>
        <div id=infobasica>
            <p class="trn" data-trn-key="horario" >Abierto de 10:00 a 22:00 </p>
        </div>
        <div id="botones">
           <button class="boton"><a class="trn" data-trn-key="inicio" href="{{route('landing')}}">Inicio</a></button>
           <button class="boton"><a class="trn" data-trn-key="tiendas" href="{{route('tiendas')}}">Tiendas</a></button>
           <button class="boton"><a class="trn" data-trn-key="tienda" href="{{route('tienda')}}">Tienda</a></button>
       </div>
       <div id=traductores>
        <h4>Idiomas</h4>
        <a href="#" class="bandera" onclick="ctrlEsp()">ESP</a>
        <a href="#" class="bandera" onclick="ctrlIng()">EN</a>
    </div>
</header>
<section>
  <form action="{{route('update')}}" method="post">
    @csrf
    <p>Stock: </p><input type="numeric" name="stock" onkeyup="this.value=Numeros(this.value)" required><br><br>
    <input type="hidden" name="id" value="{{$id}}">
    <button class="trn" data-trn-key="enviar">Enviar</button>
</form>
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