<?php include '../../../config/db_connection.php';?>
<?php include '../../../config/variables.php' ?>

<?php 
    session_start();
    session_destroy();

    header('Location: '. asset_general("src/views/login/login.php"));
?>