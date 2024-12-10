<?php include '../layaout/header.php' ?>
<?php include '../../controllers/RolesController/roles.php'?>

<?php  
    session_start();
    $usuario = $_SESSION['usuario']; 
    if (esUser($usuario)){
?>	
        
        <header class="row">
            <h2 class="col-md-8 col-sm-12">¡Hola!, ¿qué necesitas hoy?</h2>
            <a class="col-md-4 col-sm-12" href="<?=asset_general('src/controllers/SesionController/logout.php')?>"><i class="bi bi-box-arrow-left"></i></a>
        </header>

        <div class="dashboard row">
            <div class="col-md-8 col-sm-12">
                <div class="carta">
                    <h3>Servicios</h3>
                    <p>
                        ¡Ve el catálogo de servicios y horarios disponibles!
                    </p>
                    <div class="botones">
                        <a href="<?=asset_general('src/views/servicio/consultaUser.php')?>">Ver servicios disponibles</a>
                        <a href="<?=asset_general('src/views/consultaHorario/consultaForm.php')?>">Ver horarios disponibes</a>
                    </div>
                </div>

                <div class="carta">
                    <h3>Reservaciones</h3>
                    <p>
                        ¡Haz una reservación ahora!
                    </p>
                    <div class="botones">
                        <a href="<?=asset_general('src/views/reservacion/createFormUser.php')?>">Hacer una nueva reservación</a>
                        <a href="<?=asset_general('src/views/reservacion/consultaUser.php')?>">Ver mis citas</a>
                    </div>
                </div>
            </div>

            <div class="imagen col-md-4 col-sm-12">
                <h3>BarberShop México</h3>
                <img class="img-fluid" src="<?=asset('img/barber-image.png') ?>" alt="Persona en una barbería">
            </div>
        </div>

<?php
    }else{
        header('Location:' . asset_general("src/views/login/login.php"));
    }
?>

<?php include '../layaout/footer.php' ?>