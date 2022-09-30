<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Vehicle Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <style>
        img {
            width: 250px;
            height: 200px;
        }
    </style>
</head>

<body>
    <div id="bannerImage">
        <div class="container">
            <center>
                <div id="store_name">
                    <h1>The Vehicle Store</h1>
                </div>
                <div id="bannerContent">
                    <h1>We provide excellent services .</h1>
                    <p>Flat 40% OFF on all Special Vehicles.</p>
                    <a href="products.php" class="btn">Shop Now</a>
                </div>
            </center>
        </div>

    </div>

    <div class="row">
        <div style="flex-basis: 30%;">
            <center>
                <a href="products.php">
                    <img src="img/car1.jfif" alt="Camera">
                </a>

                <p id="autoResize">Cars</p>
                <p>Choose among the best available in the world.</p>
        </div>
        </center>
        <div style="flex-basis: 30%;">
            <center>
                <a href="products.php">
                    <img src="img/car2.jfif" alt="Watch">
                </a>

                <p id="autoResize">Light Vehicle</p>
                <p>Select from the best brands.</p>
        </div>
        </center>
        <div style="flex-basis: 30%;">
            <center>
                <a href="products.php">
                    <img src="img/bike3.jfif" alt="Shirt">
                </a>


                <p id="autoResize">Bike</p>
                <p>Our big collection of Bikes.</p>
        </div>
        </center>
    </div>

    <?php
    require 'footer.php';
    ?>

</body>

</html>