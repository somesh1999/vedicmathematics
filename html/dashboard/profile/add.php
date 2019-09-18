<?php include('../includes/header.php'); ?>
<?php 
//include '../../dbconfig.php';
$email=$_SESSION['email'];
$sql="SELECT * FROM users WHERE email='$email'";
$query=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($query)){
            $useremail=$rows['email'];
            $cno=$rows['cno'];
            $fname = $rows["fname"];
            $mname = $rows["mname"];
            $lname = $rows["lname"];
            $gname = $rows["gname"];
            $dob = $rows["dob"];
            $gender = $rows["gender"];
            $address1 = $rows["address1"];
            $address2 = $rows["address2"];
            $pin = $rows["pin"];
            $state = $rows["state"];
            $district = $rows["district"];
            $education = $rows["education"];
            $institution = $rows["institution"];
    $fill_status=$rows['fill_status'];
}

if($fill_status == 0){
            $fname = "";
            $mname = "";
            $lname = "";
            $gname = "";
            $dob = "";
            $gender = "";
            $address1 = "";
            $address2 = "";
            $pin = "";
            $state = "";
            $district = "";
            $education = "";
            $institution = "";
}


?>
<title>Fill Profile - VedaGanita</title>
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
  input{
      background:transparent;
  }
  #add_profile p {
        color:black;
        margin-top:-20px;
        margin-bottom:20px;
  }
  span,input{
    font-family: 'Poppins', sans-serif;
    font-size:14px;
  }
  span{
      padding-right:20px;
  }

  .radio{
      margin-left:-20px;
  }

  input[type='number']{
    border: none;
    margin: 0 30px 46px 0;
    overflow: hidden;
    padding: 5px 0;
    width: 47%;
    border-bottom: 1px solid #DDDDDD;

  }

  .sign-up-area{
      background:#fff;
      padding:60px 30px;
      margin-top:-10px;
      border-radius:3px;
      box-shadow: 5px 10px 10px 5px #d9ffd9;
      padding-bottom:50px;
  }

  .sign-up-area input[type="submit"]{
      padding:13px 100px;
  }
  
</style>
 <section class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                   
                </div>
                <div class="col-lg-8 res-pad-top-30">
                    <h3 style="text-align:center; margin-top:-40px;">My Profile</h3>
                    <div class="sign-up-area">
                        <form action="postprofileupdate" method="POST" id="add_profile">
                            <p><b>Personal Information</b></p>
                            <span style="width:20%">Applicant Name</span>
                            <input name="fname" type="text" placeholder="First Name" style="width:20%" value="<?php echo $fname; ?>">
                            <input  name="mname" type="text" placeholder="Middle Name" style="width:20%" value="<?php echo $mname; ?>">
                            <input class="mar-0" name="lname" type="text" placeholder="Last Name" style="width:20%" value="<?php echo $lname; ?>">
                            <br>
                            <span style="width:20%; padding-right:30px;">Gurdian Name</span>
                            <input name="gname" type="text" placeholder="In case of minor" style="width:70%" value="<?php echo $gname; ?>">

                            <br>
                            <span style="width:20%; padding-right:45px;">Date of Birth</span>
                            <input name="dob" class="date" type="text" placeholder="Date of Birth" style="width:70%" value="<?php echo $dob; ?>">

                            <br>
                            <span style="width:20%; padding-right:50px;">Gender</span>
                            <input name="gender" type="radio" value="Male" style="width:10%"> <span class="radio">Male</span>
                            <input name="gender" type="radio" value="Female" style="width:10%"> <span class="radio">Female </span>
                            <input class="mar-0" name="gender" type="radio" value="Other" style="width:10%"> <span class="radio">Other</span>

                            

  
                            <br>
                            <br>
                            <br>
                            <span style="width:20%">Contact Number</span>
                            <input name="cno" id="contactno" type="number" placeholder="Contact Number" style="width:70%" value="<?php echo $cno; ?>">

                            <br>
                            <span style="width:20%; padding-right:100px;">Email</span>
                            <input name="email" type="email" placeholder="Email" style="width:70%" value="<?php echo $useremail; ?>">


                            <p style="margin-top:20px;"><b>Correspondence Address</b></p>
                            <span style="width:20%; padding-right:80px;">Address 1</span>
                            <input name="address1" type="text" placeholder="Address 1 " style="width:70%" value="<?php echo $address1; ?>">

                            <br>
                            <span style="width:20%; padding-right:80px;">Address 2</span>
                            <input name="address2" type="text" placeholder="Address 2 " style="width:70%" value="<?php echo $address2; ?>">


                            <br>
                            <span style="width:20%; padding-right:150px;"></span>
                            <input name="pin" type="text" placeholder="Pin Code" style="width:20%" value="<?php echo $pin; ?>">
                            <input  name="state" type="text" placeholder="State" style="width:20%" value="<?php echo $state; ?>">
                            <input class="mar-0" name="district" type="text" placeholder="District" style="width:20%" value="<?php echo $district; ?>">



                            <p style="margin-top:20px;"><b>Educational Information</b></p>
                            <span style="width:20%; padding-right:80px;">Education</span>
                            <input name="education" type="text" placeholder="Education" style="width:70%" value="<?php echo $education; ?>">

                            <br>
                            <span style="width:20%; padding-right:80px;">Institution</span>
                            <input name="institution" type="text" placeholder="Institution" style="width:70%" value="<?php echo $institution; ?>">



                            <br>
                            <div>
                                    <center><input class="submit-btn" type="submit" value="Save" style="background: #41a0ac;"</center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include('../includes/footer.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
		  $('.date').datepicker({
				format: "dd-mm-yyyy"
				});
	</script>


<script>
	
            $('#add_profile').submit(function(e){
            e.preventDefault();
            $('.submit-btn').val("Please wait....");
            
            if($('#contactno').val().length != 10) {
                             $('.submit-btn').val("Save");
                             swal("Attention!!", 'Enter a valid phone number', "error");
                             return;
            }   


                $.ajax({
                        type:'POST',
                        url: $(this).attr('action'),
                        data:new FormData(this),
                        cache:false,
                        contentType: false,
                        processData: false,
                        success:function(data){
                            swal({
                                title: "Here you go!",
                                text: data,
                                icon: "success",
                            }).then(function() {
                                location.reload();
                            });  
                            
                            $('.submit-btn').val("Save");
            
                        },
                        error: function(data){
                            swal("Oops!!", 'Something went wrong. Please try again later', "error");
                             $('.submit-btn').val("Save");
                             
                        }
                    });
            
                
            
            }); 
                  
            
       
            </script>

            <script>
            var data = '<?php echo $gender; ?>'; 
            $("input[type=radio][value="+data+"]").prop("checked",true);
            </script>


        <?php if($fill_status == 1 ){ ?>
        <script>
        document.title="Edit Profile - Vedaganita";
        </script>
        <?php } ?>

            