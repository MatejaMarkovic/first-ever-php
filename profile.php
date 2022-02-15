<?php
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="CSS/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Home | Amplitudo</title>
</head>
<body >
    <div class="stars">
        <div class="twinkling">
            <div class="clouds">
            <div class="header">
                <h1 id="amplitudotxt">Amplitudo
                    <a id="hometxt" class="texthead" href="index.php">Home </a>
                    <a id="aboutustxt" class="texthead" href="aboutus.php">About Us </a>
                    <?php
                        if(isset($_SESSION["formuname"])){ 
                            echo '<a id="profiletxt" class="texthead" href="profile.php">Profile</a>';
                            echo '<a id="logintxt" class="texthead" href="Login/logout.php">Log Out </a>';
                        }
                        else if(isset($_SESSION["formemail"])){
                            echo '<a id="profiletxt" class="texthead" href="profile.php">Profile</a>';
                            echo '<a id="logintxt" class="texthead" href="Login/logout.php">Log Out </a>';
                        }
                        else{
                            echo '<a id="registertxt" class="texthead" href="registerpage.php">Register </a>';
                            echo '<a id="logintxt" class="texthead" href="loginpage.php">Log In </a>';
                        }
                    ?>
                </h1>
                <?php
                if(isset($_SESSION["formemail"])){
                    $formuname = $_SESSION["user"];
                    $formemail = $_SESSION["formemail"]; 
                    echo "<p class='loggedin'>You are logged in as $formuname</p>";
                    echo "<p class='emaildisplay'>Email: $formemail</p>";
                }
                else if(isset($_SESSION["formuname"])){
                    $formemail = $_SESSION['email'];
                    $formuname = $_SESSION["formuname"];
                    echo "<p class='loggedin'>You are logged in as $formuname</p>";
                    echo "<p class='emaildisplay'>Email: $formemail</p>";
                }
                ?>
                <?php

                $sql = "SELECT * FROM korisnik";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            echo "<div class='user-container'>";
                            if($row['status'] == 0){
                                echo "<img src='Images/profile".$id.".jpg'>";
                            }
                            else{
                                echo "<img src='Images/default.jpg'>";
                            }
                            echo "</div>";
                        }
                    }
                else{

                }

                echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
                <input type='file' name'file'>
                <button type='submit' name='submit'>UPLOAD</button>"
                ?>
                </form>
            </div>
            </div>
        </div>
    </div>

<script>
</script>
</body>
</html>