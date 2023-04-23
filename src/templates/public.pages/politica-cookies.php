<!DOCTYPE html>
<html lang="es">

<head>
    <title>Política de Cookies | <?= $_ENV['APP_NAME'] ?></title>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/politica-cookies.css">
</head>

<body>
    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section>
            <div class="container">

                <h1>Política de Cookies</h1>
                <p class="out">El sitio web de <?= $_ENV['APP_NAME'] ?> utiliza cookies y otras tecnologías similares para mejorar la experiencia del usuario y personalizar el contenido y la publicidad. Esta política de cookies explica cómo utilizamos las cookies y las opciones que tienes al respecto.</p>
                <h2>¿Qué son las cookies?</h2>
                <p class="out">Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. Estos archivos contienen información sobre tus preferencias y tu comportamiento en línea, y se utilizan para mejorar la experiencia del usuario. Las cookies también se utilizan para personalizar el contenido y la publicidad que ves en línea.</p>
                <h2>¿Qué tipos de cookies utilizamos?</h2>
                <p class="out">Utilizamos dos tipos de cookies en nuestro sitio web:</p>
                <ul>
                    <li>
                        <p>Cookies propias: Son las cookies que se crean y gestionan directamente por nosotros. Utilizamos cookies propias para recordar tus preferencias y mejorar la experiencia del usuario.</p>
                    </li>
                    <li>
                        <p>Cookies de terceros: Son las cookies que se crean y gestionan por terceros, como Google Analytics, para analizar el tráfico del sitio web y personalizar la publicidad que ves en línea.</p>
                    </li>
                </ul>
                <h2>¿Para qué utilizamos las cookies?</h2>
                <p class="out">Utilizamos las cookies para los siguientes fines:</p>
                <ul>
                    <li>
                        <p>Mejorar la experiencia del usuario: Utilizamos las cookies para recordar tus preferencias y ofrecerte una experiencia personalizada en nuestro sitio web.</p>
                    </li>
                    <li>
                        <p>Análisis del sitio web: Utilizamos cookies de terceros, como Google Analytics, para analizar el tráfico del sitio web y mejorar nuestra oferta de contenidos.</p>
                    </li>
                    <li>
                        <p>Publicidad personalizada: Utilizamos cookies de terceros para personalizar la publicidad que ves en línea y ofrecerte productos y servicios que puedan interesarte.</p>
                    </li>
                </ul>
                <h2>¿Cómo puedes gestionar las cookies?</h2>
                <p class="out">Puedes gestionar las cookies de varias formas:</p>
                <ul>
                    <li>
                        <p>Configuración del navegador: Puedes configurar tu navegador para que bloquee todas las cookies o para que te avise cuando se envía una cookie. Sin embargo, si bloqueas las cookies, es posible que algunas funciones del sitio web no funcionen correctamente.</p>
                    </li>
                    <li>
                        <p>Configuración de las preferencias: Puedes configurar tus preferencias de cookies en nuestro sitio web para que se adapten a tus necesidades.</p>
                    </li>
                    <li>
                        <p>Opciones de terceros: Si no deseas recibir publicidad personalizada, puedes optar por no participar en las opciones de publicidad de terceros.</p>
                    </li>
                </ul>
                <h2>¿Qué ocurre si rechazas las cookies?</h2>
                <p class="out">Si decides rechazar las cookies, algunas funciones del sitio web pueden no funcionar correctamente y es posible que no puedas acceder a todas las partes del sitio web.</p>
                <h2>Cambios en la política de cookies</h2>
                <p class="out">Podemos actualizar esta política de cookies en cualquier momento. Te recomendamos que revises esta página con frecuencia para estar al día de los cambios.</p>
                <p class="out">Si tienes alguna pregunta o comentario sobre nuestra política de cookies, no dudes en ponerte en contacto con nosotros a través de nuestro <a target="_blank" href="<?= $DATA['http_domain'] ?>"> formulario de contacto</a>.</p>

            </div>
        </section>

    </main>

    <footer id=" section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <!-- <script src="<?= $DATA['http_domain'] ?>public/library.general/confetti.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/confirmacion.js"></script> -->
</foot>

</html>