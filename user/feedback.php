<?php
session_start();
if(isset($_SESSION['petuser']))
{
							include 'config.php';
							$sql = "SELECT name FROM userregister where email='".$_SESSION['petuser']."'";
									$result = mysqli_query($con,$sql);
									$count=mysqlI_num_rows($result);
									if ($count > 0)
									{
										while($row2 = mysqli_fetch_array($result))
										{ 
											$name=$row2[0];
										}
										$_SESSION['name']=$name;
									}
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User-feedback</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
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
                            <li>Feedback</li>
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
				<div class="col-lg-12">
					<div class="account-contents" style="background: url('petimage/pup.png');background-repeat:no repeat;background-size:550px 480px;">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:georgia;">Feed-back</h2>
                                    
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                <div class="account-content">
                                    <form action="#" method="post">
                                        <div class="row" style="font-family:georgia;">
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="name">Name</label>
                                                    <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $_SESSION['name']; ?>" readonly="true">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="Email" id="email" name="email" value="<?php echo $_SESSION['petuser']; ?>" readonly="true">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-acc-field">
                                                    <label for="msg">Message</label>
                                                    <textarea id="msg" placeholder="Message" rows="4" name="message" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="single-acc-field" style="font-family:georgia;">
                                            <button type="submit" name="submit">Send Message</button>
                                        </div>
                                    </form>
<?php
							if(isset($_POST['submit']))
							{
							include 'config.php';
							$msg=$_POST['message'];
							$sql3 = "insert into userfeedback(uname,uemail,umessage)values('".$_SESSION['name']."','".$_SESSION['petuser']."','".$msg."')";
							mysqli_query($con,$sql3) or die(mysqli_error($con));	
							
							echo "<script>
								alert('Uploaded Successfully');
							</script>";
							
							echo "<script> location.href='index.php'; </script>";
							
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
   
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- contact.html  03:24:45 GMT -->
</html>