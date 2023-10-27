<?php
session_start();
if(isset($_SESSION['donoruser']))
{
							include 'config.php';
							$sql = "SELECT dname FROM donorregister where demail='".$_SESSION['donoruser']."'";
									$result = mysqli_query($con,$sql);
									$count=mysqlI_num_rows($result);
									if ($count > 0)
									{
										while($row2 = mysqli_fetch_array($result))
										{ 
											$name=$row2[0];
										}
										$_SESSION['dname']=$name;
									}
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- contact.html  03:24:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Donors-feedback</title>
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
					<div class="account-contents" style="background: url('petimage/feed3.png');background-repeat:no-repeat;background-position:-10% 15%;">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:georgia;">Feed-back</h2>
                                    
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                <div class="account-content">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" placeholder="Name" id="name" value="<?php echo $_SESSION['dname']; ?>" readonly="true">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" placeholder="Email" id="email" value="<?php echo $_SESSION['donoruser']; ?>" readonly="true">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-acc-field">
                                                    <label for="msg">Message</label>
                                                    <textarea placeholder="Message" name="message" id="msg" rows="4" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="single-acc-field">
                                            <button type="submit" name="submit">Send Message</button>
                                        </div>
                                    </form>
									
									
							<?php
							if(isset($_POST['submit']))
							{
							include 'config.php';
							$msg=$_POST['message'];
							$sql3 = "insert into userfeedback(uname,uemail,umessage)values('".$_SESSION['dname']."','".$_SESSION['donoruser']."','".$msg."')";
							mysqli_query($con,$sql3) or die(mysqli_error($con));	
							
							echo "<script>
								alert('Successfully uploaded');
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