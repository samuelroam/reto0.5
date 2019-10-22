<header>
        <div id="icono">
            <a href="{{route('landing')}}"><img src="{{ url('img/icono.jpg')}}"></a>
        </div>
        <div id=infobasica>
            <p class="trn" data-trn-key="horario">Abierto de 10:00 a 22:00</p>
        </div>
        
        <div id="botones">
            <button class="boton"><a class="trn" data-trn-key="plano" href="{{route('plano')}}">Plano</a></button>
            <button class="boton"><a class="trn" data-trn-key="tiendas" href="{{route('tiendas')}}">Tiendas</a></button>
        </div>
        <div id=traductores>
            <input type="image" src="{{ url('img/esp.jpg')}}" class="bandera" onclick="ctrlEsp()">
            <input type="image" src="{{ url('img/ing.png')}}" class="bandera" onclick="ctrlIng()">
        </div>
    </header>