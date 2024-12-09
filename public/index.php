<?php include '../src/views/layaout/header.php' ?>

    <section class="principal">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand" href="index.php">BarberShop</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=asset_general('src/views/login/sign-up.php')?>">Regístrate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=asset_general('src/views/login/login.php')?>">Inicia sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=asset_general('src/views/servicio/consultaUser.php')?>">Consultar servicios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="row d-flex justify-content-center align-items-center g-4">
                <div class="imagen-izq col-md-6 col-sm-12">
                    <img class="img-fluid" src="<?=asset('img/barber-image.png') ?>" alt="Persona en una barbería">
                </div>
                <div class="texto-der col-md-6 col-sm-12">
                    <header>
                        <h1>BarberShop México</h1>
                    </header>  
                    <article>
                        <p>¡Transforma tu estilo con un solo clic!</p>
                        <p>
                            Agenda tu próxima cita con facilidad, descubre servicios de peluquería de alta calidad 
                            y mantente siempre a la moda.
                        </p>
                    </article>
                </div>
            </div>
        </main>
    </section>


    <section class="servicios">
        
        <h2>¡Consulta nuestros servicios!</h2>

        <br>

        <div class="row">
            <div class="servicio col-md-4 col-sm-12">
                <div class="imagen">
                    <img src="<?=asset('img/corte.jpg')?>" alt="Corte de cabello">
                </div>
                <div class="info d-flex justify-content-between">
                    <div class="descripcion">
                        <h5>Cortes de cabello</h5>
                        <p>Cortes de cabello para caballero, dama y niños.</p>
                    </div>
                    <p class="precio"><span>Desde $60</span></p>
                </div>
            </div>

            <div class="servicio col-md-4 col-sm-12">
                <div class="imagen">
                    <img src="<?=asset('img/peinado.jpg')?>" alt="Peinado">
                </div>
                <div class="info d-flex justify-content-between">
                    <div class="descripcion">
                        <h5>Peinados</h5>
                        <p>Peinados para caballeros, damas y niños.</p>
                    </div>
                    <p class="precio"><span>Desde $80</span></p>
                </div>
            </div>

            <div class="servicio col-md-4 col-sm-12">
                <div class="imagen">
                    <img src="<?=asset('img/tinte.jpg')?>" alt="Tinte">
                </div>
                <div class="info d-flex justify-content-between">
                    <div class="descripcion">
                        <h5>Tintes</h5>
                        <p>Coloración profesional para renovar tu look.</p>
                    </div>
                    <p class="precio"><span>Desde $300</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="servicio col-md-4 col-sm-12">
                <div class="imagen">
                    <img src="<?=asset('img/barba.jpg')?>" alt="Corte de barba">
                </div>
                <div class="info d-flex justify-content-between">
                    <div class="descripcion">
                        <h5>Cortes de barba</h5>
                        <p>Perfilado y corte de barba con precisión profesional.</p>
                    </div>
                    <p class="precio"><span>Desde $60</span></p>
                </div>
            </div>

            <div class="servicio col-md-4 col-sm-12">
                <div class="imagen">
                    <img src="<?=asset('img/manicura.jpg')?>" alt="Manicura">
                </div>
                <div class="info d-flex justify-content-between">
                    <div class="descripcion">
                        <h5>Servicio de manicura</h5>
                        <p>Esmaltado y decoraciones personalizadas.</p>
                    </div>
                    <p class="precio"><span>Desde $400</span></p>
                </div>
            </div>

            <div class="servicio col-md-4 col-sm-12">
                <div class="imagen">
                    <img src="<?=asset('img/tratamiento.jpg')?>" alt="Tratamiento capilar">
                </div>
                <div class="info d-flex justify-content-between">
                    <div class="descripcion">
                        <h5>Tratamiento capilar</h5>
                        <p>Repara, hidrata y fortalece tu cabello.</p>
                    </div>
                    <p class="precio"><span>Desde $150</span></p>
                </div>
            </div>
        </div>
    </section>

    <br>

    <section class="horarios row"> 
        <div class="info-horario col-md-6 col-sm-12">
            <h2>¿Cuáles son nuestros horarios de atención?</h2>

            <p>Lunes a Viernes</p>
            <h5>9:00AM a 6:00PM</h5>

            <p>Sábado y Domingo</p>
            <h5>10:00AM a 4:00PM</h5>

            <i class="bi bi-calendar-week"></i>
        </div>
        
        <div class="img-horario col-md-6 col-sm-12"> 
            <img src="<?=asset('img/herramientas.jpg')?>" alt="Herramientas de la barbería">
        </div>
    </section>

    <section class="otros-sitios">
        <h2>Enlaces útiles</h2>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=asset('img/corte-elegir.jpg')?>" class="d-block w-100" alt="Elección de corte">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>¿Cómo ELEGIR CORTE de CABELLO?</h5>
                        <p><a href="https://www.youtube.com/watch?v=LWTKhhUk7YU">Ver el video</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?=asset('img/tendencia-hombre.jpg')?>" class="d-block w-100" alt="Tendencia en cortes de hombre">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cortes de Pelo Hombre Tendencia 2024</h5>
                        <p><a href="https://haircutday.com/b/cortes-de-pelo-hombre">Leer el artículo</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?=asset('img/tendencia-mujer.jpg')?>" class="d-block w-100" alt="Tendencia en cortes de mujer">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>30 cortes de pelo de mujer modernos y actuales que son tendencia para 2025</h5>
                        <p><a href="https://www.cosmopolitan.com/es/belleza/pelo-cortes-peinados/g62930286/cortes-pelo-mujer-modernos-tendencia-2025/">Leer el artículo</a></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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

<?php include '../src/views/layaout/footer.php' ?>