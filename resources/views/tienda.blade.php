<!DOCTYPE html>
<html>
<head>
  <title>Tienda</title>
  <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
  <script src="{{ url('/js/jquery.js')}}"></script>
  <script src="{{ url('/js/jquery.translate.js') }}"></script>
  <script src="{{ url('/js/diccionario.js') }}"></script>
  <script src="{{ url('/js/javaScript.js') }}"></script>
  <?php
  session_start();
  if (isset($_SESSION["tienda"])){
  }else{
    $_SESSION["tienda"]=$id;
  }
  
  ?>
</head>
<body>
  
  <header>
    <div id="icono">
      <a href="{{route('landing')}}"><img src="{{ url('img/icono.jpg')}}"></a>
    </div>
    <div id=infobasica>
      <p class="trn" data-trn-key="horario">Abierto de 10:00 a 22:00</p>
    </div>
    
    <div id="botones">
      <button class="boton"><a class="trn" data-trn-key="inicio" href="{{route('landing')}}">Inicio</a></button>
      <button class="boton"><a class="trn" data-trn-key="tiendas" href="{{route('tiendas')}}">Tiendas</a></button>
    </div>
    <div id=traductores>
      <h4>Idiomas</h4>
      <a href="#" class="bandera" onclick="ctrlEsp()">ESP</a>
      <a href="#" class="bandera" onclick="ctrlIng()">EN</a>
    </div>
  </header>
  
  <h1><p class="trn" data-trn-key="bienvenida">Bienvenido a </p><?php if($_SESSION["tienda"]==1){
    echo "Zara";
  }
  elseif ($_SESSION["tienda"]==2) {
    echo "MediaMarkt";
  }
  elseif ($_SESSION["tienda"]==3) {
    echo "Eroski";
  } ?></h1><br>
  <button class="boton"><a class="trn" data-trn-key="añadir" href="{{route('añadir')}}">Añadir Producto</a></button>
  <br><br>
  <div id="container">
    @if(isset($productos))
<<<<<<< HEAD
      @foreach ($productos as $producto) 
      <div class='product'>
        <img src='/img/productos/{{$producto->imagen}}'><br><br>
        Nombre: {{$producto->nombre}}<br>Descripcion: {{$producto->descripcion}}<br>Stock: {{$producto->stock}}<br>Enlace: <a href='{{$producto->enlace}}'>{{$producto->enlace}}</a>
        <br><br>
        <button class='update'><a class="trn" data-trn-key="eliminar" href='/tienda/destroy/{{$producto->id}}'>Eliminar</a></button>
        <button class='update'><a class="trn" data-trn-key="cambiar" href='/cambiar_stock/{{$producto->id}}'>Cambiar stock</a></button>
      </div>
      @endforeach
=======
    @foreach ($productos as $producto) 
    <div class='product'>
      <img src='/img/productos/{{$producto->imagen}}'><br><br>
      Nombre: {{$producto->nombre}}<br>Descripcion: {{$producto->descripcion}}<br>Stock: {{$producto->stock}}<br>Enlace: <a href='{{$producto->enlace}}'>{{$producto->enlace}}</a>
      <br><br>
      <button class='update'><a href='/tienda/destroy/{{$producto->id}}'>Eliminar</a></button>
      <button class='update'><a href='/cambiar_stock/{{$producto->id}}'>Cambiar stock</a></button>
    </div>
    @endforeach
>>>>>>> 6d30167654f18d4f50225aa5c9609a0e2119f066
    @endif
    
  </div>
  <footer>
    <div>
      <p class="trn" data-trn-key="footer1">Landing page realizada por Samuel</p>
      <p class="trn" data-trn-key="footer2">Grupo Garbera</p>
      <p class="trn" data-trn-key="footer3">Reto 0.5</p>
    </div>
  </footer>
</body>
</html>