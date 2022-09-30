<?php
require 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <hr>
        <div class="container">
            <div class="row">
                <div class="main_upper">
                    <h3>LOGIN</h3>
                    
                    <p>Login to make a purchase.</p>
                    <form method="post" action="login_submit.php">
                        <div >
                            <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div >
                            <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                        </div>
                        <div >
                            <input type="submit" value="Login" class="btn">
                        </div>
                    </form>
                Don't have an account yet? <a href="signup.php">Register</a></div>
            </div>
        </div>
    <br>
    <?php
    require 'footer.php';
    ?>
    </div>
</body>

</html>