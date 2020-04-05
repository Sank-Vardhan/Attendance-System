<?php
    $var=$_GET['location'];
    $loc_data=json_decode($var);
    
    $lat=$loc_data->{'latitude'};
    $long=$loc_data->{'longitude'};
    $date=$loc_data->{'date'};  //Format HH:MM:SS
    $time=$loc_data->{'time'};  //Format YYYY:MM:DD

    echo "<center>"."<h1>"."Your Attendance have been marked sucessfully !"."</h1>";

    echo "Your Location is:"."<br>";
    echo "<br>"."Lat: ".$lat."<br>"."Long: ".$long."<br>"."Time:".$time."Date:".$date."</center>" ;

?>