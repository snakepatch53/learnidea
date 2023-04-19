<?php
class EmailService
{
    public static function sendCode($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $result = [
            'status' => 'error',
            'message' => 'Faltan datos para ingresar el slide',
            'response' => false,
            'data' => null
        ];
        if (isset(
            $_POST['user_name'],
            $_POST['user_email'],
        )) {
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $rs = EmailService::sendEmail(
                "snakepatch53@gmail.com", // estos datos hay que traerlos de la base de datos
                "Learnidea", // estos datos hay que traerlos de la base de datos
                $user_email,
                $user_name,
                "Confirmacion de correo electronico",
                getEmailConfirmCode($DATA, $user_name), //   $html_content es una variable que viene del template emailConfirmCode.php
            );
            $result = [
                'status' => 'success',
                'message' => 'Se ha enviado el correo de confirmación',
                'response' => $rs,
                'data' => null
            ];
        }
        echo json_encode($result);
    }

    private static function sendEmail(
        string $emisor_email,
        string $emisor_name,
        string $receptor_email,
        string $receptor_name,
        string $subject,
        string $content,
        string $attachment = null
    ) {
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom($emisor_email, $emisor_name);
        $email->setSubject($subject);
        $email->addTo($receptor_email, $receptor_name);
        $email->addContent("text/html", $content);
        if ($attachment) {
            $email->addAttachment($attachment);
        }

        $sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);
        try {
            $response = $sendgrid->send($email);
            // echo "<pre>";
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
            // echo "</pre>";
            return true;
        } catch (Exception $e) {
            // echo 'Caught exception: ' . $e->getMessage() . "\n";
            return false;
        }
    }
}
