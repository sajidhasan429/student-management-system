<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/background.css">
    
</head>
<body>
        <h3 align="right"><a href="login.php">Admin Login</a></h3>
        <h1>Welcome to Student Management System</h1>
        <form action="index.php" method="post">

            <table align="center">
                <tr>
                    <th colspan="2" align="center">Student Information</th>
                </tr>
                <tr>
                    <td align="center">Choose Standard</td>
                    <td>
                        <select name="std">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="11">11th</option>
                            <option value="12">12th</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">Enter Roll_no</td>
                    <td><input type="text" name="roll_no" placeholder="Enter Roll No." required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
                </tr>
            </table>
        </form>
</body>
</html>

<?php

    if(isset($_POST['submit'])){
        $standard = $_POST['std'];
        $rollno = $_POST['roll_no'];

        include('dbcon.php');
        include('function.php');

        showdetails($standard,$rollno);
    }

?>