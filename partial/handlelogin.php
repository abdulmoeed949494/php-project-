<?php

$showerror = "true";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "db_connect.php";
    $email = $_POST['loginemail'];
    $pass = $_POST['loginpass'];

    $ext = "SELECT * FROM `users` WHERE user_email='$email'";
    $result = mysqli_query($inf, $ext);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($pass, $row['user_pasfs'])) {
            session_start();
            $_SESSION['logged'] = true;
            $_SESSION['useremail'] = $email;
            echo 'logged', $email;
            header("location:/project/index.php");
            
        }
        
        else {

            echo " you are loged in pc info pakistan ";

        }
    }
}
