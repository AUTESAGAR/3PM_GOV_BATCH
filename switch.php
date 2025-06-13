<form action="" method="post">
    <select name="operation" id="operation">
        <option value="12">Home</option>
        <option value="0">Create</option>
        <option value="1">Read</option>
        <option value="2">Update</option>
        <option value="3">Delete</option>
    </select>
    <input type="submit" value="submit" name="submit">
</form>

<?php
    if(isset($_POST['submit'])){
        $no=$_POST['operation'];
        switch($no){
            case 12: ?>
                <h1>Welcome TO VIT</h1>
            <?php
            break;                
            case 0: ?>
                <form action="query.php" method="post">
                    <input type="text" name="name" placeholder="Enter Your Name">
                    <input type="text" name="uname" placeholder="Enter Your Username">
                    <input type="password" name="pwd" placeholder="Enter Your Pwd">
                    <input type="submit" value="create" name="create">
                </form>
            <?php                
                break;
            case 1: ?>            
                <table border align="center" width="80%">
                    <tr>
                        <th>Sr.no</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th colspan="2">Operation</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Name</td>
                        <td>Username</td>
                        <td><a href="">Edit</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>
                </table>
            <?php
                break;
            case 2: ?>
                <form action="query.php" method="post">
                    <input type="text" name="name" placeholder="Enter Your Name">
                    <input type="text" name="uname" placeholder="Enter Your Username">
                    <input type="password" name="pwd" placeholder="Enter Your Pwd">
                    <input type="submit" value="Update" name="update">
                </form>
            <?php 
                break;
            default:
                print("Enter Valid Number");
        }
    }
?>