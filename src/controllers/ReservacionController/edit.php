<?php include '../../../config/variables.php'; ?>
<?php include '../../../config/db_connection.php';?>
<?php include '../RolesController/roles.php';?>

<?php 
    session_start();

    $usuario = $_SESSION['usuario'];
    
    if(isset($usuario) && esAdmin($usuario)){

        try {
            // Habilitar MySQLi para lanzar excepciones
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $id = $_POST['id'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['horaIni'];
            $servicio = $_POST['servicio'];
            $idU = $_POST['cliente'];
            $estatus = $_POST['estatus'];

            // Seleccionar id del servicio a insertar
            $queryIdS = "select idS from servicios where nombre = '$servicio';";
            $reIdS = mysqli_query($con, $queryIdS);
            $rowIdS = mysqli_fetch_assoc($reIdS);
            $idS = $rowIdS['idS'];

            $sql = "update reservaciones set 
            fecha = '$fecha', horaIni = '$hora', estatus = '$estatus',
            idU = $idU, idS = $idS
            where id = $id";

            $execute = mysqli_query($con, $sql);

            sleep(2);
            header('Location: ' . asset_general("src/views/reservacion/consultaAdmin.php"));

        }catch (mysqli_sql_exception $e) {
            $_SESSION['error'] = "Error: " . $e->getMessage();
            sleep(3);
            header('Location: ' . asset_general("src/views/reservacion/editForm.php"));
            exit();
        }

    }else{
        header('Location: ' . asset_general("src/views/login/login.php"));
    }  
    
?>