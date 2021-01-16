<html>
<head>
<?php
 $conn = mysqli_connect("localhost", "root", "","martinfodb");
 $ID = rand(10000, 99999);

  if(isset($_POST['submit'])){ 
	$status = 'error'; 
// Get file info 
$fileName = basename($_FILES["image"]["name"]); 
$fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); 
if(!empty($_FILES["image"]["name"])) { 

// Allow certain file formats 
$allowTypes = array('jpg','png','jpeg','gif'); 
if(in_array($fileType, $allowTypes)){ 
$image = $_FILES['image']['tmp_name']; 
$imgContent = addslashes(file_get_contents($image)); 

// Insert image content into database 
$query="insert into images (IMAGE,HID) VALUES ('$imgContent','$ID')";
$rs=mysqli_query($conn,$query);


 
if($rs){ 
	$status = 'success'; 
	echo '<script type="text/javascript">alert("Image uploaded successfully.");</script>';
}else{ 
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

?>

</head>
<body>
<form method="post" enctype="multipart/form-data">
Select image to upload:
	<input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form> 
</body>
</html>
