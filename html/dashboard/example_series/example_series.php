<?php include('../includes/header.php'); ?>
<?php 
include '../../dbconfig.php';
$course=$_GET['course'];
$chapter = preg_replace('/\D/', '', $_GET['chapter']);
$sql="SELECT * FROM example_series WHERE course='$course' AND chapter='$chapter'";
$query=mysqli_query($con,$sql);
?>
<title>Example Series (<?php echo $course; ?>) - VedaGanita</title>
<style>
   .courses  [class*="col-"] {
      margin-bottom: 30px;
  }
  .courses{
      padding:0px 100px;
      margin-top:-30px;
  }
  .course-type{
      color:#fff;
      text-align:center;
      text-transform:uppercase;
  }
  table{
      width:100%;
      
      
  }
  td p{
      text-align:left;
  }

  td{
      color:#000;
      font-family: 'Poppins', sans-serif;
      font-size:15px;
      padding-top:20px;
  }

  .btn{
      width:100%;
      margin-top:10px;
      background:#41a0ac;
      border:none;
      font-family: 'Poppins', sans-serif;
      padding:10px 20px;
  }
  ol{
    font-family: 'Poppins', sans-serif;
    font-size:16px;
    padding:0px 30px;
  }
  ol li{
      padding-top:10px;
  }
  h2,h3{
     text-align:center;
     
  }
  h3{
        margin-top:10px;
        margin-bottom:20px;
  }
 
  .dropdown-opt{
      cursor:pointer;
  }
  .fees,.venue{
      vertical-align:top;
  }
</style>
<section class="about-area section-padding" style="background:#f2fff2 ">
        <div class="container">
        <?php
            if(mysqli_num_rows($query)<1){
                echo "<p style='text-align:center; color:red; font-size:24px;'>Something went wrong</p>";
            } ?>
            <div class="row courses">
            <div class="col-lg-3 col-3"></div>
             <?php while($rows=mysqli_fetch_assoc($query)){?>

             <div class="col-lg-6 col-6">
                 <h2>Example Series</h2>
                 <h3><?php echo $rows['chapter_name']; ?> (<?php echo $course; ?>)</h3>
                <div class="table-responsive">
                <table class="table table-bordered">
                <?php $example_series=explode(",", $rows['example_series']); ?>
                <?php foreach($example_series as $e){ ?>
                    <tr>
                        <td><?php echo $e; ?></td>
                        <td><i class="fa fa-eye"></i> View </td>
                        <td><i class="fa fa-download"></i> Download</td>
                    </tr>
                <?php } ?>
                
                </table>
                </div>

                                
                
                      
             </div>
             <?php } ?>   
             <div class="col-lg-3 col-3"></div>      
            


            </div>
           
        </div>
    </section>


<?php include('../includes/footer.php'); ?>
