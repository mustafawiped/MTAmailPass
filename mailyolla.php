<?php
	require_once('class.phpmailer.php');
    require_once('class.smtp.php');
    include( "mta_sdk.php" );
	$input = mta::getInput();
    $email = $input[0];
    $code = $input[1];
    $mail = new PHPMailer();
 
    $mail->IsSMTP();
    $mail->SMTPDebug = 4;
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'MAIL_GIRILECEK';
    $mail->Password = 'SIFRE_GIRILECEK';
    $mail->SetFrom('MAIL_GIRILECEK', 'Madde Gaming | Oyuncu Destek Ekibi');
	$mail->AddReplyTo('MAIL_GIRILECEK', 'Madde Gaming | Oyuncu Destek Ekibi');
	$mail->CharSet = 'UTF-8';
	
    $mail->Subject = 'Madde Gaming';
    $mail->Body    = 'Madde Gaming | Oyuncu Destek Ekibi
 
Selam. Görüyoruz ki şifreni unutmuşsun. Endişelenme sana yardım edeceğiz.
    
KURTARMA KODU: '.$code.'
 
Lütfen Yukarıdaki kodu, ('.$code.') Belirtilen yere yazın ardından yeni şifrenizi girin ve kaydet butonuna basın.
Böylelikle şifrenizi sıfırlamış olacaksınız. 

Saygılarımızla,
Madde Gaming | Oyuncu Destek Ekibi.
';
    $mail->AddAddress($email);
    $a = $mail->Send();
?>
