<?php
// Obtener la pregunta del usuario
$pregunta = $_POST['pregunta'];

// Conectarse a la base de datos
$servername = "localhost";
$username = "root";
$password = "roger01";
$dbname = "registro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Procesar la pregunta del usuario
if (preg_match('/(hola|buenos días|buenas tardes)/i', $pregunta)) {
    // Respuesta a un saludo
    $respuesta = "Hola, ¿en qué puedo ayudarte?";
} elseif (preg_match('/como estas/i', $pregunta)) {
    // Respuesta a la pregunta "cómo estás"
    $respuesta = "Estoy bien, gracias por preguntar.";
} elseif (preg_match('/cuanto cuesta (.*)/i', $pregunta, $matches)) {
    // Consultar el precio de un producto
    $producto = $matches[1];
    $sql = "SELECT precio FROM productos WHERE nombre_producto = '$producto'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $precio = $row["precio"];
        $respuesta = "$producto cuesta $ $precio";
    } else {
        $respuesta = "Lo siento, no tengo información sobre ese producto";
    }
}elseif (preg_match('/que productos tiene/i', $pregunta)) {
    // Consultar los productos disponibles
    $sql = "SELECT nombre_producto FROM productos";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $productos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $productos[] = $row["nombre_producto"];
        }
        $respuesta = "Estos son los productos disponibles: " . implode(", ", $productos);
    } else {
        $respuesta = "Lo siento, no hay productos disponibles";
    }
}

else {
    // Respuesta por defecto para preguntas que no puedo responder
    $respuesta = "Lo siento, no puedo responder esa pregunta.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conn);

// Enviar la respuesta al usuario
echo $respuesta;
?>
