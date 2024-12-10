<?php include '../layaout/header.php';?>
<?php include '../../../config/db_connection.php';?>
<?php include '../../controllers/RolesController/roles.php'?>

<?php 
    session_start();
    $usuario = $_SESSION['usuario']; 
    if (esAdmin($usuario)){
?>

    <header class="row">
        <a class="col-md-4 col-sm-12" href="<?=asset_general('src/views/dashboard/dashboardAdmin.php')?>"><i class="bi bi-arrow-left-circle"></i></a>
        <h2 class="col-md-8 col-sm-12">Regresar</h2>
    </header>

    <section class="tabla">
        
        <h3>Todas las reservaciones</h3>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre del cliente</th>
                    <th>Servicio</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                    <th>Hora de inicio</th>
                    <th>Hora de fin</th>
                    <th>Estatus</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <?php

                $sql = "select id, usuarios.idU, concat(usuarios.nombre,' ',usuarios.apellido) as nombreCom, 
                servicios.nombre as servicio, precio, fecha, horaIni, horaFin,
                estatus from servicios
                inner join reservaciones on servicios.idS = reservaciones.idS
                inner join usuarios on reservaciones.idU = usuarios.idU;";
                $exec = mysqli_query($con, $sql);
                
                while($rows = mysqli_fetch_array($exec)){
            ?>
                    <tr>
                        <td><?php echo $rows['nombreCom']; ?></td>
                        <td><?php echo $rows['servicio']; ?></td>
                        <td><?php echo $rows['precio']; ?></td>
                        <td><?php echo $rows['fecha']; ?></td>
                        <td><?php echo $rows['horaIni']; ?></td>
                        <td><?php echo $rows['horaFin']; ?></td>
                        <td><?php echo $rows['estatus']; ?></td>
                        <td><a href=""><i class="bi bi-arrow-clockwise"></i></a></td>
                        <td>
                            <a href="<?php echo asset_general('src/controllers/ReservacionController/delete.php
                                ?id=' . $rows['id'] . '&idU=' . $rows['idU'] . '&precio=' . $rows['precio']); ?>">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>            
            <?php
                }
            ?>
        </table>
    </section>

    <section class="tabla">
        
        <h3>Reservaciones activas</h3>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre del cliente</th>
                    <th>Servicio</th>
                    <th>Costo</th>
                    <th>Fecha</th>
                    <th>Hora de inicio</th>
                    <th>Hora de fin</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <?php

                $sql = "select concat(usuarios.nombre,' ',usuarios.apellido) as nombreCom, 
                servicios.nombre as servicio, precio, fecha, horaIni, horaFin,
                estatus from servicios
                inner join reservaciones on servicios.idS = reservaciones.idS
                inner join usuarios on reservaciones.idU = usuarios.idU
                where estatus = 1;";
                $exec = mysqli_query($con, $sql);
                
                while($rows = mysqli_fetch_array($exec)){
            ?>
                    <tr>
                        <td><?php echo $rows['nombreCom']; ?></td>
                        <td><?php echo $rows['servicio']; ?></td>
                        <td><?php echo $rows['precio']; ?></td>
                        <td><?php echo $rows['fecha']; ?></td>
                        <td><?php echo $rows['horaIni']; ?></td>
                        <td><?php echo $rows['horaFin']; ?></td>
                        <td><?php echo $rows['estatus']; ?></td>
                    </tr>            
            <?php
                }
            ?>
        </table>
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
