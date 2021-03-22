<?php

$company = $_POST["company"];
$country = $_POST["country"];
$name = $_POST["name"];
$lastname = $_POST["last-name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$body = '<!DOCTYPE html
            PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml" lang="es">
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <meta name="viewport" content="initial-scale=1.0" />
                    <meta name="format-detection" content="telephone=no" />
                    <title>
                    <!-- #{Subject} -->
                    </title>
                    <style type="text/css">
                    #outlook a {
                        padding: 0;
                    }
                
                    body {
                        width: 100% !important;
                        -webkit-text-size-adjust: 100%;
                        -ms-text-size-adjust: 100%;
                        margin: 0;
                        padding: 0;
                    }
                
                    .ExternalClass {
                        width: 100%;
                    }
                
                    .ExternalClass,
                    .ExternalClass span,
                    .ExternalClass font,
                    .ExternalClass td,
                    .ExternalClass div {
                        line-height: 100%;
                    }
                
                    .ExternalClass p {
                        line-height: inherit;
                    }
                
                    #body-layout {
                        margin: 0;
                        padding: 0;
                        width: 100% !important;
                        line-height: 100% !important;
                    }
                
                    img {
                        display: block;
                        outline: none;
                        text-decoration: none;
                        -ms-interpolation-mode: bicubic;
                    }
                
                    a img {
                        border: none;
                    }
                
                    table td {
                        border-collapse: collapse;
                    }
                
                    table {
                        border-collapse: collapse;
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                    }
                
                    a {
                        color: orange;
                        outline: none;
                    }
                    </style>
                </head>

                <body id="body-layout" style="background: #406c8d;">
                    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td align="center" valign="top" style="padding: 0 15px;background: #406c8d;">
                        <table align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                            <td height="15" style="height: 15px; line-height:15px;"></td>
                            </tr>
                            <tr>
                            <td width="600" align="center" valign="top" style="border-radius: 4px; overflow: hidden; box-shadow: 3px 3px 6px 0 rgba(0,0,0,0.2);background: #dde1e6;">
                                <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center" valign="top" style="border-top-left-radius: 4px; border-top-right-radius: 4px; overflow: hidden; padding: 0 20px;background: #302f35;">
                                        <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td height="30" style="height: 30px; line-height:30px;"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 32px; mso-line-height-rule: exactly; line-height: 32px; font-weight: 400; letter-spacing: 1px;color: #ffffff;">
                                            Nuevo contacto web</td>
                                        </tr>
                                        <tr>
                                            <td height="30" style="height: 30px; line-height:30px;"></td>
                                        </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top" style="padding: 0 20px;">
                                        <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td height="30" style="height: 30px; line-height:30px;"></td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 22px; font-weight: 400;color: #302f35;">
                                                    Hola, alguien te dejó un mensaje en Coporación FischWelt.com
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20" style="height: 20px; line-height:20px;"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td align="center" valign="top" style="background: #d1d5da;">
                                                                <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td height="1" style="height: 1px; line-height:1px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top" style="background: #e4e6e9;">
                                                    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td height="2" style="height: 2px; line-height:2px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" style="height: 20px; line-height:20px;"></td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 24px; mso-line-height-rule: exactly; line-height: 30px; font-weight: 700;color: #302f35;">
                                        '. $company .'
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20" style="height: 20px; line-height:20px;"></td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                            <td width="110" align="left" valign="top" style="padding: 0 10px 0 0;font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;font-weight: 700;">
                                                                Correo:
                                                            </td>
                                                            <td align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;">
                                                                '. $email .'
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td width="110" align="left" valign="top" style="padding: 0 10px 0 0;font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;font-weight: 700;">
                                                                Nombre: 
                                                            </td>
                                                            <td align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;">
                                                            '. $name .' '. $lastname .'
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="110" align="left" valign="top" style="padding: 0 10px 0 0;font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;font-weight: 700;">
                                                                Telefono: 
                                                            </td>
                                                            <td align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;">
                                                            '. $phone .'
                                                            </td>
                                                        </tr>
                                                            <!-- #{EndInfo} -->
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="12" style="height: 12px; line-height:12px;"></td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top" style="font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;font-weight: 700;">
                                                    Mensaje: 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top"
                                                style="font-family: Arial, sans-serif; font-size: 14px; mso-line-height-rule: exactly; line-height: 20px; font-weight: 400;color: #302f35;">
                                                    '. $message .'
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td height="40" style="height: 40px; line-height:40px;"></td>
                                        </tr>
                                    </table>
                                    </td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                            <tr>
                            <td height="20" style="height: 20px; line-height:20px;"></td>
                            </tr>
                            <tr>
                            <td width="600" align="center" valign="top">
                                <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center" valign="top"
                                    style="font-family: Arial, sans-serif; font-size: 12px; mso-line-height-rule: exactly; line-height: 18px; font-weight: 400;color: #a1b4c4;">
                                    Este email es generado automaticamente, porfavor no responder.</td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                            <tr>
                            <td height="20" style="height: 20px; line-height:20px;"></td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </body>
                
            </html>';



            use PHPMailer\PHPMailer\PHPMailer;

            use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// $formConfigFile = file_get_contents("rd-mailform.config.json");

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



//Load Composer's autoloader
// require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '56b5436d8714ad';                       //SMTP username
    $mail->Password   = '9909bb8a13dac7';                       //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 2525;                                   //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('jmarinas@corpfischwelt.com', 'Web mail');
    $mail->addAddress('jmarinas@corpfischwelt.com', 'Juan Mariñas');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nuevo contacto web';
    $mail->Body    = $body;

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script> alert("El correo se envio correctamente");
            </script>';
    header("Location:/");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
