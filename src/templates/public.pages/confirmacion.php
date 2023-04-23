<!DOCTYPE html>
<html lang="es">

<head>
    <title>Confirmación exitosa | <?= $_ENV['APP_NAME'] ?></title>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/confirmacion.css">
</head>

<body>
    <canvas id="canvas-confetti"></canvas>
    <main class="animate__animated animate__fadeIn">

        <div class="container">

            <div class="content">
                <a class="title" href="<?= $DATA['http_domain'] ?>">
                    <img src="<?= $DATA['http_domain'] ?>public/img/logo_dark.svg" alt="Learnidea">
                    <span><?= $_ENV['APP_NAME'] ?></span>
                </a>
                <h1>¡Confirmación exitosa!</h1>
                <p>Hola <?= $DATA['user']['user_shortname'] ?>, te estabamos esperando. Leanidea te da la bienvenida a la mejor plataforma de aprendizaje y certificación del Ecuador.</p>
                <br>
                <p>¡Ya puedes iniciar sesion en tu cuenta!</p>
                <a class="button" href="<?= $DATA['http_domain'] ?>login/">
                    <span>Manos a la obra</span>
                    <!-- <span>Tomar un cafe y manos a la obra</span> -->
                    <i class="fas fa-hands"></i>

                </a>
            </div>

        </div>

    </main>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/library.general/confetti.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/confirmacion.js"></script>
</foot>

</html>