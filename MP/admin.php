<?php
    session_start();
    if(!isset($_SESSION['loginId']))
    {
        header('Location:./index.php');
    }
    echo "Welcome ".$_SESSION['loginId']."<br>";
?>