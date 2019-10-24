

window.onload = function () {
    //poner aquí la ruta de las imágenes que aparecerán en el carrusel
    const IMAGENES = [
        'img/garbera.jpg',
        'img/garbera2.jpg',
        'img/garbera3.jpg'
    ]; 
    //este es el tiempo que permanece la imagen antes de cambiar a la siguiene
    //en milisegundos (2000ms=2s)
    const TIEMPO_INTERVALO_MILESIMAS_SEG = 2000;
    let posicionActual = 0;

    let $imagenes = document.querySelector('#imagenes');

    let intervalo;

    function pasarFoto() {
        if(posicionActual >= IMAGENES.length - 1) {
            posicionActual = 0;
        } else {
            posicionActual++;
        }
        renderizarImagen();
    }

    function retrocederFoto() {
        if(posicionActual <= 0) {
            posicionActual = IMAGENES.length - 1;
        } else {
            posicionActual--;
        }
        renderizarImagen();
    }

    function renderizarImagen () {
        $imagenes.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
    }

    function playIntervalo() {
        intervalo = setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);
    }

    function stopIntervalo() {
        clearInterval(intervalo);
    }

    renderizarImagen();
    playIntervalo();
} //https://programadorwebvalencia.com/javascript-carousel-sencillo-con-controles-y-autoreproduccion/

//permite introducir solo números
function Numeros(string){
    var out = ''
    var filtro = '1234567890'

    for (var i=0; i<string.length; i++)
    if (filtro.indexOf(string.charAt(i)) != -1)

    out += string.charAt(i)
    return out
}

//permite introducir numeros y letras
function NumText(string){
    var out = '';
    
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890 ';
    
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
         out += string.charAt(i);
    return out;
}

//permite introducir caracteres usuales en URLs
function TextURL(string){
    var out = '';
    
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890@./?';
    
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
         out += string.charAt(i);
    return out;
}

//establece la variable de sesión del traductor como 'Esp'
function ctrlEsp(){
    sessionStorage.setItem('translate','Esp')
    cambiarEsp()
    return sessionStorage.getItem('translate')
}
//establece la variable de sesión del traductor como 'Ing'
function ctrlIng(){
    sessionStorage.setItem('translate','Ing')
    cambiarIng()
    return sessionStorage.getItem('translate')
}

//cada vez que carga el documento, si la variable de sesión es 'Ing' traduce la página al inglés
$(document).ready(function(){
    if(sessionStorage.getItem('translate')=='Esp'){
        cambiarEsp()
    }else if(sessionStorage.getItem('translate')=='Ing'){
        cambiarIng()
    }
})