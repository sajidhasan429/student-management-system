<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header('location:admin/admindash.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        <?php include('css/login.css');  ?>
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h1 align="center">Admin Login</h1>

        <table align="center">
            <tr>
                <td>Username</td>
                <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Login" name="login">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

    include('dbcon.php');

    if(isset($_POST['login'])){
        $username = $_POST['uname'];
        $password = $_POST['pass'];

        $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($con,$query);
        $row = mysqli_num_rows($result);

        if($row < 1){
            ?>
            <script>
                alert('Username or Password not match !!');
                window.open('login.php','_self');
            </script>
            <?php
        }
        else{
            $data = mysqli_fetch_assoc($result);

            $id = $data['id'];

            
            $_SESSION['uid'] = $id;
            header('location:admin/admindash.php');
        }
    }


?>