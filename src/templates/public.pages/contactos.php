<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/contactos.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">

        <section class="section-frontpage section-frontpage1" id="section-redes-sociales">
            <div class="container">
                <div class="icono">
                    <i class="fas fa-comments"></i>
                </div>
                <h2>Nuestras redes sociales</h2>
                <p>Contactanos en nuestras redes sociales para obtener más información sobre nuestros cursos y servicios.</p>
            </div>
        </section>


        <section class="section-social">
            <div class="container">
                <div class="items">
                    <a href="#" class="item" style="--social-color:#3b5998;" target="_blank">
                        <div class="icono">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="info">
                            <span>Facebook</span>
                        </div>
                    </a>
                    <a href="#" class="item" style="--social-color:#833ab4;" target="_blank">
                        <div class="icono">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="info">
                            <span>Instagram</span>
                        </div>
                    </a>
                    <a href="#" class="item" style="--social-color:#fb0000;" target="_blank">
                        <div class="icono">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <div class="info">
                            <span>Youtube</span>
                        </div>
                    </a>
                    <a href="#" class="item" style="--social-color:#1da1f2;" target="_blank">
                        <div class="icono">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="info">
                            <span>Twitter</span>
                        </div>
                    </a>
                    <a href="#" class="item" style="--social-color:#25d366;" target="_blank">
                        <div class="icono">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="info">
                            <span>Whatsapp</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>



        <section class="section-frontpage section-frontpage2" id="section-redes-sociales">
            <div class="container">
                <div class="icono">
                    <i class="fas fa-envelope"></i>
                </div>
                <h2>Dejanos un mensaje</h2>
                <p>Si tienes alguna duda o comentario, puedes dejarnos un mensaje y nos pondremos en contacto contigo.</p>
            </div>
        </section>


        <section class="section-form">
            <div class="container message-form">
                <form onsubmit="return false">
                    <input type="text" name="message_nombre" placeholder="Nombres y Apellidos*">
                    <input type="text" name="message_cedula" placeholder="Número de cédula*">
                    <input type="text" name="message_celular" placeholder="Número de celular*">
                    <input type="text" name="message_email" placeholder="Correo electrónico*">
                    <textarea name="message_texto" rows="5" placeholder="Mensaje*"></textarea>
                    <p class="msg"></p> <!-- error | success | warnning | info -->
                    <button>
                        <span>Enviar</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/contactos.js"></script>
</foot>

</html>