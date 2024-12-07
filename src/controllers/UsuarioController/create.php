<?php include '../../../config/db_connection.php' ?>

<?php

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena']; 
    
    $to = $correo;
    $subject = "Credenciales para tu cuenta en Barber Shop.";
    $message = "Usuario: " . $usuario . "\nContraseña: " . $contrasena;
    $headers = 'From: kevinyahirt@gmail.com'."\r\n".
    'Reply-To: kevinyahirt@gmail.com';

    if(mail($to,$subject,$message,$headers)){
        $sql = "INSERT INTO usuarios (usuario, contrasena, nombre, apellido, correo, telefono, categoria) 
            VALUES ('$usuario', '$contrasena', '$nombre', '$apellido', '$correo', '$telefono','Usuario');";

        $execute = mysqli_query($con, $sql);

        if (!$execute) {
            die("Error al insertar los datos: " . mysqli_error($con));
        }

        sleep(2);
        header('Location: ../../views/login/login.php');
    }else{
        sleep(3);
        header('Location: ../../../public/index.php');
        exit();
    }

?>




