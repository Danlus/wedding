<?php
 
	$loggedIn = false;
    if (isset($_POST["user"]) && !empty($_POST["user"]) && isset($_POST["pass"]) && !empty($_POST["pass"])) {
        $user = $_POST["user"];
        $password = "ldc160814"; // This is the password to view images
        $value = $_POST["pass"];
 
        if (strtolower($value) == $password) { // Check the password matches the value
            $loggedIn = true;
            $to = 'd.cookplastering@sky.com';
            $subject = 'Who is looking at our pics';
            $body = 'This is an automated message. Please do no t reply.' . "\r\n" . $user;
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: gallery@danandlisa.co.uk';
            $alert = mail($to, $subject, $body, $headers);
        } else {
            $alert = "Incorrect password."; // Notice password does not match
        }
    }
?>
 
<!DOCTYPE html>
 
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="http://www.danandlisa.co.uk/css/wedding-css.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://www.danandlisa.co.uk/js/slider.js"></script>
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
                    <li class="active"><a href="gallery.php">Gallery</a></li>
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
           <form action="gallery.php" method="POST" id="field">
                <input type="text" id="user" placeholder="Your Name" name="user" autofocus><br/>
                <input type="password" id="pass" placeholder="Password" name="pass"><br/>
                <input type="submit" id="pass-login" name="submit" value="Enter Gallery">
            </form>
            <?php
                }
            ?>
            <div id="pictures">
                <div class="icon">
                    <section class="imgcont">
                        <?php
                        if ($loggedIn){
                        ?>
                        <h3 id="note">All image resolutions have been reduced, to get the full resolution image contact either Dan or Lisa with the image number(s). They are also available in black and white</h3>
                        <div class="gallery">
                            <ul>
                            </ul>
                        </div>
                        <?php
                            }
                        ?>
                    </section>
                </div>
            </div>
            <div id="jelly"><a href="http://www.jellyfishphoto.co.uk" target="_blank"><img src="http://www.danandlisa.co.uk/img/jellyfish.png"></a></div>
        </div>
            <!-- Add jQuery library -->
            <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
            <!-- Add fancyBox -->
            <link rel="stylesheet" href="http://www.danandlisa.co.uk/source/jquery.fancybox.css" type="text/css" media="screen" />
            <script type="text/javascript" src="http://www.danandlisa.co.uk/source/jquery.fancybox.pack.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var imglist = "";
                    if($(".gallery")) {
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
                        $(".gallery").html("<ul>" + imglist + "</ul>")
                        $(".fancybox").fancybox();
                    }
              });
            </script>
 
        </body>
</html>