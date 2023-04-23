<!DOCTYPE html>
<html lang="es">

<head>
    <title>Política de Privacidad | <?= $_ENV['APP_NAME'] ?></title>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/politica-privacidad.css">
</head>

<body>
    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section>
            <div class="container">

                <h1>Política de privacidad</h1>
                <p class="out">Esta política de privacidad establece cómo se utiliza y protege cualquier información que usted proporciona al utilizar nuestro sitio web.</p>
                <p class="out">Nos comprometemos a garantizar que su privacidad esté protegida. Si le pedimos que proporcione cierta información mediante la cual puede ser identificado al utilizar este sitio web, puede estar seguro de que solo se utilizará de acuerdo con esta declaración de privacidad.</p>
                <p class="out">Podemos cambiar esta política de vez en cuando al actualizar esta página. Usted debería revisar esta página de vez en cuando para asegurarse de que está satisfecho con los cambios. Esta política es efectiva a partir del <?= date('d/m/Y') ?>.</p>
                <h2>¿Qué información recopilamos?</h2>
                <p class="out">Podemos recopilar la siguiente información:</p>
                <ul>
                    <li>
                        <p>Nombre y apellidos</p>
                    </li>
                    <li>
                        <p>Información de contacto, incluyendo dirección de correo electrónico</p>
                    </li>
                    <li>
                        <p>Información demográfica, como código postal, preferencias e intereses</p>
                    </li>
                    <li>
                        <p>Otra información relevante para encuestas y/o ofertas</p>
                    </li>
                </ul>
                <h2>¿Para qué utilizamos la información que recopilamos?</h2>
                <p class="out">Necesitamos esta información para comprender sus necesidades y brindarle un mejor servicio, en particular por las siguientes razones:</p>
                <ul>
                    <li>
                        <p>Mantenimiento de registros internos.</p>
                    </li>
                    <li>
                        <p>Podemos utilizar la información para mejorar nuestros productos y servicios.</p>
                    </li>
                    <li>
                        <p>Podemos enviar correos electrónicos promocionales sobre nuevos productos, ofertas especiales u otra información que pensemos que pueda resultar interesante para usted utilizando la dirección de correo electrónico que usted ha proporcionado.</p>
                    </li>
                    <li>
                        <p>De vez en cuando, podemos utilizar su información para contactarlo con fines de investigación de mercado. Podemos contactarlo por correo electrónico, teléfono, fax o correo postal. Podemos utilizar la información para personalizar el sitio web según sus intereses.</p>
                    </li>
                </ul>
                <h2>¿Cómo protegemos su información?</h2>
                <p class="out">Nos comprometemos a garantizar que su información esté segura. Para evitar el acceso no autorizado o la divulgación, hemos implementado procedimientos físicos, electrónicos y administrativos adecuados para salvaguardar y proteger la información que recopilamos en línea.</p>
                <h2>¿Utilizamos cookies?</h2>
                <p class="out">Sí. Las cookies son pequeños archivos que un sitio web o su proveedor de servicios transfiere al disco duro de su computadora a través de su navegador web (si usted lo permite) que permite que los sistemas del sitio web o proveedor de servicios reconozcan su navegador y capturen y recuerden cierta información. Utilizamos cookies para ayudarnos a recordar y procesar los artículos en su carrito de compras y compilar datos agregados sobre el tráfico del sitio y la interacción del sitio para que podamos ofrecer mejores experiencias y herramientas del sitio en el futuro.</p>
                <h2>¿Podemos divulgar la información que recopilamos a terceros?</h2>
                <p class="out">No vendemos, alquilamos ni divulgamos información personal identificable a terceros, excepto en las siguientes circunstancias:</p>
                <ul>
                    <li>
                        <p>Podemos compartir tu información personal identificable con proveedores de servicios de terceros que prestan servicios en nuestro nombre, como el alojamiento de nuestro sitio web, el envío de correos electrónicos, el procesamiento de pagos y la provisión de servicios de atención al cliente. Estos proveedores de servicios solo tienen acceso a la información personal que necesitan para realizar sus funciones y están obligados a no utilizarla con ningún otro propósito.</p>
                    </li>
                    <li>
                        <p>Podemos divulgar información personal identificable si creemos que es necesario para cumplir con la ley, una orden judicial o un proceso legal.</p>
                    </li>
                    <li>
                        <p>También podemos divulgar información personal identificable si creemos que es necesario para investigar, prevenir o tomar medidas con respecto a actividades ilegales, fraude, situaciones que involucren amenazas potenciales a la seguridad física de cualquier persona, violaciones de nuestros términos de uso o como lo requiera la ley.</p>
                    </li>
                </ul>
                <h2>Enlaces a Otros Sitios Web</h2>
                <p class="out">Nuestro sitio web puede contener enlaces a otros sitios web que no están bajo nuestro control. No somos responsables de las prácticas de privacidad de esos sitios web. Te recomendamos que revises las políticas</p>


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