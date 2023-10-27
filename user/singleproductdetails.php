<?php
session_start();
if(isset($_SESSION['petuser']))
{
$petuser=$_SESSION['petuser'];
if(isset($_POST['view']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$id=$value;	
	}
	$_SESSION['item']=$id;
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- product-details.html  03:24:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User-Singleproductdetails</title>
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
                            <li><a href="index-2.html">home</a></li>
                            <li>Product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
				<?php
								include 'config.php';
								$sql1 = "select * from products where pid='".$_SESSION['item']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$name=$row1['name'];
								$pprice=$row1['pprice'];
								$oldprice=$row1['oldprice'];
								$sstatus=$row1['sstatus'];
								$quantity=$row1['quantity'];
								$pdetails=$row1['pdetails'];
								$image=$row1['image'];
								}
								}
								?>
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="../petshop/image/<?php echo $image; ?>" data-zoom-image="../petshop/image/<?php echo $image; ?>" alt="big-1">
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                     
                           
                            <h1 style="font-family:georgia;color:maroon;"><?php echo $name; ?></h1>
                            
                            <div class="price_box">
                                <span class="current_price" style="font-family:times;">Rs. <?php echo $pprice; ?></span>
                                <span class="old_price" style="font-family:times;">Rs.<?php echo $oldprice; ?></span>
                                
                            </div>
                            <div class="product_desc">
                                <ul>
                                    <li style="font-family:georgia;">Stock <?php echo $sstatus; ?></li>
                                    <li style="font-family:georgia;">Free delivery available*</li>
                                </ul>
                                <p><?php echo $pdetails; ?></p>
                            </div>
							
                            <div class="product_variant quantity">
                                <label style="font-family:georgia;">Maximum Quantity</label> &nbsp&nbsp&nbsp
                                <span class="old_price"><?php echo $quantity; ?></span>
							 </div>
							 <form method="post" action="#">
                            <div class="product_variant quantity">
                                <label style="font-family:georgia;">Quantity</label>
                                <input data-min="1" value="1" type="number" name="quantity">
								<input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
                                <input type="submit" name="addcart" value="ADD TO CART" style="background-color:#f23329;font-family:times;border:none;border-radius:3px;padding:5px;color:white;">
								
								 <input type="submit" name="buy" value="BUY NOW" style="background-color:#f23329;font-family:times;border:none;border-radius:3px;padding:5px;color:white;">
								 <input type="submit" name="back" value="BACK" style="background-color:#f23329;font-family:times;border:none;border-radius:3px;padding:5px;color:white;">
                            </div>
							 </form>
                            <?php
								if(isset($_POST['addcart']))
								{
									foreach ($_POST['id'] as $key => $value) 
										{	
											$id=$value;	
										}
									$qty=$_POST['quantity'];
									$query = "insert into cart(pid,quantity,userid) values('".$id."','".$qty."','".$petuser."')";
									mysqli_query($con,$query) or die(mysqli_error($con));
									echo "<script>
										alert('Product added to cart');
										</script>";
									echo "<script> location.href='singleproductdetails.php'; </script>";
									
								}
								if(isset($_POST['buy']))
								{
									foreach ($_POST['id'] as $key => $value) 
										{	
											$id=$value;	
										}
									$qty=$_POST['quantity'];
									$amt=$pprice*$qty;
									$_SESSION['amt']=$amt;
									$query = "insert into ordertb(pid,quantity,userid) values('".$id."','".$qty."','".$petuser."')";
									mysqli_query($con,$query) or die(mysqli_error($con));
									echo "<script>
										alert('Proceed to payment');
										</script>";
									echo "<script> location.href='check.php'; </script>";
									
								}
							?>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>    
    </div>
	
    <!--product details end-->
    
    

    <?php include("footer.php"); ?>
<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>


<!-- product-details.html  03:24:28 GMT -->
</html>
