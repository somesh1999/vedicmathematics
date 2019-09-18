<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../dbconfig.php';
    $email=$_SESSION['email'];
    
    $testid=$_POST['testid'];
    $token=$_POST['token'];
    $answer="";
    for($i=1;$i<=10;$i++){
        $answer=$answer.'/#/'.$_POST["answer".$i];
    }
    // $explain="";
    // for($i=1;$i<=10;$i++){
    //     $explain=$explain.'/#/'.$_POST["explain".$i];
    // }
    $sql="INSERT INTO useranswers (testid, token,email,options,explanation) VALUES ('$testid','$token','$email','$answer','')";
    mysqli_query($con,$sql);



    mysqli_close($con);
}
else{
    header("location:/");
}
?>
