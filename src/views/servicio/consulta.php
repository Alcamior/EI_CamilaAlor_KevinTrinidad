<?php include '../layaout/header.php';?>
<?php include '../../../config/db_connection.php';?>

    <table  class="table">
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
                    <th><?php echo $rows['nombre']; ?></th>
                    <th><?php echo $rows['precio']; ?></th>
                    <th><?php echo $rows['duracion']; ?></th>
                </tr>            
            <?php
            }
        ?>
    </table>

<?php include '../layaout/footer.php' ?>
