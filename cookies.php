<form action="" method="post">
    <input type="text" name="search" id="search">
    <input type="submit" value="Search" name="submit">
</form>

<?php
    if (isset($_POST['submit'])) {
        $search = $_POST['search'];
        setcookie("search", $search, time()+60, "/");
        setcookie("search","$search",$secure=false,time()-0);
    }
?>