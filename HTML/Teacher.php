<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
    <link rel="stylesheet" href="/CSS/Teacher.css">
    <style>
      form{
        align-items: center;
        width: 100%;
        text-align: center;
        font-size: larger;
        margin: 6% 0%;
      }
      body{
        background-color: #035a47;
      }
      input{
        width: 30%;
        border: 2px solid black;
        border-radius: 5px;
        margin: 5px;
        padding: 3px;

      }
      
    </style>
</head>
<body>
    <div class="main"></div>
    <div class="form">
    <form action="teacher_submission.php" method="post">
            Enter Name Of Student <br>
            <input type="text" name="name" id="name"><br>
            Enter Roll Number<br>
            <input type="number" name="roll-number" id="roll-number"><br>
            Enter Department <br>
            <input type="text" name="department" id="department"><br>
            Enter Subject <br>
            <input type="text" name="subject" id="subject"><br>
            Enter Attendance <br>
            <input type="number" name="attendance" id="attendance"><br>
            <button type="submit">Submit</button>
</form>
</div>
</div>
</body>
</html>
