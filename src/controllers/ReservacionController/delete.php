<?php include '../../../config/variables.php'; ?>
<?php include '../../../config/db_connection.php';?>
<?php include '../RolesController/roles.php';?>

<?php 
    session_start();

    $usuario = $_SESSION['usuario'];
    
    if(esAdmin($usuario)){

        $usuario = $_SESSION['usuario'];

        if(isset($usuario)){
            
            if(isset($_GET['id']) && isset($_GET['idU'])) {
                $id = $_GET['id'];  
                $idU = $_GET['idU'];
            }

            //Eliminar lógicamente
            $sql = "update reservaciones 
            set estatus = 3, horaIni = 0, horaFin = 0
            where id = $id;";
            $execute = mysqli_query($con, $sql);

            //Actualizar la tabla notareservacion
            $precio = $_GET['precio'];
            $queryNota = "update notareservacion
            set total = total - $precio
            where idU = $idU";
            $execute = mysqli_query($con, $queryNota);

            sleep(2);
            header('Location: ' . asset_general("src/views/reservacion/consultaAdmin.php"));


        }else{
            header('Location: ' . asset_general("src/views/login/login.php"));
        }
    }else{
        header('Location: ' . asset_general("src/views/login/login.php"));
    }  
    
?>