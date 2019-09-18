<!-- footer area start -->
<footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="logo-text footerone">
                        <div class="footer-logo" style="width:100px; height:100px; ">
                            <a href="/"><img src="assets/img/others/om.png" alt="Logo"></a>
                        </div>
                        <p style="text-transform:capitalize; font-size: 20px; color: #Cc0000;" class="footer-text">poorvamnaya vaidik ganita prashikhyana prakalpa</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-0 offset-md-0 offset-sm-2">
                    <nav class="footer-nav res-pad-top-30">
                        <ul>
                            
                            <li><a href="#" class="menuteam">team</a></li>
                            <li><a href="#" class="menublogs">blog</a></li>
                            <li><a href="#" class="menuevents">event</a></li>
                            <li><a href="#" class="menucontact">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 pa-0 res-pad-top-30">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">help</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">support</a></li>
                            <li><a href="#">terms and conditions</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-12 res-pad-top-30">
                    <div class="social-info">
                        <h5>Bhubaneswar</h5>
                        <h5>Orissa</h5>
                        <h5><a href="mailto:rashmiramdeo11@gmail.com">vedaganita11@gmail.com</a></h5>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <!-- <li><a href="#"><i class="fab fa-behance"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-12 col-sm-12">
                    <div class="bottom-footer" style=" ">
                        <h5>Copyright ...<span><i class="fas fa-circle"></i></span>All Right Reserved</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!--  =========== ScrollTop ==============  -->
    <div id="stop" class="scrollTop">
        <span><a href="#"><i class="fas fa-level-up-alt"></i></a></span>
    </div>
    </div>
    <!--========= js linkUp =========== -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/slicknav.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        //isotop filtering
        $('#mesonary-nav').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'masonry',
            masonry: {
                columnWidth: 1
            }
        });
        // filtering li active
        $('.control').on("click", function() {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
            }
        });

    </script>


<style>
#registrationform .reg, #loginform .reg, #resetform .reg{
    width:100%;
    margin: 0 10px 0px 0;
    border:1px solid #DDDDDD;
    padding:5px 0px;
    padding: .375rem .75rem;
}
.register ,.login ,.reset{
    /* width:100%; */
    float:right;
    background: #41a0ac;
    border:none;
}
.signinanchor{
    color:black;
    font-size:14px;
    text-align:center;
    margin-bottom:10px;
}

.createacc {
  display: flex;
  flex-direction: row;
  color:black;
  font-size:14px;
  text-align:center;
  margin-bottom:20px;
}
.createacc:before, .createacc:after{
  content: "";
  flex: 1 1;
  border-bottom: 1px solid gray;
  margin: 10px;
}
.alert-success, .alert-danger{
	    display:none;
}

.modal-content{
    background:#f2fff2;
}




</style>

<!-- The Modal -->
<div class="modal" id="regModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Register</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="signinanchor">Already have an account? <a onclick="closereg()" style="cursor:pointer">Sign in</a></p>

            <p class="createacc"> Create a new one here </p>
            <div class="alert-box">
					<div class="alert alert-success" id="regsuccess"></div>
					<div class="alert alert-danger" id="regdanger"></div>
				</div>
                <form action="postregister" method="POST" id="registrationform">
                        <div class="form-group">
                            <input type="text" class="form-control reg" id="username" placeholder="User Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control reg" id="contactno" placeholder="Contact Number" name="cno" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control reg" id="email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control reg" id="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control reg" id="cpassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success register">Register</button>
                        </div>
            </form>


      </div>

    </div>
  </div>
</div>




<!-- The login Modal -->
<div class="modal" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <p class="signinanchor">First time here? <a onclick="closelogin()" style="cursor:pointer">Create an account</a></p>

            <div class="alert-box">
					<div class="alert alert-success" id="loginsuccess"></div>
					<div class="alert alert-danger" id="logindanger"></div>
				</div>
                <form action="postlogin" method="POST" id="loginform">
                        <div class="form-group">
                            <input type="email" class="form-control reg" id="email1" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control reg" id="password1" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group" style="text-align:right; font-size:13px; cursor:pointer;">
                            <a class="forgot_password">Forgot Password</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success login">Login</button>
                        </div>
            </form>


      </div>

    </div>
  </div>
</div>



<!-- The login Modal -->
<div class="modal" id="passwordModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Change Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

            <div class="alert-box">
					<div class="alert alert-success" id="resetsuccess"></div>
					<div class="alert alert-danger" id="resetdanger"></div>
				</div>
                <form action="postresetpassword" method="POST" id="resetform">
                        <div class="form-group">
                            <input type="email" class="form-control reg" id="email2" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control reg" id="password2" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control reg" id="cpassword2" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success reset">Save</button>
                        </div>
            </form>


      </div>

    </div>
  </div>
</div>



<script>
function closelogin(){
    $('#loginModal').modal('hide');
    $('#regModal').modal();
}
$('.reg-btn').click(function(){
    $('#regModal').modal();
});   


</script>


