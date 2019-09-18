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

  td{
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

</style>
<section class="about-area section-padding" style="background:#f2fff2 ">
        <div class="container">
            <div class="row courses">
             <?php while($rows=mysqli_fetch_assoc($query)){?>
             <div class="col-lg-12 col-12">
                        <div class="popular-content bg48A953 " style="background:#ffccb3;">
                            <h3 class="course-type" click><?php echo $rows['course_name']; ?> <span class="dropdown-opt" onclick="expand(`<?php echo $rows['id']; ?>`)"><i class="fa fa-angle-down"></i></span></h3>
                            <hr>
                            
                            <?php 
                            if($rows['course_name']=="Prathama"){?>
                                        <table id="<?php echo $rows['id']; ?>">
                                        <tr><td>1. Addition</td>
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter1"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter1"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>2. Subtraction</td>
                                        <td><a href="html/dashboard/example_series/subtraction.pdf" target="blank"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter2"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>3. Multiplication</td>
                                        <td><a href="html/dashboard/example_series/multiplication.pdf" target="blank"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter3"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>4. Division</td>
                                        <td><a href="html/dashboard/example_series/division.pdf" target="blank"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter4"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>5. H.C.F. &amp; L.C.M</td>
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter5"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter5"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>6. Square (two digited and three digited)</td>
                                        <td><a href="html/dashboard/example_series/square.pdf" target="blank"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter6"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>7. Number Theory</td>
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter7"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter7"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>8. Percentage</td>
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter8"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter8"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>9. Decimals (Conversion of fractions into decimals)</td>
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter9"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter9"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <!-- <tr>
                                            <td colspan=2>
                                            <button class="btn btn-success" onclick="syllabus('Prathama','Class V - VII')">Get the Syllabus</button>
                                            </td>
                                        </tr> -->
                                       
                                        </table>
                            <?php }
                            else if($rows['course_name']=="Madhyama"){?>
                                        <table id="<?php echo $rows['id']; ?>">
                                        <tr><td>1. Revision of previous chapters</td>
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter1"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter1"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>2. Number theory</td>
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter2"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter2"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>3. Harder Multiplication</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter3"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter3"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>4. Harder Division</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter4"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter4"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>5. Square (4, 5 or 6 Digite numbers) and Square root, (5, 6 or 7 digited numbers)</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter5"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter5"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>6. Factorisation of higher order polynomials</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter6"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter6"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>7. Division of Polynomials</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter7"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter7"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>8. Pythagoras theorem</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter8"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter8"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>9. Trigonometry</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter9"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter9"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>10. Direct and Inverse Variation</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter10"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter10"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                        <tr><td>11. Cube (3, 4 or 5 digited) and cube root ( 5, 6 or 7 digited numbers)</td> 
                                        <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter11"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                        <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter11"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                        </tr>
                                            <!-- <tr>
                                                <td colspan=2>
                                                <button class="btn btn-success" onclick="syllabus('Madhyama','Class VIII - X')">Get the Syllabus</button>
                                                </td>
                                            </tr> -->
                                           
                                            </table>
                            <?php }
                            else if($rows['course_name']=="Uttama"){?>
                                                <table id="<?php echo $rows['id']; ?>"> 
                                                <tr><td>1. Revision of previous chapters</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter1"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter1"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <tr><td>2. Complete course of Multiplication</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter2"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter2"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <tr><td>3. Harder Division</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter3"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter3"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <tr><td>4. Square (4, 5 or 6 Digite numbers) and Square root, (5, 6 or 7 digited numbers)</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter4"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter4"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <tr><td>5. Factorisation of higher order polynomials</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter5"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter5"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <tr><td>6. Pythagoras theorem</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter6"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter6"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <tr><td>7. Trigonometry</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter7"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter7"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <tr><td>8. Calculus</td>
                                                 <td><a href="example_series?course=<?php echo $rows['course_name']; ?>&chapter=chapter8"><button class="btn btn-primary btn-sm">Example Series</button></a></td>
                                                 <td><a href="mock_test?course=<?php echo $rows['course_name']; ?>&chapter=chapter8"><button class="btn btn-primary btn-sm">Mock Test</button></a></td>
                                                 </tr>
                                                <!-- <tr>
                                                    <td colspan=2>
                                                    <button class="btn btn-success" onclick="syllabus('Uttama','Class X onwards')">Get the Syllabus</button>
                                                    </td>
                                                </tr>
                                               -->
                                                </table> 
                            <?php }
                            else if($rows['course_name']=="Antima"){ ?>
                                                     <table id="<?php echo $rows['id']; ?>">
                                                        <!-- <tr>
                                                        <td><p>Duration</p></td>    
                                                        <td><p>Depends on Research</p></td>
                                                        </tr>
                                                        <tr>
                                                        <td><p>Eligibility</p></td>    
                                                        <td><p>Research Work</p></td>
                                                        </tr>
                                                        <tr>
                                                        <td><p>Tutor</p></td>    
                                                        <td><p>Mr. Ram Deo </p></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="fees"><p>Fees</p></td>    
                                                        <td style="padding:42px 60px;"></td>
                                                        </tr>
                                                        <tr>
                                                        <td class="venue"><p>Venue</p></td>    
                                                        <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>
                                                            <button class="btn btn-success" onclick="syllabus('Antima','for Research works')">Get the Syllabus</button>
                                                            </td>
                                                        </tr> -->
                                                        <tr>
                                                            <td>Coming Soon...</td>
                                                        </tr>
                                                      
                                                        </table>
                            <?php } ?>

                           
            
                        </div>
             </div>
             <?php } ?>   

            


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
$(document).ready(function(){
    $('table').slideUp();
});   
function expand(id){
    $('#'+id).slideToggle();
}
</script>

