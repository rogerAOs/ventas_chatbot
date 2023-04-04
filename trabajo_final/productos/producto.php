<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="producto.css">
    <title>Document</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "roger01";
$dbname = "registro";

// Crea una conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión es exitosa
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Escribir una consulta SQL para recuperar la información de los productos
$sql = "SELECT * FROM productos";

// Ejecutar la consulta y guardar el resultado en una variable
$resultado = mysqli_query($conn, $sql);

// Recorrer el resultado de la consulta y mostrar la información de cada producto
while ($producto = mysqli_fetch_assoc($resultado)) {
  echo "<div>";
  echo "<h2>" . $producto["nombre_producto"] . "</h2>";
  echo "<img src='" . $producto["imagen"] . "' alt='" . $producto["nombre_producto"] . "'>";
  echo "<p>Precio: $" . $producto["precio"] . "</p>";
  echo "<button id='comprar-btn'>Comprar</button>";
  echo "</div>";
}

// Cerrar la conexión con la base de datos
mysqli_close($conn);
?>

<script src="comprar.js"></script>
</body>
</html>