<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../dbconfig.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM `users` WHERE `email`='$email'";
    if($query=mysqli_query($con,$sql)){
        if(mysqli_num_rows($query)<1){
            echo "Account does not exists";
        }
        else{
         $password=md5($password);   
         $sql="UPDATE users SET password='$password' WHERE email='$email'";
         mysqli_query($con,$sql);
         echo "Password Changed successfully.";   

        }

    }
    else{
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
else{
    header("location:/");
}
?>
