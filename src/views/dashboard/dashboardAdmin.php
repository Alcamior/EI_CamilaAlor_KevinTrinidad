<?php include '../layaout/header.php' ?>
<?php include '../../controllers/RolesController/roles.php'?>

<?php  
    session_start();
    $usuario = $_SESSION['usuario']; 
    if (esAdmin($usuario)){
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
                        Administra y personaliza la lista de servicios disponibles. 
                        Puedes agregar, editar o eliminar servicios según las necesidades 
                        del negocio.
                    </p>
                    <div class="botones">
                        <a href="">Registrar un nuevo servicio</a>
                        <a href="">Ver servicios disponibles</a>
                    </div>
                </div>

                <div class="carta">
                    <h3>Reservaciones</h3>
                    <p>
                        Controla las reservaciones realizadas por los clientes. 
                        Aquí puedes registrar nuevas citas, actualizarlas o cancelarlas 
                        fácilmente.
                    </p>
                    <div class="botones">
                        <a href="<?=asset_general('src/views/reservacion/createFormAdmin.php')?>">Hacer una nueva reservación</a>
                        <a href="">Ver reservaciones</a>
                        <a href="<?=asset_general('src/views/consultaHorario/consultaForm.php')?>">Ver horarios disponibles</a>
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