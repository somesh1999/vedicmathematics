<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   include '../dbconfig.php';
    $username = $_POST["email"];
    $password = md5($_POST["password"]);
    $sql = "SELECT * FROM users WHERE `email`='$username'";
    if($query=mysqli_query($con,$sql)){
        if(mysqli_num_rows($query)<1){
            echo "User does not exist";
        }
        else{
            $sqlnew = "SELECT * FROM users WHERE `email`='$username' AND `password`='$password'";
            $querynew=mysqli_query($con,$sqlnew);
            if(mysqli_num_rows($querynew)<1){
                echo "You have entered wrong password";
            }
            else{
                while($rows=mysqli_fetch_assoc($querynew)){
                    $name=$rows['name'];
                }
                $_SESSION['email']=$username;
                $_SESSION['name']=$name;
                echo "Redirecting to dashboard....";
            }
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
