<?php
class SenderEmailAdapter
{
    private $api_key;

    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    public static function sendEmail(
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
