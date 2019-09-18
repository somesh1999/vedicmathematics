<?php include('includes/header.php'); ?>
<?php 
include '../dbconfig.php';
$email=$_SESSION['email'];
$sql="SELECT * FROM registeredcourses WHERE email='$email'";
$query=mysqli_query($con,$sql);
?>
<title>Registered courses - VedaGanita</title>
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

  td,th{
      /* color:#41a0ac; */
      font-family: 'Poppins', sans-serif;
      font-size:15px;
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
 
  .dropdown-opt{
      cursor:pointer;
  }
  .fees,.venue{
      vertical-align:top;
  }

  .popular-content h3{
      color:#C0392B;
  }

  table td:nth-child(1) {
    width:80% !important;
    padding-right:20px;
    }

    .active-course{
        font-weight:bold;
    }
    .course-heading{
        font-size:20px;
    }

    .course-syllabus-hover{
        width: 250px; 
        overflow: hidden;
        white-space: nowrap;
        display: block;
        text-overflow: ellipsis;
    }
    .course-syllabus-name{
        color:#fff;
        background:#Cc0000;
        word-wrap: break-word;
    }

</style>
<section class="about-area section-padding" style="background:#f2fff2 ">
        <div class="container">
            <div class="row courses">


            <div class="col-lg-4 col-12">
            <?php $flag=0; $flag2=0;?>
             <?php while($rows=mysqli_fetch_assoc($query)){?>               
                            <?php 
                            if($rows['course_name']=="Prathama"){
                                $color="#48a953;";        
                             }
                             else if($rows['course_name']=="Madhyama"){
                                $color="#0555C1;";        
                            }
                            else if($rows['course_name']=="Uttama"){
                                $color="#2D8FA4;";        
                            }
                            else if($rows['course_name']=="Antima"){
                                $color="#8A3AD5;";        
                            }
                if($flag==0){
                     $firstcourse=$rows['course_name'];   

                }   
                
                $flag=1;

            ?>
                           <?php if($flag2==0){$active="active-course";} else {$active="";}?>
                           <p><button class="btn course-name <?php echo $active ?>" style="color:white; background:<?php echo $color; ?> " id="<?php echo $rows['course_name']; ?>" onclick="fetchsyllabus(`<?php echo $rows['course_name']; ?>`)"><?php echo $rows['course_name']; ?></button></p>          
                           <?php $flag2=1; ?>
            
                        
             <?php } ?>   
             </div>                              
             <div class="col-lg-8 col-12">
               <div class="table table-responsive" style="border-radius:8px; box-shadow: 5px 2px 10px 5px #2D8FA4;">
               <table class="table">
               <tr colspan="2">
               <th  class="course-heading"><?php echo $firstcourse; ?></th>
               </tr>
               <tbody class="course-body"> 
              <?php 

              $getchapters=mysqli_query($con,"SELECT * FROM chapters WHERE course='$firstcourse'");
              while($row= mysqli_fetch_assoc($getchapters)){ ?>
                <tr>
                    <td><button class="btn btn-primary course-syllabus-name course-syllabus-hover" id="<?php echo 'default'.$firstcourse.$row['id']; ?>" onmouseover="expandsyllabus(`<?php echo 'default'.$firstcourse.$row['id']; ?>`)"  onmouseout="compresssyllabus(`<?php echo 'default'.$firstcourse.$row['id']; ?>`)"><?php echo $row['chapter_name']; ?></button></td>
                    <td><a onclick="openexampleseries(`<?php echo $row['course']; ?>`,`chapter<?php echo $row['chapter']?>`)"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                    <td><a href="mock_test?course=<?php echo $row['course']; ?>&chapter=chapter<?php echo $row['chapter']?>"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                </tr>
              <?php }
              
              ?>
              </tbody>
              </table>
              </div> 
              </div> 


            </div>
           
        </div>
    </section>


<?php include('includes/footer.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- The Modal -->
<div class="modal" id="syllabusModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            

      </div>

    </div>
  </div>
</div>


<script>
function syllabus(course,timespan){
$('#syllabusModal').modal();
$('.modal-title').html("Syllabus of "+course+ "  ("+timespan+ ") ");
if(course == "Prathama"){
    var syllabusdata = '<ol><li>Addition</li><li>Subtraction</li><li>Multiplication</li><li>Division</li><li>H.C.F. & L.C.M</li><li>Square (two digited and three digited)</li><li>Number Theory</li><li>Percentage</li><li>Decimals (Conversion of fractions into decimals)</li></ol>';   
}
else if(course == "Madhyama"){
    var syllabusdata = '<ol><li>Revision of previous chapters</li><li>Number theory</li><li>Harder Multiplication</li><li>Harder Division</li><li>Square (4, 5 or 6  Digite numbers) and Square root, (5, 6 or 7 digited numbers)</li><li>Factorisation of higher order polynomials</li><li>Division of Polynomials</li><li>Pythagoras theorem</li><li>Trigonometry</li><li>Direct and Inverse Variation</li><li>Cube (3, 4 or 5 digited) and cube root ( 5, 6 or 7 digited numbers)</li></ol>';    
}
else if(course == "Uttama"){
    var syllabusdata = '<ol><li>Revision of previous chapters</li><li>Complete course of Multiplication</li><li>Harder Division</li><li>Square (4, 5 or 6  Digite numbers) and Square root, (5, 6 or 7 digited numbers)</li><li>Factorisation of higher order polynomials</li><li>Pythagoras theorem</li><li>Trigonometry</li><li>Calculus</li></ol>';   
}
else if(course == "Antima"){
    var syllabusdata="<p style='color:black;'>Coming soon....</p>";
}

$('.modal-body').html(syllabusdata);
}
</script>

<script>
// $(document).ready(function(){
//     $('table').slideUp();
// });   
function expand(id){
    $('#'+id).slideToggle();
}
</script>

<script>
function removeclass(){
    $('.course-name').removeClass("active-course");
}

function fetchsyllabus(coursename){
    removeclass();
    $('#'+coursename).addClass("active-course");
    $('.course-heading').html(coursename);
    $('.course-body').html('<tr colspan=3><td>Fetching data....<td></tr>')
    $.ajax({
                        type:'POST',
                        url: 'fetchsyllabus',
                        data:{coursename:coursename},
                        success:function(data){
                            $('.course-body').html(data);
                            if(data==""){
                            $('.course-body').html('<tr colspan=3><td>Coming soon<td></tr>');
                            }    
                        },
                        error: function(data){
                            $('.course-body').html('<tr colspan=3><td>Something went wrong<td></tr>')
                        }
                    });


}
</script>
<script>
function expandsyllabus(id){
    $('#'+id).css({"white-space": "normal"});
    $('#'+id).css({"width": "auto"});
    //alert(id);
}

function compresssyllabus(id){
    $('#'+id).css({"white-space": "nowrap"});
    $('#'+id).css({"width": "250px"});
    $('#'+id).css({"overflow": "hiddden"});
    $('#'+id).css({"display": "block"});
    $('#'+id).css({"text-overflow": "ellipsis"});
    //alert(id);
}
</script>

<script>
function openexampleseries(course,chapter){
   
    if(course.trim()=="Prathama"){
        if(chapter.trim()=="chapter1"){
            window.location.href="html/dashboard/example_series/addition.pdf";
            return;
        }
        else if(chapter.trim()=="chapter2"){
            window.location.href="html/dashboard/example_series/subtraction.pdf";
            return;
        }
        else if(chapter.trim()=="chapter3"){
            window.location.href="html/dashboard/example_series/multiplication.pdf";
            return;
        }
        else if(chapter.trim()=="chapter6"){
            window.location.href="html/dashboard/example_series/square.pdf";
            return;
        }
        
    }
    window.location.href="example_series?course="+course+"&chapter="+chapter;
}
</script>