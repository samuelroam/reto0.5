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
    
    @include('header')

    <section>
        <form action="{{route('update')}}" method="post">
            @csrf
            <p>Stock: </p><input type="numeric" name="stock" onkeyup="this.value=Numeros(this.value)" value="{{$stock}}" required><br><br>
            <input type="hidden" name="id" value="{{$id}}">
            <button class="trn" data-trn-key="enviar">Enviar</button>
        </form>
    </section>

@include('footer')

</body>
</html>