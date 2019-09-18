<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   include '../dbconfig.php';
    $course=$_POST['course'];
    $email=$_SESSION['email'];
    $selcourse="SELECT * FROM registeredcourses WHERE email='$email' AND course_name='$course'";
    if(mysqli_num_rows(mysqli_query($con,$selcourse))<1){
        $sql="INSERT INTO registeredcourses (email, course_name) VALUES ('$email','$course')";
        mysqli_query($con,$sql);
        echo "Course registered successfully";
    }
    else{
        echo "Course already taken";
    }
    
    mysqli_close($con);
}
else{
    header("location:register_course");
}
?>
