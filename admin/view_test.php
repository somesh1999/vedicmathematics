<?php 
include '../html/dbconfig.php';
include 'header.php';
$sql=mysqli_query($con,"SELECT * FROM testquestions ORDER BY id DESC");

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<div class="container" style="margin-top:50px; margin-bottom:40px;">

  <h2 style="text-align:center;">View Test Questions</h2>

  <table id="table" class="table table-striped table-bordered" style="margin-top:50px; width:100%; ">
  <thead>
    <tr>
        <th>Test</th>
        <th>Course</th>
        <th>Chpater</th>
        <th>Question</th>
        <th>Correct Answer</th>
        <th>Explanation</th>
        <th>Action</th>
    </tr>  
</thead>
<tbody>
    <?php while($rows=mysqli_fetch_assoc($sql)){ ?>
        <tr>
            <?php $testid=$rows['testid']; $sql1=mysqli_query($con,"SELECT * FROM testid WHERE id= '$testid'"); while($row=mysqli_fetch_assoc($sql1)){ ?>
            <td><?php echo $row['test_series']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['chapter_name']; ?></td>
            <?php } ?>
            <td><?php echo $rows['question']; ?></td>
            <td><?php echo $rows['correct']; ?></td>
            <td><?php echo $rows['explanation']; ?></td>
            <td><button class="btn btn-success">Edit</button><button class="btn btn-danger" style="margin-top:5px;">Delete</button></td>
        </tr>
    <?php } ?>
    </tbody>
  </table>

</div>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#table').DataTable();
} );
</script>