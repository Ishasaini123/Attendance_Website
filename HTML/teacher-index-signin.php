<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index_php.css">
</head>
<body>
<?php
$db_hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "att";
$conn = mysqli_connect($db_hostname,$username,$password,$database);
if(!$conn){
    echo mysqli_connect_error();
}else{
    $name = $_POST['usernam'];
    $email = $_POST['emai'];
    $password = $_POST['passwor'];
    $sql = "INSERT INTO teachers VALUES ('$name' , '$email' , '$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        ?>
        <div class="registered">
            <h3>You have registered Successfully </h3>
            <h4>Click Continue to login</h4>
            <button id="continue"><a href="./homepage.php">Continue</a></button>
        </div>
        <?php
    }
}
?>
<!-- <script src="../javascript/java2.js"></script> -->
</body>
</html>

