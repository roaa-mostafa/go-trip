<?php

$firstname = $_REQUEST['visitors']; 
$secondname = $_REQUEST['number of visitors']; 
$address = $_REQUEST['countries'];    
    

if(isset($_POST['btntest'])){ 

    $host = "localhost"; 
    $user = "root"; 
    $password =""; 
    $db = "hopegivers";

    @$conn= mysqli_connect($host,$user,$password,$db);
    $insert= "insert into donate values('$ visitors','$countries', )";
    mysqli_query($conn,$insert);
    if($conn){
       
        echo("<h1 style=color:blue;> Your registration is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your  is Failed❌</h1>");
    }

}

?>