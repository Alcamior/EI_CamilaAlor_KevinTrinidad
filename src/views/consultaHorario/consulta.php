<?php include '../layaout/header.php';?>
<?php include '../../../config/db_connection.php';?>

<?php 
    session_start(); 
    $usuario = $_SESSION['usuario'];

    if(isset($usuario)){

        $fecha = $_POST['fecha']; 
        $numDia = date('w', strtotime($fecha));
?>

        <header class="row">
            <a class="col-md-4 col-sm-12" href="javascript:window.history.back();"><i class="bi bi-arrow-left-circle"></i></a>
            <h2 class="col-md-8 col-sm-12">Regresar</h2>
        </header>

        <section class="tabla">
            
            <h3>Horarios del <?php echo htmlspecialchars($fecha); ?></h3>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Hora de inicio</th>
                        <th>Hora de fin </th>
                    </tr>
                </thead>
                <?php
                    if ($numDia == 0 || $numDia == 6) {
                        $query = "SELECT h.hora FROM horasFinSemana h 
                                LEFT JOIN reservaciones r
                                ON r.fecha = ? 
                                AND h.hora >= r.horaIni 
                                AND h.hora < r.horaFin
                                WHERE r.id IS NULL;";
                    } else {
                        $query = "SELECT h.hora FROM horasEntreSemana h 
                                LEFT JOIN reservaciones r
                                ON r.fecha = ? 
                                AND h.hora >= r.horaIni 
                                AND h.hora < r.horaFin
                                WHERE r.id IS NULL;";
                    }

                    
                    $stmt = $con->prepare($query);
                    $stmt->bind_param("s", $fecha);  
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($rows = $result->fetch_assoc()) {
                        $horaInicio = $rows['hora'];
                        $horaFin = date("H:i:s", strtotime($horaInicio) + 3600);
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($horaInicio); ?></td>
                            <td><?php echo htmlspecialchars($horaFin); ?></td>
                        </tr>            
                    <?php
                    }
                    $stmt->close();
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
        header('Location: login.php');
    }
?>
    
<?php include '../layaout/footer.php' ?>


