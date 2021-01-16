<!doctype html>
<!-- <html class="no-js" lang="zxx"> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Harvest</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
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
    
    require("db.php");
    /*
    $conn = mysqli_connect("localhost", "root", "","martinfodb");
    $ID = rand(10000, 99999);

    if(isset($_REQUEST['submit']))
    { 
        $status = 'error'; 
    // Get file info 
    $fileName = basename($_FILES["image"]["name"]); 
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); 
                if(!empty($_FILES["image"]["name"])) { 

                // Allow certain file formats 
                $allowTypes = array('jpg','png','jpeg','gif'); 
                        if(in_array($fileType, $allowTypes))
                        { 
                        $image = $_FILES['image']['tmp_name']; 
                        $imgContent = addslashes(file_get_contents($image)); 

                        // Insert image content into database 
                        $query="insert into images (IMAGE,HID) VALUES ('$imgContent','$ID')";
                        $rs=mysqli_query($conn,$query);

                                if($rs){ 
                                    $status = 'success'; 
                                    echo '<script type="text/javascript">alert("Image uploaded successfully.");</script>';
                                }
                                else{ 
                                    echo '<script type="text/javascript">alert("Image upload failed, please try again.");</script>';
                                }  
                        }
                        else{ 
                            echo '<script type="text/javascript">alert("Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.");</script>';
                            } 
                }
                else{ 
                    echo '<script type="text/javascript">alert("Please select an image file to upload.");</script>';
                    } 
    }
    else{
        echo '<script type="text/javascript">alert("Please retry");</script>';
    }*/
    $ID = rand(10000, 99999);
    if (isset($_REQUEST['add'])) {

        $nic = $_REQUEST['nic'];
        $email = $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $type = $_REQUEST['Type'];
        $Hname = $_REQUEST['Hname'];
        $price = $_REQUEST['price'];
        $weight = $_REQUEST['weight'];
        $lat = $_REQUEST['lat'];
        $long = $_REQUEST['long'];


        $query = "select * from registration where nic='$nic' and email='$email' and Fname='$name'";
       
         $rs = mysqli_query($connection, $query);
       $rowcount = mysqli_num_rows($rs);
        if ($rowcount>0) {
            $sql = "insert into harvestinfo (HID,NIC,Email,Name,Date,Type,HName,UPrice,Weight,lat,lng,status) values ('$ID','$nic','$email','$name','$date','$type','$Hname','$price','$weight','$lat','$long','1')";
            $result = mysqli_query($connection, $sql);
            if ($result != NULL) {
                echo '<script type="text/javascript">alert("Harvest infomation recorded successfully");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Please check the data provided");</script>';
        }
    }

    if (isset($_REQUEST['update'])) {
        $nic = $_REQUEST['nic'];
        $email = $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $date = $_REQUEST['date'];
        $type = $_REQUEST['Type'];
        $Hname = $_REQUEST['Hname'];
        $price = $_REQUEST['price'];
        $weight = $_REQUEST['weight'];
        $lat = $_REQUEST['lat'];
        $long = $_REQUEST['long'];

        $query = "select * from registration where NIC='$nic' and Email='$email'";
        $rs = mysqli_query($connection, $query);
        $rowcount = mysqli_num_rows($rs);
        if ($rowcount == 1) {
            
            $sql = "update harvestinfo set UPrice=$price,Weight=$weight where NIC='$nic' AND Email='$email'";
            if (mysqli_query($connection, $sql)) {
                echo '<script type="text/javascript">alert("Harvest infomation updated successfully");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Please check the credentials provided");</script>';
        }
    }
   

    if (isset($_REQUEST['delete'])) {
        $nic = $_REQUEST['nic'];
        $email = $_REQUEST['email'];

        $query = "select * from registration where nic='$nic' and email='$email'";
        $rs = mysqli_query($connection, $query);
        $rowcount = mysqli_num_rows($rs);
        if ($rowcount == 1) {
            $sql = "Delete from harvestinfo where NIC='$nic' AND Email='$email'";
            if (mysqli_query($connection, $sql)) {
                echo '<script type="text/javascript">alert("Harvest infomation Deleted successfully");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Please check the credentials provided");</script>';
        }
    }
   
    ?>

</head>

<body>

    <!--header-area start-->
    <header class="header-area">
        <!--header-->
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


    <div class="contact-area mt-100 sm-mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 sm-mt-75 ">
                    <div class="section-title text-center">
                        <h2>Harvest Information</h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-8 col-md-8 sm-mt-75">
                    <div class="contact-form style-3">
                        <form id="harvestform">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="NIC No" id="nic" name="nic" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Email" id="email" name="email" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="First Name" id="name" name="name" />
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <label for="exampleFormControlFile1"> Date of Harvest</label>
                                    <input type="date" placeholder="Date" id="date" name="date" />
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <!-- <input type="text" placeholder="Harvest Type" id="harvesttype" /> -->
                                    <label for="Type">Choose Harvest Type:</label>
                                    
                                    <select  id="Type" name="Type">
                                        <option value="vegetable" value="vegetable">Vegetable</option>
                                        <option value="fruits" value="fruits">Fruits</option>
                                        <option value="grains" value="grains">Grains</option>
                                        <option value="leaves" value="leaves">Leaves</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <!-- <input type="text" placeholder="Name of harvest" id="harvestname" /> -->
                                    <br>
                                    <label for="Hname">Choose Harvest :</label>
                                    
                                    <select  id="Hname" name="Hname">
                                        <option value="carrot" value="carrot">Carrot</option>
                                        <option value="beans" value="beans">Beans</option>
                                        <option value="beet" value="beet">Beet</option>
                                        <option value="pumpkin" value="pumpkin">Pumpkin</option>
                                        <option value="onion" value="onion">Onion</option>
                                        <option value="leeks" value="leeks">Leeks</option>
                                        <option value="potato" value="potato">Potato</option>
                                        <option value="tomato" value="tomato">Tomato</option>
                                        <option value="other" value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Unit Price (Rs per kg)" id="unitprice" name="price" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Weight (kg)" id="weight" name="weight" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Latitude" id="lat" name="lat" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Longitude" id="long" name="long" />
                                </div>
                                 
                                <div class="form-group col-lg-12">
                                    <br>
                                    <form  method="POST" enctype="multipart/form-data">
                                    <label for="image">Select image to upload:</label>
                                        <input type="file" name="image" id="image">
                                        <input type="submit" value="Upload Image" name="submit">
                                        </form>
                                </div>

                                <!-- <div class="col-lg-12">
                                    <textarea placeholder="Message" id="message"></textarea>
                                </div> -->
                                <div class="col-lg-4">
                                <!--<input type="submit" name="add" class="btn-common" value="add" id="add">-->
                                    <button type="submit" class="btn-common" id="add" name="add" value="add">ADD</button>
                                </div>
                                <div class="col-lg-4">
                                    <button type="submit" class="btn-common" id="update" name="update" value="update">UPDATE</button>
                                </div>
                                <div class="col-lg-4">
                                    <button type="submit" class="btn-common" id="clear" name="delete" value="delete">DELETE</button>
                                </div>
                                <!-- <div class="col-lg-8 text-left pt-30">
                                    <div id="msgSubmit" class="hidden"></div>
                                </div> -->
                            </div>
                        </form>
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

</html>