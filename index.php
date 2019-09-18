<?php include 'html/includes/header.php'; ?>
    
<?php 
include 'html/dbconfig.php';
$getblogs="SELECT * FROM blogs";
$getblogsquery=mysqli_query($con,$getblogs);

?>

    <style>
    .about-area{
        padding: 100px 0 0px;
    }
    .course-type{
        color:#fff;
        margin-bottom:20px;
    }


    .blog{
        background: #FBFCFC ;
    }

   .blog h3{
        color:black;
    }
    .blog p {
        color:gray;
    }
    .section-heading h2{
        color:#ff6600;
    }
    .para-break{
        color:#000;
        margin-top:5px;
        text-align:justify;
    }




    /* .body{
        display:none;
    } */
   .launch_screen{
       position:fixed;
       top:0px;
       left:0px;
       width:100%;
       height:100%;
       background-image:url('assets/img/launcher/background-launcher.jpg') ;
       height: 100%; 
       background-position: center bottom;
       background-repeat: no-repeat;
       background-size: cover;
       /* -webkit-filter: blur(2px);
        -moz-filter: blur(2px);
        -o-filter: blur(2px);
        -ms-filter: blur(2px);
        filter: blur(0px); */
        transform: scale(1.1);
        z-index:999999999999999;
        
   }


.image-shankar-acharya{
        padding-top:50px;
        height:320px;
        width:220px;
        
}

.launch-btn{
    background: #C0392B  ;
    border:none;
    margin-top:150px;
    text-transform:uppercase;
    padding:10px 60px;
    font-weight:bold;
    font-size:35px;
    
    
}

.launch-btn:hover{
    background:red;
}
    
.praying-right
{
    width: 150px;
    height:120px;
    float:right;
    margin-right:27px;
    margin-top:-60px;
}

.praying-left
{
    float:left;
    width: 150px;
    height:120px;
    margin-top:-60px;
    margin-left:-160px;
}

h3{
    text-align:center;
    padding-top:60px;
    font-size:30px;
    color:#C0392B;
}


    </style>

    <title>VedaGanita</title>



   


    <!-- hero area start -->
    <section class="hero-area" id="home">
        <div class="main-slider owl-carousel">
            <div class="single-slider-item slider-bg-1">
                <div class="slide-tab" >
                    <div class="slide-tab-cell">
                        <div class="container">
                            <!-- <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h2>Get courses starting at just $01.99</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit do eiusmod tempor incididunt ut labore et dolore aliqua. Ut emad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="search-area">
                                        <input type="text" class="search" placeholder="What do you want to learn ?">
                                        <div class="search-icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="slide-tab">
                    <div class="slide-tab-cell">
                        <div class="container">
                            <!-- <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h2>Get courses starting at just $01.99</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit do eiusmod tempor incididunt ut labore et dolore aliqua. Ut emad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="search-area">
                                        <input type="text" class="search" placeholder="What do you want to learn ?">
                                        <div class="search-icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-3">
                <div class="slide-tab">
                    <div class="slide-tab-cell">
                        <div class="container">
                            <!-- <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h2>Get courses starting at just $01.99</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit do eiusmod tempor incididunt ut labore et dolore aliqua. Ut emad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="search-area">
                                        <input type="text" class="search" placeholder="What do you want to learn ?">
                                        <div class="search-icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-4">
                <div class="slide-tab">
                    <div class="slide-tab-cell">
                        <div class="container">
                            <!-- <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <h2>Get courses starting at just $01.99</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipicing elit do eiusmod tempor incididunt ut labore et dolore aliqua. Ut emad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="search-area">
                                        <input type="text" class="search" placeholder="What do you want to learn ?">
                                        <div class="search-icon">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- hero area end -->



     <!-- event area start -->
     <section class="about-area section-padding" style="background:#f2fff2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 section-heading text-center">
                    <h2>About Us</h2>
                    <p style="text-align:justify;">“Poorvamnaya Vaidik Ganita Prashikhyana Prakalpa” is the name blessed  by the 145th H.H.Shreemajjadguru Shankaracharya Nischalananda Saraswatiji of Govardhan Math; the Holiest place of Puri, Odisha. Govardhan Math is 2500 years old math of eastern India where Rig veda is taught and Vaidik Ganit is rediscovered by the 143rd Shankaracharya of this math. We are happy to be blessed by  Gurudevji to give permission to teach students of the “Gurukul” at Govardhan math. Very often we have opportunity to discuss Vaidik mathematics with  H.H.Shreemajjagadguru Nischalananda Saraswatiji, the Shankaracharya of Govardhan math; Puri.
