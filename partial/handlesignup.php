<?php
$showerror = "true";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'db_connect.php';
    $useremail = $_POST['signupemail'];
    $pass = $_POST['password'];
    $cnfpass = $_POST['cnpassword'];


    $existsql = "SELECT * FROM `users` WHERE user_email='$useremail'";
    $result = mysqli_query($inf, $existsql);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
        $showerror = "email already in use ";
    } else {
        if ($pass == $cnfpass) {
            // $hash = password_hash($pass, PASSWORD_DEFAULT);

            $hash=$pass;

            $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `datetime`) VALUES ('$useremail', '$hash', current_timestamp())";
            $result = mysqli_query($inf, $sql);
            echo "yes this is success fully saved your password";
            if ($result) {
                $showalert = true;
                header("location:/project/index.php?signupsuccess=true");
                exit();
            }
        } else {
            $showerror = "password do not match";
            echo "donot match your password ";
        }



        header("location:/project/index.php?signupsuccess=false&error=$showerror");
    }
}
