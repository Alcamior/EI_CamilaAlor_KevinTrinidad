<?php include '../../../config/variables.php'; ?>
<?php include '../../../config/db_connection.php';?>
<?php include '../RolesController/roles.php';?>

<?php 

    /*
    Insertar un nuevo servcio
    Recibe: nombre, precio y duración del servicio
    Devuelve: nada
    */
    

    session_start();

    $usuario = $_SESSION['usuario'];
    
    if(esAdmin($usuario)){

        $usuario = $_SESSION['usuario'];

        if(isset($usuario)){
            try {
                // Habilitar MySQLi para lanzar excepciones
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                $precio = $_POST['precio'];
                $nombre = $_POST['nombre'];
                $duracion = $_POST['duracion'];

                $sql = "insert into servicios (idS, nombre, precio, duracion) 
                        values (0,'$nombre', '$precio', '$duracion');";

                $execute = mysqli_query($con, $sql);

                sleep(2);
                header('Location: ' . asset_general("src/views/servicio/createForm.php"));

            }catch (mysqli_sql_exception $e) {
                $_SESSION['error'] = "Error: " . $e->getMessage();
                sleep(3);
                header('Location: ' . asset_general("src/views/reservacion/createForm.php"));
                exit();
            }

        }else{
            header('Location: ' . asset("index.php"));
        }
    }else{
        header('Location: ' . asset("index.php"));
    }  
    
?>