<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro | Learnidea</title>
    <?php include('./src/templates/public.component/head.php') ?>
    <!-- <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/confetti.min.css"> -->
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/register.css">
</head>

<body>
    <main class="animate__animated animate__fadeIn">

        <div class="container">
            <form onsubmit="return false" id="form-login">
                <a class="logo" href="<?= $DATA['http_domain'] ?>">
                    <img src="<?= $DATA['http_domain'] ?>public/img/logo_dark.svg" alt="Learnidea">
                    <span>Learnidea</span>
                </a>

                <h1>Crea tu cuenta</h1>

                <div class="inputs">

                    <div class="item col-2">
                        <label for="email">Cédula</label>
                        <div class="input">
                            <input type="text" name="user_cedula" placeholder="Número de cédula">
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item">
                        <label for="email">Nombres</label>
                        <div class="input">
                            <input type="text" name="user_names" placeholder="Nombres">
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item">
                        <label for="email">Apellidos</label>
                        <div class="input">
                            <input type="text" name="user_surnames" placeholder="Apellidos">
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item radio col-2">
                        <label for="email">Formación académica</label>
                        <div class="input">
                            <input value="1" type="radio" name="user_level" id="formacion-basica" checked>
                            <label for="formacion-basica">Básica</label>
                            <input value="2" type="radio" name="user_level" id="formacion-secundaria">
                            <label for="formacion-secundaria">Secudaria</label>
                            <input value="3" type="radio" name="user_level" id="formacion-superior">
                            <label for="formacion-superior">Superior</label>
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item">
                        <label for="email">Correo electrónico</label>
                        <div class="input">
                            <input type="email" name="user_email" placeholder="Correo electrónico">
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item">
                        <label for="email">Celular</label>
                        <div class="input">
                            <input type="text" name="user_phone" placeholder="Número de celular">
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item radio col-2">
                        <label for="email">Sexo</label>
                        <div class="input">
                            <input value="M" type="radio" name="user_sex" id="sexo-masculino" checked>
                            <label for="sexo-masculino">Masculino</label>
                            <input value="F" type="radio" name="user_sex" id="sexo-femenino">
                            <label for="sexo-femenino">Femenino</label>
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item">
                        <label for="password">Contraseña</label>
                        <div class="input show-pass">
                            <input type="password" name="user_pass" class="password" placeholder="Contraseña">
                            <button class="show-hide">
                                <i class="fas fa-eye show"></i>
                                <i class="fas fa-eye-slash hide"></i>
                            </button>
                        </div>
                        <p class="message"></p>
                    </div>

                    <div class="item">
                        <label for="password">Confirma tu contraseña</label>
                        <div class="input show-pass">
                            <input type="password" name="user_confirmpass" class="password" placeholder="Contraseña">
                            <button class="show-hide">
                                <i class="fas fa-eye show"></i>
                                <i class="fas fa-eye-slash hide"></i>
                            </button>
                        </div>
                        <p class="message"></p>
                    </div>


                    <div class="item col-2 terminos">
                        <label class="input">
                            <input type="checkbox" name="user_terminos" id="terminos">
                            <label for="terminos">Acepto los <a href="<?= $DATA['http_domain'] ?>terminos-y-condiciones-de-uso/">términos y condiciones</a></label>
                        </label>
                        <p class="message"></p>
                    </div>

                    <div class="item col-2 message success" id="general_message"></div><!-- clases info, error, success -->

                    <div class="item col-2 submit">
                        <div class="input">
                            <input type="submit" value="Registrarte ahora">
                        </div>
                    </div>
                </div>


                <div class="more">
                    <div class="link">
                        <span>¿Ya tienes una cuenta?</span>
                        <a href="<?= $DATA['http_domain'] ?>login/">Inicia sesión</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="modal_success load" id="modal_success">
            <canvas id="canvas-confetti"></canvas>
            <div class="container">
                <div class="load">
                    <i class="fas fa-spinner fa-spin"></i>
                    <p>Registrando...</p>
                </div>
                <div class="content">
                    <div class="icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="text">
                        <h2>¡Registro exitoso!</h2>
                        <p>Gracias <span class="user_name"></span> por registrarte en Learnidea.</p>
                        <p>Revise su correo electrónico para activar tu cuenta.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/library.general/confetti.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.general/validacion.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/register.js"></script>
</foot>

</html>