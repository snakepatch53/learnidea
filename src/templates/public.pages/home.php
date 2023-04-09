<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/home.css">

    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/slider.css">

    <style>
        :root {
            --background_card_plan: url('<?= $DATA['http_domain'] ?>public/img/img1.jpg');
            --url_bg_wave_top: url('<?= $DATA['http_domain'] ?>public/img/bg_wave_top.svg');
            --url_bg_wave_bottom: url('<?= $DATA['http_domain'] ?>public/img/bg_wave_bottom.svg');
        }
    </style>
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">

        <slider>
            <?php include('./src/templates/public.component/slider.php') ?>
        </slider>

        <section class="section-1">
            <div class="container">
                <h4>¿Que puedes aprender en <b>Learnidea</b>?</h4>
                <span>Certificados avalados por instituciones publicas y privadas.</span>
                <a href="<?= $DATA['http_domain'] ?>cursos" class="content">
                    <div class="description">
                        <h5>Programacion, musica, fibra optica, educacion de educadores.</h5>
                        <p>¡Domina areas en tendencia y conviertete en un experto! Estudia desde cero hasta experto, con cursos de programacion, musica, fibra optica, educacion de educadores, y mucho mas.</p>
                    </div>
                    <div class="image">
                        <img src="<?= $DATA['http_domain'] ?>public/img/tecnologys.png" alt="">
                    </div>
                </a>
                <div class="areas">
                    <a href="<?= $DATA['http_domain'] ?>cursos/areas/1" class="item">
                        <div class="image">
                            <img src="<?= $DATA['http_domain'] ?>public/img.areas/1.png" alt="">
                        </div>
                        <div class="description">
                            <h5>Programacion</h5>
                            <p>¡Aprende a programar desde cero! domina los lenguajes de programacion mas usados en el mundo, como Java, C#, Python, PHP, JavaScript, y mucho mas.</p>
                        </div>
                    </a>
                    <a href="<?= $DATA['http_domain'] ?>cursos/areas/2" class="item">
                        <div class="image">
                            <img src="<?= $DATA['http_domain'] ?>public/img.areas/2.png" alt="">
                        </div>
                        <div class="description">
                            <h5>Musica</h5>
                            <p>¡Aprende desde teoria musical hasta ser un experto en cualquier rama de la musica! domina la guitarra, piano, bateria, canto, y mucho mas.</p>
                        </div>
                    </a>
                    <a href="<?= $DATA['http_domain'] ?>cursos/areas/3" class="item">
                        <div class="image">
                            <img src="<?= $DATA['http_domain'] ?>public/img.areas/3.png" alt="">
                        </div>
                        <div class="description">
                            <h5>Fibra Optica</h5>
                            <p>¡Aprende a instalar y configurar redes de fibra optica! domina habilidades de fibra optica, conectorizacion, empalmes, reparaciones, construccion de troncales, derivaciones y mucho mas.</p>
                        </div>
                    </a>
                    <a href="<?= $DATA['http_domain'] ?>cursos/areas/4" class="item">
                        <div class="image">
                            <img src="<?= $DATA['http_domain'] ?>public/img.areas/4.png" alt="">
                        </div>
                        <div class="description">
                            <h5>Educacion de Educadores</h5>
                            <p>¡Aprende a ser un mejor educador! domina habilidades de educacion, conoce las mejores tecnicas de enseñanza, aprende a crear tus propios cursos, y mucho mas.</p>
                        </div>
                    </a>
                </div>

                <a href="<?= $DATA['http_domain'] ?>register" class="register">Empezar ahora</a>
                <span class="mini-msg">*Necesitas un correo electronico.</span>
            </div>
        </section>

        <section class="section-2">
            <div class="container">
                <h4>¡No esperes mas, <b>aprende ahora</b>!</h4>
                <span>Aprende a explotar tus habilidades y talentos, no te pierdas de la oportunidad de aprender de los mejores.</span>
                <div class="select-section">
                    <button class="item" id="cursos-section-anteriores" style="--border-color:#1292ef;">
                        <img src="<?= $DATA['http_domain'] ?>public/img/section-anteriores.png" alt="Imagen anteriores cursos">
                        <h5>Anteriores</h5>
                        <p>Revisa los cursos que ya se han impartido, para que no te pierdas de nada.</p>
                    </button>
                    <button class="item active" id="cursos-section-proximos" style="--border-color:#e3627e;">
                        <img src="<?= $DATA['http_domain'] ?>public/img/section-proximos.png" alt="Imagen proximos cursos">
                        <h5>Proximos</h5>
                        <p>Ahora tienes la oportunidad de ser parte de los cursos que se estan por impartir.</p>
                    </button>
                    <button class="item" id="cursos-section-activos" style="--border-color:#269144;">
                        <img src="<?= $DATA['http_domain'] ?>public/img/section-activos.png" alt="Imagen de cursos activos">
                        <h5>Activos</h5>
                        <p>Mira que cursos se estan impartiendo en este momento, solo por tiempo limitado.</p>
                    </button>
                </div>
            </div>
        </section>

    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/library.general/swiper/swiper-bundle.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/slider.js"></script>
</foot>

</html>