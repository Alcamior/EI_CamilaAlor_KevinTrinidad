<?php include '../layaout/header.php' ?>
<?php include '../../controllers/RolesController/roles.php'?>

<?php 
    session_start(); 
    $usuario = $_SESSION['usuario'];

    $query = "SELECT * FROM servicios;";
    $articulos = $con->query($query);

    $queryU = "SELECT * FROM usuarios where categoria = 2;";
    $usuarios = $con->query($queryU);      

    if (esAdmin($usuario)){
?>

        <header class="row">
            <a class="col-md-4 col-sm-12" href="<?=asset_general('src/views/dashboard/dashboardAdmin.php')?>"><i class="bi bi-arrow-left-circle"></i></a>
            <h2 class="col-md-8 col-sm-12">Regresar</h2>
        </header>

        <main class="row">
            <div class="formulario col-md-6 col-sm-12">
                <h6>Registra una nueva cita</h6>

                <form method="POST" name="frmRes" id="frmRes" action="<?=asset_general('src/controllers/ReservacionController/createAdmin.php') ?>">

                    <div class="form_container">
                        <label class="formulario_label">Elige el cliente</label>
                        <br>
                        <select name="cliente" id="cliente">
                            <?php
                                foreach ($usuarios as $usuario) {
                                    echo "<option value=\"{$usuario['idU']}\">{$usuario['nombre']} {$usuario['apellido']}</option>";
                                }
                            ?>
                        </select>
                    </div>     
                
                    <br>

                    <div class="form_container">
                        <label class="formulario_label">Fecha de la reservación</label>
                        <br>
                        <input type="date" name="fecha" id="fecha">
                        <br>
                        <p class="alert alert-danger" id="fec" name="fec" style="display: none;">
                            ¡Ingresa una fecha!
                        </p> 
                    </div> 

                    <br>

                    <div class="form_container">
                        <label class="formulario_label">Hora de inicio</label>
                        <br>
                        <input type="time" name="horaIni" id="horaIni">
                        <br>
                        <p class="alert alert-danger" id="hor" name="hor" style="display: none;">
                            ¡Ingresa una hora!
                        </p> 
                    </div>

                    <br>

                    <div class="form_container">
                        <label class="formulario_label">Elige el servicio</label>
                        <br>
                        <select name="servicio" id="servicio">
                            <?php
                                foreach ($articulos as $articulo) {
                                    echo "<option value=\"{$articulo['nombre']}\">{$articulo['nombre']}</option>";
                                }
                            ?>
                        </select>
                    </div> 

                    <br>
                    <br>
                    
                    <div class="form_container">                    
                        <button type="button" class="formulario_btn" onclick="validacion();">Enviar</button>                    
                    </div>       
                </form>

                <br>
                
                <?php
                    if (isset($_SESSION['error'])) {
                        echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']); 
                    }
                ?>
            </div>

            <div class="imagen col-md-6 col-sm-12">
                <img class="img-fluid" src="<?=asset('img/barber-image.png') ?>" alt="Persona en una barbería">
            </div>
        </main>

        <script src="<?=asset('js/validarReserv.js')?>"></script>  
      
<?php

    }else{
        header('Location: ' . asset_general("src/views/login/login.php"));
    }
?>

<?php include '../layaout/footer.php' ?>