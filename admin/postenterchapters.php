<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

include '../html/dbconfig.php';

//$testid=$_POST['testid'];

$test=$_POST['test'];

$course=trim($_POST['course']);
$chapter=trim($_POST['chapter']);


$gettest="SELECT * FROM testid WHERE test_series='$test'";
if(mysqli_num_rows(mysqli_query($con,$gettest))<1){
    mysqli_query($con,"INSERT INTO testid (course,chapter,test_series,chapter_name) VALUES ('$course','0','$test','$chapter')");
}




$gettestid=mysqli_query($con,"SELECT * FROM testid WHERE course='$course' AND chapter_name='$chapter' AND test_series='$test'");

while($row=mysqli_fetch_assoc($gettestid)){
	$testid=$row['id'];
}

$question=$_POST['question'];

$correctanswer=$_POST['correctanswer'];

$explanation=$_POST['explanation'];

$sql="INSERT INTO testquestions (testid,question,correct,explanation) VALUES ('$testid','$question','$correctanswer','$explanation')";

if(mysqli_query($con,$sql)){

    echo "Data entered successfully";



}

else{

    echo "Data entry failed";

}



?>