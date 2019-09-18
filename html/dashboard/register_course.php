<?php include('includes/header.php'); ?>

<title>Register a course - VedaGanita</title>
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

  .fees, .venue{
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
             
             <div class="col-lg-6 col-12">
                        <div class="popular-content bg48A953 ">
                            <h3 class="course-type">Prathama</h3>
                            <hr>
                            <table>
                            <tr>
                            <td><p>Duration</p></td>    
                            <td><p>3 days or 5 days</p></td>
                            </tr>
                            <tr>
                            <td><p>Eligibility</p></td>    
                            <td><p>Class 5th to 7th</p></td>
                            </tr>
                            <tr>
                            <td><p>Tutor</p></td>    
                            <td><p>Mr. Ram Deo </p></td>
                            </tr>
                            <!-- <tr>
                            <td class="fees"><p>Fees</p></td>    
                            <td><p>3 days - 700 /- only</p> <p>5 days - 1000 /- only</p></td>
                            </tr> -->
                            <tr>
                            <td class="venue"><p>Venue</p></td>    
                            <td></td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="syllabus('Prathama','Class V - VII')">Get the Syllabus</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="taketest('Prathama')">Take a test</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="register('Prathama')">Register now</button>
                                </td>
                            </tr>
                            </table>

                           
            
                        </div>
             </div>   

             <div class="col-lg-6 col-12">
                        <div class="popular-content bg0555C1">
                            <h3 class="course-type">Madhyama</h3>
                            <hr>
                            <table>
                            <tr>
                            <td><p>Duration</p></td>    
                            <td><p>3 days or 5 days</p></td>
                            </tr>
                            <tr>
                            <td><p>Eligibility</p></td>    
                            <td><p>Class 8th to 10th</p></td>
                            </tr>
                            <tr>
                            <td><p>Tutor</p></td>    
                            <td><p>Mr. Ram Deo </p></td>
                            </tr>
                            <!-- <tr>
                            <td class="fees"><p>Fees</p></td>    
                            <td><p>3 days - 700 /- only</p> <p>5 days - 1000 /- only</p></td>
                            </tr> -->
                            <tr>
                            <td class="venue"><p>Venue</p></td>    
                            <td></td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="syllabus('Madhyama','Class VIII - X')">Get the Syllabus</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="taketest('Madhyama')">Take a test</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="register('Madhyama')">Register now</button>
                                </td>
                            </tr>
                            </table>

                        </div>
            </div>


            <div class="col-lg-6 col-12">
                        <div class="popular-content bg2D8FA4">
                            <h3 class="course-type">Uttama</h3>
                            <hr>
                            <table>
                            <tr>
                            <td><p>Duration</p></td>    
                            <td><p>5 days or 7 days</p></td>
                            </tr>
                            <tr>
                            <td><p>Eligibility</p></td>    
                            <td><p>Class 10th onwards</p></td>
                            </tr>
                            <tr>
                            <td><p>Tutor</p></td>    
                            <td><p>Mr. Ram Deo </p></td>
                            </tr>
                            <!-- <tr>
                            <td class="fees"><p>Fees</p></td>    
                            <td><p>5 days - 1000 /- only</p> <p>7 days - 1500 /- only</p></td>
                            </tr> -->
                            <tr>
                            <td class="venue"><p>Venue</p></td>    
                            <td></td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="syllabus('Uttama','Class X onwards')">Get the Syllabus</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="taketest('Uttama')">Take a test</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="register('Uttama')">Register now</button>
                                </td>
                            </tr>
                            </table>      
                        </div>
            </div>



            <div class="col-lg-6 col-12">
                         <div class="popular-content bg8A3AD5">
                            <h3 class="course-type">Antima</h3>
                            <hr>
                            <table>
                            <tr>
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
                            <!-- <tr>
                            <td class="fees"><p>Fees</p></td>    
                            <td style="padding:42px 60px;"></td>
                            </tr> -->
                            <tr>
                            <td class="venue"><p>Venue</p></td>    
                            <td></td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="syllabus('Antima','for Research works')">Get the Syllabus</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="taketest('Antima')">Take a test</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                <button class="btn btn-success" onclick="register('Antima')">Register now</button>
                                </td>
                            </tr>
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


<!-- The Modal -->
<div class="modal" id="instructionModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="take-test-header"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            
      <!-- <p class="instructions"> Total number of questions : 10 </p>
      <p class="instructions"> Time alloted : 5 minutes </p>
      <p class="instructions"> Each question carry 1 mark, no negetive marks</p>
      <p class="instructions" style="color:red;"> Do not refresh the page </p>
      <p class="allthebest">All the best <i class="fa fa-smile"></i></p>
      <p class="starttest"></p>           -->

      <div class="table table-responsive">
               <table class="table">
               <tbody class="course-body"> 
               </tbody>
               </table>
       </div>


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
function register(course){
    if(<?php echo $fill_status ?> == 0){
        //swal("Complete your profile", "", "warning");
        swal({
            title: 'Please complete your profile',
            text: '',
            icon: 'warning',
            cancel: "Run away!",
            //buttons: ["Complete Profile", "Cancel"],
            buttons: {
            catch: {
            text: "Complete Profile",
            value: "catch",
            },
            cancel: "Cancel",
            },
        }).then((value) => {
                switch (value) {
                    case "catch":
                    location.href="/add_profile";
                    break;
                
                }
                });
        return ;
    }
    $.ajax({
                        type:'POST',
                        url: 'registercourse',
                        data:{course:course},
                        success:function(data){
                            if(data=="Course already taken"){
                                swal(data, "", "warning");    
                            }
                            else
                            {
                                swal("Here you go!!", data, "success")
                            }
                        },
                        error: function(data){
                            swal("Oops!!", 'Something went wrong. Please try again later', "error")
                        }
                    });

}
</script>

<script>
function taketest(testname){
$('#instructionModal').modal();
$('#take-test-header').html(testname);
 //$('.starttest').html('<a href="test?course='+testname+'"><button class="btn btn-primary">Start Test</button></a>');
 $('.course-body').html('<tr colspan=3><td>Fetching data....<td></tr>')
 $.ajax({
                        type:'POST',
                        url: 'fetchsyllabus1',
                        data:{coursename:testname},
                        success:function(data){
                            $('.course-body').html(data);
                            if(data==""){
                            $('.course-body').html('<tr colspan=2><td>Coming soon<td></tr>');
                            }    
                        },
                        error: function(data){
                            $('.course-body').html('<tr colspan=2><td>Something went wrong<td></tr>')
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