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
    //iniciamos sesion y guardamos el id de la tienda en una variable de sesion
    session_start();
    if (isset($_SESSION["tienda"])){
    }else{
    $_SESSION["tienda"]=$id;
    }
    
    ?>
  </head>
  <body>

    @include('header')
    <!-- Muestra el nombre de la tienda comparando su id -->
    <h1><p class="trn" data-trn-key="bienvenida">Bienvenido a </p><?php if($_SESSION["tienda"]==1){
    echo "Zara";
    }
    elseif ($_SESSION["tienda"]==2) {
    echo "MediaMarkt";
    }
    elseif ($_SESSION["tienda"]==3) {
    echo "Eroski";
    } ?></h1><br>
    <!-- Este boton nos redirigira a la vista con el formulario para añadir un nuevo producto -->
    <button class="boton"><a class="trn" data-trn-key="añadir" href="{{route('añadir')}}">Añadir Producto</a></button>
    <br><br>
    <div id="container">
      <!-- Comprobamos si existe la variable productos, si es así muestra los productos -->
      @if(isset($productos))
      @foreach ($productos as $producto)
      <div class='product'>
        <img src='/img/productos/{{$producto->imagen}}'><br><br>
        <span class="trn" data-trn-key="nombre">Nombre: </span>{{$producto->nombre}}<br><span class="trn" data-trn-key="descripcion">Descripcion: </span>{{$producto->descripcion}}<br>Stock: {{$producto->stock}}<br><span class="trn" data-trn-key="enlace">Enlace: </span><a href='http://{{$producto->enlace}}'>{{$producto->enlace}}</a>
        <br><br>
        <!-- Estos botones llaman a las rutas que nos permiten eliminar y cambiar el stock de los productos -->
        <button class='update'><a class="trn" data-trn-key="eliminar" href='/eliminar/{{$producto->id}}'>Eliminar</a></button>
        <button class='update'><a class="trn" data-trn-key="cambiar" href='/cambiar_stock/{{$producto->id}}'>Cambiar stock</a></button>
      </div>
      @endforeach
      @endif
      
    </div>
    
    @include('footer')

  </body>
</html>