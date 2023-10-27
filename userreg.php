<!doctype html>
<html class="no-js" lang="en">

<!-- register.html  03:24:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PawSpot-user register</title>
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
                            <li>Register</li>
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
					<div class="account-contents" style="background: url('petimage/reg.jpg'); background-size: cover;background-position:20% 15%;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:georgia;">User Registration</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form action="#" method="post">
                                        <div class="single-acc-field">
                                            <label for="name" style="font-family:georgia;">Name</label>
                                            <input type="text" name="name" id="name" placeholder="Enter your name" title="letters only" required>
                                        </div>
										
                                        <div class="single-acc-field">
                                            <label for="email" style="font-family:georgia;">Email</label>
                                            <input type="email" id="email" name="email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>
                                        </div>
										<div class="single-acc-field" style="font-family:georgia;">
										<label for="security">Security Questions?</label> 
										<select style="width:100%;" name="question" required>
										<option value="Question">Questions</option>
										<option value="what your favorite food?">What is your favorite food?</option>
										<option value="What is your dream job?">What is your dream job?</option>
										<option value="What is your dream job?">What is your favorite color?</option>
										<option value="who is your favorite person?">Who is your favorite person?</option>
										<option value="your roll model? or your super hero?">Who is your role model? </option>
										</select>
										</div>
										<div class="single-acc-field">
                                            <input name="answer" type="text" id="ans" placeholder="Answer" required>
                                        </div>
										
										 <div class="single-acc-field">
                                            <label for="phone" style="font-family:times;">Phone</label>
                                            <input name="phone" type="tel" id="phone" placeholder="Enter your phone number" maxlength="10" pattern="[0-9]+" title="only numbers" required>
                                        </div>
										<div class="single-acc-field">
                                            <label for="phone" style="font-family:georgia;">Current Address</label>
                                            <textarea cols="80" rows="3" placeholder="Current address" value="address" name="address" required></textarea>
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password" style="font-family:georgia;">Password</label>
                                            <input name="password" type="password" id="password" placeholder="At least 8 characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
                                        </div>
										<div class="single-acc-field">
                                            <label for="cpassword" style="font-family:georgia;">Confirm Password</label>
                                            <input name="cpassword" type="password" id="password" placeholder="Enter atleast 6 characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                                        </div>							 
                                        <div class="single-acc-field">
                                            <button type="submit" name="register" style="font-family:georgia;">Register now</button>
                                        </div>
                                        <a href="userlogin.php" style="font-family:georgia;">Have an account already? Login</a>
										<a href="index.php" style="font-family:georgia;">Back</a>
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
if(isset($_POST['register']))
{
	error_reporting(1);
	include("config.php");
	
	$Email=$_POST['email'];

	$sql = "select * from userregister where email='$Email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='userreg.php'; </script>";
	}
	else
	{
		$Name=$_POST['name'];
		$Email=$_POST['email'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$Phone=$_POST['phone'];
		$Address=$_POST['address'];
		$password=$_POST['password'];
		
		
		if ($_POST['password'] != $_POST['cpassword']) {
   // fail!
   
   echo "<script>
				alert('Password invalid.');
			</script>";
}
else {
   // success :(

		

		$query = "insert into userregister(name,email,question,answer,phone,address,password) values('".$Name."','".$Email."','".$question."','".$answer."','".$Phone."','".$Address."','".$password."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='userlogin.php'; </script>";
		}
	}
}
?>

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

<!-- register.html  03:24:53 GMT -->
</html>