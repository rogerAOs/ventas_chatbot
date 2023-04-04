<?php
    session_start();
    include 'conexion.php';
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];

    $validar_login=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuarios']=$correo;
        header("location:../productos/producto.php");
        
        
        exit;
    }else{
        echo '
        <script>
            alert("Este ususario no esta registrado vuelva a intentarlo ERROR DE USUSARIO Y CONTRASEÑA");
        window.location = "../index.php";
        </script>';

        exit;

    }

?>