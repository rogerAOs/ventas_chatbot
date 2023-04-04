<!DOCTYPE html>
<html>
<head>
	<title>Chatbot</title>
    <link rel="stylesheet" href="bot.css">
</head>
<body>
    <h2>hola en que puedo ayudarte</h2>
	<div id="chat-container">
		<div id="chat-area"></div>
		<form id="chat-form">
			<input type="text" id="chat-input" placeholder="Escribe aquí tu pregunta...">
			<button class="enviar" type="submit">Enviar pregunta</button>
		</form>
	</div>
	<script>
		// Manejador de eventos para el formulario de chat
		document.getElementById("chat-form").addEventListener("submit", function(event) {
			event.preventDefault();
			
			// Obtiene la pregunta ingresada por el usuario
			var pregunta = document.getElementById("chat-input").value;
			
			// Crea una solicitud AJAX al servidor para obtener la respuesta
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					// Muestra la respuesta en el chat
					var respuesta = xhr.responseText;
					var chatArea = document.getElementById("chat-area");
					chatArea.innerHTML += "<div class='mensaje'><span class='usuario'>Tú:</span> " + pregunta + "</div>";
					chatArea.innerHTML += "<div class='mensaje'><span class='bot'>Bot:</span> " + respuesta + "</div>";
					chatArea.scrollTop = chatArea.scrollHeight;
				}
			};
			xhr.open("POST", "chatbot.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.send("pregunta=" + pregunta);
			
			// Limpia el campo de entrada del chat
			document.getElementById("chat-input").value = "";
		});
	</script>
</body>
</html>
