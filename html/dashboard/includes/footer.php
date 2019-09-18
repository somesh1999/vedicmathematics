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
                <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-0 offset-md-0 offset-sm-2">
                    <nav class="footer-nav res-pad-top-30">
                        <ul>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="blog.html">blog</a></li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div> -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 pa-0 res-pad-top-30">
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
        
        <?php if($fill_status == 1 ){ ?>
        <script>
        $('.filloredit').html("Edit")
        </script>
        <?php } ?>



</body>


</html>
