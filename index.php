<?php
    require('config.php');
    session_start();
    // if(!isset($_SESSION['email']))
    // {
    //     header('Location : /login.php');
    // }

    
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balaji Electricals</title>
    <style>
        a{
            color:black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Header Section -->

    <header>
        <img src="Images/Logo2.png" alt="Logo">
        <nav id="navbar">
            <ul>    
                <li><a href="#" class="active">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
        </nav>
        <div>
        <?php 
            if(isset($_SESSION['email'])){
                echo '<button class="btnn"><a href="cart.php">Cart</a></button>';
                echo '<a class="nav-item nav-link space text-success" href="#">Welcome '.$_SESSION['name'].'</a>';
                echo '<button class="btnn"><a href="logout.php">Logout</a></button>';
            }
            else{
                echo '<button class="btnn"><a href="login.php">SignIn</a></button>';
            }
        ?>
        </div>
    </header>

    <!-- Main Section -->

    <div class="container1">
        <!-- <img src="Images/bulb.jfif" alt="Lamps"> -->
        <div class="small-container">
            <p>A wide variety of Lamps</p>
            <button><a href="products.php"> Order Now!</a></button>
        </div>
    </div>

    <!-- Other Products Section-->

    <h2 id="productDesc">Other Products</h2>


    <div id="otherProducts">
        <div class="box box1">
            <h4>Fans</h4>
            <img src="Images/fan6.jfif" alt="Fans">
            <p>Find every variety of fans here!</p>
            <button class="btnn"><a href="products.php"> Shop Now</a></button>
        </div>

        <div class="box box2">
            <h4>Switches</h4>
            <img src="Images/switch.jfif" alt="Switch">
            <p>Decorate your house with stunning accessories</p>
            <button class="btnn"><a href="products.php"> Shop Now</a></button>
        </div>
            
        <div class="box box3">
            <h4>Wires</h4>
            <img src="Images/wires.jfif" alt="Wires">
            <p>Quality Wires. Quality Time</p>
            <button class="btnn"><a href="products.php"> Shop Now</a></button>
        </div>
    </div>

    
    



</body>
</html>