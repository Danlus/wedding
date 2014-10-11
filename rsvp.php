<?php 
	$name = $_POST["name"]; 
	$rsvp = $_POST["rsvp"];
	$dietary = $_POST["dietary"];
	$dj = $_POST["dj"]; 
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

<!DOCTYPE html>

<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="css/wedding-css.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/slider.js"></script>
		<title>Dan &amp; Lisa</title>
	</head>
	
	<body>		
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="party.html">Wedding Party</a></li>
					<li><a href="venue.html">Venue</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li class="active" id="last"><a href="rsvp.html">R.S.V.P</a></li>
				</ul>
			</nav>
			
	<div class="namebar">
		<div id="dan">Daniel<br>Cook</div>
			<span id="and">&amp;</span>
				<div id="lisa">Lisa<br>Griffin</div>
	</div>
		<script>
			$(document).ready(function(){
				$("input").focus(function(){
					$(this).css("background-color","#cccccc");
				});
					$("input").blur(function(){
						$(this).css("background-color","#ffffff");
					});
			});
		</script>
	<div class="main">
		<div id="rsvp">
			<?php
				if ($Sent){
			?>
			<h1>Thank You</h1>
			<a href="index.html">Continue Browsing</a>
			<?php
				}else{
			?>
			<h1>Oops</h1>
			<p>Something went wrong, try again!</p>
			<a href="rsvp.html">Try Again</a>
			<?php 
				}
			?>
		</div>
			
			<div class="clearfix"></div>
		
	</div>
	<script>
		$(document).ready(function() {
			$("#last").click(function(){
  				alert("This page will be available once the invites have been sent");
  			});	
		});
	</script>	
</body>

</html>