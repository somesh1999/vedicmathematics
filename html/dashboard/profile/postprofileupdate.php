<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../../dbconfig.php';
    $email=$_SESSION['email'];
    $sql="SELECT * FROM users where email='$email'";
    $query=mysqli_query($con,$sql);
    while($rows=mysqli_fetch_assoc($query)){
        $id= $rows['id'];
    }
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $gname = $_POST["gname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $cno = $_POST["cno"];
    $email = $_POST["email"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $pin = $_POST["pin"];
    $state = $_POST["state"];
    $district = $_POST["district"];
    $education = $_POST["education"];
    $institution = $_POST["institution"];
    $sql="UPDATE users SET fname='$fname', mname='$mname' , lname='$lname' , gname='$gname', dob='$dob' , gender='$gender' , cno='$cno' , email='$email', address1='$address1', address2='$address2', pin='$pin', state='$state' , district='$district', education='$education' , institution='$institution', fill_status='1' WHERE id='$id'";
        mysqli_query($con,$sql);
        $_SESSION['email'] = $email;
         echo "Details saved successfully.";   

    mysqli_close($con);
}
else{
    header("location:/add_profile");
}
?>
