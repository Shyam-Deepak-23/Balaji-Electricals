<?php
    
    include('config.php');
    
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pw = md5($_POST['password']);
    $cpw = md5($_POST['confirmpw']);
    $mobile = $_POST['mobile'];
    $addr = $_POST['addr'];

    if($pw === $cpw){

        $sql = "INSERT into users values ('$name','$email','$pw','$mobile','$addr')";
    
        if($conn->query($sql))
        {
            // echo "<script> alert('Enter a record Successfully')</script>";
            header('location: login.php');
        
        }
        else{
            echo "Something went wrong";
        }
    }
    
    else {
        echo "Password does not match";
    }

    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->