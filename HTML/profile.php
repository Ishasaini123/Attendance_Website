<?php
  session_start();
  if(isset($_SESSION["username"])){
      $name = $_SESSION["username"];
      $roll = $_SESSION["roll_no"];
  }else{
    header("location:Homepage.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <link rel="stylesheet" href="../CSS/profile.css">
</head>
<body>
<div class="container">
<div class="uiet">
<img src="../Img/png logo Kurukshetra University.png" >
</div>
<div class="logout" >
      <a href="logout.php">logout</a>
</div>
</div>
<div class="student_detail">
<div class="left_hand">    
<div class="name common">
    Name: <?php echo $name."." ?>
</div>
<div class="semester common">
    Semester : 5TH.
</div>
<div class="branch common">
    Branch : CSE.
</div>
<div class="roll_no common">
    Roll No. : <?php echo $roll."." ?>
</div>
</div>
<div class="right_hand">
    <div class="student_pic">
        <img src="../Img/png logo Kurukshetra University.png" alt="" srcset="">
    </div>
</div>
</div>
<div class="attendance_details">
    Your Attendance in particular subject is .....

</div>
</body>
</html>