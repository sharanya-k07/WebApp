<?php
session_start();
if(isset($_SESSION['shopuser']))
{
$shopuser=$_SESSION['shopuser'];

include 'config.php';
$sql1 = "select * from petshopregister where psemail='".$_SESSION['shopuser']."'";
$result1 = mysqli_query($con,$sql1);
$num1=mysqlI_num_rows($result1);
$sl=0;
if($num1 > 0)
{ 
while($row1 = mysqli_fetch_array($result1))
{ 
$psname=$row1['psname'];
}
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- checkout.html  03:24:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add product-Paws spot</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    
    <!-- CSS 
    ========================= -->
   

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
                            <li><a href="index.php">home</a></li>
                            <li>Add product</li>
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
					<center><h3 style="background-color:#1EDE08;">Add Product Details</h3></center>
                        <form action="#" method="POST" enctype="multipart/form-data" style="padding: 15px 20px; background-color:#F6FB8E;">
                            
                            <div class="row" >
							<div class="col-12 mb-20">
                                    <label>Product Name</label>
                                    <input placeholder="Enter the product name" type="text" name="name" required>     
                                </div>
								<div class="col-12 mb-20">
                                    <label>Product Price</label>
                                    <input placeholder="Enter the product price" style="font-family:times;" type="text" name="pprice" title="only numbers" required>     
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Old Price</label>
                                    <input placeholder="Enter the old price"  style="font-family:times;" type="text" name="oldprice" required>     
                                </div>
								
								<div class="col-12 mb-20">
                                    <label>Stock status</label>
                                    <input placeholder="Available or not" type="text" name="sstatus" pattern="[A-Za-z]+" title="letters only" required>     
                                </div>
								<div class="col-12 mb-20">
                                    <label>Maximum Quantity </label>
                                    <input placeholder="Enter the maximum quantity available" style="font-family:times;" type="text" name="quantity" title="only numbers" required>     
                                </div>
	
								<div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Details about product</label>
                                        <textarea id="order_note" rows="2" placeholder="About the product" name="pdetails" required></textarea>
                                    </div>    
                                </div>
								
								<div class="col-12">
									<label> Image:</label>
									<input type="file" class="form-control" name="image" required><br>
								</div>
								<div class="order_button" >
                                    <button  type="submit" name="add">ADD PRODUCT</button> 
                                </div>								
                            </div>
                        </form> 
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
	
	<?php 
// Include the database configuration file  
include 'config.php'; 
if(isset($_POST["add"]))
{ 
	$name=$_POST['name'];
	$pprice=$_POST['pprice'];
	$oldprice=$_POST['oldprice'];
	$sstatus=$_POST['sstatus'];
	$quantity=$_POST['quantity'];
	$pdetails=$_POST['pdetails'];
    $fname = $_FILES["image"]["name"];
	$filename = $name.$fname;
    $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "image/".$filename;
		
        
 
        // Execute query
        
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
			// Get all the submitted data from the form
        $sql = "INSERT INTO products (name,pprice,oldprice,sstatus,quantity,pdetails,image,shopuser,psname) VALUES ('".$name."','".$pprice."','".$oldprice."','".$sstatus."','".$quantity."','".$pdetails."','".$filename."','".$shopuser."','".$psname."')";
		mysqli_query($con, $sql);
           echo "<script>
					alert('Upload Successful');
				</script>";
        }else{
            echo "<script>
					alert('Upload Failed, IMAGE should be less than 2GB');
				</script>";
      }
} 
?>
	
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
	echo "<script> location.href='shoplogin.php'; </script>";
}	
?>