<!doctype html>
<!-- <html class="no-js" lang="zxx"> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Location</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <?php
    // include_once 'header.php';
    include_once 'locations_model.php';
    ?>


</head>

<body>
<?php
require("header.php");
?>
    <div class="page-banner-area bg-1">
        <div class="container">
            <div class="row align-items-center height-400">
                <div class="col-lg-12">
                    <div class="page-banner-text text-center mt-minus-10">
                        <h2>Locate Farmers</h2>
                        <ul class="site-breadcrumb text-black">
                            <li><a href="#">Home</a> <span>></span></li>
                            <li>Location <span>></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="google-map-area mt-80 sm-mt-75 xs-mt-50">
        <div id="googleMap" class="gmap-two"></div>
    </div> -->
    <!-- <div id="googleMap" style="width:100%;height:400px"></div> -->
    <div id="map"></div>

    <script>
        var map;
        var marker;
        var infowindow;
        var red_icon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
        var purple_icon = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var locations = <?php get_all_locations() ?>;

        function initMap() {
            var france = {
                lat: 6.785277702704765,
                lng: 80.11392854687506
            };
            infowindow = new google.maps.InfoWindow();
            map = new google.maps.Map(document.getElementById('map'), {
                center: france,
                zoom: 8,

            });


            var i;
            var confirmed = 0;
            for (i = 0; i < locations.length; i++) {

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: locations[i][5] === '1' ? red_icon : purple_icon,
                    html: document.getElementById('form')
                });




                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        confirmed = locations[i][5] === '1' ? 'checked' : 0;
                        $("#location_status").prop(confirmed, locations[i][5]);
                        $("#id").val(locations[i][0]);
                        $("#lat").val(locations[i][1]);
                        $("#lng").val(locations[i][2]);
                        $("#NIC").val(locations[i][3]);
                        $("#Email").val(locations[i][4]);
                        $("#status").val(locations[i][5]);


                        $("#form").show();
                        infowindow.setContent(marker.html);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
    </script>


    <div style="display: none" id="form">


        <div class="container" style="background-color: #61bc47;">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="" id="image">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">ORDER<i class="material-icons right"></i></span>


                    <h6>Harvest Type:</h6>
                    <textarea disabled id='id'></textarea>
                    <h6>Farmer NIC:</h6>
                    <textarea disabled id='NIC'></textarea>
                    <h6>Farmer Email:</h6>
                    <textarea disabled id='Email'></textarea>
                    <h6>Status:</h6>
                    <textarea disabled id='status'></textarea>

                    <button type="button" class="btn btn-secondary" id="myButton">Order</button>
                    <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "Contact.php";
    };
    </script>


                </div>
            </div>
        </div>
    </div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqyQucrB0MzSqxh-AS0iBAnqRec7MQwto&callback=initMap">


    </script>
    <style>
        textarea {

            border: none;
            background-color: #fff;
            font-size: 20px;
            color: #000;
        }
    </style>
    <style>
        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
        #map {
            height: 100%;
        }
    </style>

    <!-- <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9kJ-z44cnQ3QJHff1sQTlbnEYH-plu48&callback=myMap"></script> -->
    <!-- <script>
        google.maps.event.addDomListener(window, 'load', myMap);

        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(6.9271, 79.8612),
                scrollwheel: true,
                zoom: 10,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(6.9271, 79.8612),
                map: map


            });

            var infowindow = new google.maps.InfoWindow({
                content: "Farmer 1"
            });

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(6.0535, 80.2210),
                map: map


            });


            var infowindow = new google.maps.InfoWindow({
                content: "Farmer 1"
            });

            // google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        }
    </script> -->

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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