<?php
    require('config.php');
    session_start();



    if(isset($_POST['email']) && isset($_POST['pw']))
    {

        $email = $_POST['email'];
        $password = md5($_POST['pw']);
        // $pass = md5($password);
    
        $q1 = "SELECT name from users where email = '$email' and password = '$password'";
        $result = $conn -> query($q1);
        $row = $result -> fetch_assoc();
        $name = $row['name'];
        $num_of_rows = mysqli_num_rows($result);
        
        if($num_of_rows == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;

            header("Location: /BalajiElectricals/index.php");
        }
        else{
            echo "Enter Correct Credentials";
        }
    }


?>

