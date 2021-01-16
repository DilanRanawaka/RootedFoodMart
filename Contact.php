<!doctype html>
<!-- <html class="no-js" lang="zxx"> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link rel="manifest" href="site.html"> -->
    <!-- <link rel="apple-touch-icon" href="icon.html"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="assets/css/elegant.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- helper css -->
    <link rel="stylesheet" href="assets/css/helper.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/index-style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <?php
    $conn = mysqli_connect("localhost", "root", "","martinfodb");
    if(isset($_REQUEST['msgSubmit'])){

        $ID = $_REQUEST['id'];
        $nic = $_REQUEST['nic'];
        $email = $_REQUEST['mail'];
        $detail = $_REQUEST['det'];
        $info = $_REQUEST['info'];

        $query="select * from registration where nic='$nic'";
        $rs=mysqli_query($conn,$query);
        $rowcount = mysqli_num_rows($rs);
        if($rowcount == 1)
        {
            $sql = "insert into order (OrderID,FNIC,Email,Detail,AddInfo) values ('$ID','$nic','$email','$detail','$info')";
            if(mysqli_query($conn, $sql))
            {
                echo "<h1 align=center>Your Order was placed successfully.</h1>";
            } 
        }
        else
        {
            echo '<script type="text/javascript">alert("This Farmer does not exist");</script>';
        }

}
    mysqli_close($conn);
?>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--header-area start-->
    <header class="header-area">
        <!--header-top-->
        <!--header-bottom-->
        <div id="sticker" class="header-bottom">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-2">
                        <div class="logo">
                            <h4><a href="index.html">ROOTED FOOT MART</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="mainmenu text-center">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="location.html">Mart</a>
                                    </li>
                                    <li><a href="harvest.html">Harvest</a>
                                    </li>
                                    <li><a href="contact.html">Place Order</a>
                                    </li>
                                    <li><a href="graphs.html">Insights</a>
                                    </li>
                                    <li><a href="#">Srvices</a>
                                    </li>
                                    <li><a href="">Contact Us</a>
                                    </li>
                                    <li><a href="login.html">Sign In</a>
                                    </li>
                                    <li><a href="register.html">Sign Up</a>
                                    </li>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header-area end-->

    <!--contact-area start-->
    <div class="contact-area mt-100 sm-mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 sm-mt-75">
                    <div class="contact-form style-3">
                        <form id="contactForm" data-toggle="validator" method="POST" action="http://careeraid.net/html/garden-preview/assets/php/contact.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Order ID" id="orderid" required data-error="NEW ERROR MESSAGE" />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Farmer's NIC No" id="nic" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Email" id="email" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Harvest Detail" id="subject" />
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Additional Information" id="message"></textarea>
                                </div>

                                <div class="col-lg-8 text-left pt-30">
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-4">
                            <button class="btn-common" id="form-submit">Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--contact-area end-->

    <!--footer-area start-->
    <footer class="footer-area">
        <!--footer-top-->
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget style-2">
                            <h4>Food Mart</h4>
                            <div class="about-widget">
                                <p>.................................................</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget style-2">
                            <h4>Contact Info</h4>
                            <div class="contact-info style-3">
                                <ul>
                                    <li><i class="fa fa-home"></i>Colombo, Sri Lanka</li>
                                    <li><i class="fa fa-phone"></i>011-5490732</li>
                                    <li><i class="fa fa-envelope"></i>keels@gmail.com</li>
                                    <li><i class="fa fa-clock-o"></i>Monday - Sunday: 9.00AM - 9.00PM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget style-2">
                            <h4>Navigation</h4>
                            <div class="fooer-menu">
                                <ul class="mr-40">
                                    <li><a href="#">Mart</a></li>
                                    <li><a href="#">Harvest</a></li>
                                    <li><a href="#">Order</a></li>
                                    <li><a href="#">Insights</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget style-2">
                            <div class="social-icons style-3 mt-35">
                                <p>Follow us on</p>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->

    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jquery-1.12.0 version -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstra.min js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- meanmenu js -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- easing js -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!---venobox-js-->
    <script src="assets/js/venobox.min.js"></script>
    <!---slick-js-->
    <script src="assets/js/slick.min.js"></script>
    <!---waypoints-js-->
    <script src="assets/js/waypoints.js"></script>
    <!---counterup-js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!---isotop-js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery-ui js -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- jquery.countdown js -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

</body>

</html>