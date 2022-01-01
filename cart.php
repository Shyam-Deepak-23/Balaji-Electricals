<?php
    session_start();
    require('config.php');
    // $sql = "SELECT * FROM cart where email = $_SESSION['email']";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balaji Elecricals | Cart</title>
</head>

<script>
    function place(){
        alert("Order Placed Successfully");
    }
</script>
<body>

<!-- Header Section -->

<header>
        <img src="Images/Logo2.png" alt="Logo">
        <nav id="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <div>

            <button class="btnn"><a href="cart.php">Cart</a></button>
            <!-- <button class="btnn"><a href="login.php">Sign In</a></button> -->
            <button class="btnn"><a href="logout.php">Logout</a></button>
        </div>

       
    </header>

    
    <div class="container">
        <div class="row">
            <h2>Shopping Cart</h2>
            <div class="col-md-8">
                <div style="margin:5%">

                    <?php
                        $email = $_SESSION['email'];
                        $sql = "Select * from cart where email = '$email'";
                        $result = $conn -> query($sql);
                        $total_price = 0;
                        echo '                        
                            <table border="0" width="70%" style="padding:20%;">
                                <tr border="2"> 
                                    <th> Pid </th>
                                    <th> Pname </th>
                                    <th> Price </th>
                                </tr>';
                        while($row = $result -> fetch_assoc())
                        {
                            $total_price = $row['price'] + $total_price;
                            echo "
                                <tr> 
                                    <td> ".$row['pid']." </td>
                                    <td>".$row['pname']." </td>
                                    <td>".$row['price']." </td>
                                </tr>
                            ";  
                        }
                        echo "</table>";
                        $num_of_rows = mysqli_num_rows($result);
                    
                    ?>
                </div>
                <div class="container" style="display:flex;">

                    <form action="emptyCart.php"  style="margin:5%;">
                        <button class="btn btn-primary">Empty Cart</button>
                    </form>
                    <form action="products.php"  style="margin:5%;">
                        <button class="btn btn-primary">Add More Items</button>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item" style="text-align : center">Your Order</li>
                    <li class="list-group-item">Total items : <?php echo $num_of_rows ?> </li>
                    <li class="list-group-item">Total Cost  : <?php echo $total_price ?></li>
                    <li class="list-group-item">
                        <button class="btn btn-primary" style="margin:auto" onclick="place()">Place Your Order</button>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </div>
</body>
</html>