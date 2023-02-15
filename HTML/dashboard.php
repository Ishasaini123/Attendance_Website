<?php
session_start();
    $name = $_SESSION["username"];
    $roll = $_SESSION["roll_no"];
    echo $name." ".$roll;
?>