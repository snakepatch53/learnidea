<?php
function getEmailConfirmCode(string $webpage_name, string $http_domain, string $user_code, string $user_name)
{
    ob_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Confirmación de correo electrónico - <?= $webpage_name ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                text-align: center;
            }

            .container {
                margin: 0 auto;
                max-width: 600px;
                padding: 20px;
            }

            h1 {
                color: #1292ee;
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 20px;
                text-align: center;
                font-size: 1.5rem;
            }

            p {
                margin-bottom: 20px;
                text-align: center;
                font-size: 0.9rem;
            }

            .btn {
                background-color: #1292ee;
                color: #ffffff !important;
                letter-spacing: 1px;
                border: none;
                border-radius: 4px;
                display: inline-block;
                font-size: 1rem;
                font-weight: bold;
                padding: 12px 24px;
                text-align: center;
                text-decoration: none;
                transition: background-color 0.3s;
                text-decoration: none;
            }

            .btn:hover {
                opacity: 0.9;
            }

            .footer {
                background-color: #1292ee;
                color: #ffffff;
                font-size: 14px;
                padding: 10px;
            }

            .imagen {

                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="imagen">
                <img src="https://learnidea.ideasoft.site/public/img/logo_dark.png" alt="Learnidea" width="100" height="100" />
            </div>
            <h1>Bienvenido a Learnidea</h1>
            <p>Hola <b><?= $user_name ?></b>, gracias por registrarse en Learnidea, una institución de educación mediante cursos presenciales y virtuales. Para continuar con su registro, por favor confirme su dirección de correo electrónico haciendo clic en el siguiente enlace:</p>
            <p><a href="<?= $http_domain ?>confirmacion/<?= $user_code ?>" class="btn">Confirmar correo electrónico</a></p>
            <p>Si no ha solicitado este registro, puede ignorar este correo electrónico.</p>
        </div>
        <div class="footer">
            <p>Este correo electrónico fue enviado por Learnidea, una institución de educación mediante cursos presenciales y virtuales.</p>
        </div>
    </body>

    </html>

<?php
    return ob_get_clean();
}
?>