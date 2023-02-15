<?php
session_start();
if(isset($_SESSION["username"])){
    $name = $_SESSION["username"];
    $roll = $_SESSION["roll_no"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../CSS/Homepage.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body id="boo">

    <div class="container">

        <div class="uiet">
        <img src="../Img/png logo Kurukshetra University.png" alt="" srcset="">
        
        </div>
        <div class="login">
        <div class="students">
         <a id="s_corner">Student Corner</a>
        </div>
        <div class="teachers">
        <a id="t_corner">Teacher Corner</a>
        </div>
        
        <div class="User" id="Users">
        <?php
        if(isset($_SESSION["username"])){
            echo $name;
            echo "<script>alert('$name , You have Successfully loged in');</script>";
        }  
        ?>
        </div>
        </div> 
    </div>
    <div class="logout" style="display:none;">
           <div class="profile">
            <a href="profile.php">Profile</a></div>
            <a href="logout.php">logout</a>
    </div>
    <div class="intro">
        <p class="first" data-aos="fade-up" data-aos-duration="2000">Welcome to UIET Attendance Website ! :)</p>
        <p class="second" data-aos="fade-up" data-aos-duration="2000">This Website has records of your attendance and would help in ease things regarding attendance.</p>
    </div>
    <div class="login_modal" id="f_login" style="display:none;" >
       <button id="create_account">New User</button>
        <form method="post" action="index-login.php" >   
         Roll No. : <br>
            <input type="text" name="roll_no" ><br>
        Password: <br>
            <input type="password" name="password" > <br>
        <button type="submit">Login</button>
        </form>
    </div>
    <div class="login_modal" id="t_login" style="display:none;" >
       <button id="createt_account">New User</button>
        <form method="post" action="teacher-index-login.php" >   
        Email : <br>
            <input type="email" name="email"><br>
        Password: <br>
            <input type="password" name="password" > <br>
        <button type="submit">Login</button>
        </form>
    </div>
    
    <div class="login_modal" id="f_sign" style="display:none;" >
        <button id="close">close</button>
        <form action="index-signin.php" method="post">
         Enter Your Name: <br>
            <input type="text" name="usernam"  required><br> 
         Enter Your Roll No.: <br>
            <input type="number" name="roll_no"  required><br>
         <!-- Upload Your Pic : <br>
            <input type="file" name="pic" id="pic"> <br> -->
         Create Password: <br>
            <input type="password" name="passwor"  required><br>
        <button type="submit">Sign Up</button>
        </form>
    </div>
    <div class="login_modal" id="t_sign" style="display:none;" >
        <button id="closet">close</button>
        <form action="teacher-index-signin.php" method="post">
         Enter Your Name: <br>
            <input type="text" name="usernam"  required> <br> 
         Enter Your University Email id: <br>
            <input type="email" name="emai" required> <br>
         <!-- Upload Your Pic : <br>
            <input type="file" name="pic" id="pic"> <br> -->
         Create Password: <br>
            <input type="password" name="passwor"  required> <br>
        
        <button type="submit">Sign Up</button>
        </form>
    </div>
    <div class="content">
        <p>University Institute of Engineering & Technology (UIET) was established by Kurukshetra University in 2004 with objective to develop as a "Centre of Excellence" and offer quality technical education and to undertake research in Engineering & Technology.

            Presently, the institute is offering four B. Tech (Computer Science & Engineering, Electronics and Communication Engineering, Biotechnology and Mechanical Engineering) and eight M. Tech. course in the technically important disciplines Computer Science & Engineering, Electronics and Communication Engineering, Mechanical Engg. (with the specialization of Industrial & Production Engg., and Thermal Engg.), Biotechnology and Electrical Engg.
            
            </p>
            <a href="https://www.uietkuk.ac.in/home.php">Know more...</a>
    </div>

    <!-- <div class="departments">
        <div class="cse io">CSE</div>
        <div class="ece io">ECE</div>
        <div class="mechanical io">MECH</div>
        <div class="biotech io">BTCH</div>
    </div> -->

    <div class="footer">
        <p class="contact">Contact Us</p>
        <br>
        <br>
        <br>
        <p class="social">
        Get in touch with us
        <br>
       <a href="uietcse2024isha@kuk.ac.in">uietcse2024isha@kuk.ac.in</a> 
        <br>
        
       <a href="uietcse2024sumitkumar@kuk.ac.in">uietcse2024sumitkumar@kuk.ac.in</a> 
        <br>
        <br>
        <br>
        <br>
    </p>

        Or find us on
        <br>
        <br>
        
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-instagram"></a>
        
    </div>
        <script src="../javascript/teacher.js"></script>
        <script src="../javascript/index.js"></script>
        <script>
            AOS.init();
        </script>
</body>
</html>