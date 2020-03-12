<?php
    session_start();


if(!isset($_SESSION['loginId']))
{
	header('Location:./index.php');
}
echo "Welcome ".$_SESSION['loginId'] .$_SESSION['loginId1'];


?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>LogedIn</title>
    </head>
<body>
<h1> You have sucessfully logedIn.</h1>
<p>Click the button to mark your attendance.</p>

<button type="submit" class="btn btn-primary" name="btnLogin" onclick="getLocation()">Mark Attendance</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Your Location is<br>""Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
<a href="./logout.php">Logout</a>
</body>
</html>
