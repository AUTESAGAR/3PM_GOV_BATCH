<?php
    session_start();
    unset($_SESSION['token']);
    header("Location:session_profile.php");
?>