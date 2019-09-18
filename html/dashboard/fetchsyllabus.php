<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../dbconfig.php';
    $coursename = $_POST["coursename"];
    
    $getchapters=mysqli_query($con,"SELECT * FROM chapters WHERE course='$coursename'");
    while($row= mysqli_fetch_assoc($getchapters)){
        $course=$row['course'];
        $chapter=$row['chapter'];
        $chapter_name=$row['chapter_name'];
        $id=$row['id'];
        echo ' <tr>
        <td><button class="btn btn-primary course-syllabus-name course-syllabus-hover" id="'.$coursename.$id.'" onmouseover="expandsyllabus(`'.$coursename.$id.'`)"  onmouseout="compresssyllabus(`'.$coursename.$id.'`)">'.$chapter_name.'</button></td>
        <td><a onclick="openexampleseries(`'.$course.'`,`chapter'.$chapter.'`)"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
        <td><a href="mock_test?course='.$course.'&chapter=chapter'.$chapter.'"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
    </tr>';
    }
    

    
}
else{
    header("location:/");
}
?>
