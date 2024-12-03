<?php include '../layaout/header.php' ?>

    <main>
        <div class="principal d-flex text-align-center justify-content-center align-items-center">
            <div class="imagen">
                <img src="<?=asset('img/barber-image.png') ?>" alt="Persona en una barbería">
            </div>
            <section>
                <header>
                    <h1>App Peluqueria</h1>
                </header> 
                <H2>Autentificación</H2>
                <form method="POST" name="frm1" id="frm1" action="">
                    <div class="form_container">
                        <label for="usuario" class="formulario_label">Usuario:</label> 
                        <br>
                        <input type="text" name="usuario" id="usuario" class="formulario_input">
                         
                    </div> 
                    <div class="form_container">
                        <label for="contrasena" class="formulario_label">Contraseña:</label>
                        <br>
                        <input type="password" name="contrasena" id="contrasena" class="formulario_input">
                    </div>             
                    <br>     
                    <div class="form_container">            
                        <button type="button" class="formulario_btn btn btn-light">Enviar</button> 
                        <br><br>
                        <button class="btn btn-info"><a href="../../../public/index.php">Regresar</a></button>
                    </div> 
                </form>  
            </section>

        </div>
    </main>



<?php include '../layaout/footer.php' ?>