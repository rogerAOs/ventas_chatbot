let registro = document.getElementById('registro')
let inicio_seccion = document.getElementById('inicio_seccion')

const boton_registrarse = document.querySelector('#boton_registrarse');
const iniciar_cuenta = document.querySelector('#iniciar_cuenta')

let inicio_bot = document.querySelector('#inicio_bot');

inicio_bot.onclick= function(){
    window.location = "bot/bot.php";
}

boton_registrarse.onclick = function() {
    registro.style.display='flex'
    inicio_seccion.style.display='none'
}
iniciar_cuenta.onclick= function(){
    inicio_seccion.style.display='flex'
    registro.style.display='none'
}
