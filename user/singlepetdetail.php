<?php
session_start();
if(isset($_SESSION['petuser']))
{
$petuser=$_SESSION['petuser'];
if(isset($_POST['view']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$id=$value;	
	}
	$_SESSION['pets']=$id;
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- product-details.html  03:24:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User-Singlepetdetails</title>
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
                            <li>Pet Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
				
				<?php
								include 'config.php';
								$sql1 = "select * from addpet where petid='".$_SESSION['pets']."'";
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
								$nickname=$row1['nickname'];
								$age=$row1['age'];
								$health=$row1['health'];
								$description=$row1['description'];
								$image=$row1['image1'];
								}
								}
								?>
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="../donors/image/<?php echo $image; ?>" data-zoom-image="../donors/image/<?php echo $image; ?>" alt="big-1">
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#" method="post">
                           
                            <h1>Breed: <?php echo $name; ?></h1>
                            
                            <div class="price_box">
                                <span class="current_price">Nick name: <?php echo $nickname; ?></span>
                            </div>
                            <div class="product_desc">
                                <ul>
                                    <li>Adopt Your Pet</li>
                                    <li>Health Condition: <?php echo $health; ?></li>
                                    <li>Pet Age: <?php echo $age; ?></li>
                                </ul>
                                <p><?php echo $description; ?></p>
                            </div>
							
                            
                            <div class="product_variant quantity">
							<input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
                                <button class="button" name="adoptpet" type="submit">Adopt pet</button>  
								<a href="petcareproduct.php" style="color:blue;padding: 15px 25px;">BACK</a>
                            </div>
                        </form>
                        <?php
								if(isset($_POST['adoptpet']))
								{
									foreach ($_POST['id'] as $key => $value) 
										{	
											$id=$value;	
										}
									$query = "insert into adoptpet(petid,userid) values('".$id."','".$petuser."')";
									mysqli_query($con,$query) or die(mysqli_error($con));
									echo "<script>
										alert('Your Request placed');
										</script>";
									echo "<script> location.href='adoptpet.php'; </script>";
									
								}
							?>

                    </div>
                </div>
				<?php } ?>
            </div>
        </div>    
    </div>
    <!--product details end-->
    
    

<?php include("footer.php"); ?>
   
<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>


<!-- product-details.html  03:24:28 GMT -->
</html>