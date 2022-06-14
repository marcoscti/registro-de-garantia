<?php

namespace App\Resources;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EnviaEmail
{
  public static function sendEmail($remetente, $para, $assunto, $mensagem)
  {

    $mail = new PHPMailer(true);
    try {

      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->isSMTP();
      $mail->isHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->Host = 'smtp.example.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->Username = 'example@email.com';
      $mail->Password = '******';
      $mail->setFrom($mail->Username, $remetente ?? "Seculus");
      $mail->SMTPSecure = 'STARTTLS';
      $mail->addEmbeddedImage('url', 'logo');

      $mail->Subject = $assunto;
      $mail->Body = $mensagem;
      $mail->addAddress($para);
      $mail->send();
      echo 'Email Enviado';
    } catch (Exception $e) {
      echo "A mensagem não pôde ser enviada: {$mail->ErrorInfo}";
    }
  }
}
