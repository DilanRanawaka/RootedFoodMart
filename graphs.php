<!doctype html>
<!-- <html class="no-js" lang="zxx"> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FOOD MART</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


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

</head>

<body>
    <!--header-area start-->
    <header class="header-area">
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
                                    <li><a href="#">Services</a>
                                    </li>
                                    <li><a href="">Contact Us</a>
                                    </li>
                                    |
                                    <li><a href="login.html">Sign In</a>
                                    </li>
                                    <li><a href="register.html">Sign Up</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header-area end-->

    <div class="page-banner-area bg-1">
        <div class="container">
            <div class="row align-items-center height-400">
                <div class="col-lg-12">
                    <div class="page-banner-text text-center mt-minus-10">
                        <h2>Insights</h2>
                        <ul class="site-breadcrumb text-black">
                            <li><a href="#">Home</a> <span>></span></li>
                            <li><span>Insights</span>></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area mt-100 sm-mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="single-blog style-3 mb-60">
                        <div class="row">
                            <canvas id="myChart"></canvas>
                            <script>
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var chart = new Chart(ctx, {
                                    // The type of chart we want to create
                                    type: 'line',

                                    // The data for our dataset
                                    data: {
                                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Octomber', 'November', 'December'],
                                        datasets: [{
                                            label: 'My First dataset',
                                            backgroundColor: 'rgb(255, 99, 132)',
                                            borderColor: 'rgb(255, 99, 132)',
                                            data: [0, 10, 5, 2, 20, 30, 45]
                                        }]
                                    },

                                    // Configuration options go here
                                    options: {}
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="single-blog style-3 mb-60">
                    <div class="row"></div>

                </div>
            </div>
            <div class="single-blog style-3 mb-60">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    </div>


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