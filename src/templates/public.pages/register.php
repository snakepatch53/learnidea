<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro | Learnidea</title>
    <?php include('./src/templates/public.component/head.php') ?>
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
                            <input type="text" name="cedula" placeholder="Número de cédula">
                        </div>
                    </div>

                    <div class="item">
                        <label for="email">Nombres</label>
                        <div class="input">
                            <input type="text" name="nombres" placeholder="Nombres">
                        </div>
                    </div>

                    <div class="item">
                        <label for="email">Apellidos</label>
                        <div class="input">
                            <input type="text" name="apellidos" placeholder="Apellidos">
                        </div>
                    </div>

                    <div class="item radio col-2">
                        <label for="email">Formación académica</label>
                        <div class="input">
                            <input type="radio" name="formacion" id="formacion-basica" checked>
                            <label for="formacion-basica">Básica</label>
                            <input type="radio" name="formacion" id="formacion-secundaria">
                            <label for="formacion-secundaria">Secudaria</label>
                            <input type="radio" name="formacion" id="formacion-superior">
                            <label for="formacion-superior">Superior</label>
                        </div>
                    </div>

                    <div class="item">
                        <label for="email">Correo electrónico</label>
                        <div class="input">
                            <input type="email" name="email" placeholder="Correo electrónico">
                        </div>
                    </div>

                    <div class="item">
                        <label for="email">Celular</label>
                        <div class="input">
                            <input type="text" name="celular" placeholder="Número de celular">
                        </div>
                    </div>

                    <div class="item radio col-2">
                        <label for="email">Sexo</label>
                        <div class="input">
                            <input type="radio" name="sexo" id="sexo-masculino" checked>
                            <label for="sexo-masculino">Masculino</label>
                            <input type="radio" name="sexo" id="sexo-femenino">
                            <label for="sexo-femenino">Femenino</label>
                        </div>
                    </div>

                    <div class="item">
                        <label for="password">Contraseña</label>
                        <div class="input show-pass">
                            <input type="password" name="password" class="password" placeholder="Contraseña">
                            <button id="show-hide">
                                <i class="fas fa-eye show"></i>
                                <i class="fas fa-eye-slash hide"></i>
                            </button>
                        </div>
                    </div>

                    <div class="item">
                        <label for="password">Confirma tu contraseña</label>
                        <div class="input show-pass">
                            <input type="password" name="confirm_password" class="password" placeholder="Contraseña">
                            <button id="show-hide">
                                <i class="fas fa-eye show"></i>
                                <i class="fas fa-eye-slash hide"></i>
                            </button>
                        </div>
                    </div>

                    <div class="item col-2 terminos">
                        <input type="checkbox" name="terminos" id="terminos">
                        <label for="terminos">Acepto los <a href="<?= $DATA['http_domain'] ?>terminos-y-condiciones-de-uso/">términos y condiciones</a></label>
                    </div>

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

    </main>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/register.js"></script>
</foot>

</html>