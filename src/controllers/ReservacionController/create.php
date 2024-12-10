<?php include '../../../config/variables.php'; ?>
<?php include '../../../config/db_connection.php';?>
<?php include '../RolesController/roles.php';?>

<?php 
    session_start();

    $usuario = $_SESSION['usuario'];
    
    if(esUser($usuario)){

        $usuario = $_SESSION['usuario'];

        if(isset($usuario)){
            try {
                // Habilitar MySQLi para lanzar excepciones
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                $fecha = $_POST['fecha'];
                $hora = $_POST['horaIni'];
                $servicio = $_POST['servicio'];

                // Seleccionar id el usuario y el servicio a insertar
                $queryIdU = "select idU from usuarios where correo = '$usuario';";
                $reIdU = mysqli_query($con, $queryIdU);
                $rowIdU = mysqli_fetch_assoc($reIdU);
                $idU = $rowIdU['idU'];

                $queryIdS = "select idS from servicios where nombre = '$servicio';";
                $reIdS = mysqli_query($con, $queryIdS);
                $rowIdS = mysqli_fetch_assoc($reIdS);
                $idS = $rowIdS['idS'];

                $sql = "insert into reservaciones (fecha, horaIni, idU, idS) 
                        values ('$fecha', '$hora', $idU, $idS);";

                $execute = mysqli_query($con, $sql);

                //Para insertar en notareservacion
                $queryTotal = "select sum(total) as total from notareservacion where idU = '$idU';";                
                $execute = mysqli_query($con, $queryTotal);
                $rowTot = mysqli_fetch_assoc($execute);
                $total = $rowTot['total'];

                $queryPreSer = "select precio from servicios where idS = '$idS';";
                $execute = mysqli_query($con, $queryPreSer);
                $rowPre = mysqli_fetch_assoc($execute);
                $precio = $rowPre['precio'];

                if ($rowTot['total'] === NULL) {
                    $queryInsTot = "insert into notareservacion values
                    (0, '$precio', $idU)";
                } else {
                    $queryInsTot = "update notareservacion
                    set total = total + '$precio'
                    where idU = $idU;";
                }
                
                $execute = mysqli_query($con, $queryInsTot);

                sleep(2);
                header('Location: ' . asset_general("src/views/reservacion/consultaUser.php"));

            }catch (mysqli_sql_exception $e) {
                $_SESSION['error'] = "Error: " . $e->getMessage();
                sleep(3);
                header('Location: ' . asset_general("src/views/reservacion/createFormUser.php"));
                exit();
            }

        }else{
            header('Location: ' . asset("index.php"));
        }
    }else{
        header('Location: ' . asset("index.php"));
    }  
    
?>