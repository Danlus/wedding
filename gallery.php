<?php
	$user = $_POST['user'];
	$to = "dan.s.cook@hotmail.com, d.cookplastering@sky.com";
    $subject = "Who is looking at our pics";
    $body = "This is an automated message. Please do not reply. \n\n $user";
    mail($to, $subject, $body,); 
?>