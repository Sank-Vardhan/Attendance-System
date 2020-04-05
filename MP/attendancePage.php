<?php
    session_start();

    if(!isset($_SESSION['loginId']))
    {
        header('Location:./index.php');
    }
    echo "Welcome ".$_SESSION['loginId']."_".$_SESSION['loginId1']."<br>";
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>LogedIn</title>
    </head>
    
    <body>
        <div>
            <center>
            <h1> You have sucessfully logedIn.</h1>
            <p>Click the button to mark your attendance.</p>
            <button type="submit" class="btn btn-primary" name="btnLogin" onclick="getLocation()">Mark Attendance</button>
            <p id="demo"></p>
        </center>
        </div>
        <script>
            function getLocation(){
                
                var x = document.getElementById("demo");
                var empLoc={};
                
                function getCoordinates(position) {
                    const lat  = position.coords.latitude;
                    const long = position.coords.longitude;
                    
                    var today = new Date();
                    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                    
                    empLoc.latitude=lat;
                    empLoc.longitude=long;
                    empLoc.date=date;
                    empLoc.time=time;
                    
                    var locObj=JSON.stringify(empLoc);
                    
                    window.location="locValidation.php?location="+locObj;
        }
                
        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                break;
      }
    }
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(getCoordinates,showError);
        }
}
        </script>
        <a href="./logout.php">Logout</a>
    </body>
</html>