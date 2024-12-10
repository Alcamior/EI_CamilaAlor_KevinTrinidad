<?php include '../../../config/db_connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/EI_CamilaAlor_KevinTrinidad/config/variables.php';
?>

<?php

    session_start(); 
    $usuario = $_SESSION['usuario']; 

    if(isset($usuario) && esAdmin($usuario)){
        if(isset($_POST)){

            $id = $_GET['idS'];
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $duracion = $_POST['duracion'];
            $sql = "update servicios set nombre = '$nombre', precio = '$precio', duracion = '$duracion' where idS = $id;";
            $execute = mysqli_query($con, $sql);
            if($execute){
                echo "Registro actualizado";
            }else{
                echo "Error al actualizar";
            }
            $loginUrl = asset_general('src/views/servicio/consultaAdmin.php'); 
            header('Location: ' . $loginUrl); 
            exit; 
        }else{
            echo "No se ha recibido nada";
        }
    
    }else{
        $loginUrl = asset_general('src/views/login/login.php'); 
        header('Location: ' . $loginUrl); 
        exit; 
    }
?>