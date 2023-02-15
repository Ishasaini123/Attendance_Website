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
        $email = $_POST['name'];
        $roll = $_POST['roll-number'];
        $depar = $_POST['department'];
        $subj = $_POST['subject'];
        $atte = $_POST['attendance'];
        $sql = "INSERT INTO teacher_submission VALUES ('$roll' , '$email' , '$depar','$subj','$atte')";
        $result = mysqli_query($conn,$sql);
        if($result){
        ?>
        <div class="registered">
            <h3>Submission Successful </h3>
            <h4>Click Continue to continue</h4>
            <button id="continue"><a href="./homepage.php">Continue</a></button>
        </div>
    <?php
    }
            
        }
    
?>