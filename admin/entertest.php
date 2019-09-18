<!DOCTYPE html>

<html lang="en">

<head>

  <title>Vedaganita Admin</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>



<div class="container" style="margin-top:100px; margin-bottom:40px;">

<div class="result"></div>

  <h2>Enter the questions here</h2>

  <form action="postenterchapters.php" id="submitform">


    <div class="form-group">

      <label for="coursename">Test ID:</label>

      <select class="form-control" id="testid" name="testid">

        <option>1</option>

        <option>2</option>

        <option>3</option>

      <select>

    </div>

    <div class="form-group">

      <label for="chapter">Question:</label>

      <input type="text" class="form-control" id="question" placeholder="Enter question" name="question">

    </div>



    <div class="form-group">

      <label for="chapter">Correct Answer:</label>

      <input type="text" class="form-control" id="correctanswer" placeholder="Enter answer" name="correctanswer">

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

