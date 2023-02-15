<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $localhost = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = "att";
    $conn = mysqli_connect($localhost,$username,$password,$db);
    if(!$conn){
        echo mysqli_connect_error();
        
    }else{
        $roll = $_POST['roll_no'];
        $pass = $_POST['password'];
        $sql = "select * from students where roll_no='$roll' And password='$pass'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if(!$row){
            echo "invalid login credentials";
        }else{
            
           header('location:homepage.php');
           
            $_SESSION['username'] = $row['name'];
            $_SESSION['roll_no'] = $row['roll_no'];
            $_SESSION['pass'] = $row['password'];
            ?>
            
            <?php

        }
    }


    ?>
    
</body>
</html>