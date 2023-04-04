// Seleccionar todos los botones de compra
var botonesCompra = document.querySelectorAll('#comprar-btn');

// Recorrer cada botón de compra y agregar un evento de clic
botonesCompra.forEach(function(boton) {
  boton.addEventListener('click', function() {
    // Mostrar una alerta de compra exitosa
    alert('¡Compra exitosa!');
  });
});