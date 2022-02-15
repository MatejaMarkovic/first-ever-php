<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="CSS/aboutus.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>About Us | Amplitudo</title>
</head>
<body>
    <div class="stars">
        <div class="twinkling">
            <div class="clouds">
                <div class="header">
                <h1 id="amplitudotxt">Amplitudo
                    <a id="hometxt" class="texthead" href="index.php">Home </a>
                    <a id="aboutustxt" class="texthead" href="aboutus.php">About Us </a>
                    <?php
                        if(isset($_SESSION["formuname"])){
                            echo '<a id="registertxt" class="texthead" href="profile.php">Profile</a>';
                            echo '<a id="logintxt" class="texthead" href="Login/logout.php">Log Out </a>';
                        }
                        else if(isset($_SESSION["formemail"])){
                            echo '<a id="registertxt" class="texthead" href="profile.php">Profile</a>';
                            echo '<a id="logintxt" class="texthead" href="Login/logout.php">Log Out </a>';
                        }
                        else{
                            echo '<a id="registertxt" class="texthead" href="registerpage.php">Register</a>';
                            echo '<a id="logintxt" class="texthead" href="loginpage.php">Log In </a>';
                        }
                    ?>
                </h1>
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=19.245246648788456%2C42.440865788932356%2C19.24775719642639%2C42.442203849777&amp;layer=mapnik" style="border: 1px solid black;border-radius: 15px;width: 15%;margin-left: 82%;margin-top: 17%;">
                    </iframe><br/>
                    <small><a href="https://www.openstreetmap.org/#map=19/42.44153/19.24650"></a></small>
                </div>
                <div class="text">
                    <p></p>
                </div>

            </div>
        </div>
    </div>

<script>
</script>
</body>
</html>