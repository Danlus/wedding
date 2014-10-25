<?php
	$user = "user";

	$to = 'dan.s.cook@hotmail.com, d.cookplastering@sky.com';
    $subject = 'Who is looking at our pics';
    $body = 'This is an automated message. Please do no t reply. \n\n $user';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: rsvp@danandlisa.com';
        (echo mail(to, subject, message));
    //mail($to, $subject, $body, $headers); 
?>