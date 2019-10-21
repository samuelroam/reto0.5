//El texto comentado con el comentario al margen es para quitar los botones procedentes del ejercicio original


window.onload = function () {
    // Variables
    const IMAGENES = [
        'img/garbera.jpg',
        'img/garbera2.jpg',
        'img/garbera3.JPG'
    ];
    const TIEMPO_INTERVALO_MILESIMAS_SEG = 2000;
    let posicionActual = 0;
//    let $botonRetroceder = document.querySelector('#retroceder');
//    let $botonAvanzar = document.querySelector('#avanzar');
    let $imagenes = document.querySelector('#imagenes');
//    let $botonPlay = document.querySelector('#play');
//    let $botonStop = document.querySelector('#stop');
    let intervalo;

    // Funciones

    /**
     * Funcion que cambia la foto en la siguiente posicion
     */
    function pasarFoto() {
        if(posicionActual >= IMAGENES.length - 1) {
            posicionActual = 0;
        } else {
            posicionActual++;
        }
        renderizarImagen();
    }

    /**
     * Funcion que cambia la foto en la anterior posicion
     */
    function retrocederFoto() {
        if(posicionActual <= 0) {
            posicionActual = IMAGENES.length - 1;
        } else {
            posicionActual--;
        }
        renderizarImagen();
    }

    /**
     * Funcion que actualiza la imagen de imagen dependiendo de posicionActual
     */
    function renderizarImagen () {
        $imagenes.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
    }

    /**
     * Activa el autoplay de la imagen
     */
    function playIntervalo() {
        intervalo = setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);
        // Desactivamos los botones de control
//        $botonAvanzar.setAttribute('disabled', true);
//        $botonRetroceder.setAttribute('disabled', true);
//        $botonPlay.setAttribute('disabled', true);
//        $botonStop.removeAttribute('disabled');

    }

    /**
     * Para el autoplay de la imagen
     */
    function stopIntervalo() {
        clearInterval(intervalo);
        // Activamos los botones de control
//        $botonAvanzar.removeAttribute('disabled');
//        $botonRetroceder.removeAttribute('disabled');
//        $botonPlay.removeAttribute('disabled');
//        $botonStop.setAttribute('disabled', true);
    }

    // Eventos
//    $botonAvanzar.addEventListener('click', pasarFoto);
//    $botonRetroceder.addEventListener('click', retrocederFoto);
//    $botonPlay.addEventListener('click', playIntervalo);
 //   $botonStop.addEventListener('click', stopIntervalo);
    // Iniciar
    renderizarImagen();
    playIntervalo();
} 

function Numeros(string){
    var out = ''
    var filtro = '1234567890'

    for (var i=0; i<string.length; i++)
    if (filtro.indexOf(string.charAt(i)) != -1)

    out += string.charAt(i)
    return out
}

function NumText(string){
    var out = '';
    
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890 ';
    
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
         out += string.charAt(i);
    return out;
}

function TextURL(string){
    var out = '';
    
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890@./?';
    
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
         out += string.charAt(i);
    return out;
}

/*
function validURL(str) {
    var pattern = new RegExp(" ^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$");
    
    return !!pattern.test(str);
}
*/

function ctrlEsp(){
    sessionStorage.setItem('translate','Esp')
    cambiarEsp()
    return sessionStorage.getItem('translate')
}
function ctrlIng(){
    sessionStorage.setItem('translate','Ing')
    cambiarIng()
    return sessionStorage.getItem('translate')
}

$(document).ready(function(){
    
    if(sessionStorage.getItem('translate')=='Esp'){
        cambiarEsp()
    }else{
        cambiarIng()
    }
        
})