<?php 
include '../html/dbconfig.php';
include 'header.php';
$sql=mysqli_query($con,"SELECT * FROM testquestions ORDER BY id DESC");

?>



<div class="container" style="margin-top:50px; margin-bottom:40px;">

  <h2 style="text-align:center;">View Test questions here</h2>

  <table id="table" class="table">
    <tr>
        <th>Test</th>
        <th>Course</th>
        <th>Chpater</th>
        <th>Question</th>
        <th>Correct Answer</th>
        <th>Explanation</th>
    </tr>  

    <?php while($rows=mysqli_fetch_assoc($sql)){ ?>
        <tr>
            <td><?php echo $rows['testid']; ?></td>
            <td><?php echo $rows['testid']; ?></td>
            <td><?php echo $rows['testid']; ?></td>
            <td><?php echo $rows['question']; ?></td>
            <td><?php echo $rows['correct']; ?></td>
            <td><?php echo $rows['explanation']; ?></td>
        </tr>
    <?php } ?>

  </table>

</div>