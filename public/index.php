<?php include '../src/views/layaout/header.php' ?>
<?php include '../config/db_connection.php' ?>

    <nav class="d-flex justify-content-between align-items-center w-100">
        <p class="text-center m-0 w-50">Barbería</p>
        <ul class="list-unstyled d-flex justify-content-around align-items-center m-0 w-50">
            <li><a href="../src/views/login/login.php">Iniciar sesión</a></li>
            <li><a href="#">Consultar servicios</a></li>
            <li><a href="../src/views/login/sign-up.php">Registrarse</a></li>
        </ul>
    </nav>

    <main>
        <div class="principal d-flex text-align-center justify-content-center align-items-center">
            <div class="imagen">
                <img src="<?=asset('img/barber-image.png') ?>" alt="Persona en una barbería">
            </div>
            <section>
                <header>
                    <h1>App Peluqueria</h1>
                </header>  
                <article>
                    <p>Barbershop México</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, 
                        reprehenderit consequatur perferendis officia, vitae fuga animi temporibus 
                        itaque atque
                    </p>
                </article>
            </section>

        </div>
    </main>


<?php include '../src/views/layaout/footer.php' ?>