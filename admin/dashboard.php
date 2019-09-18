<?php

include 'header.php';

include '../html/dbconfig.php';
$sql=mysqli_query($con,"SELECT * FROM testid GROUP BY course");
$sql1=mysqli_query($con,"SELECT * FROM testid GROUP BY chapter_name");


?>


<div class="container" style="margin-top:50px; margin-bottom:40px;">

  <h2 style="text-align:center;">Enter the questions here</h2>


  <div class="result"></div>
  <form action="postenterchapters.php" id="submitform">


    <div class="form-group">

      <label for="coursename">Course:</label>

      <select class="form-control" name="course">
      	<option>Select Course</option>
      	<?php while($rows=mysqli_fetch_assoc($sql)){ ?>
      		<option><?php echo $rows['course']; ?></option>
      	<?php } ?>
      <select>

    </div>

     <div class="form-group">

      <label for="coursename">Chapter:</label>

      <select class="form-control" name="chapter">
      	<option>Select Chapters</option>
      	<?php while($rows1=mysqli_fetch_assoc($sql1)){ ?>
      		<option><?php echo $rows1['chapter_name']; ?></option>
      	<?php } ?>
      <select>

    </div>

    <div class="form-group">

      <label for="test">Test:</label>

      <input type="text" class="form-control" id="test" placeholder="Test" name="test" required>

    </div>


    <div class="form-group">

      <label for="chapter">Question:</label>

      <input type="text" class="form-control" id="question" placeholder="Enter question" name="question" required>

    </div>



    <div class="form-group">

      <label for="chapter">Correct Answer:</label>

      <input type="text" class="form-control" id="correctanswer" placeholder="Enter answer" name="correctanswer" required>

    </div>



    <div class="form-group">

      <label for="chapter">Explanation:</label>

      <textarea class="form-control" id="explanation" placeholder="Enter explanation" name="explanation" style="height:100px;"></textarea>

    </div>



    <button type="submit" class="btn btn-primary" id="save">Save</button>

  </form>

</div>



</body>

</html>


<script>

	

            $('select[name=course]').change(function(){
            	var course=$(this).val();
                $.ajax({
                        type:'POST',
                        url: "fetchchapters.php",
                        data:{course:course},
                        success:function(data){
                        	$('select[name="chapter"]').html(data);
                        },

                        
                    });

            

                

            

            }); 

                  

            

       

            </script>



<script>

	

            $('#submitform').submit(function(e){

            e.preventDefault(); 

            $('#save').html("Please wait....");

                $.ajax({

                        type:'POST',

                        url: $(this).attr('action'),

                        data:new FormData(this),

                        cache:false,

                        contentType: false,

                        processData: false,

                        success:function(data){

                            $('#save').html("Save");

                            $('.result').html('<div class="alert alert-success">'+data+'</div>');

                            $('#submitform')[0].reset();

                        },

                        error: function(data){

                            $('#save').html("Save");

                            $('.result').html('<div class="alert alert-danger">'+data+'</div>');

                        }

                    });

            

                

            

            }); 

                  

            

       

            </script>

