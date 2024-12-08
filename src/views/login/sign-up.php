<?php include '../layaout/header.php' ?>


<form action="<?=asset_general('src/controllers/UsuarioController/create.php')?>" name="frmReg" id="frmReg" method="POST">

    <div class="form_container">
        <label class="formulario_label">Nombre de usuario:</label>
        <input class="formulario_input" type="text" name="usuario" id="usuario">
        <br>
        <p class="alert alert-danger" id="usu" name="usu" style="display: none;">
            ¡Ingresa un nombre de usuario!
        </p>   
    </div> 

    <br>

    <div class="form_container">
        <label class="formulario_label">Nombre:</label>
        <input class="formulario_input" type="text" name="nombre" id="nombre">
        <br>
        <p class="alert alert-danger" id="nom" name="nom" style="display: none;">
            ¡Ingresa tu nombre!
        </p> 
    </div>

    <br>

    <div class="form_container">
        <label class="formulario_label">Apellidos:</label>
        <input class="formulario_input" type="text" name="apellido" id="apellido">
        <br>
        <p class="alert alert-danger" id="ape" name="ape" style="display: none;">
            ¡Ingresa tus apellidos!
        </p> 
    </div> 

    <br>

    <div class="form_container">
        <label for="correo" class="formulario_label">Correo:</label>  
        <input type="text" name="correo" id="correo" class="formulario_input" placeholder="correo@gmail.com">
        <br>
        <p class="alert alert-danger" id="cor" name="cor" style="display: none;">
            ¡Ingresa un correo válido!
        </p>   
    </div> 

    <br>

    <div class="form_container">
        <label for="telefono" class="formulario_label">Teléfono:</label>  
        <input type="text" name="telefono" id="telefono" class="formulario_input" placeholder="7774081082">
        <br>
        <p class="alert alert-danger" id="tel" name="tel" style="display: none;">
            ¡Ingresa un teléfono válido!
        </p>   
    </div> 

    <br>

    <div class="form_container">
        <label for="contrasena" class="formulario_label">Password:</label>
        <input type="password" name="contrasena" id="contrasena" class="formulario_input">
        <br>
        <p class="alert alert-danger" id="contra" name="contra" style="display: none;">
            ¡Ingresa una contraseña válida (solo letras, números, # y @)!
        </p>   
    </div>   

    <br>
    <br>

    <div class="form_container">   
        <input type="button" class="formulario_btn" value="Enviar" onclick="validacion();"></input>
    </div>
</form>

<script src="<?=asset('js/validarCredencial.js') ?>"></script>


