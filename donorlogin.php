<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- login.html  03:24:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PawSpot</title>
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
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul style="font-family:georgia;">
                            <li><a href="index.php" >Home</a></li>
                            <li>Login</li>
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
					<div class="account-contents" style="background: url('petimage/logindog.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:georgia;">Login now</h2>
                                    
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form action="#" method="post">
                                        <div class="single-acc-field" style="font-family:georgia;">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" placeholder="Enter your email" name="demail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>
                                        </div>
                                        <div class="single-acc-field" style="font-family:georgia;">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" placeholder="Enter your password" name="dpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required required>
                                        </div>                                        
                                        <div class="single-acc-field" style="font-family:georgia;">
                                            <button type="submit" name="Login">Login Account</button>
                                        </div>
                                        <a href="donorforgotpass.php" style="font-family:georgia;">Forgot Password?</a>
                                        <a href="donorreg.php" style="font-family:georgia;">Don't have an account?</a><br><br>
										<center><a href="index.php" style="font-family:georgia;" >Back</a></center>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	<?php
if(isset($_POST['Login']))
{
	error_reporting(1);
	include("config.php");
	
	$demail=$_POST['demail'];
	$dpassword=$_POST['dpassword'];
	
	$sql = "select * from donorregister where demail='$demail' and dpassword='$dpassword'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['donoruser']=$demail;
		$did=$_SESSION['donoruser'];
		echo "<script>
				alert('Login Successful $did');
			</script>";
		echo "<script> location.href='donors/index.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}
}
?>




<?php include("footer.php"); ?>


<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- login.html  03:24:52 GMT -->
</html>