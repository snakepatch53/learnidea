<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/404.css">
</head>

<body>

    <!-- <header>
        <?php //include('./src/templates/public.component/header.php') 
        ?>
    </header> -->

    <main class="animate__animated animate__fadeIn">

        <div class="container">
            <a href="<?= $DATA['http_domain'] ?>" class="title">
                <span>4</span>
                <div class="logo"><?php include('./public/img/logo.svg') ?></div>
                <span>4</span>
            </a>
            <h2 class="subtitle">Perdido en las profundidades</h2>
            <p>¡Abandonen el barco! Este submarino se ha perdido en una zona desconocida del océano. Lamentablemente, la página que buscas no está a bordo. Por favor, ponte a salvo.</p>
            <a href="<?= $DATA['http_domain'] ?>">
                <span>Navegar a la superficie</span>
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>

        <div class="bubble-container">
            <div class="buble buble1"></div>
            <div class="buble buble2"></div>
            <div class="buble buble3"></div>
            <div class="buble buble4"></div>
            <div class="buble buble5"></div>
            <div class="buble buble6"></div>
            <div class="buble buble7"></div>
            <div class="buble buble8"></div>
            <div class="buble buble9"></div>
            <div class="buble buble10"></div>
        </div>
    </main>

    <!-- <footer id="section-footer">
        <?php //include('./src/templates/public.component/footer.php') 
        ?>
    </footer> -->
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>