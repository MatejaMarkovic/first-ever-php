<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="CSS/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Register | Amplitudo</title>
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
                            echo '<a id="registertxt" class="texthead" href="profile.php">Profile Page </a>';
                            echo '<a id="logintxt" class="texthead" href="logout.php">Log Out </a>';
                        }
                        else{
                            echo '<a id="registertxt" class="texthead" href="registerpage.php">Register</a>';
                            echo '<a id="logintxt" class="texthead" href="loginpage.php">Log In </a>';
                        }
                    ?>
                </h1>
                </div>

                <form action="Login/register.php" method="POST" class="formlogin" id="log_user" >
                    <input id="iUsername" type="text" name="username" class="form__input" placeholder="Username" required><br>

                    <input id="iFirst" type="text" name="first" class="form__input" placeholder="First Name" required><br>
                    
                    <input id="iLast" type="text" name="last" class="form__input" placeholder="Last Name" required><br>

                    <input id="iPassword" type="password" name="password" class="form__input" placeholder="Password" required><br>

                    <input id="iEmail" type="email" name="email" class="form__input" placeholder="E-Mail" required><br>

                    <input type="submit" value="Register" name="login" class="form__input" id="login__submit" >

                </form>
            </div>
        </div>
    </div>
<script>
</script>
</body>
</html>