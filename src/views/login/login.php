<?php include '../layaout/header.php' ?>

    <main>
        <div class="principal row d-flex justify-content-center align-items-center g-4">
            <div class="imagen col-md-6 col-sm-12">
                <img class="img-fluid" src="<?=asset('img/barber-image.png') ?>" alt="Persona en una barbería">
            </div>
            <section class="formulario col-md-6 col-sm-12">
                <header>
                    <a href="<?=asset('index.php')?>"><i class="bi bi-arrow-left-circle"></i></a>
                    <h1>BarberShop</h1>
                </header>

                <H2>¡Ingresa con tus datos!</H2>
                
                <br>
                
                <form method="POST" name="frmLogIn" id="frmLogIn" action="<?=asset_general('src/controllers/LoginController/validacion.php')?>">
                    <div class="form_container">
                        <label for="correo" class="formulario_label">Correo</label> 
                        <br>
                        <input type="text" name="correo" id="correo" class="formulario_input" placeholder="correo@example.com">
                        <br>
                        <p class="alert alert-danger" id="cor" name="cor" style="display: none;">
                            ¡Ingresa un correo válido!
                        </p>   
                    </div> 
                    
                    <br>
                    
                    <div class="form_container">
                        <label for="contrasena" class="formulario_label">Contraseña</label>
                        <br>
                        <input type="password" name="contrasena" id="contrasena" class="formulario_input">
                        <br>
                        <p class="alert alert-danger" id="contra" name="contra" style="display: none;">
                            ¡Ingresa una contraseña válida (más de ocho 
                            carácteres, solo letras, números, # y @)!
                        </p>   
                    </div>  

                    <br>

                    <div class="form_container">            
                        <button type="button" class="formulario_btn" onclick="validacion();">Enviar</button> 
                    </div> 
                </form>  
            </section>

        </div>
    </main>

    <script src="<?=asset('js/validarLogIn.js') ?>"></script>

<?php include '../layaout/footer.php' ?>