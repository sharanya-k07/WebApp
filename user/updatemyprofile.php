<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- register.html  03:24:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update MYprofile-petcare</title>
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
                            <li>Update MyShop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

	<section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background: url('petimage/prod3.png');background-size: cover;background-position:40% 55%;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:georgia;">Update now</h2>
                                </div>
                            </div>
							<?php
					include 'config.php';
					$sql1 = "select * from userregister where email='".$_SESSION['petuser']."'";
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
							$email=$row1['email'];
							$phone=$row1['phone'];
							$address=$row1['address'];
			?>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form action="#" method="post">
									<div class="single-acc-field">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="uname" value="<?php echo $name; ?>" pattern="[A-Za-z]+" title="letters only">
                                        </div>
                                        
										 <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email"  name="uemail" value="<?php echo $email; ?>" readonly="true">
                                        </div>
										
										
										
										<div class="single-acc-field">
                                            <label for="phone">Phone</label>
                                            <input type="tel" id="phone"  name="uphone" value="<?php echo $phone; ?>" pattern="^\d{10}$" title="10 numeric characters only">
                                        </div>
										
										
										
										<div class="single-acc-field">
                                            <label for="phone">Current Address</label>
                                            <textarea cols="80" rows="3" name="uaddress"> <?php echo $address; ?></textarea>
                                        </div>
									<div class="single-acc-field">
                                            <button type="submit" name="update">Update</button>
                                    </div>
									</form>
                                </div>
                            </div>
					<?php 
					}
					}
					if(isset($_POST['update']))
					{
					$uname=$_POST['uname'];
					$uemail=$_POST['uemail'];
					$uphone=$_POST['uphone'];
					$uaddress=$_POST['uaddress'];
					$sql = "UPDATE `userregister` SET `name`='".$uname."',`email`='".$uemail."',`phone`='".$uphone."',`address`='".$uaddress."' WHERE `email`='".$_SESSION['petuser']."'";
					
					
					// Execute query
					mysqli_query($con, $sql);
					echo "<script>
								alert('Upload Successful');
							</script>";
							
							echo "<script> location.href='myprofile.php'; </script>";
					}
					?>
					
                        </div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	

<?php include("footer.php"); ?>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- register.html  03:24:53 GMT -->
</html>