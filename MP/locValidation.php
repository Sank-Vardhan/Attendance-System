<?php
    session_start();
    $var=$_GET['location'];
    $loc_data=json_decode($var);
     
    $hour=$loc_data->{'hour'};
    $minutes=$loc_data->{'min'};
    $user=$_SESSION['loginId'];
    $status=null;
   // $work_date='2020-4-6';
    $lat=$loc_data->{'latitude'};
    $longi=$loc_data->{'longitude'};
    $date=$loc_data->{'date'};  //Format YYYY:MM:DD
    $time=$loc_data->{'time'};  //Format HH:MM:SS
    $latitude=null;
    $longitude=null;

    if($hour >= '20' && $hour<='21') 
    { 
        $status='Present'; 
    } 
    else
    { 
        $status='Absent'; 
    }

    echo "<center>"."<h1>"."Your Attendance have been marked sucessfully !"."</h1>";

    echo "Your Location is:"."<br>";
    echo "<br>"."Lat: ".$lat."<br>"."Long: ".$longi."<br>"."Date:".$date." "."Time:".$time."</center>" ;
$conn=mysqli_connect("localhost","root","","employee");
    if(!$conn){
        echo"Connection Error";
    }
    else{
        $query="insert into Location values('$lat','$longi','$date','$time','$status','$user')";
        $res=mysqli_query($conn,$query);
    }
mysqli_close($conn);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <a href="./show.php">Click to see your attendance</a><br>
        <a href="./logout.php">Logout</a>
    </body>
</html>
