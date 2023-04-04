<?php

    //CONEXION 

    include 'conexion.php';

    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $contrasena=$_POST["contrasena"];
    
    $query = "INSERT INTO usuarios (nombre,correo,contrasena) VALUES('$nombre','$correo','$contrasena')";

    $veri= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
        if(mysqli_num_rows ($veri) > 0){
               echo '
               <script>
               alert(" ESTE CORREO YA AH SIDO REGISTRADO INTENTE DE NUEVO");
               window.location = "../index.php";
               </script>';
               exit();}

    $ejecutar =mysqli_query($conexion,$query);

    
    if ($ejecutar ){
        echo'<script>

                alert("SE CREO EL USUARIO CORRECTAMENTE ")
                window.location="../index.php";
        </script>

        ';

    }
    
    else{
        echo'<script>

                alert("EL USUARIO NO AH SIDO CREADO CORRECTAMENTE")
                window.location="../index.php";
        </script>

        ';
    }
    mysqli_close($conexion);



?>