<?php
session_start();
require 'connection.php';
require 'check_if_added.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Vehicle Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div class="container">
        <div class="heading_top">
            <h1>Welcome to our Vehicle Store!</h1>
        </div>
    </div>
    <?php
    require 'header.php';
    ?>

    <!-- ========================Vehicle from The database=============== -->
    <?php

    $sql = 'select * from items order by id desc';
    $result = mysqli_query($con, $sql);
    if (!empty($result)) {
    ?>

    <div>
        <div class="row">

            <?php
            $counter=13;
            while ($row = $result->fetch_assoc()) {
                $counter++;
            ?>
        <div style="flex-basis: 30%;">
            <center>
                <a href="cart.php">
                    <img src=<?php echo "img/{$row['image']} alt={$row['name']}" ?>>
                </a>
                <div>
                    <h3><?php echo $counter ?></h3>
                    <h3><?php echo $row["name"] ?></h3>
                    <p>&#8377 <?php echo $row["price"]." lakh" ?></p>
                    <?php if (!isset($_SESSION['email'])) {  ?>
                        <p><a href="login.php" role="button" class="btn">Buy Now</a></p>
                        <?php
                    } else {
                        if (check_if_added_to_cart($counter)) {
                            echo '<a href="#" class=btn>Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart_add.php?id=<?php echo $counter ?>" class="btn" name="add" value="add">Add to cart</a>
                    <?php
                        }
                    }
                    ?>

                </div>
            </center>
        </div>

        <?php
            }
            echo "</div>";
        }
        
        ?>
 <?php
    require 'footer.php';
    ?>
</body>

</html>