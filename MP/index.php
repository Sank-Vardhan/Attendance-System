<?php
session_start();
if(isset($_SESSION['username']))
{
	header('Location:./secured.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Employee Attendance Portal</title>
        <style>
        </style>
    </head>
    <body>
        <h1 align="right">Online Attendance System</h1>
        <div class="container" align="center">
            <form action="login_process.php" method="post" align="right">
                <br><input type="text" placeholder="Enter your Login ID" name="loginId" required><br>
                <br><input type="password" placeholder="Enter Password" name="passwd" required><br>
                <br><button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
            </form>
        </div>
    </body>
</html>