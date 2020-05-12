<?php
    session_start();
    $loginId=$_POST['loginId'];
    $passwd=$_POST['passwd'];
    $count=0;

    if($loginId=='Admin'){
        $_SESSION['loginId']=$loginId;
        header('Location:.\admin.php');
    }
    else{
        $conn=mysqli_connect("localhost","root","","employee");
        
    if(!$conn){
        echo "Connection Error";
    }    
    else{
        $query="SELECT * FROM empinfo WHERE loginId='$loginId' AND passwd='$passwd'";
    
        $result=mysqli_query($conn,$query);
    
        if($tupple=mysqli_fetch_assoc($result)){
            $count=1;
            
            $_SESSION['loginId']=$tupple['loginId'];
            $_SESSION['loginId0']=$tupple['fName'];
            $_SESSION['loginId1']=$tupple['lName'];     
            header('Location:.\attendancePage.php');
        }
        if($count==0){
            echo "Invalid LoginId Password !";
            header('Location:.\index.php');
        }
    }
        mysqli_close($conn);
    }
?>