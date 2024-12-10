<?php include '../../../config/db_connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/EI_CamilaAlor_KevinTrinidad/config/variables.php';
?>
<?php include '../../controllers/RolesController/roles.php'?>

<?php
    session_start();
    $usuario = $_SESSION['usuario']; 
    if (esAdmin($usuario)){

        $id = $_GET['idS'];

        $sql = "delete from servicios where idS = $id;";
        $execute = mysqli_query($con, $sql);
        sleep(2);
        $loginUrl = asset_general('src/views/servicio/consultaAdmin.php'); 
        header('Location: ' . $loginUrl); 
        exit; 
    }else{
        $loginUrl = asset_general('src/views/login/login.php'); 
        header('Location: ' . $loginUrl); 
        exit; 
    }
?>