<?php include '../layaout/header.php';?>
<?php include '../../../config/db_connection.php';?>

<?php 
    session_start(); 
    $usuario = $_SESSION['usuario'];

    if(isset($usuario)){
?>

    <header class="row">
        <a class="col-md-4 col-sm-12" href="javascript:window.history.back();"><i class="bi bi-arrow-left-circle"></i></a>
        <h2 class="col-md-8 col-sm-12">Regresar</h2>
    </header>

    <section class="formulario">
        <h3>Consulta los horarios disponibles</h3>

        <form method="POST" name="frmHor" id="frmHor" action="consulta.php">
            
            <div class="form_container">
                <label for="fecha" class="formulario_label">Fecha</label> 
                <br>
                <input type="date" name="fecha" id="fecha" class="formulario_input">
                <br>
                <p class="alert alert-danger" id="fec" name="fec" style="display: none;">
                    ¡Ingresa una fecha!
                </p>   
            </div> 
                    
            <br>

            <div class="form_container">            
                <button type="button" class="formulario_btn" onclick="validacion();">Enviar</button> 
            </div> 
        </form>
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

    <script src="<?=asset('js/validarFormConsulta.js') ?>"></script>

    <?php

}else{
    header('Location: login.php');
}
?>
    
<?php include '../layaout/footer.php' ?>
