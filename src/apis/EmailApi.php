<?php
class EmailApi
{
    private senderEmailAdapter $senderAdapter;

    function __construct()
    {
        $this->senderAdapter = new SenderEmailAdapter($_ENV['SENDGRID_API_KEY']);
    }

    function sendConfirmationEmail(
        string $user_email,
        string $user_code,
        string $user_shortname
    ) {
        // TODO: Estos datos debo sacarlos de la base de datos
        $web_page_name = "Learnidea";
        $emisor_email = "snakepatch53@gmail.com";
        $emisor_name = "Learnidea";

        // Estos datos vienen del formulario de registro
        $receptor_email = $user_email;
        $receptor_name = $user_shortname;
        $subject = "Confirmacion de registro";


        include("./src/templates/general.pages/emailConfirmCode.php");
        $content = getEmailConfirmCode($web_page_name, $_ENV['HTTP_DOMAIN'], $user_code, $user_shortname);

        return $this->senderAdapter->sendEmail(
            $emisor_email,
            $emisor_name,
            $receptor_email,
            $receptor_name,
            $subject,
            $content
        );
    }
}
