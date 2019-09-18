<?php include '../includes/header.php'; ?>
    
<?php 
include '../dbconfig.php';
$getblogs="SELECT * FROM blogs";
$getblogsquery=mysqli_query($con,$getblogs);

?>

    <style>
    .about-area{
        padding: 100px 0 0px;
    }
    .course-type{
        color:#fff;
        margin-bottom:20px;
    }


    .blog{
        background: #FBFCFC ;
    }

   .blog h3{
        color:black;
    }
    .blog p {
        color:gray;
    }
    .section-heading h2{
        color:#ff6600;
    }
    .para-break{
        color:#000;
        margin-top:5px;
        text-align:justify;
    }
    </style>

    <title>Blogs-VedaGanita</title>


    <!-- blog area start -->
    <section class="popular-courses section-padding" id="courses"  style="background:#f2fff2 ">
        <div class="container">
            <div class="row align-items-center"  style="margin-bottom:20px;">
            <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-heading" style="margin-bottom:20px;">
                        <h2>latest blogs</h2>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-2  col-md-4 text-right">
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel owl-carousel">
                <?php while($row=mysqli_fetch_assoc($getblogsquery)){?>
                    <div class="item">
                        <div class="popular-content blog"  style="min-height:280px;">                       
                                <div style="height:90px; overflow: hidden; text-overflow: ellipsis;"><h3 class="course-type" style="font-size:20px;"><?php echo $row['blogheading']; ?></h3></div>
                           
                            <?php if($row['blogcontent1']){ ?>
                            <div style="height:70px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['blogcontent1']; ?> </div>
                            <?php } else { ?>
                            <div style="height:70px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['blogcontent2']; ?> </div>
                            <?php } ?>
                            <a href="view-blog?blog=<?php echo $row['blogheading']; ?>" class="view-detail" style="padding-top:20px; color:black;position:absolute; bottom:60px;color:#ff6600;">View</a>
                        </div>
                    </div>
                <?php } ?>
                    <!-- <div class="item">
                        <div class="popular-content blog">
                        <h3 class="course-type">Blog Heading</h3>
                            <p>Coming Soon </p>
                            <a class="view-detail" >View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="popular-content blog">
                        <h3 class="course-type">Blog Heading</h3>
                            <p>Coming Soon </p>
                            <a class="view-detail" >View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="popular-content blog">
                        <h3 class="course-type">Blog Heading</h3>
                            <p>Coming Soon </p>
                            <a class="view-detail" >View</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->
    
  
    <?php include '../includes/footer.php'; ?>

   