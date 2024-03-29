<?php

class SendEmail extends App {

    private $recipient;
    private $name;
    private $lastname;
    private $email;
    private $emailBody;
    private $subject;

    public function getRecipient() {
        return $this->recipient;
    }

    public function setRecipient($recipient) {
        $this->recipient = $recipient;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmailBody() {
        return $this->emailBody;
    }

    public function setEmailBody($emailBody) {
        $this->emailBody = $emailBody;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function sendEmailCEPHMA() {
        try {
            require_once APPDIR::Libs . 'phpmailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;

            $mail->isSMTP();                                       // Set mailer to use SMTP
            $mail->Host = EMAIL::Host;                             // Specify main and backup SMTP servers
            $mail->SMTPAuth = EMAIL::SMTPAuth;                     // Enable SMTP authentication
            $mail->Username = EMAIL::Username;                     // SMTP username
            $mail->Password = EMAIL::Password;                     // SMTP password
            $mail->SMTPSecure = EMAIL::SMTPSecure;                 // Enable TLS encryption, `ssl` also accepted
            $mail->Port = EMAIL::Port;

            $mail->From = EMAIL::From;
            $mail->FromName = EMAIL::FromName;

            $mail->addAddress("infokodigo@kodigo.org","kodigo");
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = $this->subject;
            $mail->Body = $this->emailBody;

            $mailResult = "";
            if (!$mail->send()) {
                $mailResult .= 'Mensaje no pudo ser enviado.';
                $mailResult .= 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $mailResult = 'success';
            }
        } catch (Exception $e) {
            $mailResult .= "General Error.<br>" . $e->getMessage();
        }
        return $mailResult;
    }

    public function generateBody($bodyEmail) {
        $_helpers = new Helpers();
        try {
            $head = '<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="x-apple-disable-message-reformatting"> <title>'.GlobalValuesPage::TitleGlobal.'</title> <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500" rel="stylesheet">';

            $style = '<style>/* What it does: Remove spaces around the email design added by some email clients. */ /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */ html, body{margin: 0 auto !important; padding: 0 !important; height: 100% !important; width: 100% !important;}/* What it does: Stops email clients resizing small text. */ *{-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;}/* What it does: Centers email on Android 4.4 */ div[style*="margin: 16px 0"]{margin:0 !important;}/* What it does: Stops Outlook from adding extra spacing to tables. */ table, td{mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important;}/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */ table{border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; margin: 0 auto !important;}table table table{table-layout: auto;}/* What it does: Uses a better rendering method when resizing images in IE. */ img{-ms-interpolation-mode:bicubic;}/* What it does: A work-around for email clients meddling in triggered links. */ *[x-apple-data-detectors], /* iOS */ .x-gmail-data-detectors, /* Gmail */ .x-gmail-data-detectors *, .aBn{border-bottom: 0 !important; cursor: default !important; color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important;}/* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */ .a6S{display: none !important; opacity: 0.01 !important;}/* If the above doesn\'t work, add a .g-img class to any image in question. */ img.g-img + div{display:none !important;}/* What it does: Prevents underlining the button text in Windows 10 */ .button-link{text-decoration: none !important;}/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89 */ /* Create one of these media queries for each additional viewport size you\'d like to fix */ /* Thanks to Eric Lepetit @ericlepetitsf) for help troubleshooting */ @media only screen and (min-device-width: 375px) and (max-device-width: 413px){/* iPhone 6 and 6+ */ .email-container{min-width: 375px !important;}}</style>';
            $style2 = ' <style>/* What it does: Hover styles for buttons */ .button-td, .button-a{transition: all 100ms ease-in;}.button-td:hover, .button-a:hover{background: #555555 !important; border-color: #555555 !important;}/* Media Queries */ @media screen and (max-width: 480px){/* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */ .fluid{width: 100% !important; max-width: 100% !important; height: auto !important; margin-left: auto !important; margin-right: auto !important;}/* What it does: Forces table cells into full-width rows. */ .stack-column, .stack-column-center{display: block !important; width: 100% !important; max-width: 100% !important; direction: ltr !important;}/* And center justify these ones. */ .stack-column-center{text-align: center !important;}/* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */ .center-on-narrow{text-align: center !important; display: block !important; margin-left: auto !important; margin-right: auto !important; float: none !important;}table.center-on-narrow{display: inline-block !important;}/* What it does: Adjust typography on small screens to improve readability */ .email-container p{font-size: 17px !important; line-height: 22px !important;}}</style></head>';

            $body1 = '<body width="100%" bgcolor="#F1F1F1" style="margin: 0; mso-line-height-rule: exactly;"> <center style="width: 100%; background: #F1F1F1; text-align: left;"> <div style="max-width: 680px; margin: auto;" class="email-container"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;" class="email-container"> <tr> <td bgcolor="#007bff"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tr> <td style="padding: 30px 40px 30px 40px; text-align: center;"> <p style="margin: 0; color: #ffffff; font-weight:bold; font-size: 20px;">'.GlobalValuesPage::TitleGlobal.'</p> </td></tr></table> </td></tr>';
            $content = $bodyEmail;
            $body2 = ' <tr> <td bgcolor="#007bff"> <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"> <tr> <td style="padding: 40px 40px 10px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #ffffff !important; text-align: center; font-weight:normal;"> <p style="margin: 0;">'.GlobalValuesPage::TitleGlobal.' - '.GlobalValuesPage::CompanyGlobal.'</p></td></tr><tr> <td style="padding: 0px 40px 40px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #ffffff; text-align: center; font-weight:normal;"> <p style="margin: 0;">'.GlobalValuesPage::PhoneGlobal.' | '.GlobalValuesPage::AddressGlobal.' | '.GlobalValuesPage::EmailGlobal.'</p></td></tr></table> </td></tr></table> </div></center></body></html>';

            $template = $head . $style . $style2 . $body1 . $content. $body2;
        } catch (Exception $e) {
            $template = "General Error.<br>" . $e->getMessage();
        }

        return $template;
    }

    public function contenidoContacto($mensaje,$email,$asunto){
        $contenido = '';
        $_helpers = new Helpers();
        try{
            $contenido ='<tr>
                    <td bgcolor="#ffffff">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td style="padding: 30px 40px 30px 40px; text-align: center;">
                                    <img width="150px" src="'.$_helpers->linkTo('img/logoescuela.png', 'Assets').'" alt="alt_text" border="0" style="height: auto; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 40px 40px 20px 40px; text-align: left;">
                                    <h1 style="margin: 0; font-family: "Montserrat", sans-serif; font-size: 20px; line-height: 26px; color: #333333; font-weight: bold;">Contacto página web</h1>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0px 40px 20px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:normal;">
                                     <p style="margin: 0;">Asunto: ' .$asunto. '<br> Email: ' .$email.'<br> Mensaje: '.$mensaje.'</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>';
        } catch (Exception $e) {
            echo "General Error.<br>" . $e->getMessage();
        }

        return $contenido;
    }
}
