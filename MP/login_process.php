<?php

$loginId=$_POST['loginId'];
$passwd=$_POST['passwd'];
$count=0;
$conn=mysqli_connect("localhost","root","","employee");
if(!$conn){
    echo"Connection Error";
}

else{
    $query="SELECT * FROM empinfo WHERE loginId='$loginId' AND passwd='$passwd'";
    
    $result=mysqli_query($conn,$query);
    
    //while($tupple=mysqli_fetch_assoc($result)){
        //$loginId==$tupple['loginId'] && $passwd==$tupple['passwd']
        if($tupple=mysqli_fetch_assoc($result)){
            $count=1;
            
            session_start();
	       $_SESSION['loginId']=$tupple['fName'];
           $_SESSION['loginId1']=$tupple['lName'];     
            //echo $tupple['fName'];
            header('Location:.\attendancePage.php');
        }
    
    if($count==0){
        echo "Invalid LoginId Password !";
        header('Location:.\index.php');
        
    }
}
mysqli_close($conn);

/*if($username=="DKTE" && $password=="DKTE123")
{    
	session_start();
	$_SESSION['username']=$username;
    header('Location:.\secured.php');
}
else
{
    header('Location:.\index.php');
}*/


?>