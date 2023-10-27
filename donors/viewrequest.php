<?php
session_start();
if(isset($_SESSION['donoruser']))
{
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- cart.html  03:24:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PetShop-view orders</title>
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
                            <li><a href="index-2.html">Home</a></li>
                            <li>ViewRequest</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <section class="pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title">
                        <h2 style="font-family:georgia;font-size:30px;color:#458c8b;">VIEW REQUESTS</h2>
                    </div>
                </div>
            </div>
         
        <div class="row justify-content-center">
            <form action="#"> 
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
					
						
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                                <tr style="font-family:georgia;">
									<th class="product_thumb">ID</th>
									<th class="product_thumb">USERNAME</th>
									<th class="product_thumb">USER EMAIL</th>
									<th class="product_thumb">ADDRESS</th>
                                    <th class="product_thumb">IMAGE</th>
                                    <th class="product_name">PETNAME</th>
									
                                </tr>
                            </thead>
                            <tbody>
							<?php
									include 'config.php';
									$sql1 = "SELECT adoptpet.adoptid, adoptpet.petid, adoptpet.userid, addpet.pname, addpet.image1, userregister.name, userregister.address, userregister.phone FROM adoptpet INNER JOIN addpet ON adoptpet.petid=addpet.petid INNER JOIN userregister on adoptpet.userid=userregister.email where addpet.donorid='".$_SESSION['donoruser']."'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									if($num1 > 0)
									{ 
									while($row1 = mysqli_fetch_array($result1))
									{ 
									$sl+=1;
									$adoptid=$row1[0];
									$petid=$row1[1];
									$userid=$row1[2];
									$pname=$row1[3];
									$img=$row1[4];
									$name=$row1[5];
									$address=$row1[6];
									$phone=$row1[7];
									?>
                                <tr style="font-family:times;">
									<td class="product_name"><?php echo $sl; ?></td>
									<td class="product_name"><?php echo $name; ?></td>
									<td class="product_name"><?php echo $userid; ?></td>
									<td class="product_name"><?php echo $address; ?><br>NO. <?php echo $phone; ?></td>
                                    <td class="product_thumb"><img src="image/<?php echo $img; ?>" alt=""></td>
                                    <td class="product_name"><?php echo $pname; ?></td>
                                  
									<!--<td class="product_remove"><a href="#"><i class="fa fa-check"></i></a></td>-->
									
                                </tr>
								<?php
								}
								}
								?>
							
                            </tbody>
                        </table>   
                            </div>  
                                 
                        </div>
                    </div>
                </div>
                
            </form> 
        </div>     
    </div>
	</section>
    <!--shopping cart area end -->
        
<?php include("footer.php"); ?>


<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- cart.html  03:24:28 GMT -->
</html>
<?php
}
else
{
	echo "<script> location.href='donorlogin.php'; </script>";
}	
?>