<?php
// namespace Helper;

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
require __DIR__.'/composer.lock';
require __DIR__.'/composer.json';
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailHelper
{
    private PHPMailer $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER; // Uncomment for debugging

        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPDebug=0;
        // $this->mail->isHTML(true);

        $this->mail->Host = "smtp.example.com";
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = 587;

        $this->mail->Username = "tarikelyatim2006@gmail.com";
        $this->mail->Password = "jmwl hodk gege tapz";
    }

    public function setUserName($name)
    {
        $this->mail->Username=$name;
    }
    /**
     * Configure sender details
     */
    public function setSender(string $email, string $name): void
    {
        $this->mail->setFrom($email, $name);
    }

    /**
     * Add recipient
     */
    public function addRecipient(string $email, string $name = ""): void
    {
        $this->mail->addAddress($email, $name);
    }

    /**
     * Set subject and body
     */
    public function setContent(string $subject, string $body): void
    {
        $this->mail->Subject = $subject;
        $this->mail->Body = $body;
    }

    /**
     * Send the email
     */
    public function send(): bool
    {
        try {
            return $this->mail->send();
            } catch (\Exception $e) {
                error_log("Mailer Error: " . $e->getMessage());
                error_log("Mailer Error: " . $this->mail->ErrorInfo);
                return false;
                }
                }
                }
                