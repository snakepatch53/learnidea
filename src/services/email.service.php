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
        if (true) {
            include('./src/templates/general.pages/emailConfirmCode.php');
            $rs = EmailService::sendEmail(
                "snakepatch53@gmail.com",
                "Learnidea",
                "snakepatch53@gmail.com",
                "Harold Hernandez",
                "test",
                $html_content, //   $html_content es una variable que viene del template emailConfirmCode.php
            );
            echo json_encode($rs);
            return;
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

        // $imageContent = file_get_contents('https://learnidea.ideasoft.site/public/img/icon.png');
        // $imageAttachment = new \SendGrid\Mail\Attachment();
        // $imageAttachment->setContent(base64_encode($imageContent));
        // $imageAttachment->setType('image/png');
        // $imageAttachment->setFilename('icon.png');
        // $imageAttachment->setDisposition('inline');
        // $email->addContent("text/html", "This is an image");
        // $email->addAttachment($imageAttachment);

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
