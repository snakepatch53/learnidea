<!-- <style>
    :root {
        --header-anuncio-height: 50px;
    }
</style>
<div class="anuncio">
    <div class="container">
        <p>¡Programación Orientada a objetos!</p>
        <div class="time">
            <span class="time-day">4</span>
            <span class="letter">D</span>
            <span class="time-hour">02</span>
            <span class="letter">H</span>
            <span class="time-minute">03</span>
            <span class="letter">M</span>
            <span class="time-second">05</span>
            <span class="letter">S</span>
        </div>
        <a href="<?= $DATA['http_domain'] ?>inscripcion/12">
            <i class="fas fa-star"></i>
            <span>¡Inscripcion!</span>
        </a>
    </div>
</div> -->

<nav class="navbar" id="topnavbar"><!-- class = float && open-menu  -->
    <div class="container">
        <a href="<?= $DATA['http_domain'] ?>" class="logo">
            <img class="logo_light" src="<?= $DATA['http_domain'] ?>public/img/logo_light.svg" alt="Logo">
            <img class="logo_dark" src="<?= $DATA['http_domain'] ?>public/img/logo_dark.svg" alt="Logo">
            <span>Learnidea</span>
        </a>
        <ul class="menu">
            <li class="option"><a href="<?= $DATA['http_domain'] ?>"><span>Home</span></a></li>
            <li class="option"><a href="<?= $DATA['http_domain'] ?>sobre"><span>Nosotros</span></a></li>
            <li class="option"><a href="<?= $DATA['http_domain'] ?>contato"><span>Contato</span></a></li>
            <li class="option">
                <a class="btn-list"><span>Submenu</span><i class="fas fa-angle-down"></i></a>
                <ul class="submenu">
                    <li class="suboption"><a href="<?= $DATA['http_domain'] ?>submenu1"><span>Subopcion 1</span></a></li>
                    <li class="suboption"><a href="<?= $DATA['http_domain'] ?>submenu2"><span>Subopcion 2</span></a></li>
                    <li class="suboption"><a href="<?= $DATA['http_domain'] ?>submenu3"><span>Subopcion 3</span></a></li>
                </ul>
            </li>
            <li class="option"><a href="<?= $DATA['http_domain'] ?>contato"><span>Contato</span></a></li>
        </ul>

        <div class="search">
            <button>
                <i class="fas fa-search"></i>
            </button>
        </div>

        <div class="register">
            <a href="<?= $DATA['http_domain'] ?>">
                <span>Registrarse</span>
            </a>
        </div>

        <div class="menu-mobile">
            <button id="btn-mobile-toggle-navbar">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</nav>