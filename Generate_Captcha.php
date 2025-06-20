<?php
        $text = "1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
        $random = str_shuffle($text);
        $captcha = substr($random,0,5);
        echo $captcha;
?>