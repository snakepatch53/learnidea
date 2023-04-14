<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/splide/splide.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/cursos.css">
    <style>
        :root {
            --bg-header-img: url('<?= $DATA['http_domain'] ?>public/img/frontpage-bg.png');
        }
    </style>
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="section-frontpage">
            <div class="container">
                <div class="item info">
                    <h2>Mira todos nuestros cursos</h2>
                    <span>Conviertete en un profesional en el area que mas te guste</span>
                    <a href="<?= $DATA['http_domain'] ?>register">¡Registrate ahora!</a>
                </div>
                <div class="item item-img">
                    <img src="<?= $DATA['http_domain'] ?>public/img/frontpage1.png" alt="Portada de cursos" class="img-frontpage">
                </div>
            </div>
        </section>

        <section class="section-cursos">
            <div class="container">

                <h3>🔥 Cursos próximos</h3>
                <div class="splide slider-cursos" id="slider-splide-cursos-proximos">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/1">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/1.png" alt="Imagen del curso 1">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/2">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/2.png" alt="Imagen del curso 2">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/3">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/3.png" alt="Imagen del curso 3">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <h3>✨ Cursos concluidos</h3>
                <div class="splide slider-cursos" id="slider-splide-cursos-anteriores">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/1">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/1.png" alt="Imagen del curso 1">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/2">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/2.png" alt="Imagen del curso 2">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/3">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/3.png" alt="Imagen del curso 3">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <h3>🎉 Cursos en progreso</h3>
                <div class="splide slider-cursos" id="slider-splide-cursos-activos">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/1">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/1.png" alt="Imagen del curso 1">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/2">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/2.png" alt="Imagen del curso 2">
                                </a>
                            </li>
                            <li class="splide__slide">
                                <a href="<?= $DATA['http_domain'] ?>cursos/3">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/3.png" alt="Imagen del curso 3">
                                </a>
                            </li>
                        </ul>
                    </div>
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
    <script src="<?= $DATA['http_domain'] ?>public/library.general/splide/splide.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/cursos.js"></script>
</foot>

</html>