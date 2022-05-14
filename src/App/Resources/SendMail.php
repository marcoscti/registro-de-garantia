<?php
namespace App\Resources;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMail
{
    public function sendEmail()
    {
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function


        //Load Composer's autoloader


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'user@example.com';                     //SMTP username
            $mail->Password   = 'secret';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body = utf8_decode("
            <body style='background-color:#EEEEEE'>
            <table style='background-color:#fff; margin-top:40px; border-top:7px solid #E03A3E;'  width='700' border='0' align='center' cellspacing='0'>
              <tr valign='baseline'>
                <td style='padding: 40px 5px 15px 45px;' width='60%' align='right' valign='middle'><img src='https://www.garantiaseculus.com.br/sempreseculus/assets/img/logos-sirius/logo-xx.png' width='204' height='37'></td>
                <td style='padding: 30px 5px 15px 15px; font-size: 15px; font-family: arial; color:#404040;' width='45%' align='left' valign='middle'></td>
              </tr>
            </table>
   
            <table style='background-color:#fff' width='700' border='0' align='center' cellspacing='0'>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: center; padding: 30px 5px 40px 15px; font-size: 13px; font-family: arial; color:#404040; line-height: 0.4;' >Um novo registro de garantia foi enviado pelo site Sempre Seculus.
                    <p>Dados do formulário enviado pelo cliente:</p></td>
                </tr>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 8px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>Assunto: </strong>Registro de garantia</td>
                  </tr>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 8px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>Nome: </strong>{revNome} {revNome2}</td>
                  </tr>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 8px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>Email: </strong>{revEmail}</td>
                </tr>
                <tr valign='baseline'>
                  <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 8px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>Telefone de contato: </strong>{revDdd} - {revTel}</td>
                </tr>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 8px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>CPF do cliente: </strong>{revCpf}</td>
                </tr>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 8px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>Data da compra: </strong>{clienteDataCompra}</td>
                </tr>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 8px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>Referência do Relógio: </strong>{revRefRel}</td>
                </tr>
                <tr valign='baseline'>
                    <td colspan='3' align='left' valign='middle' style='text-align: left; padding: 5px 30px 30px 30px; font-size: 13px; font-family: arial; color:#404040; line-height: 1.2;' ><strong>Número da nota fiscal: </strong>{revNumNf}</td>
                </tr>
              </table>
           
              <table style='background-color:#fff; margin-bottom:50px; padding-top:60px' width='700' border='0' align='center' cellspacing='0'>		
                    <tr valign='baseline'>
                      <td colspan='3' align='left' valign='middle' style='text-align: center; padding: 20px 10px 20px 10px; font-size: 10px; font-family: arial; color:#404040; line-height: 1.2; border-top:#999 1px solid;' ><p>Essa mensagem foi enviada automaticamente, não responda.</br> Não copie ou divulgue essas informações e se você não é o destinatário autorizado a visualizá-las está passível de punições em leis federais.</p></td>
                    </tr>		
              </table>
            </body>
          ");

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
