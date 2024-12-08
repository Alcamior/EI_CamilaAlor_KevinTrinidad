<?php include '../../../config/db_connection.php' ?>

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
            header("Location: admin.php");
        } elseif($filas['categoria'] == 'Usuario') {
            header("Location: user.php");
        } else {
            echo "Error";
        }
    } else {
        header("Location: login.php?error=login_fallido");
    }
    
    mysqli_free_result($resultado);
    mysqli_close($con);
?>