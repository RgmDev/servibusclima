<?php

	$name = trim(stripslashes($_POST['name'])); 
    $email = trim(stripslashes($_POST['email'])); 
    $subject = trim(stripslashes($_POST['subject'])); 
    $phone = trim(stripslashes($_POST['phone'])); 
    $message = trim(stripslashes($_POST['message']));
		
	$email_from = $email;
    $email_to = 'info@servibusclima.com';

    $body = 'Nombre: '.$name."\n\n".'E-mail: '.$email."\n\n".'Teléfono: '.$phone."\n\n".'Mensaje: '.$message."\n\n";		
    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
	
	header('Location: contacto.html');
	
?>