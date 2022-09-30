<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Store</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1>Change Password</h1>
                    <form method="post" action="setting_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Change">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>
    </div>
</body>

</html>