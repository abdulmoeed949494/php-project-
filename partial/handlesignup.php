<?php

if($_SERVER['REQUEST_METHOD'] =="POST"){
include 'project/partial/dbconnect.php';
$useremail=$_POST['signupemail'];
$pass=$_POST['password'];


$existsql="SELECT * FROM `users` WHERE user_email=$useremail";
$result=mysqli_query($inf,$existsql);
$rows=mysqli_num_rows($result);

if($rows>0){
    $showerror="email already in use ";

}

else{
    if($pass==$pass){
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` (`user_email`, `user_pass`, `datetime`) VALUES ('$useremail', '$pass', current_timestamp())";
    }
    else{
        $showerror="pass word do not match";
    }
}

}



?>