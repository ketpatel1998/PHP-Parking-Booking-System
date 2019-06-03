
<?php

    session_start();
    if(isset($_SESSION['regno']['name']))
    {
?>
<!doctype html>
<html lang="ZXX">


<!-- Mirrored from smartco.enventer.com/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 12:43:33 GMT -->
<head>
    <title>ParkAt | Book</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=description content="Smartco is a modern and beautiful HTML5 multipage corporate template for the creative and professional person or company. This template contains 6 different page layout with awesome design.">
    <meta name=author content="Enventer">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../../use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,700,900');
    </style>
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.css">
    <!-- Animation CSS -->
    <link href="css/aos.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
    
    
</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


    <!--  Preloader Start
========================-->
    <div id='preloader'>
        <div id='status'>
            <img src='img/loading.gif' alt='LOADING....!!!!!' />
        </div>
    </div>
    <!--=========== Main Header area ===============-->
    <header id="home">
        <div class="main-navigation sticky-header sticker">
            <div class="container">
                <div class="row">
                    <!-- logo-area-->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo-area">
                            <a href="index.php">
                                <p style="color: white;font-size: 30px;margin-top: 27px">ParkAt</p>
                            </a>
                        </div>
                    </div>
                    <!-- mainmenu-area-->
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="main-menu f-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="index.php">home</a>
                                    </li>
                                    <li>
                                        <a href="#about">about</a>
                                    </li>
                                    <li>
                                        <a class="current" href="chosedestin.php">book</a>
                                    </li>
                                    <li>
                                        <a href="#projects">receipts</a>
                                    </li>
                                    <li>
                                        <a href="viewpakingmap.php">parking map</a>
                                    </li>
                                    <li>
                                        <a href="#blog">profile</a>
                                    </li>
                                    <?php
                                        if(isset($_SESSION["regno"]["name"]))
                                        {
                                            ?>
                                                <li>
                                                    <a href="logout.php">Logout</a>
                                                </li>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>

                                                <li>
                                                    <a href="signin.php">Sign-In</a>
                                                </li>
                                            <?php
                                        }
                                    ?>

                                    <!-- dropdown menu-area-->
                                    
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu-->
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =========Header Image area=========== -->
    <section>
        <div class="header-image-area">
             <div class="intro-text newsletter">
                <h3>Chose Destination </h3>
                <form action="controller.php" method="POST">
                        
                        <select style="height:  40px" name="bookdestin">
                            <option value="ah0">select</option>
                            <option value="ah1">Piksole Building, Ahmedabad</option>
                            <option value="ah2">Star-Bazar, New-Ranip, Ahmedabad</option>
                        </select>
                        <button type="submit" name="btndestin" style="width:  100px" class="subscribe">Next</button>
                </form>
            </div>
        </div>
    </section>
    <!-- =========Abput Us area=========== -->
   
    <!-- =========Services area=========== -->
    
    <!-- =========Projects area=========== -->
    
    <!-- =========Features area=========== -->
   
    <!-- =========Counter-up area=========== -->
   
    <!-- ============= Team Section=============-->

    
    <!-- =========Testimonial area=========== -->
    
    <!-- =========Latest blog area=========== -->
   
    <!-- =========Contact us area=========== -->
   
    <!-- =========Footer area=========== -->
    <footer class="footer-area">
        <!-- footer bottom -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-bottom-r">
                        <!-- about-company widget -->
                        <div class="single-widget border-right">
                            <div class="company-logo">
                                <a href="#">
                                    <p style="color: white;font-size: 30px;margin-top: 27px;font-style: bold;">ParkAt</p>
                                </a>
                            </div>
                            <div class="about-company">
                                <p>Book your desire Parking-slot and <br>make your self Relax from that part</p>
                                <!-- social icon-->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 margin-bottom-r margin-top-small">
                        <!-- links widget -->
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 margin-bottom-r margin-top-small">
                        <!-- links widget -->
                        <div class="single-widget">
                            <h2>Quick Links</h2>
                            <div class="quick-links">
                                <ul>
                                    <li><a href="#">Our Company</a></li>
                                    <li><a href="#">Latest services</a></li>
                                    <li><a href="#">Recent Project</a></li>
                                    <li><a href="#">Latest Blog</a></li>
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 margin-bottom-r margin-top-small">
                        <!-- links widget -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin-top-small">
                        <!-- newsletter widget -->
                        <div class="single-widget">
                            <h2>Newsletter</h2>
                            <div class="newsletter">
                                <p class="footer-w">Subscribe my newsletter now.</p>
                                <form>
                                    <input placeholder="Enter Your Email" type="email" id="newssubmit">
                                    <button type="submit" class="subscribe">Subscribe Now!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>&copy; 2019 All Right Reserved By <a href="#">ParkAt</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Jquery JS -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <!-- Proper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoint Up Js -->
    <script src="js/waypoints.min.js"></script>
    <!-- Counter Up Js -->
    <script src="js/counterup.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="js/meanmenu.min.js"></script>
    <!-- Animation Js -->
    <script src="js/aos.min.js"></script>
    <!-- Owl Carousel Js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- ScrollUp Js -->
    <script src="js/scrollUp.js"></script>
    <!-- magnific-popup Js -->
    <script src="js/magnific-popup.min.js"></script>
    <!-- Main Js -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from smartco.enventer.com/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 12:45:01 GMT -->
</html>
<?php
}
else
{
    header("location:signin.php");
}

?>