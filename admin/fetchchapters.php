<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

include '../html/dbconfig.php';


$course=trim($_POST['course']);

$sql=mysqli_query($con,"SELECT * FROM testid WHERE course='$course'");

$output="";
while($rows=mysqli_fetch_assoc($sql)){
	$output.="<option>".$rows['chapter_name']."</option>";
}

echo $output;
?>