<?php
session_start();
$conn = mysqli_connect("localhost","root", "", "bep");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

  <script>
      function addcart()
      {
        alert("Your item has been added to the cart.");
      }
      function noaddcart()
      {
        alert("Please login to Continue.");
      }

    </script>


<style>
    header{
        background-color: rgb(26, 80, 119);
    }

    h3{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2%;
    }

    a{
        color:rgb(204, 196, 196);
    }

    a:hover{
        color: black;
    }

    .card_space{
      margin: 0px 5%;
    }

    body{
      background:white;
      /* background-color: rgb(53, 83, 119, 0.3); */
    }

    
</style>
<body>

    <!-- Header Section -->

    <header>
        <img src="Images/Logo2.png" alt="Logo">
        <nav id="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
            </ul>
        </nav>

        <div style="display:flex; justify-content : center; align-items :center;">
        <?php 
                    if(isset($_SESSION['email'])){
                        echo '<button class="btnn"><a href="cart.php">Cart</a></button>';
                        
                        echo '<a class="nav-item nav-link space text-dark" href="#">Welcome '.$_SESSION['name'].'</a>';
                        
                        echo '<button class="btnn"><a href="logout.php">Logout</a></button>';
                    } else {
                        echo '<button class="btnn"><a href="login.php">SignIn</a></button>';
                        
                    }
                ?>
        </div>



    </header>

    <!-- Product Section -->
    <h3>LED Lightning</h3>
    <div class="container" style="display: flex;">

        <div class="card card_space" style="width: 18rem;">
            <img src="Images/lamp1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">9 Watts LED Lamp</h5>
              <p class="card-text">The most common and appropriate illuminative lamp for your workplace.</p>
              <form action="addcart.php" method="get">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="101" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="101" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='101'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/lamp2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">20 Watts LED Batten</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
                <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="102" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="102" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='102'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
             
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/lamp4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">10 Watts T-Bulb</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="103" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="103" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='103'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    </div>

    <hr>

    <h3>Fans</h3>
    <div class="container" style="display: flex;">

        <div class="card card_space" style="width: 18rem;">
            <img src="Images/fan3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">48" Crompton Ceiling Fan</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="201" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="201" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='201'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/fan4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">16" Highspeed Table Fan</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="202" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="202" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
        </form>

        <?php $sql="select price from product where pid='202'";
        $result=mysqli_query($conn,$sql);
        $a=mysqli_fetch_array($result);
        echo "Rs.".$a['price'];
        ?>
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/fan5.jfif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">9" Exhaust Fan</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="203" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="203" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='203'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    </div>

    <hr>

    <h3>Switches</h3>
    <div class="container" style="display: flex;">

        <div class="card card_space" style="width: 18rem;">
            <img src="Images/switch1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GM Four Five Switches</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="301" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="301" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='301'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/switch2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Anchor Penta Modular</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="302" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="302" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='302'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/switch3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Legrand Arteor</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="303" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="303" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='303'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    </div>

    <hr>

    <h3>Wires</h3>
    <div class="container" style="display: flex;">

        <div class="card card_space" style="width: 18rem;">
            <img src="Images/wire4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Finolex copper wire 1.0 sq.mm</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="401" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="401" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='401'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/wire5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Speaker wire</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="402" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="402" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>

      <?php $sql="select price from product where pid='402'";
      $result=mysqli_query($conn,$sql);
      $a=mysqli_fetch_array($result);
      echo "Rs.".$a['price'];
      ?>
            </div>
          </div>
    
        <div class="card card_space" style="width: 18rem;">
            <img src="Images/wire3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fibre Optic Cable</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="addcart.php">
              <?php
                if(isset($_SESSION['email']))
                {
                  echo '<button name="pid" value="403" onclick="addcart()" class="btn btn-primary">Add To Cart</button>';
                }
                else{
                  echo '<button name="pid" value="403" onclick="noaddcart()" class="btn btn-primary">Add To Cart</button>';
                }
                ?>
              </form>
              
              <?php $sql="select price from product where pid='403'";
              $result=mysqli_query($conn,$sql);
              $a=mysqli_fetch_array($result);
              echo "Rs.".$a['price'];
              ?>
            </div>
          </div>
    </div>

    

</body>
</html>