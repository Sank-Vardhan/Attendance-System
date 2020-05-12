<?php
    $conn=mysqli_connect("localhost","root","","employee");
    if(!$conn){
        echo "<center>Cannot establish connection with database.</center>"
    }
    else{
        $query="";
        $result=mysqli_query($conn,$query);
        
    }
?>