<!DOCTYPE html>
<html lang="es">

<head>
    <title>Iniciar sesion | Learnidea</title>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/login.css">
</head>

<body>
    <main class="animate__animated animate__fadeIn">

        <div class="container">
            <form onsubmit="return false" id="form-login">
                <a class="logo" href="<?= $DATA['http_domain'] ?>">
                    <!-- <img src="<?= $DATA['http_domain'] ?>public/img/logo_dark.svg" alt="Learnidea"> -->
                    <div class="svg">
                        <?php include('./public/img/logo.svg') ?>
                    </div>
                    <span>Learnidea</span>
                </a>

                <h1>Iniciar sesión</h1>

                <label for="email">Correo electrónico</label>
                <div class="input">
                    <input type="email" name="email" id="email" placeholder="Correo electrónico">
                </div>

                <label for="password">Contraseña</label>
                <div class="input" id="password-container">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <button id="show-hide">
                        <i class="fas fa-eye show"></i>
                        <i class="fas fa-eye-slash hide"></i>
                    </button>
                </div>

                <div class="input submit">
                    <input type="submit" value="Iniciar sesión">
                </div>

                <div class="more">
                    <div class="link">
                        <span>¿No tienes una cuenta?</span>
                        <a href="<?= $DATA['http_domain'] ?>register/">Regístrate gratis</a>
                    </div>
                    <div class="link">
                        <a href="<?= $DATA['http_domain'] ?>recuperacion/">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>

            </form>
        </div>

    </main>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/login.js"></script>
</foot>

</html>