<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/dc5aa636a9.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div id="inicio_seccion" class="container">
        <form action="php/login.php" method="POST" class="formulario">
            <h1 class="titulo">ingresar cuenta</h1>
            <span>correo electronico <i class="fa-regular fa-envelope"></i></span>
            <input class="input" type="email" name="correo" id="">
            <span>contraseña <i class="fa-solid fa-lock"></i></span>
            <input class="input" type="password" name="contrasena">
            <input class="enviar" type="submit" value="iniciar">

            <p>no tienes cuenta? <span id="boton_registrarse" class="registrate">registrarse</span> quiero al bot!!   <span id="inicio_bot">iniciar bot</span></p>
        </form>
    </div>

    <div id="registro" class="registro_container">
        <form method="POST" action="php/registro.php" class="registro_formulario">
            <h1 class="titulo">crear cuenta</h1>
            <span>nombre <i class="fa-solid fa-circle-user"></i></span>
            <input class="input" type="text" name="nombre">
            <span>correo electronico <i class="fa-regular fa-envelope"></i></span>
            <input class="input" type="email" name="correo" id="">
            <span>contraseña <i class="fa-solid fa-lock"></i></span>
            <input class="input" type="password" name="contrasena">
            <input class="enviar" type="submit" value="registrarse">

            <p>ya tengo mi cuenta!! <span id="iniciar_cuenta" class="registrate">ingresar cuenta</span></p>
        </form>
    </div>

 <script src="code.js"></script>
</body>

</html>