<?php
    session_start();
    $id=$_POST['id'];

    $conn=mysqli_connect("localhost","root","","employee");
    if(!$conn){
        echo"Connection Error";
    }
    else{
        $query="DELETE FROM empinfo WHERE loginId='$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "<div><center><h1>Employee".$id." removed from system.</center></h1></div>";
        }
        else{
            echo "problem in insertion";
        }
    }
    mysqli_close($conn);

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