<script>
	
            $('#registrationform').submit(function(e){
            e.preventDefault();
            $('.register').html("Please wait....");
            
            if($('#password').val() != $('#cpassword').val()){
            				 $('.register').html("Register");
                             $('#regdanger').show();
                             $("#regdanger").html("Passwords do not match"); 
                             $('#regsuccess').hide();
                             return;
            }

            if($('#contactno').val().length != 10) {
                             $('.register').html("Register");
                             $('#regdanger').show();
                             $("#regdanger").html("Please enter a valid contact number"); 
                             $('#regsuccess').hide();
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
                          
                            if(data=="User already exists"){
                                 $('#regdanger').show();
                                 $("#regdanger").html(data); 
                                 $('#regsuccess').hide();           
                            }
                            else{
                                 $('#regdanger').hide();
                                 $('#regsuccess').show();
                                 $("#regsuccess").html(data);
                            }
                                $('.register').html("Register");
                                $('#registrationform')[0].reset();
            
                        },
                        error: function(data){
                             $('.register').html("Register");
                             $('#regdanger').show();
                             $("#regdanger").html("Something went wrong. Please try again later"); 
                             $('#regsuccess').hide();
                        }
                    });
            
                
            
            }); 
                  
       
            </script>


            <!-- code for checking if session is there then login will take to main page -->
            <?php if($status =="no") {?>
            <script>
                    function closereg(){
                        $('#regModal').modal('hide');
                        $('#loginModal').modal();
                    }

                    $('.login-btn').click(function(){
                        $('#loginModal').modal();
                    });  
                    </script>
            <?php } else { ?>
                <script>
                    function closereg(){
                        window.location.href="dashboard";
                    }

                    $('.login-btn').click(function(){
                        window.location.href="dashboard";
                    });  
                    </script>
            <?php }  ?>
            


         

            <script>
	
           $('#loginform').submit(function(e){
            e.preventDefault();
            $('.login').html("Please wait....");
            
                $.ajax({
                        type:'POST',
                        url: $(this).attr('action'),
                        data:new FormData(this),
                        cache:false,
                        contentType: false,
                        processData: false,
                        success:function(data){
                          
                            if(data=="User does not exist" || data=="You have entered wrong password"){
                                 $('#logindanger').show();
                                 $("#logindanger").html(data); 
                                 $('#loginsuccess').hide();           
                            }
                            else{
                                 $('#logindanger').hide();
                                 $('#loginsuccess').show();
                                 $("#loginsuccess").html(data);
                                 window.location.href="dashboard";
                            }
                                $('.login').html("Login");
            
                        },
                        error: function(data){
                             $('.login').html("Login");
                             $('#logindanger').show();
                             $("#logindanger").html("Something went wrong. Please try again later"); 
                             $('#loginsucess').hide();
                        }
                    });
                
            
            }); 
            
                  
       
        </script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

                <?php if($_SESSION['message']){ ?>
                <script type="text/javascript">
                    // $('#loginModal').modal();
            		// $('#logindanger').show();
                    // $('#logindanger').html("<?php echo $_SESSION['message']; ?>");
                                swal({
                                        title: 'Successfully logged out',
                                        icon: 'success',
                                        timer: 3000,
                                });
            	</script>
                <?php session_destroy(); } ?>
                

                <script type="text/javascript">
                    $('.forgot_password').click(function(){
                            $('#loginModal').modal('hide');
                           $('#passwordModal').modal(); 
                    });
                </script>
                
                <script>
	
            $('#resetform').submit(function(e){
            e.preventDefault();
            $('.reset').html("Please wait....");
            
            if($('#password2').val() != $('#cpassword2').val()){
            				 $('.reset').html("Save");
                             $('#resetdanger').show();
                             $("#resetdanger").html("Passwords do not match"); 
                             $('#resetsuccess').hide();
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
                         if(data=="Account does not exists"){
                                 $('#resetdanger').show();
                                 $("#resetdanger").html(data); 
                                 $('#resetsuccess').hide();           
                            }
                            else{
                                 $('#resetdanger').hide();
                                 $('#resetsuccess').show();
                                 $("#resetsuccess").html(data);
                            }
                                $('.reset').html("Save");
                                $('#resetform')[0].reset();
            
                        },
                        error: function(data){
                             $('.reset').html("Save");
                             $('#resetdanger').show();
                             $("#resetdanger").html("Something went wrong. Please try again later"); 
                             $('#resetsuccess').hide();
                        }
                    });
            
                
            
            }); 
                  
       
            </script>

            <script>
            $(".menucourses").click(function() {
                $('html,body').animate({
                    scrollTop: $("#courses").offset().top-200},
                'fast');
            });

            $(".menuevents").click(function() {
                $('html,body').animate({
                    scrollTop: $("#events").offset().top-150},
                'fast');
            });

            $(".menuteam").click(function() {
                $('html,body').animate({
                    scrollTop: $("#team").offset().top-200},
                'fast');
            });

            $(".menublogs").click(function() {
                $('html,body').animate({
                    scrollTop: $("#blogs").offset().top-150},
                'fast');
            });

            $(".menucontact").click(function() {
                $('html,body').animate({
                    scrollTop: $("#contact").offset().top-200},
                'fast');
            });
            
            </script>



            <!-- launcher screen-->
            
           

</body>


</html>
