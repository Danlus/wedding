<?php
	$name = $_POST['user'];
	$to = 'dan.s.cook@hotmail.com, griffin.lisa@sky.com';
    $subject = 'Returned rsvp forms';
    $body = 'Name:<br/>'.$name.'<br/><br/>rsvp:<br/>'.$rsvp.'<br/><br/>Dietary:<br/>'.$dietary.'<br/><br/>DJ:<br/>'.$dj;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: rsvp@danandlisa.com';
    if(mail($to, $subject, $body, $headers)) {
        $Sent = true;
    }else{
        $Sent = false;
    }

?>