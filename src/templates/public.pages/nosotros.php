<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/nosotros.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="section-frontpage section-frontpage1" id="section-team">
            <div class="container">
                <div class="icono">
                    <i class="fas fa-users"></i>
                </div>
                <h2>Equipo Learnidea</h2>
                <p>Nuestro equipo esta conformado por profesionales de diferentes áreas y con diferentes experiencias, pero con un objetivo en común: ayudar a las personas a mejorar su calidad de vida a través de la educación.</p>
            </div>
        </section>

        <section class="section-team">
            <div class="container">
                <a class="item" href="<?= $DATA['http_domain'] ?>teachers/1">
                    <div class="img">
                        <img src="<?= $DATA['http_domain'] ?>public/img.users/1.png" alt="Profesor Harold Hernandez">
                    </div>
                    <div class="info">
                        <h3>Tnlgo. Harold Hernandez</h3>
                        <span>Profesor de programación</span>
                        <p>Si puedes pensarlo, puedes programarlo.</p>
                    </div>
                </a>
                <a class="item" href="<?= $DATA['http_domain'] ?>teachers/2">
                    <div class="img">
                        <img src="<?= $DATA['http_domain'] ?>public/img.users/2.png" alt="Profesor Edwin Jara">
                    </div>
                    <div class="info">
                        <h3>Mgtr. Edwin Jara</h3>
                        <span>Profesor de pedagogía</span>
                        <p>Trabaja en silencio, que el exito se encargue de hacer todo el ruido.</p>
                    </div>
                </a>
                <a class="item" href="<?= $DATA['http_domain'] ?>teachers/3">
                    <div class="img">
                        <img src="<?= $DATA['http_domain'] ?>public/img.users/3.png" alt="Profesor Brayan Juca">
                    </div>
                    <div class="info">
                        <h3>Mús. Brayan Juca</h3>
                        <span>Profesor de música</span>
                        <p>Nunca digas nunca.</p>
                    </div>
                </a>
                <a class="item" href="<?= $DATA['http_domain'] ?>teachers/4">
                    <div class="img">
                        <img src="<?= $DATA['http_domain'] ?>public/img.users/4.png" alt="Profesor Joel Montenegro">
                    </div>
                    <div class="info">
                        <h3>Ph. Joel Montenegro</h3>
                        <span>Profesor de fotografía</span>
                        <p>Todo es posible, siempre y cuando tu lo creas.</p>
                    </div>
                </a>
            </div>
        </section>



        <section class="section-frontpage section-frontpage2" id="section-conceptos">
            <div class="container">
                <div class="icono">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h2>Nuestros conceptos</h2>
                <p>Leanidea es una entidad educativa que busca brindar a sus estudiantes una educación de calidad, con profesores altamente capacitados y con una metodología de enseñanza innovadora. En leanidea puedes capacitarte hasta convertirte en un experto en cualquier área de tu interés y obtener un certificado avalado por instituciones públicas y privadas que afirmaran tu conocimiento para trabajar en cualquier empresa.</p>
            </div>
        </section>

        <section class="section-concepts">
            <div class="container">
                <div class="item">
                    <h3>Misión</h3>
                    <p>En Learnidea, nuestra misión es ofrecer una educación en línea de alta calidad y accesible en áreas de tendencia como tecnología, música, fibra óptica y educación de educadores. Nos esforzamos por brindar una experiencia educativa innovadora y efectiva, fomentando el aprendizaje continuo y el crecimiento profesional. En Learnidea, estamos comprometidos con el desarrollo de nuestra comunidad y trabajamos para democratizar el acceso al conocimiento y hacer que la educación sea más accesible y efectiva.</p>
                </div>
                <div class="item">
                    <h3>Visión</h3>
                    <p>En Learnidea, buscamos ser líderes en capacitación de alta calidad en nuestra región, brindando una experiencia educativa innovadora y efectiva en áreas de tendencia como tecnología, música, fibra óptica y educación de educadores. Nos esforzamos por democratizar el acceso al conocimiento y ayudar a desarrollar el potencial de nuestra comunidad.</p>
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
    <script src="<?= $DATA['http_domain'] ?>public/js.public/nosotros.js"></script>
</foot>

</html>