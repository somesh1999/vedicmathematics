<?php include('../includes/header.php'); ?>
<?php 
include '../../dbconfig.php';
$course=$_GET['course'];
$chapter = preg_replace('/\D/', '', $_GET['chapter']);
$testid=$_GET['testid'];
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

  p,td,.opts{
      color:#000;
      font-family: 'Poppins', sans-serif;
      font-size:15px;
      padding-top:10px;
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
  input[type="text"]{
      font-size:14px;
      margin-left:20px;
      margin-bottom:0px;
  }

  
  .header-top-area{
      display:none;
  }

  .menubar{
    background:red;
    color:#fff;
    font-family: 'Poppins', sans-serif;
    padding:10px 20px;
    text-align:right;
    padding-right:30px;
    font-weight:bold;
  }
  
 
  
</style>

<section class="about-area section-padding" style="background:#f2fff2 ">
        <div class="container">
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
                $time=time();
                date_default_timezone_set("Asia/Kolkata");
                $endtime=date(' F d Y H:i:s', (time() + (60*5)) );
                $sql="INSERT INTO enrolledstudents (testid,email,token,endtime) VALUES ('$id','$email','$time','$endtime')";
                mysqli_query($con,$sql);
                $sql="SELECT * FROM testquestions WHERE testid='$id' ";
                $query=mysqli_query($con,$sql);
                $count=0;
                while($row=mysqli_fetch_assoc($query)){ 
                ?>
                <form action="submittest" method="POST" id="submittestform">
                <input type="hidden" name="testid" value="<?php echo $id; ?>">
                <input type="hidden" name="token" value="<?php echo $time; ?>">
               
                <p>
                <div class="row opts ">
                <div class="col-6"> <p style="font-weight:bold;"> <?php echo ++$count; ?>. <?php echo $row['question']; ?></div>
                <div class="col-6"><input type="text" placeholder="Your answer" autocomplete="off" name="answer<?php echo $count; ?>" style="width:70%;"></div>
                </div>
               
                </p>

                <?php } ?>  

               <p class="submittest"><button type="button" class="btn btn-primary" onclick="submittest1()">Submit Test</button></p>
                                
                </form>
                      
             </div>
             <?php } ?>   
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
var numberOfCheckedRadio = $('.opts input[type="text"]').filter(function () {
    return this.value.length > 0
}).length;
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
$(document).ready(function(){
    $('.menubar').html("");
});
           
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $endtime; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
//   document.getElementById("timer").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
//document.getElementById("timeleft").innerHTML =  "Time left - "+minutes + "m " + seconds + "s ";
    $('.menubar').html("Time left - "+minutes + "m " + seconds + "s ");
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
    $('#submittestform').submit();
  }
}, 1000);
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
                            window.location.href="result?testid=<?php echo $testid; ?>&course=<?php echo $_GET['course'];?>&chapter=<?php echo $_GET['chapter'];?>&token=<?php echo $time;?>";
            
                        },
                        error: function(data){
                            $('#instructionModal').modal('hide');
                            $('.submit-btn').attr("disabled", false);
                        }
                    });
            
                
            
            }); 
                  
            
       
            </script>


            