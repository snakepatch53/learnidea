<style>
    :root {
        --header-anuncio-height: 50px;
    }
</style>
<div class="anuncio">
    <div class="container">
        <p>¡Programación Orientada a objetos!</p>
        <div class="time" id="anuncio-time">
            <span class="time-day">8</span>
            <span class="letter">D</span>
            <span class="time-hour">00</span>
            <span class="letter">H</span>
            <span class="time-minute">00</span>
            <span class="letter">M</span>
            <span class="time-second">00</span>
            <span class="letter">S</span>
            <span class="message"></span>
        </div>
        <a href="<?= $DATA['http_domain'] ?>inscripcion/12">
            <i class="fas fa-star"></i>
            <span>¡Inscripcion!</span>
        </a>
    </div>
</div>

<nav class="navbar" id="topnavbar"><!-- class = float && open-menu  -->
    <div class="container">
        <a href="<?= $DATA['http_domain'] ?>" class="logo">
            <img class="logo_light" src="<?= $DATA['http_domain'] ?>public/img/logo_light.svg" alt="Logo">
            <img class="logo_dark" src="<?= $DATA['http_domain'] ?>public/img/logo_dark.svg" alt="Logo">
            <span>Learnidea</span>
        </a>
        <ul class="menu">
            <li class="option"><a href="<?= $DATA['http_domain'] ?>"><span>Home</span></a></li>
            <li class="option">
                <a class="btn-list"><span>Cursos</span><i class="fas fa-angle-down"></i></a>
                <ul class="submenu">
                    <li class="suboption"><a href="<?= $DATA['http_domain'] ?>cursos/1"><span>Curso 1</span></a></li>
                    <li class="suboption"><a href="<?= $DATA['http_domain'] ?>cursos/2"><span>Curso 2</span></a></li>
                    <li class="suboption"><a href="<?= $DATA['http_domain'] ?>cursos/3"><span>Curso 3</span></a></li>
                </ul>
            </li>
            <li class="option"><a href="<?= $DATA['http_domain'] ?>nosotros"><span>Nosotros</span></a></li>
            <li class="option"><a href="<?= $DATA['http_domain'] ?>contatos"><span>Contatos</span></a></li>
        </ul>

        <div class="search">
            <button>
                <i class="fas fa-search"></i>
            </button>
        </div>

        <div class="session-buttons">
            <a class="btn-login" href="<?= $DATA['http_domain'] ?>login">
                <span>Iniciar sesion</span>
            </a>
            <a href="<?= $DATA['http_domain'] ?>register">
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