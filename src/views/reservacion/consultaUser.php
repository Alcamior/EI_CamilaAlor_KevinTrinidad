<?php include '../layaout/header.php';?>
<?php include '../../../config/db_connection.php';?>
<?php include '../../controllers/RolesController/roles.php'?>

<?php 
    session_start();
    $usuario = $_SESSION['usuario']; 
    if (esUser($usuario)){
?>

    <header class="row">
        <a class="col-md-4 col-sm-12" href="<?=asset_general('src/views/dashboard/dashboardUser.php')?>"><i class="bi bi-arrow-left-circle"></i></a>
        <h2 class="col-md-8 col-sm-12">Regresar</h2>
    </header>

    <section class="tabla">
        
        <h3>Tus citas</h3>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                    <th>Hora de inicio</th>
                    <th>Hora de fin</th>
                </tr>
            </thead>
            <?php
                $queryIdU = "select idU from usuarios where correo = '$usuario';";
                $reIdU = mysqli_query($con, $queryIdU);
                $rowIdU = mysqli_fetch_assoc($reIdU);
                $idU = $rowIdU['idU'];

                $sql = "select servicios.nombre as nombre, precio, fecha, horaIni, horaFin from servicios
                inner join reservaciones on servicios.idS = reservaciones.idS
                inner join usuarios on reservaciones.idU = usuarios.idU
                where reservaciones.idU = '$idU';";
                $exec = mysqli_query($con, $sql);
                
                while($rows = mysqli_fetch_array($exec)){
            ?>
                    <tr>
                        <td><?php echo $rows['nombre']; ?></td>
                        <td><?php echo $rows['precio']; ?></td>
                        <td><?php echo $rows['fecha']; ?></td>
                        <td><?php echo $rows['horaIni']; ?></td>
                        <td><?php echo $rows['horaFin']; ?></td>
                    </tr>            
            <?php
                }
            ?>
        </table>

        <?php
            $queryTotal = "select sum(total) as total from notareservacion where idU = '$idU';";
            $exec = mysqli_query($con, $queryTotal);
            $rowTotal = mysqli_fetch_assoc($exec);
            $total = $rowTotal['total'];
        ?>
        <h4>Total: <?php echo $total; ?></h4>
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
