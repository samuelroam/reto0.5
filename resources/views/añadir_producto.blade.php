<!DOCTYPE html>
<html>
<head>
    <title>Añadir Producto</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
    <script src="{{ url('/js/javaScript.js') }}"></script>
    <?php session_start(); ?>
</head>
<body>
    
    @include('header')

    <section>
      <form action="{{route('add')}}" enctype="multipart/form-data" method="post">
        @csrf

        <p class="trn" data-trn-key="nombre">Nombre: </p><input type="text" name="nombre" onkeyup="this.value=NumText(this.value)" required><br><br>
        <p class="trn" data-trn-key="descripcion">Descripción: </p><textarea name="comentarios" onkeyup="this.value=NumText(this.value)" required></textarea> <br><br>
        <p>Stock: </p><input type="numeric" name="stock" onkeyup="this.value=Numeros(this.value)" required><br><br>
        <p class="trn" data-trn-key="imagen">Imagen: </p><input type="file" id="photo" name="photo" required><br><br>
        <p class="trn" data-trn-key="enlace">Enlace: </p><input type="text" name="enlace" onkeyup="this.value=TextURL(this.value)" required><br><br>
        <input type="hidden" name="id" value="{{$_SESSION['tienda']}}">
        <button id="send" class="trn" data-trn-key="enviar">Enviar</button>
    </form>
    </section>
    
    @include('footer')

</body>
</html>