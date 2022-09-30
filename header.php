<nav>
    <div class="container">
        <div class="heading_top">            
            <a href="index.php">Vehicle Store</a>
        </div>

        <div>
        <center>
            <ul>
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                    <a href="cart.php" class="header_btn"> Cart</a>
                    <a href="settings.php" class="header_btn"> Settings</a>
                    <a href="products.php" class="header_btn"> Shop</a>
                    <a href="logout.php" class="header_btn">Logout</a>
                <?php
                } else {
                ?>
                    <a href="signup.php" class="header_btn"> Sign Up</a>
                    <a href="login.php" class="header_btn"> Login</a>
                    <a href="products.php" class="header_btn"> Shop</a>
                <?php
                }
                ?>

            </ul>
        </center>
        </div>
    </div>
</nav>