Since last 12 years we are offering classes at different schools, colleges and Universities of Odisha and training teachers for promoting Vaidik Ganit.
We organise camps at different places of and train students and teachers of different schools and colleges.
</p>
                </div>
            </div>
           
        </div>
    </section>
    <!-- event area end -->





    <!-- popular courses area start -->
    <section class="popular-courses section-padding" id="courses"  style="background:#d9ffd9 ">
        <div class="container">
            <div class="row align-items-center"  style="margin-bottom:20px;">
                <div class="col-lg-7 col-md-8">
                    <div class="section-heading">
                        <h2>Courses Offered</h2>
                    </div>
                </div>
                <!-- <div class="col-lg-3 offset-lg-2  col-md-4 text-right">
                    <a href="#" class="biddaloy-btn">view courses</a>
                </div> -->
            </div>
            <div class="row">
                <div class="popular-course-carousel owl-carousel">
                    <div class="item">
                        <div class="popular-content bg48A953 " onclick="registercourse()">
                            <h3 class="course-type">Prathama</h3>
                            <p>3 days or 5 days</p>
                            <a class="#" style="color:white;">Class 5th to 7th</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="popular-content bg0555C1" onclick="registercourse()">
                        <h3 class="course-type">Madhyama</h3>
                            <p>3 days or 5 days</p>
                            <a class="#" style="color:white;">Class 8th to 10th</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="popular-content bg2D8FA4" onclick="registercourse()">
                        <h3 class="course-type">Uttama</h3>
                            <p>5 days or 7 days</p>
                            <a class="#" style="color:white;">Class 10th onwards</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="popular-content bg8A3AD5" onclick="registercourse()">
                        <h3 class="course-type">Antima</h3>
                            <p>Research Work</p>
                            <a class="#" style="color:white;">Any Graduate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular courses area end -->
    
   
    <!-- event area start -->
    <section class="event-area section-padding"  id="events" style="background:#f2fff2 ">
        <div class="container">
            <div class="row" style="padding-bottom:50px;">
                <div class="col-lg-8 offset-lg-2 section-heading text-center">
                    <h2>Upcoming Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-event-call  owl-carousel">
                        <div class="single-event single-bg1">
                            <h6>July 13, 2019</h6>
                            <h3>Seminar</h3>
                            <h4><i class="far fa-clock"></i>6.30 PM - 8.30 PM</h4>
                            <p>Regional Institute of Education, Bhubaneswar</p>
                        </div>
                        <div class="single-event single-bg2">
                            <h6>July 14, 2019</h6>
                            <h3>Vedic Mathematics</h3>
                            <div style="height:30px"></div>
                            <h4><i class="far fa-clock"></i>10:30 AM - 12:00 PM</h4>
                            <p>Govardhan Math</p>
                        </div>
                        <!-- <div class="single-event single-bg1">
                            <h6>July 28, 2018</h6>
                            <h3>UI/UX Designer Meet-up 2018 In London</h3>
                            <h4><i class="far fa-clock"></i>10ap - 4pm</h4>
                            <p>Venue of the event</p>
                        </div>
                        <div class="single-event single-bg2">
                            <h6>July 28, 2018</h6>
                            <h3>UI/UX Designer Meet-up 2018 In London</h3>
                            <h4><i class="far fa-clock"></i>10ap - 4pm</h4>
                            <p>Venue of the event</p>
                        </div>
                        <div class="single-event single-bg1">
                            <h6>July 28, 2018</h6>
                            <h3>UI/UX Designer Meet-up 2018 In London</h3>
                            <h4><i class="far fa-clock"></i>10ap - 4pm</h4>
                            <p>Venue of the event</p>
                        </div>
                        <div class="single-event single-bg2">
                            <h6>July 28, 2018</h6>
                            <h3>UI/UX Designer Meet-up 2018 In London</h3>
                            <h4><i class="far fa-clock"></i>10ap - 4pm</h4>
                            <p>Venue of the event</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event area end -->
    <!-- teacher area start -->
    <section class="teacher-area section-padding" id="team" style="background:#d9ffd9 ">
        <div class="container">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 mob-to-res-30"></div>
                <div class="col-lg-3 col-md-3 col-sm-3 mob-to-res-30">
                    <div class="single-teacher">
                    <div class="teacher">
                            <img src="assets/img/teache/teacher.jpg" alt="Profile Pic">
                        </div>
                    </div>

                    
                </div>

                
                <div class="col-lg-1 col-md-1 col-sm-1 mob-to-res-30"></div>

                <div class="col-lg-5 col-md-5 col-sm-5 mob-to-res-30" >
                     <p style="color:#000; text-align:justify">I was very keen to understand the subject Mathematics from my childhood but I
                        really enjoyed the subject when I got the book Vedic mathematics by Jagadguru
                        Bharati Krishna Tirthaji maharaj. It took long three years to understand the different
                        words used in that book because those were in sanskrit.</p>
                        <p class="para-break">Now the race began and I worked hard day and night on this subject which
                        helped me to innovate new formulae on mathematics. My hard work helped me to
                        find the relationship between the sixteen sutras of vedic mathematics and the
                        different algebraic formulae. I believe it is the blessings of Gurudev (Jagadguru
                        Nischalananda saraswatiji) and maa Saraswatiji to understand this subject.</p>
                                     
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 mob-to-res-30"></div>
                <div class="col-lg-9 col-md-9 col-sm-9 mob-to-res-30" >
                        <p class="para-break">I render my special thanks to Gurudev, Venket Shastriji, Prof. Kumar Devaduttaji Ankita Mohapatra, Prakashji of Govardhan peetha and the team of KIIT University who guided, inspired and helped me a lot to develop this PaaS Portal. 
                        <p style="width:250px; height:125px; float:right"><img src="assets/img/final-signature.png" alt="Ram Deo Ji"></p>             
                </div>



               
            </div>
        </div>
    </section>
    <!-- teacher area end -->
    <!-- blog area start -->
    <section class="popular-courses section-padding" id="blogs"  style="background:#f2fff2 ">
        <div class="container">
            <div class="row align-items-center"  style="margin-bottom:20px;">
            <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-heading" style="margin-bottom:20px;">
                        <h2>latest blogs</h2>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-2  col-md-4 text-right">
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel owl-carousel">
                <?php while($row=mysqli_fetch_assoc($getblogsquery)){?>
                    <div class="item">
                        <div class="popular-content blog"  style="min-height:280px;">                       
                        <div style="height:90px; overflow: hidden; text-overflow: ellipsis;"><h3 class="course-type" style="font-size:20px;"><?php echo $row['blogheading']; ?></h3></div>
                           
                            <?php if($row['blogcontent1']){ ?>
                            <div style="height:70px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['blogcontent1']; ?> </div>
                            <?php } else { ?>
                            <div style="height:70px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['blogcontent2']; ?> </div>
                            <?php } ?>
                            <a href="view-blog?blog=<?php echo $row['blogheading']; ?>" class="view-detail" style="padding-top:20px; color:black; position:absolute; bottom:60px;color:#ff6600;">View</a>
                        </div>
                    </div>
                <?php } ?>
                    <!-- <div class="item">
                        <div class="popular-content blog">
                        <h3 class="course-type">Blog Heading</h3>
                            <p>Coming Soon </p>
                            <a class="view-detail" >View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="popular-content blog">
                        <h3 class="course-type">Blog Heading</h3>
                            <p>Coming Soon </p>
                            <a class="view-detail" >View</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="popular-content blog">
                        <h3 class="course-type">Blog Heading</h3>
                            <p>Coming Soon </p>
                            <a class="view-detail" >View</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->
    
    <!-- contact area start -->
    <section class="contact-area section-padding" id="contact" style="background:#d9ffd9 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3>contact information</h3>
                        <h5>Address: <span>Bhubaneswar, Orissa</span></h5>
                        <h5>Phone Number: 9090212347, 9853165759</h5>
                        <h5>WhatsApp Number: 9853165759</h5>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 res-pad-top-30">
                    <h3>Send us a Message</h3>
                    <div class="sign-up-area">
                        <form action="postcontact" id="contactform" method="POST">
                            <input name="fname" type="text" placeholder="First Name" class="msgform" required>
                            <input class="mar-0 msgform" name="lname" type="text" placeholder="Last Name" required>
                            <input name="email" type="email" placeholder="Email Address" class="msgform" required>
                            <input class="mar-0 msgform" name="phone" type="tel" placeholder="Phone Number" required>
                            <textarea name="message" placeholder="Message" class="msgform" required></textarea>
                            <input class="submit-btn sendmsg" type="submit" value="send message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
    <?php include 'html/includes/footer.php'; ?>

