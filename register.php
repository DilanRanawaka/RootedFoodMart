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
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a>
                                </li>
                                <li><a href="#">Pages</a>
                                    <!-- <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="#">Services</a>
                                    <!-- <ul class="submenu">
                                        <li><a href="service-1.html">Service 1</a></li>
                                        <li><a href="service-2.html">Service 2</a></li>
                                        <li><a href="service-3.html">Service 3</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="#">Gallery</a>
                                    <!-- <ul class="submenu">
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="gallery-details.html">Gallery Details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="#">Blog</a>
                                    <!-- <ul class="submenu">
                                        <li><a href="blog-1.html">Blog One</a></li>
                                        <li><a href="blog-2.html">Blog Two</a></li>
                                        <li><a href="blog-3.html">Blog Three</a></li>
                                        <li><a href="blog-4.html">Blog Four</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="#">Shop</a>
                                    <!-- <ul class="mega-menu"> -->
                                    <!-- <li class="megamenu-single"> -->
                                    <!-- <span class="mega-menu-title">Shop Page</span> -->
                                    <!-- <ul>
                                                <li><a href="shop.html">Shop Sidebar</a></li>
                                                <li><a href="shop-full-width.html">Shop Fullwidth</a></li>
                                                <li><a href="shop-filter.html">Shop Filter</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                            </ul> -->
                                    <!-- </li> -->
                                    <!-- <li class="megamenu-single"> -->
                                    <!-- <span class="mega-menu-title">Featured</span> -->
                                    <!-- <ul>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Check Out</a></li>
                                                <li><a href="order-complete.html">Complete</a></li>
                                            </ul> -->
                                    <!-- </li> -->
                                    <!-- <li class="megamenu-single">
                                            <img src="assets/images/ad/3.jpg" alt="" />
                                        </li> -->
                                    <!-- </ul> -->
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="search-and-cart">
                        <!--                         
                        <div class="cart-link">
                            <a href="javascript:void(0);">
                                <i class="fa fa-shopping-cart"></i>
                                <span>2</span>
                            </a>
                            <ul class="list-none cart-dropdown">
                                <li>
                                    <div class="mini-cart-total">
                                        <h5>Total: $280.00</h5>
                                    </div>
                                    <div class="mini-cart-checkout">
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
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
                        <input type="text" name="password" class="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-row form-row-4">
                        <input type="text" name="confirmpassword" class="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
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
                            <option value="country">Province</option>
                            <option value="Vietnam">Western Province</option>
                            <option value="Malaysia">Southern Province</option>
                            <option value="India">Eastern Province</option>
                            <option value="country">Northern Province</option>
                            <option value="Vietnam">North Western Province</option>
                            <option value="Malaysia">North Central Province</option>
                            <option value="India">Uva Province</option>
                            <option value="country">Sabaragamuwa Province</option>
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