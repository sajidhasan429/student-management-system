<?php

    $con = mysqli_connect('localhost','root','','sms');

    if($con == false){
        echo "Database connection is failed.";
    }
    // else{
    //     echo "Successfully connected to database.";
    // }

?>