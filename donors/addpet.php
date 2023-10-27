<?php
session_start();
if(isset($_SESSION['donoruser']))
{
$donoruser=$_SESSION['donoruser'];

include 'config.php';
$sql1 = "select * from donorregister where demail='".$_SESSION['donoruser']."'";
$result1 = mysqli_query($con,$sql1);
$num1=mysqlI_num_rows($result1);
$sl=0;
if($num1 > 0)
{ 
while($row1 = mysqli_fetch_array($result1))
{ 
$dname=$row1['dname'];
}
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- checkout.html  03:24:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Donors-Addpet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    <?php include("header.php"); ?>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul style="font-family:georgia;">
                            <li><a href="index-2.html">home</a></li>
                            <li>Add pet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="Checkout_section mt-60">
        <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-12 col-md-6" style="font-family:georgia;">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <h3>Add Pet Details</h3>
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                    <label>Name or Breed of Pet </label>
                                    <input type="text" placeholder="Enter the name or breed of pet" name="name"  required>    
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Nick Name </label>
                                    <input type="text" placeholder="Enter the nick name" name="nickname"  required> 
                                </div>
								<div class="col-12 mb-20">
                                    <label>Age</label>
                                    <input placeholder="Age" type="text" name="age" required>     
                                </div>
                                
								<div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Health Condition</label>
                                        <textarea id="order_note" rows="2" name="health" placeholder="Health Condition"required></textarea>
                                    </div>    
                                </div>
								<div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Discription</label>
                                        <textarea id="order_note" rows="2" name="description" placeholder="About pet" required></textarea>
                                    </div>    
                                </div>
								<div class="col-12">
									<label> Image:</label>
								</div>
								<div class="col-lg-12">
									<input type="file" name="image" class="form-control" required><br>
								</div>	
								<div class="order_button col-lg-6">
                                    <button  name="addpet" type="submit">Proceed</button> 
                                </div>								
                            </div>
                        </form> 
						
						
						
						
<?php 
// Include the database configuration file  
include 'config.php'; 
if(isset($_POST["addpet"]))
{ 
	$name=$_POST['name'];
	$nickname=$_POST['nickname'];
	$age=$_POST['age'];
	$health=$_POST['health'];
	$description=$_POST['description'];
    $fname = $_FILES["image"]["name"];
	$filename = $name.$fname;
    $tempname = $_FILES["image"]["tmp_name"];   
    $folder = "image/".$filename;
		
        
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
			// Get all the submitted data from the form
        $sql = "INSERT INTO addpet (pname,nickname,age,health,description,image1,donorid,donorname) VALUES ('".$name."','".$nickname."','".$age."','".$health."','".$description."','".$filename."','".$donoruser."','".$dname."')";
 
        // Execute query
        mysqli_query($con, $sql);
         
           echo "<script>
					alert('Successfully Uploaded');
				</script>";
				echo "<script> location.href='viewpet.php'; </script>";
		
        }else{
            echo "<script>
					alert('Upload Failed, size should be less than 2MB');
				</script>";
      }
} 
?>
						
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->

   <?php include("footer.php"); ?>


<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- checkout.html  03:24:27 GMT -->
</html>
<?php
}
else
{
	echo "<script> location.href='donorlogin.php'; </script>";
}	
?>