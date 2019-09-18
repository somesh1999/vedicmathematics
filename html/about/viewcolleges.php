<?php 
include "../../includes/header.php";

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"think2exam");

$engineering= "SELECT * FROM engineering_colleges ORDER BY college_rank ASC LIMIT 6";
$engineeringquery=mysqli_query($con,$engineering);


?>

<!-- body-->

<style>
   
</style>


<title>View Engineering Colleges - Welcome to Think2Exam</title>


<div class="page-header">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="inner-header">
<h3>Engineering Colleges</h3>
</div>
<div class="job-search-form bg-cyan job-featured-search">
<form>
<div class="row justify-content-center">
<div class="col-lg-5 col-md-5 col-xs-12">
<div class="form-group">
<select class="form-control" style="font-size:16px; height:50px; border-radius:10px; border: 1px solid #839192 ; box-shadow: 0px 10px 10px #E5E7E9 ;">
    <option>Engineering</option>
    <option>MBA</option>
</select>
</div>
</div>
<div class="col-lg-5 col-md-5 col-xs-12">
<div class="form-group">
<select class="form-control" style="font-size:16px; height:50px; border-radius:10px; border: 1px solid #839192 ; box-shadow: 0px 10px 10px #E5E7E9 ;">
    <option value="">Select Location</option>
</select>
</div>
</div>
<div class="col-lg-1 col-md-1 col-xs-12">
<button type="submit" class="button"><i class="lni-search"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>







<section id="featured" class="section bg-cyan">
<div class="container">
<div class="section-header">
<h2 class="section-title">Top Colleges</h2>
</div>
<div class="row">
<?php while($rows=mysqli_fetch_assoc($engineeringquery)){ ?>  
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="job-featured">
<div class="icon">
<img src="assets/img/features/img1.png" alt="">
</div>
<div class="content">
<h3><?php echo $rows['college_name']; ?></h3>
<div class="tags" style="color:gray;">
<span><i class="lni-map-marker"></i> <?php echo $rows['college_location']; ?></span>
<span><i class="lni-user"></i><?php echo $rows['college_type']; ?></span>
</div>
<span class="full-time">Rank: <?php echo $rows['college_rank']; ?></span>
</div>
</div>
</div>
<?php } ?>

<div class="col-lg-2 col-md-0 col-xs-12">
</div>


</div>
</div>
</section>






<?php
include '../../includes/footer.php';
?>