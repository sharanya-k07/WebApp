<!doctype html>
<html class="no-js" lang="en">

<!-- register.html  03:24:53 GMT -->
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
					<div class="account-contents" style="background: url('petimage/reg.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb" style="font-family:georgia;">
                                    <h2>Register now</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content" style="font-family:georgia;">
                                    <form action="#" method="post">
									<div class="single-acc-field" >
                                            <label for="name">Name</label>
                                            <input type="text" id="name" placeholder="Enter your name" name="pname"  title="letters only" required>
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="name">Shop Name</label>
                                            <input type="text" id="name" placeholder="Enter your shop name" name="psname"  title="letters only" required>
                                        </div>
										
                                        <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" placeholder="Enter your email" name="psemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>
                                        </div>
										
										<div class="single-acc-field">
                                            <label for="phone" >Phone</label>
                                            <input type="tel" id="phone" placeholder="Enter your phone number" style="font-family:times;" name="psphone1"maxlength="10" pattern="^\d{10}$" title="10 numeric characters only" required>
                                        </div>
										<div class="single-acc-field">
                                            <label for="phone">Alternative Phone No</label>
                                            <input type="tel" id="phone" placeholder="Enter your phone number" style="font-family:times;" name="psphone2" maxlength="10" pattern="^\d{10}$" title="10 numeric characters only" required>
                                        </div>
										<div class="single-acc-field">
                                            <label for="phone">Current Address</label>
                                            <textarea cols="80" rows="3" placeholder="Current Address" value="address" name="psaddress" required></textarea>
                                        </div>
										<div class="single-acc-field">
										<label for="security">Security Questions?</label> 
										<select style="width:100%;" name="psquestion" required>
										<option>Questions</option>
										<option value="What is the location of your shop?">What is the location of your shop?</option>
										<option value="What is your dream job?">What is your dream job?</option>
										<option value="Which is your favorite color?">Which is your favorite color?</option>
										<option value="Who is your favorite person?">Who is your favorite person?</option>
										<option value="Who is your role model?">Who is your role model?</option>
										</select>
										</div>
										<div class="single-acc-field">
                                            <input type="text" id="ans" placeholder="Answer your question" name="psanswer"  title="letters only" required>
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" placeholder="Enter your password" name="pspassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                        </div>
										
										<div class="single-acc-field">
                                            <label for="password">Confirm Password</label>
                                            <input type="password" id="password" placeholder="Enter your password" name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                        </div>										
                                        <div class="single-acc-field">
                                            <button type="submit" name="register">Register now</button>
                                        </div>
                                        <a href="shoplogin.php">Have an account already? Login</a>
										<a href="index.php">Back</a>
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
	
	$Email=$_POST['psemail'];

	$sql = "select * from petshopregister where psemail='$Email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='shopreg.php'; </script>";
	}
	else
	{
		$Name=$_POST['pname'];
		$SName=$_POST['psname'];
		$Email=$_POST['psemail'];
		$Phone1=$_POST['psphone1'];
		$Phone2=$_POST['psphone2'];
		$Address=$_POST['psaddress'];
		$Question=$_POST['psquestion'];
		$Answer=$_POST['psanswer'];
		$password=$_POST['pspassword'];
		
		
		if ($_POST['pspassword'] != $_POST['cpassword']) {
   // fail!
   
   echo "<script>
				alert('Password invalid.');
			</script>";
}
else {
   // success :(

		$query = "insert into petshopregister(pname,psname,psemail,psphone1,psphone2,psaddress,psquestion,psanswer,pspassword) values('".$Name."','".$SName."','".$Email."','".$Phone1."','".$Phone2
		."','".$Address."','".$Question."','".$Answer."','".$password."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='shoplogin.php'; </script>";
		}
	}
}
?>
<?php include("footer.php"); ?>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- register.html  03:24:53 GMT -->
</html>