<!doctype html>
<html class="no-js" lang="en">

<!-- forget-password.html  03:24:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PawSpot-forgot password</title>
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
                            <li><a href="index.php">home</a></li>
                            <li>Forget password</li>
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
					<div class="account-contents" style="background: url('petimage/feed1.jpg');background-repeat:no-repeat;background-position:-230% 70%;background-size:1000px 800px; " >
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:georgia;">Forgot password?</h2>
                                    
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content"> 
                                    <form action="#" method="post">
                                        <div class="single-acc-field">
                                            <label for="email" style="font-family:georgia;" >Email</label>
                                            <input name="email" type="email" id="email" placeholder="Enter your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>
                                        </div>
										<div class="single-acc-field">
										<label for="security" style="font-family:georgia;">Security Questions?</label> 
										<select style="width:100%;" name="question" style="font-family:georgia;" >
										<option selected hidden>Security Questions</option>
										<option value="What is your favorite food?">What is your favorite food?</option>
										<option value="What is your dream job?">What is your dream job?</option>
										<option value="Which is your favorite color?">Which is your favorite color?</option>
										<option value="Who is your favorite person?">Who is your favorite person?</option>
										<option value="Your role model? or Your super hero?">Your role model? or Your super hero?</option>
										</select>
										</div>
										<div class="single-acc-field">
                                            <input type="text" id="ans" placeholder="Answer" name="answer" title="letters only" required>
                                        </div>
										
										<div class="single-acc-field">
                                            <label for="password" style="font-family:georgia;" >New Password</label>
                                            <input type="password" name="password" id="password" placeholder="Enter your new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit" name="submit">Reset Password</button>
                                        </div>
                                       
										<a href="userlogin.php" style="font-family:georgia;">Back</a>
                                    </form>
									<?php
if(isset($_POST['submit']))
{
	include('config.php');
	$email=$_POST['email'];
	$question=$_POST['question'];
	$answer=$_POST['answer'];
	$password=$_POST['password'];
	
	$sql="update petshopregister set pspassword='".$password."' where psemail='".$email."' and psquestion='".$question."' and psanswer='".$answer."'";
	mysqli_query($con, $sql);
	echo "<script>
				alert('Password has been reset');
				</script>";
	echo "<script> location.href='shoplogin.php'; </script>";
}	
?>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include("footer.php"); ?>


<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- forget-password.html  03:24:54 GMT -->
</html>