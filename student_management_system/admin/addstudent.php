<?php
    session_start();
    if(isset($_SESSION['uid'])){
        echo "";
    }
    else{
        header('location: ../login.php');
    }
?>

<?php
    include('header.php');
    include('titlehead.php');
?>

<form action="addstudent.php" method="post" enctype="multipart/form-data">
    <table border="1" style="width:70%;margin-top:40px" align="center">
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter Rollno" required></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter City" required></td>
        </tr>
        <tr>
            <th>Parent Contact No</th>
            <td><input type="text" name="pcon" placeholder="Enter Contact no of Parent" required></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><input type="number" name="std" placeholder="Enter Standard" required></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="img" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit" name="submit">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        
        include('../dbcon.php');
        
        $rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $pcon = $_POST['pcon'];
        $std = $_POST['std'];
        $image = $_FILES['img']['name'];
        $temp = $_FILES['img']['tmp_name'];

        move_uploaded_file($temp,"../dataimg/$image");

        $query = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std','$image')";

        $run = mysqli_query($con,$query);

        if($run == true){
            ?>
            <script>
                alert('Data Inserted Successfully.');
            </script>
            <?php
        }
    }
?>