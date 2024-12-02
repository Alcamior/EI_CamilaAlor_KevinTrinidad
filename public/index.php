<?php include '../src/views/layaout/header.php' ?>
<?php include '../config/db_connection.php' ?>

    <nav class="d-flex">
        <p class ="w-50">Barbería</p>
        <ul class="list-unstyled d-flex justify-content-between w-50">
            <li><a href="">Iniciar sesión</a></li>
            <li><a href="">Consultar servicios</a></li>
            <li><a href="">Registrarse</a></li>
        </ul>
    </nav>

    <main>
        <header>
            <h1>App Peluqueria</h1>
        </header>  
        <div class="imagen">
            <img src="<?=asset('img/barber-image.png') ?>" alt="Persona en una barbería">
        </div>
    </main>


<?php include '../src/views/layaout/footer.php' ?>