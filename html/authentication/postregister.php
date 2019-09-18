<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../dbconfig.php';
    $name = $_POST["name"];
    $cno = $_POST["cno"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM `users` WHERE `email`='$email'";
    if($query=mysqli_query($con,$sql)){
        if(mysqli_num_rows($query)>0){
            echo "User already exists";
        }
        else{
         $password=md5($password);   
         $sql="INSERT INTO users (name,email, cno, password, status) VALUES ('$name','$email','$cno','$password',1)";
         mysqli_query($con,$sql);
         echo "Registered successfully.";   

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