<!-- launching screen-->
<!-- <div class="launch_screen">
<h3>Launching of vedaganita.com</h3>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-4">
   <div class="image-shankar-acharya">
       <img src="assets/img/launcher/shankaracharya.jpg" alt="Shankar Acharya" style="height:100%;width:100%; border-radius:20px;">
   </div>
   <div class="praying-hands">
        <img src="assets/img/launcher/praying-right.svg" class="praying-right" alt="praying hands">
        <img src="assets/img/launcher/praying-left.png" class="praying-left" alt="praying hands">

   </div>
    </div>
    <div class="col-lg-4">
    <button class="btn btn-danger launch-btn">Launch</button>
    </div>
</div>
</div> -->
<!-- /launching screen-->



    <?php if($status =="no") {?>
            <script>
                    function registercourse(){
                        $('#loginModal').modal();
                    }

                    </script>
            <?php } else { ?>
                <script>
                    function registercourse(){
                        window.location.href="dashboard";
                    }

            
                    </script>
            <?php }  ?>

            <script>
            
    $('#contactform').submit(function(e){
    e.preventDefault();
    $('.sendmsg').val("Sending......");
    $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:new FormData(this),
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
              swal("Success", "Message sent successfully", "success");
               $('.sendmsg').val("Send Message");
               $('#contactform')[0].reset();

            },
            error: function(data){
              /*swal("Error", "Message not sent", "error");
               $('#send').val("SEND MESSAGE");*/
               swal("Error", "Message not sent", "error");
               $('.sendmsg').val("Send Message");
               //$('#emailform')[0].reset();
            }
        });
  

});

            
            </script>



        <!-- <script>
            $('.launch-btn').click(function(){
                $('.body').show();
               $(".launch_screen").hide( "blind", {direction: "vertical"}, 20000 );
               //$('body').sakura('stop');
               //$('body').stop( true, true );
               //setTimeout(function(){ $(".body").show("blind", {direction: "vertical"}, 20000 ); }, 10000);
               
                //$(".body").show( "explode", {pieces: 20 }, 2000 );
            });
            
            </script> -->