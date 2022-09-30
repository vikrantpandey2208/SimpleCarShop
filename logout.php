<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div class="heading_top_logout">
        <p>
            You have been logged out.
            <a href="login.php">Login again.</a>
        </p>
    </div>

    <?php
    require 'footer.php';
    ?>
    </div>
</body>

</html>