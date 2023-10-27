<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- register.html  03:24:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Donor-pawspot</title>
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
                            <li>Update donor</li>
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
					<div class="account-contents" style="background: url('petimage/prod3.png'); background-size: cover;background-position:40% 55%;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb" >
                                    <h2 style="font-family:georgia;">Update now</h2>
                                </div>
                            </div>
							<?php
					include 'config.php';
					$sql1 = "select * from donorregister where demail='".$_SESSION['donoruser']."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$sl+=1;
							$id=$row1[0];
							$dname=$row1['dname'];
							$dphone=$row1['dphone'];
							$demail=$row1['demail'];
							$daddress=$row1['daddress'];
						
			?>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content" style="font-family:times;">
                                    <form action="#" method="post">
									<div class="single-acc-field">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="dname" value="<?php echo $dname; ?>" pattern="[A-Za-z]+" title="letters only">
                                        </div>
                                      
										<div class="single-acc-field">
                                            <label for="phone">Phone</label>
                                            <input type="tel" id="phone"  name="dphone" value="<?php echo $dphone; ?>" pattern="^\d{10}$" title="10 numeric characters only">
                                        </div>
										
										 <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email"  name="demail" value="<?php echo $demail; ?>" readonly="true">
                                        </div>
										<div class="single-acc-field">
                                            <label for="phone">Current Address</label>
                                            <textarea cols="80" rows="3" name="daddress"> <?php echo $daddress; ?></textarea>
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
					$dname=$_POST['dname'];
					$demail=$_POST['demail'];
					$dphone=$_POST['dphone'];
					$daddress=$_POST['daddress'];
					$sql = "UPDATE `donorregister` SET `dname`='".$dname."',`demail`='".$demail."',`dphone`='".$dphone."',`daddress`='".$daddress."' WHERE `demail`='".$_SESSION['donoruser']."'";
					
					
					// Execute query
					mysqli_query($con, $sql);
					echo "<script>
								alert('Successfully updated');
							</script>";
							
							echo "<script> location.href='myaccount.php'; </script>";
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