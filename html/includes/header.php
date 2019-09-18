<?php session_start(); if($_SESSION['email']){$status="yes"; } else {$status="no"; }?>
<?php $suburl= basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from rapidthemes.net/biddaloy/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2019 15:04:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="assets/img/others/om.png">
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <style>
        body,.logo,.teacher-area, #header{
            background:#e6ffe6;
        }
    .main-menu{
        text-align:center;
    }
    .headernav li{
       margin: 0 10px 0px 0;
    }
    .main-menu nav ul li a{
        color:#fff;
    }
    .main-menu nav ul li.active a{
        /* color:#196F3D  ; */
    }
    .menubar{
        background: #41a0ac;
         /* background: #00b300; */
         margin-top:-15px;
    }
    @media only screen and (min-width: 0px) and (max-width: 991px) {
        .menubar{
         background: transparent;
    }
    }

    p{
        font-family:'Poppins', sans-serif;
    }

    .msgform{
        background:transparent;
    }

    

    .main-menu nav ul .dropdown-content li a{
        color:#000;
        margin-top:-20px;
    }

    .main-menu nav ul .dropdown-content li a:hover{
        color:red;
    }

    .dropbtn:hover .dropdown-content {
        display: block;
    }

   
    @media only screen and (min-width: 991px) {
        .dropdown-content{
        position:absolute;
        background:white;
        width:180px;
        text-align:left;
        padding:20px 20px;
        top:50px;
        left:10px;
        background:  #e6ffe6 ;
        display:none;

        }
        

        

    }

    @media only screen and (min-width: 991px) {
        .logo-img img{
        width:70px; height:70px;float:right
        }
        .logo-text{
            text-align:left; text-transform:capitalize; font-weight:bold; padding-top:30px; padding-bottom:30px; color: #Cc0000;
        }
        .logo-text h2{
            font-size:28px;
        }

        .logo-text p{
            margin-left:200px;
            font-size:15px;
            margin-top:-30px;
            color:#Cc0000;
        }
        .logo-text .sub-text{
            margin-left:170px;
            font-size:15px;
            margin-top:-30px;
            color:#Cc0000;
        }
    
    }

    @media only screen and (max-width: 991px) {
        .logo-img img{
        width:50px; height:50px;
        }
        .logo-text{
            text-transform:capitalize; font-weight:bold; color: #Cc0000;
            margin-top:-40px;
            text-align:center;
        }
        .logo-text h2{
            font-size:20px;
        }

        .logo-text p{
            margin-left:0px;
            font-size:15px;
            margin-top:-20px;
            color:#Cc0000;
        }
        .logo-text .sub-text{
            margin-left:0px;
            font-size:15px;
            margin-top:-20px;
            color:#Cc0000;
        }

        
    }


    @media only screen and (max-width: 768px) {
        .logo-img img{
        width:50px; height:50px;
        }
        .logo-text{
            text-transform:capitalize; font-weight:bold; color: #Cc0000;
            margin-top:-40px;
            text-align:center;
            margin-left:60px;
        }
        .logo-text h2{
            font-size:18px;
        }
        
    }


    .reg-btn, .login-btn{
        cursor:pointer;
    }


    .footer-logo{
    margin-top:-50px;
    }

    .footerone .footer-text{
        margin-top:-120px;
    }
    .bottom-footer{
        margin-top:-70px;
        text-align:center;
    }

    @media only screen and (max-width: 991px) {

    .footerone .footer-text{
        margin-top:-20px;
        text-align:left;
    }
    .bottom-footer{
        margin-top:30px;
        text-align:center;
    }

    }


    html {
     scroll-behavior: smooth;
    }

  
    
    </style>

</head>




<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader start -->
    <!-- <div id="preloader">
        <div class="loader">
            <div class="circle item0"></div>
            <div class="circle item1"></div>
            <div class="circle item2"></div>
        </div>
    </div> -->

    <!-- preloader end -->
    <!-- header top area start -->
    <div class="body">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="number-area">
                        <p>For Any Assistance  </p>
                        <p><i class="fa fa-phone"></i> +91 98531 65759</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 text-right">
                    <div class="login-reg">
                        <a class="reg-btn">register</a>
                        <a class="top-loging login-btn">login</a>
                        <!-- <a href="#" class="top-cart"> <span class="fa fa-shopping-cart"></span></a>
                        <span>$0.00</span> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- header top area end -->
    <!-- header area start -->
    
           




    <header id="header">

    <div class="header-area logo">
            <div class="container">
                <div class="row" >
                   
                    <div class="col-lg-12">
                        <!-- forlogo-->
            
                        <div class="row align-items-center">
                            
                        <div class="col-lg-2 logo-img">
                        <img src="assets/img/others/om.png" alt="logo">
                        </div>

                            <div class="col-lg-10 ">
                                <div class="logo-text" >
                               <h2 >poorvamnaya vaidik ganita prashikhyana prakalpa</h2>
                               <p style="font-style:capitalize;">under the aegis of Govardhan Math, Puri</p>
                               <p style="font-style:capitalize;" class="sub-text">A premier seat of research in Vaidik Mathematics</p>
                                </div>   
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="header-area menubar" >
            <div class="container">
                <div class="row align-items-center" >
                   
                    <div class="col-lg-12 d-none d-lg-block">
                        <div class="main-menu">
                            <nav class="nav-menu">
                                <ul id="navigation" class="headernav">
                                    <li class="<?php if($suburl=='') echo 'active'; ?>"><a href="/">Home</a></li>
                                    <li class="dropbtn <?php if($suburl=='guruji' OR $suburl=='govardhan-math' OR $suburl=='vedaganita' OR $suburl=='father-of-vaidik-ganita') echo 'active'; ?>"><a href="#">About</a>
                                        <ul class="dropdown-content">
                                            <li><a href="govardhan-math">Govardhan Math</a></li>
                                            <li><a href="father-of-vaidik-ganita">Father of Vaidik Ganita</a></li>
                                            <li><a href="guruji">Guruji</a></li>
                                            <li><a href="vedaganita">VedaGanita</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/#courses" class="menucourses">courses</a></li>
                                    <li><a href="/#events" class="menuevents">event</a></li>
                                    <li><a href="/#team" class="menuteam">team</a></li>
                                    <li class="<?php if($suburl=='blog') echo 'active'; ?>"><a href="/#blogs" class="menublogs">blog</a></li>
                                    <li><a href="/#contact" class="menucontact">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none" style="padding-top:15px;">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->