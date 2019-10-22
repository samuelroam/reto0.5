<!DOCTYPE html>
<html>
<head>
    <title>Tiendas</title>
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet" />
    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/jquery.translate.js') }}"></script>
    <script src="{{ url('/js/diccionario.js') }}"></script>
    <script src="{{ url('/js/javaScript.js') }}"></script>
    <?php 
    session_start();
    session_destroy();?>
</head>
<body>
    
    @include('header')
    
    <section>
      <form action="{{route('select')}}" method="post">
        @csrf
        <legend class="trn" data-trn-key="legend">¿En que tienda trabajas?</legend>
        <select size="1" name="tiendas" id="lista">
            <option value="1">Zara</option>
            <option value="2">MediaMarkt</option>
            <option value="3">Eroski</option>
        </select><br>
        <button class="trn" data-trn-key="enviar">Enviar</button>
    </form>
    </section>

    @include('footer')

</body>
</html>