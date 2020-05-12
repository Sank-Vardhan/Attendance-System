<?php
session_start();
$fName=$_POST['Fname'];
$lName=$_POST['Lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contactNo=$_POST['mobile'];
$loginId=$_POST['Login'];
$password=$_POST['Passwd'];
$ConfirmPassword=$_POST['Cpasswd'];

if($password != $ConfirmPassword){
    echo "Your confirmed password is different than new password";
    header("Location:.\register.html");
}
else{
    $conn=mysqli_connect("localhost","root","","employee");
    if(!$conn){
        echo"Connection Error";
    }
    else{
        $query="insert into empinfo (`fName`, `lName`, `gender`, `loginId`, `passwd`, `emailId`, `contactNo`, `address`)  values('$fName','$lName','$gender','$loginId','$password','$email','$contactNo','$address')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "<div><center><h1>New Employee added to the system sucessfully.</center></h1></div>";
        }
        else{
            echo "problem in insertion";
        }
    }
    mysqli_close($conn);
}
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
            div{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <a href="./logout.php">Logout</a>
    </body>
</html>