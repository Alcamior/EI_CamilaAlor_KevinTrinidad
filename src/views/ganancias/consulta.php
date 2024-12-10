<?php include '../layaout/header.php';?>
<?php include '../../controllers/RolesController/roles.php';?>
<?php include '../../../config/db_connection.php';?>

<?php 
    session_start(); 
    $usuario = $_SESSION['usuario'];

    if(isset($usuario) && esAdmin($usuario)){

        $fecha = $_POST['fecha']; 
?>

        <header class="row">
            <a class="col-md-4 col-sm-12" href="<?=asset_general('src/views/ganancias/consultaForm.php')?>"><i class="bi bi-arrow-left-circle"></i></a>
            <h2 class="col-md-8 col-sm-12">Regresar</h2>
        </header>

        <section class="tabla">
            
            <h3>Ganacias del <?php echo htmlspecialchars($fecha); ?></h3>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Servicio</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <?php
                    
                    $query = "select concat(usuarios.nombre, ' ', usuarios.apellido) as nombre,
                    servicios.nombre as servicio, precio from usuarios 
                    inner join reservaciones on usuarios.idU = reservaciones.idU
                    inner join servicios on reservaciones.idS = servicios.idS
                    where estatus = 'Activo' and fecha = ?";
                    
                    $stmt = $con->prepare($query);
                    $stmt->bind_param("s", $fecha);  
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($rows = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $rows['nombre']; ?></td>
                            <td><?php echo  $rows['servicio']; ?></td>
                            <td><?php echo  $rows['precio']; ?></td>
                        </tr>            
                    <?php
                    }
                ?>
            </table>

            <?php
                $queryTotal = "select sum(precio) as total from servicios
                inner join reservaciones on servicios.idS = reservaciones.idS
                where estatus = 'Activo' and fecha = ?;";

                $stmt = $con->prepare($queryTotal);
                $stmt->bind_param("s", $fecha);  
                $stmt->execute();
                $result = $stmt->get_result();

                $rowTotal = $result->fetch_assoc();
                $total = $rowTotal['total'];
                if (!$total) {
                    $total = 0;
                }
                
            ?>
            <h4>Total: <?php echo number_format($total, 2); ?></h4>

            <?php $stmt->close(); ?>
        </section>

        <section class="contacto row">
            <div class="col-md-4 col-sm-12 d-flex flex-column justify-content-center align-items-center text-center">
                <h5>BarberShop México</h5>
            </div>

            <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center">
                <i class="bi bi-telephone"></i>
                <p class="mb-0">777-408-1082</p>
            </div>

            <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center">
                <i class="bi bi-envelope-at"></i>
                <p class="mb-0">barbershop@gmail.com</p>
            </div>
        </section>

<?php

    }else{
        header('Location: ' . asset_general("src/views/login/login.php"));
    }
?>
    
<?php include '../layaout/footer.php' ?>


