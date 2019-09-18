<?php include '../includes/header.php'; ?>

<?php 
include '../dbconfig.php';
$blog=$_GET['blog'];
$sql="SELECT * FROM blogs WHERE blogheading='$blog'";
$query=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($query)){
    $blogcontent1=$rows['blogcontent1'];
    $blogcontent2=$rows['blogcontent2'];
    $blogimage=$rows['blogimage'];

}
?>
<title><?php echo $blog; ?> - Vedaganita</title>    
  <style>
  .blog-list-content p{
    /* margin-top:-20px; */
  }

  .blogcontent{
      text-align:justify;
  }
  </style>
    <!-- hero area end -->
    <!-- all courses area start -->
    <section class="course-information section-padding" id="information">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-list-content">
                    <h2 style="margin-bottom:30px; text-align:center;"><?php echo $blog; ?></h2>
                    <div class="row blogcontent" style="margin-top:30px;">
                        <div class="col-md-6 blogcontent" style="margin-top:10px;">
                        <?php echo $blogcontent1; ?>
                        </div>
                        <?php if($blogimage){ ?>
                        <div class="col-md-6">
                        <img src="assets/img/blog/<?php echo $blogimage;?>" alt="">
                        </div>
                        <?php } ?>
                        <p style="margin-top:40px;"><?php echo $blogcontent2; ?></p>
                    </div>
                     <!-- end of row-->       

                    </div>
                </div>
              
            </div>
        </div>
    </section>
    
    <?php include '../includes/footer.php'; ?>
