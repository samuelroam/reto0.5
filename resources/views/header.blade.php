<header>
        <div id="icono">
            <a href="{{route('landing')}}"><img src="{{ url('img/icono.png')}}"></a>
        </div>
        <div id=infobasica>
            <p class="trn" data-trn-key="horario">Abierto de Lunes a Sábado de 10:00 a 22:00</p>
            <p class="trn" data-trn-key="direccion">Dirección: Cruce Garbera 1, Donostia-San Sebastián</p>
        </div>
        
        <div id="botones">
            <button class="boton"><a class="trn" data-trn-key="plano" href="{{route('plano')}}">Plano</a></button>
            <button class="boton"><a class="trn" data-trn-key="tiendas" href="{{route('tiendas')}}">Tiendas</a></button>
        </div>
        <div id=traductores>
            <h4 class="trn" data-trn-key="idioma">Idiomas</h4>
            <a href="#" class="bandera" onclick="ctrlEsp()">ESP</a>
            <a href="#" class="bandera" onclick="ctrlIng()">EN</a>
        </div>
    </header>