<?php include '../../../config/db_connection.php' ?>
<?php include '../../../config/variables.php' ?>

<?php
    session_start();

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $resultado = mysqli_query($con, $sql);
    $filas = mysqli_fetch_assoc($resultado);

    if($filas) {

        $_SESSION['usuario'] = $correo;

        if($filas['categoria'] == 'Admin') {
            header("Location:" . asset_general("src/views/dashboard/dashboardAdmin.php"));
        } elseif($filas['categoria'] == 'Usuario') {
            header("Location:" . asset_general("src/views/dashboard/dashboardUser.php"));
        } else {
            echo "Error";
        }
    } else {
        header("Location:" . asset_general("src/views/login/login.php"));
    }
    
    mysqli_free_result($resultado);
    mysqli_close($con);
?>