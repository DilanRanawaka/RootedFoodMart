<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/register-style.css" />
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
    $link = mysqli_connect("localhost", "root", "", "martinfodb");

    if (isset($_REQUEST['register'])) {
        $FName = $_REQUEST['first_name'];
        $LName = $_REQUEST['last_name'];
        $NIC = $_REQUEST['nic'];
        $Pass = $_REQUEST['password'];
        $conpass = $_REQUEST['confirmpassword'];
        $address = $_REQUEST['address'];
        $street = $_REQUEST['street'];
        $district = $_REQUEST['district'];
        $code = $_REQUEST['zip'];
        $province = $_REQUEST['Province'];
        $email = $_REQUEST['email'];
        $number = $_REQUEST['phone'];

        if ($Pass == $conpass) {
            $query = "insert into registration (fname,lname,nic,pass,address,street,district,zip,province,email,pno) values ('$FName','$LName','$NIC','$Pass','$address','$street','$district','$code','$province','$email','$number')";
            $result = mysqli_query($link, $query);
      
        if($result != NULL)
             {
                echo '<script type="text/javascript">alert("Registration is successful. Please log in.");</script>';
                header('location: login.php');
            } else {
                echo '<script type="text/javascript">alert("Registration is unsuccessful.");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Passowrds do not match, Please check your password again");</script>';
        }
    }
    mysqli_close($link);
    ?>
</head>

<header class="header-area">
    <!--header-top-->
    <div class="header-top d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </div>
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
                                <li><a href="index.php">Home</a>
                                </li>
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
                                <li><a href="#">Services</a>
                                </li>
                                <li><a href="">Contact Us</a>
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

<body class="form-v10">
    <div class="page-content">
        <div class="form-v10-content">
            <form class="form-detail" action="#" method="post" id="myform">
                <div class="form-left">
                    <h2>Register</h2>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-row form-row-1">
                        <input type="text" name="nic" class="nic" id="nic" placeholder="NIC No" required>
                    </div>
                    <div class="form-row form-row-3">
                        <input type="password" name="password" class="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-row form-row-4">
                        <input type="password" name="confirmpassword" class="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-right">
                    <h2>Contact Details</h2>
                    <div class="form-row">
                        <input type="text" name="address" class="address" id="address" placeholder="Address" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="street" class="street" id="street" placeholder="Street" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-1">
                            <input type="text" name="district" class="district" id="district" placeholder="District" required>
                        </div>
                        <div class="form-row form-row-2">
                            <input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <select name="Province">
                            <option value="Province">Province</option>
                            <option value="Western Province">Western Province</option>
                            <option value="Southern Province">Southern Province</option>
                            <option value="Eastern Province">Eastern Province</option>
                            <option value="Northern Province">Northern Province</option>
                            <option value="North Western Province">North Western Province</option>
                            <option value="North Central Province">North Central Province</option>
                            <option value="Uva Province">Uva Province</option>
                            <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                        </select>
                        <span class="select-btn">
                            <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>

                    <div class="form-row">
                        <input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <div class="form-row form-row-3">
                            <input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="form-row-last">
                        <input type="submit" name="register" class="register" value="Register">
                    </div>
                </div>
            </form>
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