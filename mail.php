<?php 

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alex.mr007@mail.ru';                 // Наш логин
$mail->Password = 'w1812LPe6gjp7thcdUwM';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('alex.mr007@mail.ru', 'Guitar Shop');   // От кого письмо 
$mail->addAddress('dexp.kovrik@mail.ru');     // Add a recipient lupatuka9832062
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br><br> 
	Имя: ' . $name . ' <br>
	E-mail: ' . $email . ' <br>
	Сообщение: ' . $message . '';

if(!$mail->send()) {
    return false;
} else {
    header('location: index.php');
}

?>