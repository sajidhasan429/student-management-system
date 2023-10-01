<?php

    include('../dbcon.php');
            
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $id = $_POST['sid'];
    $image = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];

    move_uploaded_file($temp,"../dataimg/$image");

    $query = "UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',`pcont`='$pcon',`standard`='$std',`image`='$image' WHERE `id`='$id'";

    $run = mysqli_query($con,$query);

    if($run == true){
        ?>
        <script>
            alert('Data Updated Successfully.');
            window.open('updateform.php?sid=<?php echo $id; ?>','_self');
        </script>
        <?php
    }

?>