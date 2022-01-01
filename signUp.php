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

        <div>
            
            <button class="btnn"><a href="login.php">Sign In</a></button>
        </div>
    </header>


    <div class="container" style="background-color: rgb(85, 81, 81);margin-top:5%;border-radius:8px;color:white;padding-bottom: 2%; width:40%;">
        <h3>SIGNUP</h3>
        <form action="signup_submit.php" method="post">
            <div class="form-group" style="padding: 2%;">
                <label for="">Name</label>
                <input type="text" placeholder="Enter your Name" name="name" class = "form-control" required>
            </div>
            
            <div class="form-group" style="padding: 2%;">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Enter your email id" class = "form-control" required>
            </div>
            <div class="form-group" style="padding: 2%;">
                <label for="">Mobile Number</label>
                <input type="number" name="mobile" placeholder="Enter your mobile number" class = "form-control" required>
            </div>
            <div class="form-group" style="padding: 2%;">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class = "form-control" required>
            </div>

            <div class="form-group" style="padding: 2%;">
                <label for="">Confirm Password</label>
                <input type="password" name="confirmpw" placeholder="Confirm your Password" class = "form-control" required>
            </div>

            <div class="form-group" style="padding: 2%;">
                <label for="">Address</label>
                <input type="text" name="addr" placeholder="Enter Your Address" class = "form-control" required>
            </div>

            

            <div class="form-group" style="display: flex;justify-content: center;align-items: center;padding:2%;">
                <input type= "submit" class="btn btn-success"></button>
            </div>
            <p style="text-align: center;">Already have an account? <a href="login.php">Log In</a></p>
        </form>
    </div>

</body>
</html>