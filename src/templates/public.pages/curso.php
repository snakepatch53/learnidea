<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/splide/splide.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/curso.css">
    <title>Ideasoft - Fundamentos de programación</title>
    <style>
        :root {
            --bg-header-img: url('<?= $DATA['http_domain'] ?>public/img/frontpage-bg.png');
        }
    </style>
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">

        <section class="section-frontpage section-frontpage1">
            <div class="container">
                <div class="item">
                    <div class="breadcrumb">
                        <i class="fas fa-gift"></i>
                        <a href="<?= $DATA['http_domain'] ?>">Inicio</a>
                        <i class="fa fa-angle-right"></i>
                        <a href="<?= $DATA['http_domain'] ?>cursos">Cursos</a>
                        <i class="fa fa-angle-right"></i>
                        <a href="<?= $DATA['http_domain'] ?>cursos/{{CURSO_NAME}}">Fundamentos de programacion</a>
                    </div>
                    <div class="title">
                        <h1>Fundamentos de programacion</h1>
                        <p>Aprender a programar no es difícil, te están enseñando mal. Este curso te enseñará la lógica y los fundamentos para programar en cualquier lenguaje.</p>
                    </div>
                    <div class="description">
                        <h2>¿Qué aprenderás?</h2>
                        <ul>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Comprender los fundamentos de programacion.</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Comprender la logica que esta detras de cualquier lenguaje.</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Resolver ejercicios de programacion.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="basics">
                        <span>
                            <i class="fas fa-calendar-alt"></i>
                            16 de marzo 2023
                        </span>
                        <div class="split"></div>

                        <span>
                            <i class="fas fa-clock"></i>
                            40 horas
                        </span>
                        <div class="split"></div>

                        <span>
                            <i class="fas fa-signal"></i>
                            Básico
                        </span>
                        <div class="split"></div>

                        <span>
                            <i class="fas fa-user-friends"></i>
                            7 estudiantes
                        </span>
                        <div class="split"></div>

                        <span>
                            <i class="fas fa-users"></i>
                            20 cupos
                        </span>
                    </div>
                    <div class="foot">
                        <button class="register">Inscribirme</button>
                        <!-- <button class="cancel">Cancelar Inscripcion</button> -->
                        <div class="time-container">
                            <label>Empieza en: </label>
                            <div class="time" id="curso-time">
                                <span class="time-day">6</span>
                                <span class="letter">D</span>
                                <span class="time-hour">00</span>
                                <span class="letter">H</span>
                                <span class="time-minute">00</span>
                                <span class="letter">M</span>
                                <span class="time-second">05</span>
                                <span class="letter">S</span>
                                <span class="message"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portada">
                        <img src="<?= $DATA['http_domain'] ?>public/img.cursos/1.png" alt="Imagen del curso Fundamentos de programacion">
                    </div>
                </div>
            </div>
        </section>




        <section class="section-descripcion">
            <div class="container">
                <div class="item information">
                    <h3>Temario del curso</h3>
                    <div class="lists" id="temario-lists">
                        <div class="list">
                            <button>
                                <label>1. ¿Qué es la programacion?</label>
                                <p>Aprenderás qué es la programación y por qué es la carrera más demandada.</p>
                                <span>15/04/2023</span>
                                <i class="fas fa-angle-down"></i>
                            </button>
                            <ul>
                                <li>
                                    <p><b>1.1 - ¿Qué es la programacion?</b> Aprenderas el significado de programacion en un computador y aplicarlo a cualquier lenguaje de programacion</p>
                                </li>
                                <li>
                                    <p><b>1.2 - ¿Por qué aprender a programar?</b> Aprenderas las razones por las cuales aprender a programar es una de las mejores decisiones que puedes tomar en tu vida.</p>
                                </li>
                                <li>
                                    <p><b>1.3 - ¿Qué es un lenguaje de programacion?</b> Aprenderas el significado de lenguaje de programacion y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>1.4 - ¿Qué es un algoritmo?</b> Aprenderas el significado de algoritmo y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>1.5 - ¿Qué es un compilador?</b> Aprenderas el significado de compilador y como se relaciona con la programacion.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="list">
                            <button>
                                <label>2. Variables y tipos de datos</label>
                                <p>Entenderas los tipos de datos y como utilizarlos en tus programas.</p>
                                <span>16/04/2023</span>
                                <i class="fas fa-angle-down"></i>
                            </button>
                            <ul>
                                <li>
                                    <p><b>2.1 - ¿Qué es una variable?</b> Aprenderas el significado de variable y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>2.2 - ¿Qué es un tipo de dato?</b> Aprenderas el significado de tipo de dato y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>2.3 - ¿Qué es un entero?</b> Aprenderas el significado de entero y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>2.4 - ¿Qué es un decimal?</b> Aprenderas el significado de decimal y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>2.5 - ¿Qué es un caracter?</b> Aprenderas el significado de caracter y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>2.6 - ¿Qué es un booleano?</b> Aprenderas el significado de booleano y como se relaciona con la programacion.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="list">
                            <button>
                                <label>3. Operadores aritmeticos y logicos</label>
                                <p>Entenderas los operadores aritmeticos y logicos y como utilizarlos en tus programas.</p>
                                <span>17/04/2023</span>
                                <i class="fas fa-angle-down"></i>
                            </button>
                            <ul>
                                <li>
                                    <p><b>3.1 - ¿Qué es un operador aritmetico?</b> Aprenderas el significado de operador aritmetico y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>3.2 - ¿Qué es un operador logico?</b> Aprenderas el significado de operador logico y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>3.3 - ¿Qué es un operador de asignacion?</b> Aprenderas el significado de operador de asignacion y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>3.4 - ¿Qué es un operador de incremento?</b> Aprenderas el significado de operador de incremento y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>3.5 - ¿Qué es un operador de decremento?</b> Aprenderas el significado de operador de decremento y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>3.6 - ¿Qué es un operador de comparacion?</b> Aprenderas el significado de operador de comparacion y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>3.7 - ¿Qué es un operador de concatenacion?</b> Aprenderas el significado de operador de concatenacion y como se relaciona con la programacion.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="list">
                            <button>
                                <label>4. Condicionales</label>
                                <p>Entenderas los condicionales y como utilizarlos en tus programas.</p>
                                <span>18/04/2023</span>
                                <i class="fas fa-angle-down"></i>
                            </button>
                            <ul>
                                <li>
                                    <p><b>4.1 - ¿Qué es un condicional?</b> Aprenderas el significado de condicional y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>4.2 - ¿Qué es un if?</b> Aprenderas el significado de if y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>4.3 - ¿Qué es un else?</b> Aprenderas el significado de else y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>4.4 - ¿Qué es un else if?</b> Aprenderas el significado de else if y como se relaciona con la programacion.</p>
                                </li>
                                <li>
                                    <p><b>4.5 - ¿Qué es un switch?</b> Aprenderas el significado de switch y como se relaciona con la programacion.</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="about">
                        <h3>Acerca de este curso</h3>
                        <p>
                            ¿La programación se está muriendo? ¿La Inteligencia Artificial va a reemplazar a los programadores? ¡No te dejes engañar! La programación no se va a morir, solo se adaptará. Es cierto que la IA está cambiando el mundo, pero los modelos de IA necesitan ser diseñados, implementados y mantenidos por programadores, por lo que aprender a programar es una gran inversión para tu futuro y una apuesta segura para conseguir un trabajo con un gran salario..
                        </p>
                        <div class="more">
                            <div class="item">
                                <h4>
                                    <i class="fas fa-file-alt"></i>
                                    <span>¿Qué aprenderas?</span>
                                </h4>
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <p>Comprender los fundamentos de programación.</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <p>Comprender la lógica que está detrás de cualquier lenguaje.</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <p>Resolver ejercicios de programación.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <h4>
                                    <i class="fas fa-lightbulb"></i>
                                    <span>¿Qué conocimientos previos necesitas?</span>
                                </h4>
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <p>Ninguno (saber encender una computadora y utilizarla). Este curso es desde cero y solo necesitas querer aprender a programar.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <h4>
                                    <i class="fas fa-users"></i>
                                    <span>¿A quién está dirigido?</span>
                                </h4>
                                <ul>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <p>Cualquier persona sin conocimientos de programación que desee empezar en este mundo.</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <p>Programadores junior que requieran reforzar conceptos.</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <p>Programadores novatos que tienen muchas dudas sobre los fundamentos.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item additional">
                    <div class="teachers">
                        <h2>Profesores del curso</h2>
                        <ul>
                            <a href="<?= $DATA['http_domain'] ?>users/1">
                                <div class="image">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.users/1.png" alt="teacher">
                                </div>
                                <div class="info">
                                    <h3>Tnlgo. Harold Hernandez</h3>
                                    <p>Profesor de programación</p>
                                </div>
                            </a>
                            <a href="<?= $DATA['http_domain'] ?>users/2">
                                <div class="image">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.users/3.png" alt="teacher">
                                </div>
                                <div class="info">
                                    <h3>Mús. Brayan Juca</h3>
                                    <p>Profesor de música</p>
                                </div>
                            </a>
                        </ul>
                    </div>

                    <div class="cursos">
                        <h2>Cursos relacionados: </h2>
                        <ul>
                            <li>
                                <a class="image" href="<?= $DATA['http_domain'] ?>curso/1">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/1.png" alt="curso">
                                </a>
                                <div class="info">
                                    <h3>Fundamentos de programacion</h3>
                                    <a class="teacher" href="<?= $DATA['http_domain'] ?>users/1">
                                        <img src="<?= $DATA['http_domain'] ?>public/img.users/1.png" alt="teacher">
                                        <p>Tnlgo. Harold Hernandez</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="image" href="<?= $DATA['http_domain'] ?>curso/2">
                                    <img src="<?= $DATA['http_domain'] ?>public/img.cursos/2.png" alt="curso">
                                </a>
                                <div class="info">
                                    <h3>Curso de música</h3>
                                    <a class="teacher" href="<?= $DATA['http_domain'] ?>users/3">
                                        <img src="<?= $DATA['http_domain'] ?>public/img.users/3.png" alt="teacher">
                                        <p>Mús. Brayan Juca</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
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
    <script src="<?= $DATA['http_domain'] ?>public/library.general/splide/splide.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/curso.js"></script>
</foot>

</html>