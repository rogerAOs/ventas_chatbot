<?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "roger01";
$dbname = "registro";

// Establece la conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Verifica si se ha enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Obtiene la pregunta enviada por el usuario
  $pregunta = $_POST["pregunta"];
  
  // Busca la respuesta en la base de datos
  $sql = "SELECT respuesta FROM preguntas_frecuentes WHERE pregunta = '$pregunta'";
  $resultado = mysqli_query($conn, $sql);
  
  // Si se encuentra una respuesta, la muestra en la página
  if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    echo $row["respuesta"];
  } else {
    echo "Lo siento, no tengo la respuesta a esa pregunta.";
  }
  
  // Cierra la conexión con la base de datos
  mysqli_close($conn);
  
}

?>
