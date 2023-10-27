<?php
session_start();
if(isset($_SESSION['petuser']))
{
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- checkout.html  03:24:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>checkout-Petcare</title>
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
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>checkout</li>
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
                    <div class="col-lg-12 col-md-6">
					<center><h3 style="background-color:#1EDE08;font-family:georgia;">Update address</h3></center>
                        <form action="#" method="POST" enctype="multipart/form-data" style="padding: 15px 20px; background-color:#F6FB8E;">
						<?php
							include 'config.php';
							$sql = "SELECT * FROM address where userid='".$_SESSION['petuser']."'";
									$result = mysqli_query($con,$sql);
									$count=mysqlI_num_rows($result);
									if ($count > 0)
									{
										while($row2 = mysqli_fetch_array($result))
										{ 
											$adr1=$row2[1];
											$adr2=$row2[2];
											$city=$row2[3];
											$code=$row2[4];
											$phone=$row2[5];
										}
									}
							?>
                            
                            <div class="row" style="font-family:times;">
							<div class="col-12 mb-20" style="font-family:times;">
                                    <label>Address </label>
                                    <input placeholder="Enter the address" type="text" value="<?php if($count>0){ echo $adr1; }?>"name="addr1" required>     
                                </div>
								<div class="col-12 mb-20">
                                    <label>Alternate Adress</label>
                                    <input placeholder="Enter the alternate address" type="text" value="<?php if($count>0){ echo $adr2; }?>" name="addr2" required>     
                                </div>
								<div class="col-12 mb-20">
                                    <label>City</label>
                                    <input placeholder="Enter the name of the city" type="text" value="<?php if($count>0){ echo $city; }?>" name="city"  pattern="[A-Za-z]+" title="letters only" required>     
                                </div>
								<div class="col-12 mb-20">
                                    <label>Pin Code</label>
                                    <input placeholder="Enter the pincode" type="text" value="<?php if($count>0){ echo $code; }?>" name="pin" pattern="[0-9]+" title="only numbers" required>     
                                </div>
								<div class="col-12 mb-20">
                                    <label>Contact Number</label>
                                    <input placeholder="Enter the contact number" type="tel" value="<?php if($count>0){ echo $phone; }?>" name="phone" maxlength="10" pattern="^\d{10}$" title="10 numeric characters only" required>     
                                </div>
                                
								<div class="order_button">
                                    <button  type="submit" name="update">Submit</button> 
                                </div><br>
								<div class="order_button">
                                    <button  name="check" type="submit" >Proceed to checkout</button> 
                                </div>									
                            </div>
                        </form> 
						<?php
								if(isset($_POST['update']))
								{
									include 'config.php';
									$addr1=$_POST['addr1'];
									$addr2=$_POST['addr2'];
									$city=$_POST['city'];
									$pin=$_POST['pin'];
									$contact=$_POST['phone'];
									if ($count > 0)
									{
										$sql2 = "update address set address1='".$addr1."',address2='".$addr2."',city='".$city."',pin='".$pin."',contact='".$contact."' where userid='".$_SESSION['petuser']."'";
										$result2 = mysqli_query($con,$sql2);	
										echo "<script>
												alert('Address Updated');
											</script>";
											echo "<script> location.href='checkout.php'; </script>";
									}
									else
									{
										$sql3 = "insert into address (address1,address2,city,pin,contact,userid)values('".$addr1."','".$addr2."','".$city."','".$pin."','".$contact."','".$_SESSION['petuser']."')";
										$result3 = mysqli_query($con,$sql3);	
										echo "<script>
												alert('Address Updated');
											</script>";
											echo "<script> location.href='checkout.php'; </script>";
									}
								}
								if(isset($_POST['check']))
								{
								include 'config.php';
								$sql1 = "SELECT cid, pid, quantity FROM cart where userid='".$_SESSION['petuser']."'";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								$total=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
									$cid=$row1[0];
									$pid=$row1[1];
									$qty=$row1[2];
									$query = "insert into ordertb(pid,quantity,userid) values('".$pid."','".$qty."','".$_SESSION['petuser']."')";
										   
											mysqli_query($con,$query) or die(mysqli_error($con));
										
										
								}
								$query1 = "Delete from cart where userid='".$_SESSION['petuser']."'";
										   
											mysqli_query($con,$query1) or die(mysqli_error($con));
								echo "<script>
												alert('Proceed to pay');
											</script>";
											echo "<script> location.href='payment.php'; </script>";
								}
								}
								if($count>0)
								{
									?>
									
									<?php
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
	echo "<script> location.href='userlogin.php'; </script>";
}	
?>