<?php include '../layaout/header.php';?>
<?php include '../../../config/db_connection.php';?>

    <header class="row">
        <a class="col-md-4 col-sm-12" href="javascript:window.history.back();"><i class="bi bi-arrow-left-circle"></i></a>
        <h2 class="col-md-8 col-sm-12">Regresar</h2>
    </header>

    <section class="tabla">
        
        <h3>¡Nuestros servicios para ti!</h3>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>Costo</th>
                    <th>Duración (en horas)</th>
                </tr>
            </thead>
            <?php
                $sql = "select * from servicios";
                $exec = mysqli_query($con, $sql);
                while($rows = mysqli_fetch_array($exec)){
            ?>
                    <tr>
                        <td><?php echo $rows['nombre']; ?></td>
                        <td><?php echo $rows['precio']; ?></td>
                        <td><?php echo $rows['duracion']; ?></td>
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
    
<?php include '../layaout/footer.php' ?>
