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
        header('location:/add_profile');
}


?>
<title>View Profile - VedaGanita</title>
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
        padding-left:20px;
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

  table{
      width:100%;
  }
  table td{
    font-family: 'Poppins', sans-serif;
    font-size:15px;
    padding:10px 20px;
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

                            <table>
                                <tr>
                                    <td>Applicant Name :- </td>
                                    <td><?php echo $fname." ".$mname." ".$lname; ?></td>
                                </tr>

                                <tr>
                                    <td>Gurdian Name :- </td>
                                    <td><?php echo $gname; ?></td>
                                </tr>

                                <tr>
                                    <td>Date of Birth :- </td>
                                    <td><?php echo $dob; ?></td>
                                </tr>

                                <tr>
                                    <td>Gender :- </td>
                                    <td><?php echo $gender; ?></td>
                                </tr>

                                <tr>
                                    <td>Contact Number :- </td>
                                    <td><?php echo $cno; ?></td>
                                </tr>

                                <tr>
                                    <td>Email :- </td>
                                    <td><?php echo $useremail; ?></td>
                                </tr>

                                

                            </table>

                            


                            <p style="margin-top:20px;"><b>Correspondence Address</b></p>
                             
                            <table>

                                <tr>
                                    <td>Address 1 :- </td>
                                    <td><?php echo $address1; ?></td>
                                </tr>

                                <tr>
                                    <td>Address 2 :- </td>
                                    <td><?php echo $address2; ?></td>
                                </tr>

                                <tr>
                                    <td>Pin :- </td>
                                    <td><?php echo $pin; ?></td>
                                </tr>

                                <tr>
                                    <td>State :- </td>
                                    <td><?php echo $state; ?></td>
                                </tr>

                                <tr>
                                    <td>District :- </td>
                                    <td><?php echo $district; ?></td>
                                </tr>

                            </table>

                           



                            <p style="margin-top:20px;"><b>Educational Information</b></p>


                                    <table>

                                    <tr>
                                        <td>Education :- </td>
                                        <td><?php echo $education; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Institution :- </td>
                                        <td><?php echo $institution; ?></td>
                                    </tr>

                                    

                                    </table>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include('../includes/footer.php'); ?>

