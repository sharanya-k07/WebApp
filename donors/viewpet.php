<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Donors-ViewPet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
<?php include("header.php"); ?>
    <!--Tranding product-->
    <section class="pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title">
                        <h2 style="font-family:georgia;font-size:30px;color:#458c8b;">VIEW PET DETAILS</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
			<?php
								include 'config.php';
								$sql1 = "select * from addpet";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$name=$row1['pname'];
								$image=$row1['image1'];
								?>
			
			
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-tranding">
                        
                            <div class="tranding-pro-img">
                                <img src="image/<?php echo $image; ?>" alt="" style="height:300px; width:350px;">
                            </div>
                            <div class="tranding-pro-title">
                                <h3 style="font-family:georgia;color:maroon;"><?php echo $name; ?></h3>
                                <form action="" method="post">
								<input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
                                <input type="submit" name="view" value="View Details" style="background-color:#0d1745;font-family:times;border:none;border-radius:3px;padding:10px;color:white;"/>
								 <input type="submit" name="delete" value="Delete" style="background-color:#0d1745;font-family:times;border:none;border-radius:3px;padding:10px;color:white;"/>
								</form>
                            </div>
							<?php
								if(isset($_POST['view']))
								{
									foreach ($_POST['id'] as $key => $value) 
									{	
										$id=$value;	
									}
									$_SESSION['pets']=$id;
									echo "<script> location.href='singlepetdetail.php'; </script>";
								}
								?>
                            <?php
								if(isset($_POST['delete']))
								{
									foreach ($_POST['id'] as $key => $value) 
									{	
										$id=$value;	
									}
									$query6 = "delete from addpet where petid='".$id."'";
									mysqli_query($con,$query6) or die(mysqli_error($con));
									echo "<script> location.href='viewpet.php'; </script>";
								}
								?>
                             
                    
                    </div>
                </div>
                <?php
				}
				}
				?>
                
				
				
            </div>
        </div>
    </section><!--Tranding product-->

    <?php include("footer.php"); ?>
<!-- JS
============================================ -->



<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!--   03:22:07 GMT -->
</html>