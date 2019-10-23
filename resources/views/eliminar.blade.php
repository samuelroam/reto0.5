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
  
  @include('header')
  
  
  <div id="eliminar">
   <p>Pulsa el siguiente botón si estas seguro de que quieres eliminar el producto</p>
   <button class='update'><a class="trn" data-trn-key="eliminar" href='/tienda/destroy/{{$id}}'>Eliminar</a></button>
  </div>
 
  
    @include('footer')
    
  </body>
</html>