<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/login-style.css">
    <link rel="stylesheet" type="text/css" href="css/login-util.css">

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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "martinfodb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (isset($_REQUEST['submit'])) {
        $nic = $_REQUEST['nic'];
        $pass = $_REQUEST['pass'];
        $query = "select * from registration where nic='$nic' and pass='$pass'";
        $rs = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($rs);
        if ($rowcount == 1) {
            echo '<script type="text/javascript">alert("WELCOME");</script>';
            header('location:index.php?user=$nic');
        } else {
            echo '<script type="text/javascript">alert("Please check your NIC & Password");</script>';
        }
    }
    mysqli_close($conn);
    ?>
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
                                    <li><a href="index.php">Home</a>
                                    </li>
                                    <li><a href="location.php">Mart</a>
                                    </li>
                                    <li><a href="harvest.php">Harvest</a>
                                    </li>
                                    <li><a href="contact.php">Place Order</a>
                                    </li>
                                    <li><a href="graphs.php">Insights</a>
                                    </li>
                                    <li><a href="login.php">Sign In</a>
                                    </li>
                                    <li><a href="register.php">Sign Up</a>
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

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    <span class="login100-form-title">
                        Sign In
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="">
                        <input class="input100" type="text" name="nic" placeholder="NIC No" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="password" name="pass" placeholder="Password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            Sign in
                        </button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Don’t have an account?
                        </span>

                        <a href="#" class="txt3">
                            Sign up now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

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