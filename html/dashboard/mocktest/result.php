<?php include('../includes/header.php'); ?>
<?php 
include '../../dbconfig.php';
$course=$_GET['course'];
$testid=$_GET['testid'];
$chapter = preg_replace('/\D/', '', $_GET['chapter']);
$token=$_GET['token'];
$email=$_SESSION['email'];

$sql="SELECT * FROM testid WHERE course='$course' AND chapter='$chapter' AND id='$testid'";
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

  p,td{
      color:#000;
      font-family: 'Poppins', sans-serif;
      font-size:15px;
      padding-top:5px;
      
  }
  .opts{
      color:#000;
      font-family: 'Poppins', sans-serif;
      font-size:15px;
      padding-top:10px;
  }
  .sub-opts{
      color:#000;
      font-family: 'Poppins', sans-serif;
      padding-bottom:-30px;
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

  .test{
      background:white;
      padding-top:30px;
      padding-left:20px;
  }
  .explain{
      font-size:14px;
  }
  .submittest{
      margin-bottom:30px;
      
  }
  .heading-result{
      
      border-radius:0px;
      margin-left:5px;
      margin-right:5px;
      margin-top:20px;
      margin-bottom:20px;
  }
  .card{
      border-color:#17a2b8;
      text-align:center;
  }
  .score{
      background: #17a2b8;
      width:100%;
      color:#fff;
      padding:10px 20px;
      margin-bottom:-20px;
  }
  .menubar{
      display:none;
  }
  .header-top-area{
      display:none;
  }
  input[type="text"]{
      font-size:14px;
      
      margin-bottom:0px;
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
             <?php while($rows=mysqli_fetch_assoc($query)){?>

             <div class="col-lg-8 col-8 test">
                 <h2 style="text-transform:uppercase;"><?php echo $rows['test_series']; ?></h2>
                 <h3><?php echo $rows['chapter_name']; ?> (<?php echo $course; ?>)</h3>
                <?php 
                $id=$rows['id'];
                $email=$_SESSION['email'];
                $sql="SELECT * FROM useranswers WHERE email='$email' AND $token='$token' AND testid='$id'";
                $query=mysqli_query($con,$sql);
                while($result1=mysqli_fetch_assoc($query)){
                    $youranswers=explode("/#/",$result1['options']);
                }

                ?>
                 <div class="row heading-result">
                <!-- <div class="col-12">
                <p class="score">Marks secured -  <b><span class="marks"> 4/10 </span> </b></p>
                <p>Total number of questions - <b>10</b> </p>
                <p>Number of answered questions - <b><?php echo count(array_filter($youranswers)); ?></b> </p>
                <p>Number of unanswered questions - <b><?php echo 10 - count(array_filter($youranswers)); ?></b> </p>
                </div> -->
                <div class="card" style="width: 100%;">
                <div class="card-title">
                <p class="score">Marks secured -  <b><span class="marks"> 4/10 </span> </b></p>
                </div>
                <div class="card-body">
                <p>Total number of questions - <b>10</b> </p>
                <p>Number of answered questions - <b><?php echo count(array_filter($youranswers)); ?></b> </p>
                <p>Number of unanswered questions - <b><?php echo 10 - count(array_filter($youranswers)); ?></b> </p>
                </div>
                </div>
                </div>
                <p style="text-align:center; margin-bottom:20px; font-weight:bold; color:#Cc0000; font-size:17px; cursor:pointer;" id="reviewbtn"> Test review : View answers and explanations for this test</p>
                <?php
                
                
                $sql="SELECT * FROM testquestions WHERE testid='$id' ";
                $query=mysqli_query($con,$sql);
                $count=0;
                $score=0;
                while($row=mysqli_fetch_assoc($query)){ 
                ?>
                 
               
                <form action="submittest" method="POST" id="submittestform" style="display:none;">
                <input type="hidden" name="testid" value="<?php echo $id; ?>">
                <input type="hidden" name="token" value="<?php echo $time; ?>">
                <p>
               
                <div class="row opts ">
                
                <div class="col-6"> <p style="font-weight:bold;"> <?php echo ++$count; ?>. <?php echo $row['question']; ?></div>
                <div class="col-6"><input type="text" value="<?php echo $youranswers[$count]; ?>" name="answer<?php echo $count; ?>" style="width:70%;" readonly></div>
                
                </div>
                <div class="row expl ">
                <div class="col-6" style="text-align:left;"><span style="color:red; margin-top:-30px; font-size:13px; cursor:pointer;" class="sub-opts"> Correct Answer - <?php echo $row['correct']; ?></span></div>
                <div class="col-6" style="text-align:left;"><span style="color:red; margin-top:-30px; font-size:13px; cursor:pointer;" onclick="openexplanation(`<?php echo $count; ?>`)" class="sub-opts"> Explanation</span></div>
                </div>
               
                <p>
                <textarea name="explain<?php echo $count; ?>" id="explain<?php echo $count; ?>" class="form-control explain"  readonly><?php echo $row['explanation']?></textarea>
                </p>
                </p>

                <?php if($row['correct'] == $youranswers[$count]){ ++$score; }?>

                <?php } ?>  


                <center><a href="/dashboard"><button type="button" class="btn btn-primary submit-btn" style="margin-bottom:20px;">Thank You</button></a></center>

               
                                
                </form>
                      
             </div>
             <?php } ?>   
             <div class="col-lg-2 col-2"></div>      
            
                    

            </div>
           
        </div>
    </section>

<?php $sql="UPDATE enrolledstudents SET answered='$score' WHERE email='$email' AND $token='$token' AND testid='$id'"; mysqli_query($con,$sql); ?>
<?php include('../includes/footer.php'); ?>
<!-- The Modal -->
<div class="modal" id="instructionModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Instructions</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            
      <p class="instructions"> Total number of unanswered questions : <span class="answered"></span> </p>
      <p class="instructions"> Are you sure you want to submit the test now? </p>
      <!-- <p class="starttest"></p>           -->
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Continue</button>
        <button class="btn btn-primary submit-btn" onclick="submittest()">Yes</button>
      </div>

    </div>
  </div>
</div>



<script>
function submittest1(){
$('#instructionModal').modal();
var numberOfCheckedRadio = $('input:radio:checked').length
var leftquestions= 10 - numberOfCheckedRadio;  
$('.answered').html(leftquestions);
//  $('.starttest').html('<a><button class="btn btn-primary submit-btn" onclick="submittest()">Yes</button></a>');
}
</script>

<script>
 $('.explain').hide();
function openexplanation(id){
   
    $("#explain"+id).slideToggle();

}
</script>




<script>
function submittest(){
   $('#submittestform').submit();
}
</script>

<script>
	
            $('#submittestform').submit(function(e){
            e.preventDefault(); 
            $('.submit-btn').attr("disabled", true);
            $('.submit-btn').html("Please wait....");
            
            
                $.ajax({
                        type:'POST',
                        url: $(this).attr('action'),
                        data:new FormData(this),
                        cache:false,
                        contentType: false,
                        processData: false,
                        success:function(data){
                           
                            $('.submit-btn').html("Yes");
                            window.location.href="result?course=<?php echo $_GET['course'];?>&chapter=<?php echo $_GET['chapter'];?>";
            
                        },
                        error: function(data){
                            $('#instructionModal').modal('hide');
                            $('.submit-btn').attr("disabled", false);
                        }
                    });
            
                
            
            }); 
                  
            
       
            </script>

            <script>
            $(document).ready(function(){
                $('.marks').html("<?php echo $score; ?> / 10");
            });
            </script>

            <script>
            $('#reviewbtn').click(function(){
                $('#submittestform').slideToggle();
            });
            </script>


<script type="text/javascript" >
   window.onpopstate = function() {
   window.location.href="mock_test?course=<?php echo $_GET['course']?>&chapter=<?php echo $_GET['chapter'];?>";
}; history.pushState({}, '');
</script>

<script>
$('#goback').click(function(){
    window.location.href="mock_test?course=<?php echo $_GET['course']?>&chapter=<?php echo $_GET['chapter'];?>";
});
</script>