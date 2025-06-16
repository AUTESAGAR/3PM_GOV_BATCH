<?php
    $text = "QWERTYUIOPQASDFGHJKLZXCVBNMqwertyuiopolkjhgfdsaMNBVCXZ12345678900987654321";
    $shuffle = str_shuffle($text);
    echo substr($shuffle,0,5);
?>