<?php
    $r = "";
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    if ($uname === "Samir@123" && $pwd === "Samir@123") {
        $r = "Login Success";
    } else {
        $r = "Login Fail";
    }
