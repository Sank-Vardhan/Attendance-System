<?php
    session_start();

    if(!isset($_SESSION['loginId']))
    {
        header('Location:./index.php');
    }
    echo "Welcome ".$_SESSION['loginId']."<br>";
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                    var hour=today.getHours();
                    var min=today.getMinutes();
                    
                    empLoc.latitude=lat;
                    empLoc.longitude=long;
                    empLoc.date=date;
                    empLoc.time=time;
                    empLoc.hour=hour;
                    empLoc.min=min;
                    
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
        <a href="./show.php">Click to see your attendance.</a><br>
        <a href="./logout.php">Logout</a>
    </body>
</html>