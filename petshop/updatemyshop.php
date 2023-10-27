<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- register.html  03:24:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update MYshop-pawspot</title>
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
					<div class="account-contents" style="background: url('petimage/prod3.png'); background-size: cover;background-position:40% 55%">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:times;" >Update now</h2>
                                </div>
                            </div>
							<?php
					include 'config.php';
					$sql1 = "select * from petshopregister where psemail='".$_SESSION['shopuser']."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$sl+=1;
							$id=$row1[0];
							$pname=$row1['pname'];
							$psname=$row1['psname'];
							$psphone1=$row1['psphone1'];
							$psphone2=$row1['psphone2'];
							$psemail=$row1['psemail'];
							$psaddress=$row1['psaddress'];
						
			?>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form action="#" method="post">
									<div class="single-acc-field">
                                            <label for="name">User Name</label>
                                            <input type="text" id="name" name="npname" value="<?php echo $pname; ?>">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="name">Shop Name</label>
                                            <input type="text" id="name"  name="npsname" value="<?php echo $psname; ?>">
                                        </div>
										
                                       
										
										<div class="single-acc-field">
                                            <label for="phone">Phone</label>
                                            <input type="tel" id="phone"  name="npsphone1" value="<?php echo $psphone1; ?>">
                                        </div>
										<div class="single-acc-field">
                                            <label for="phone">Alternative Phone No</label>
                                            <input type="tel" id="phone" name="npsphone2" value="<?php echo $psphone2; ?>">
                                        </div>
										 <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email"  name="npsemail" value="<?php echo $psemail; ?>" readonly="true">
                                        </div>
										<div class="single-acc-field">
                                            <label for="phone">Current Address</label>
                                            <textarea cols="80" rows="3" name="npsaddress"> <?php echo $psaddress; ?></textarea>
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
					$npname=$_POST['npname'];
					$npsname=$_POST['npsname'];
					$npsemail=$_POST['npsemail'];
					$npsphone1=$_POST['npsphone1'];
					$npsphone2=$_POST['npsphone2'];
					$npsaddress=$_POST['npsaddress'];
					$sql = "UPDATE `petshopregister` SET `pname`='".$npname."',`psname`='".$npsname."',`psemail`='".$npsemail."',`psphone1`='".$npsphone1."',`psphone2`='".$npsphone2."',`psaddress`='".$npsaddress."' WHERE `psemail`='".$_SESSION['shopuser']."'";
					
					
					// Execute query
					mysqli_query($con, $sql);
					echo "<script>
								alert('Upload Successful');
							</script>";
							
							echo "<script> location.href='myshop.php'; </script>";
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