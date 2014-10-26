<?php
    ini_set('display_errors',1);  
    error_reporting(E_ALL);

	$loggedIn = false;
    if (isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"])){
        $user = $_POST["user"];
        $password = "ldc160814"; // This is the password to view images
        $value = $_POST["pass"];

        if ($value == $password) { // Check the password matches the value
            $value = strtolower();
            $loggedIn = true;
            $to = 'dan.s.cook@hotmail.com';
            $subject = 'Who is looking at our pics';
            $body = 'This is an automated message. Please do no t reply. \n\n ' . $user;
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: rsvp@danandlisa.com';
            $alert = mail($to, $subject, $body, $headers);
        } else {
            $alert = "Incorrect password."; // Notice password does not match
        }
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/wedding-css.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <title>Dan &amp; Lisa</title>
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
        <body>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="party.html">Wedding Party</a></li>
                    <li><a href="venue.html">Venue</a></li>
                    <li class="active"><a href="gallery.html">Gallery</a></li>
                    <li id="last"><a href="rsvp.html">R.S.V.P</a></li>
                </ul>
            </nav>

    <header class="namebar">
        <div id="dan">Daniel<br>Cook</div>
            <span id="and">&amp;</span>
                <div id="lisa">Lisa<br>Griffin</div>
    </header>
        <div class="main">

           <?php 
            if (!$loggedIn){
            ?>
           <form action="" method="POST" id="field">
                <input type="text" id="user" placeholder="Your Name" name="user" autofocus><br/>
                <input type="password" id="pass" placeholder="Password" name="pass"><h6 class="fh">(complete form using lower case)</h6><br/>
                <input type="submit" id="pass-login" name="submit" value="Enter Gallery">
            </form>
            <?php
                }
            ?>
            <div id="pictures">
                <div class="icon">
                    <section class="imgcont">
                        <div class="gallery">
                            <ul>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div id="jelly"><a href="http://www.jellyfishphoto.co.uk" target="_blank"><img src="img/jellyfish.png"></a></div>
        </div>
            <!-- Add jQuery library -->
            <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
            <!-- Add fancyBox -->
            <link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />
            <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
            <?php
            if ($loggedIn){
            ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    var heading = '<h3 id="note">All image resolutions have been reduced, to get the full resolution image contact either Dan or Lisa with the image number(s). They are also available in black and white</h3>
            ';
                    var imglist = "";
                    for(var i = 1; i < 437; i++){
                        var ii = i;
                        if (ii < 100){
                            if (ii <10){
                                ii = "0" + ii
                            }
                            ii = "0" + ii
                        }
                        imglist += '<li><a class="fancybox" rel="group" href="img/slider_img/lg/'+ii+'.jpg" title="Image Number '+ii+'"><img src="img/slider_img/tn/m_'+ii+'.jpg" height="100px" width="100px" title="'+ii+'" alt="our wedding"></a></li>';
                    }
                    $(".gallery").html(heading + "<ul>" + imglist + "</ul>")
                    $(".fancybox").fancybox();
              });
            </script>
            <?php
                }
            ?>

        </body>
</html>