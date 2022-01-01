<?php
session_start();
require('config.php');



if(isset($_SESSION['email']))
{

    $id= $_GET['pid'];
    $email = $_SESSION['email'];

    $sql1 = "Select * from product where pid = '$id'";
    $result1 = $conn -> query($sql1);
    $row = $result1->fetch_assoc();
    $pname = $row['pname'];
    $price = $row['price'];
     

    



    $sql = "Insert into cart values('$id', '$pname', '$price', '$email')";
    // $result = $conn -> query($sql);
    if($conn->query($sql))
        {
            
            header('location: products.php');
        
        }
    else{
        echo "Something went wrong";
    }
}

else{
    //please login
    header('location: login.php');
}



// else if(isset($_GET['102']))
// {

//     $_SESSION['id'] = $_GET['102'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['103']))
// {

//     $_SESSION['id'] = $_GET['103'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['201']))
// {

//     $_SESSION['id'] = $_GET['201'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['202']))
// {

//     $_SESSION['id'] = $_GET['202'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['203']))
// {

//     $_SESSION['id'] = $_GET['203'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['301']))
// {

//     $_SESSION['id'] = $_GET['301'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['302']))
// {

//     $_SESSION['id'] = $_GET['302'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['303']))
// {

//     $_SESSION['id'] = $_GET['303'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['401']))
// {

//     $_SESSION['id'] = $_GET['401'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['402']))
// {

//     $_SESSION['id'] = $_GET['402'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }

// else if(isset($_GET['403']))
// {

//     $_SESSION['id'] = $_GET['403'];
//     $sql = "Insert into cart('email', 'pid') values($_SESSSION['email'], $_SESSION['id'])";
// }
    


?>