
<?php

    session_start();
    if(isset($_SESSION['regno']['name']))
    {
    if($_SESSION['destin']['id']!=null)
    {   
        if($_SESSION['hour1']['id']!=null && $_SESSION['min1']['id']!=null && $_SESSION['hour2']['id']!=null && $_SESSION['min2']['id']!=null)
        {
    require "dao.php";
    $d = new dao();

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

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-theme.css">
    <script type="text/javascript" src="jquery.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->

    <style type="text/css">
        span:hover{
            background-color: #6b6fff;
            color: white;

        }
    </style>
    <style type="text/css">
        a{
            text-decoration: none;
        }
        .sp1{
            display: block;
            height: 140px;
            width: 60px;
            border: 1px solid black;
            text-align: center;
            padding-top: 60px;
        }
        .sp2{
            display: block;
            height: 60px;
            width: 140px;
            border: 1px solid black;
            text-align: center;
            padding-top: 20px;
        }
        td,th,table{
            border-collapse: collapse;
            margin:0px;
        }
    </style>
    
    <script type="text/javascript">
        
        window.onload = function() {
            <?php
                $result = $d->getSlotsAvailibility();
                while($raws=mysqli_fetch_array($result))
                {
                    //echo $raw["slot_id"]." - ".$raw["slot_status"]."<br>";
                    if($raws["slot_status"]=="1")
                    {
                        $j = $raws["endtime"];

                    ?>

                        document.getElementById('<?php echo $raws["slot_id"] ?>').style='background-color:gray;color:white;';
                        

                    <?php
                    }
                    else{
                        ?>
                            document.getElementById('<?php echo $raws["slot_link"] ?>').href='controllerbook.php?pno=<?php echo $raws["slot_id"]?>';
                        <?php
                    }
                    
                }

            ?>
            
            
            
        }

    </script>
    
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
                <h1>Chose Time-slot <br> From below chart</h1>
                
            </div>
        </div>
    </section>
    <section>
        
        
        
        <div style="margin-top: 50px" class="container">
    <div class="raw">
        
        <div class="responsive col-md-12">
            
            <form action="controller.php" method="post">
        <input type="submit" class="btn btn-primary" value="Refresh" name="nmrefreshbtn">    
        </form>

<table>

    <tr>
        <td><a id="a1"><span id="p1" class="sp1">p1</span></a></td>
        <td><a id="a2"><span id="p2" class="sp1">p2</span></a></td>
        <td><a id="a3"><span id="p3" class="sp1">p3</span></a></td>
        <td><a id="a4"><span id="p4" class="sp1">p4</span></a></td>
        <td><a id="a5"><span id="p5" class="sp1">p5</span></a></td>
        <td><a id="a6"><span id="p6" class="sp1">p6</span></a></td>
        <td><a id="a7"><span id="p7" class="sp1">p7</span></a></td>
        <td><a id="a8"><span id="p8" class="sp1">p8</span></a></td>
        <td><a id="a9"><span id="p9" class="sp1">p9</span></a></td>
        <td><a id="a10"><span id="p10" class="sp1">p10</span></a></td>
        <td><a id="a11"><span id="p11" class="sp1">p11</span></a></td>
        <td><a id="a12"><span id="p12" class="sp1">p12</span></a></td>
        <td><a id="a13"><span id="p13" class="sp1">p13</span></a></td>
        <td><a id="a14"><span id="p14" class="sp1">p14</span></a></td>
        <td><a id="a15"><span id="p15" class="sp1">p15</span></a></td>
        <td><a id="a16"><span id="p16" class="sp1">p16</span></a></td>
        <td><a id="a17"><span id="p17" class="sp1">p17</span></a></td>

    </tr>

</table>
</div>
</div>
</div>
    <div style="margin-top: 140px;" class="raw">
        <div class="col-md-3">
        <table>
        <tr><td><a id="a18"><span id="p18" class="sp2">p18</span></a></td></tr>
        <tr><td><a id="a19"><span id="p19" class="sp2">p19</span></a></td></tr>
        <tr><td><a id="a20"><span id="p20" class="sp2">p20</span></a></td></tr>
        <tr><td><a id="a21"><span id="p21" class="sp2">p21</span></a></td></tr>
        <tr><td><a id="a22"><span id="p22" class="sp2">p22</span></a></td></tr>
        </table>
        </div>  
        
        <div class="col-md-3">
            <table>
    <tr>
        <td><a id="a23"><span id="p23" class="sp1">p23</span></a></td>
        <td><a id="a24"><span id="p24" class="sp1">p24</span></a></td>
        <td><a id="a25"><span id="p25" class="sp1">p25</span></a></td>
        <td><a id="a26"><span id="p26" class="sp1">p26</span></a></td>
        <td><a id="a27"><span id="p27" class="sp1">p27</span></a></td>
        <td><a id="a28"><span id="p28" class="sp1">p28</span></a></td>
        <td><a id="a29"><span id="p29" class="sp1">p29</span></a></td>
        <td><a id="a30"><span id="p30" class="sp1">p30</span></a></td>
        <td><a id="a31"><span id="p31" class="sp1">p31</span></a></td>



    </tr>

</table>        

        </div>
        <div class="col-md-3"></div>
        <div style="margin-left:  338px" class="col-md-3">
        <table>
        <tr><td><a id="a32"><span id="p32" class="sp2">p32</span></a></td></tr>
        <tr><td><a id="a33"><span id="p33" class="sp2">p33</span></a></td></tr>
        <tr><td><a id="a34"><span id="p34" class="sp2">p34</span></a></td></tr>
        <tr><td><a id="a35"><span id="p35" class="sp2">p35</span></a></td></tr>
        <tr><td><a id="a36"><span id="p36" class="sp2">p36</span></a></td></tr>
        </table>

        </div>  
    </div>


        
        <div style="margin-left: 338px;margin-top: -162px;" class="col-md-3">
            <table>
    <tr>
        <td><a id="a37"><span id="p37" class="sp1">p37</span></a></td>
        <td><a id="a38"><span id="p38" class="sp1">p38</span></a></td>
        <td><a id="a39"><span id="p39" class="sp1">p39</span></a></td>
        <td><a id="a40"><span id="p40" class="sp1">p40</span></a></td>
        <td><a id="a41"><span id="p41" class="sp1">p41</span></a></td>
        <td><a id="a42"><span id="p42" class="sp1">p42</span></a></td>
        <td><a id="a43"><span id="p43" class="sp1">p43</span></a></td>
        <td><a id="a44"><span id="p44" class="sp1">p44</span></a></td>
        <td><a id="a45"><span id="p45" class="sp1">p45</span></a></td>

    </tr>

</table>        

        </div>

<div style="margin-top: 550px;margin-bottom: 50px" class="container">
    <div class="raw">
        
        <div class="col-md-12">
            
        
<table>
    <tr>
        <td><a id="a46"><span id="p46" class="sp1">p46</span></td>
        <td><a id="a47"><span id="p47" class="sp1">p47</span></td>
        <td><a id="a48"><span id="p48" class="sp1">p48</span></td>
        <td><a id="a49"><span id="p49" class="sp1">p49</span></td>
        <td><a id="a50"><span id="p50" class="sp1">p50</span></td>
        <td><a id="a51"><span id="p51" class="sp1">p51</span></td>
        <td><a id="a52"><span id="p52" class="sp1">p52</span></td>
        <td><a id="a53"><span id="p53" class="sp1">p53</span></td>
        <td><a id="a54"><span id="p54" class="sp1">p54</span></td>
        <td><a id="a55"><span id="p55" class="sp1">p55</span></td>
        <td><a id="a56"><span id="p56" class="sp1">p56</span></td>
        <td><a id="a57"><span id="p57" class="sp1">p57</span></td>
        <td><a id="a58"><span id="p58" class="sp1">p58</span></td>
        <td><a id="a59"><span id="p59" class="sp1">p59</span></td>
        <td><a id="a60"><span id="p60" class="sp1">p60</span></td>
        <td><a id="a61"><span id="p61" class="sp1">p61</span></td>
        <td><a id="a62"><span id="p62" class="sp1">p62</span></td>


    </tr>

</table>
</div>
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
            unset($_SESSION['destin']['id']);
            header("location:chosedestin.php");

        }
    }
    else
    {
        header("location:chosedestin.php");

    }
}
else
{
    header("location:signin.php");
}
?>