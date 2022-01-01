<?php
session_start();
require('config.php');

if(isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    $sql = "Delete from cart where email = '$email'";
    if($conn -> query($sql))
    {
        // echo "<script>alert('Cart has been emptied')</script>";
        // echo "<script>alert(<a href='products.php'> Click to add items to the cart </a>);</script>";
    }
    else{
        echo "Something Went Wrong";
    }
    header('location: cart.php');
}




?>