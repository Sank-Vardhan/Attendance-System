<?php
session_start();
if(isset($_SESSION['username']))
{
	header('Location:./secured.php');
}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Employee Attendance Portal</title>
        
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-12 align-self-center">
                    <h1>Online Attendance System</h1>
                    <form action="login_process.php" method="post">
                <br><input type="text" placeholder="Enter your Login ID" name="loginId" required><br>
                <br><input type="password" placeholder="Enter Password" name="passwd" required><br>
                <br><button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
            </form>
                </div>
            </div>
        </div>
    </body>
</html>