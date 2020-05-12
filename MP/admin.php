<?php
    session_start();
    if(!isset($_SESSION['loginId']))
    {
        header('Location:./index.php');
    }
    echo "Welcome Admin";
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
            body{
                background-image: url(images/d.jpg);
                color: antiquewhite;
            }
            a{
                color: antiquewhite;
            }
        </style>
        <title>LoggedIn</title>
    </head>
    
    <body>
        <center>
            <h1> You have sucessfully loggedin as Administrator.</h1>
            <a href="attendancePage.php">Mark Attendance</a><br>
            <a href="register.html">Add new Employee</a><br>
            <a href="remove.html">Remove existing Employee</a><br>
            <a href="show.php">View attendance</a><br>
            <a href="selectId.html">Create Monthly Report of Employee</a><br>
        </center>
        <a href="./logout.php">Logout</a>
    </body>
</html>
    