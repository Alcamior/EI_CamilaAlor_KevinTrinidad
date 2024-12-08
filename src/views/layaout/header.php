<?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/EI_CamilaAlor_KevinTrinidad/config/variables.php';
    $page = basename($_SERVER['PHP_SELF'], ".php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="<?=asset('img/favicon.png') ?>">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop</title>

    <!-- Cargar CSS Específico por Página -->
    <?php 
        if ($page === 'index') {
            echo '<link rel="stylesheet" href="' . asset('css/index.css') . '">';
        }elseif($page === 'login') {
            echo '<link rel="stylesheet" href="' . asset('css/login.css') . '">';
        }elseif($page === 'dashboardAdmin') {
            echo '<link rel="stylesheet" href="' . asset('css/dashboard.css') . '">';
        }
    ?>

    <!-- Cargar Fuentes de Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jockey+One&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 

    <!-- Cargar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Cargar Icons de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

            