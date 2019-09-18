<?php include('../includes/header.php'); ?>
<?php 
include '../../dbconfig.php';
$course=$_GET['course'];
$chapter = preg_replace('/\D/', '', $_GET['chapter']);
$sql="SELECT * FROM testid WHERE course='$course' AND chapter='$chapter'";
$query=mysqli_query($con,$sql);

?>
<title>Mock Test (<?php echo $course; ?>) - VedaGanita</title>
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

  .instructions{
      color:black;
      font-size:15px;
      padding-top:5px;
  }
  .allthebest{
      color:violet;
      font-size:25px;
      text-transform:capitalize;
      margin-top:30px;
      font-weight:bold;
      text-align:center;
  }
  .fa-smile{
      color:yellow;
      margin-left:10px;
      margin-top:-5px;

  }
  .starttest{
      margin-top:10px;
      display: flex;
     justify-content: center;
      margin-bottom:20px;
  }
</style>
<section class="about-area section-padding" style="background:#f2fff2 ">
        <div class="container">
        <p><button class='btn btn-danger btn-sm' id="goback" style="width:100px; position:relative; float:right; margin-top:-50px; font-weight:bold;">Back</button></p>
            <?php
            if(mysqli_num_rows($query)<1){
                echo "<p style='text-align:center; color:red; font-size:24px;'>Something went wrong</p>";
            } ?>
            <div class="row courses">         
            <div class="col-lg-2 col-2"></div>
             

             <div class="col-lg-8 col-8">
                 <h2>Mock Test</h2>
                 <h3> <span class="chapter"></span> (<?php echo $course; ?>)</h3>
                 <?php while($rows=mysqli_fetch_assoc($query)){ $chapter_name=$rows['chapter_name']; ?>
                <div class="table-responsive">
                <table class="table table-bordered">
                
                    <tr>
                        <td style="cursor:pointer; font-weight:bold;color:blue;" onclick="instructions(`<?php echo $rows['id']; ?>`,`<?php echo $rows['test_series']; ?>`)"><?php echo $rows['test_series']; ?></td>
                        <td> No of Questions: 10 </td>
                        <td> Time: 5 minutes</td>
                    </tr>
                
                
                </table>
                </div>

                                
                <?php } ?>   
                      
             </div>
            
             <div class="col-lg-2 col-2"></div>      
            


            </div>
           
        </div>
    </section>


<?php include('../includes/footer.php'); ?>
<!-- The Modal -->
<div class="modal" id="instructionModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Instructions</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            
      <p class="instructions"> Total number of questions : 10 </p>
      <p class="instructions"> Time alloted : 5 minutes </p>
      <p class="instructions"> Each question carry 1 mark, no negetive marks</p>
      <p class="instructions" style="color:red;"> Do not refresh the page </p>
      <p class="allthebest">All the best <i class="fa fa-smile"></i></p>
      <p class="starttest"></p>          
      </div>

    </div>
  </div>
</div>



<script>
function instructions(testid,testname){
$('#instructionModal').modal();

 $('.starttest').html('<a href="test?testid='+testid+'&course=<?php echo $_GET['course'];?>&chapter=<?php echo $_GET['chapter'];?>"><button class="btn btn-primary">Start Test</button></a>');
}
</script>

<script>
$(document).ready(function(){
    $('.chapter').html('<?php echo $chapter_name; ?>');
});
</script>

<script>
$('#goback').click(function(){
    window.location.href="registeredcourse";
});
</script>