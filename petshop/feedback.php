<?php
session_start();
if(isset($_SESSION['shopuser']))
{
							include 'config.php';
							$sql = "SELECT pname FROM petshopregister where psemail='".$_SESSION['shopuser']."'";
									$result = mysqli_query($con,$sql);
									$count=mysqlI_num_rows($result);
									if ($count > 0)
									{
										while($row2 = mysqli_fetch_array($result))
										{ 
											$name=$row2[0];
										}
										$_SESSION['pname']=$name;
									}
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- contact.html  03:24:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>petshop-feedback</title>
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
					<div class="account-contents" style="background: url('petimage/feed2.png');background-position:-5% 55%;
	background-repeat: no-repeat;">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                <div class="account-thumb">
                                    <h2 style="font-family:georgia;">Feed back</h2>
                                    
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                <div class="account-content">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="name">Name</label>
                                                    <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $_SESSION['pname']; ?>" readonly="true">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="Email" value="<?php echo $_SESSION['shopuser']; ?>" readonly="true">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-acc-field">
                                                    <label for="msg">Message</label>
                                                    <textarea name="message" id="msg" rows="4" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="single-acc-field">
                                            <button type="submit" name="send">Send Message</button>
                                        </div>
                                    </form>
									
									<?php
							if(isset($_POST['send']))
							{
							include 'config.php';
							$msg=$_POST['message'];
							$sql3 = "insert into userfeedback(uname,uemail,umessage)values('".$_SESSION['pname']."','".$_SESSION['shopuser']."','".$msg."')";
							mysqli_query($con,$sql3) or die(mysqli_error($con));	
							
							echo "<script>
								alert('Upload Successful');
							</script>";
							
							echo "<script> location.href='feedback.php'; </script>";
							
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