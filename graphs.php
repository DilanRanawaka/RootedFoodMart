<!doctype html>
<!-- <html class="no-js" lang="zxx"> -->

<?php

include_once('Config.php');

$sql3 = "SELECT COUNT(1) FROM harvestinfo  WHERE HName = 'carrot' ";
$result = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
$row3 = mysqli_fetch_array($result);
$total3 = $row3[0];


$sql5 = "SELECT COUNT(1) FROM harvestinfo  WHERE HName = 'beet' ";
$result5 = mysqli_query($conn, $sql5) or die(mysqli_error($conn));
$row5 = mysqli_fetch_array($result5);
$total5 = $row5[0];


$sql6 = "SELECT COUNT(1) FROM harvestinfo  WHERE HName = 'beans' ";
$result6 = mysqli_query($conn, $sql6) or die(mysqli_error($conn));
$row6 = mysqli_fetch_array($result6);
$total6 = $row6[0];


$sql7 = "SELECT COUNT(1) FROM harvestinfo  WHERE HName = 'pumpkin' ";
$result7 = mysqli_query($conn, $sql7) or die(mysqli_error($conn));
$row7 = mysqli_fetch_array($result7);
$total7 = $row7[0];


$sql8 = "SELECT COUNT(1) FROM harvestinfo  WHERE HName = 'pumpkin' ";
$result8 = mysqli_query($conn, $sql8) or die(mysqli_error($conn));
$row8 = mysqli_fetch_array($result8);
$total8 = $row8[0];


$sql56 = "SELECT COUNT(1) FROM harvestinfo  WHERE status= '0' ";
$result56 = mysqli_query($conn, $sql56) or die(mysqli_error($conn));
$row56 = mysqli_fetch_array($result56);
$total56 = $row56[0];

$sql58 = "SELECT COUNT(1) FROM harvestinfo  WHERE status= '1' ";
$result58 = mysqli_query($conn, $sql58) or die(mysqli_error($conn));
$row58 = mysqli_fetch_array($result58);
$total58 = $row58[0];





?>


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

                            <canvas id="bar-chart" width="800" height="250"></canvas>

                            <canvas id="pie-chart" width="800" height="250"></canvas>

                            <canvas id="pie-chart2" width="800" height="250"></canvas>

                            <script>

                            var table = <?php echo $total3 ?>;
                            var table1 = <?php echo $total5 ?>;
                            var table2 = <?php echo $total6 ?>;
                            var table3 = <?php echo $total7 ?>;
                            var table4 = <?php echo $total8 ?>;




                            var carrot = 1 * parseInt(table);
                            var carrot1 = 1 * parseInt(table1);
                            var carrot2 = 1 * parseInt(table2);
                            var carrot3 = 1 * parseInt(table3);
                            var carrot4 = 1 * parseInt(table4 );


                            var s11= <?php echo $total56 ?>;
                            var e11 = 1 * parseInt(s11);
                            var s12= <?php echo $total58 ?>;
                            var e12 = 1 * parseInt(s12);


                            new Chart(document.getElementById("bar-chart"), {
                            type: 'bar',
                            data: {
                            labels: ['Carrot', 'Beans','Beet','pumpkin','onion','leeks' ],
                            datasets: [
                            {
                            label: "Population (millions)",
                            backgroundColor: ["#3e95cd","#3e95cd","#3e95cd","#3e95cd","#3e95cd"],
                            data: [carrot,carrot1,carrot2,carrot3,carrot4]
                            }
                            ]
                            },
                            options: {
                            legend: { display: false },
                            title: {
                            display: true,
                            text: 'vagitable'
                            }
                            }
                            });

                            new Chart(document.getElementById("pie-chart"), {
                            type: 'pie',
                            data: {
                            labels: ["Pending", "confirmaed"],
                            datasets: [{
                            label: "Population (millions)",
                            backgroundColor: ["#3e95cd", "#8e5ea2"],
                            data: [ e11 , e12]
                            }]
                            },
                            options: {
                            title: {
                            display: true,
                            text: 'Pending and non pending '
                            }
                            }
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