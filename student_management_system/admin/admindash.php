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
?>
    <div class="admin_title" align="center">
        <h4><a href="logout.php">Logout</a></h4>
        <h1>Welcome to Admin Dashboard</h1>
    </div>
    
    <div class="dashboard">
        <table style="width:50%;" align="center">
            
            <tr>
                <td><a href="addstudent.php">Insert Student Details</a></td>
            </tr>
            <tr>
                <td><a href="updatestudent.php">Update Student Details</a></td>
            </tr>
            <tr>
                <td><a href="deletestudent.php">Delete Student Details</a></td>
            </tr>
        </table>
    </div>
</body>
</html>