<?php
session_start();
if(isset($_SESSION['petuser']))
{
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- cart.html  03:24:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User-Myorder</title>
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
                        <ul>
                            <li><a href="index-2.html">home</a></li>
                            <li>Myorders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-60">
        <div class="container">  
           
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                                <tr style="font-family:georgia;">
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
									<th class="product_remove">Status</th>
                                    <th class="product_remove">Cancel Order</th>
									
                                </tr>
                            </thead>
                            <tbody>
							<?php
									include 'config.php';
									$sql1 = "SELECT ordertb.oid, ordertb.pid, products.name, products.pprice, products.image, ordertb.quantity FROM ordertb INNER JOIN products ON ordertb.pid=products.pid where ordertb.userid='".$_SESSION['petuser']."'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									if($num1 > 0)
									{ 
									while($row1 = mysqli_fetch_array($result1))
									{ 
									$oid=$row1[0];
									$pid=$row1[1];
									$name=$row1[2];
									$price=$row1[3];
									$img=$row1[4];
									$qty=$row1[5];
									$tot=$qty*$price;
									$total=$total+$tot;
									?>
                                <tr style="font-family:times;">
                                    <td class="product_thumb"><a href="#"><img src="../petshop/image/<?php echo $img; ?>" alt=""></a></td>
                                    <td class="product_name"><a href="#"><?php echo $name; ?></a></td>
                                    <td class="product-price">Rs.<?php echo $price; ?></td>
                                    <td class="product_quantity">Qty: <?php echo $qty; ?></td>
                                    <td class="product_total">Rs. <?php echo $tot; ?></td>
									<td class="product_total">Ordered</td>
									<td class="product_remove">
									<form method="post" action="#">
									<input type="text" value="<?php echo $oid; ?>" name="oid[]" hidden="true">
										<button name="delete" title="Remove this item" class="product_remove">
										<a href="#"><i class="ion-android-close"></i></a>
										</button>
									</form>
									</td>
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

				<?php
								if(isset($_POST['delete']))
								{
								include 'config.php';
								foreach ($_POST['oid'] as $key => $value) 
								{	
									$orderid=$value;	
								}
								echo 
								$sql1 = "delete from ordertb where oid='".$orderid."'";
								$result1 = mysqli_query($con,$sql1);
								echo "<script>
												alert('Order cancelled');
											</script>";
											echo "<script> location.href='myorder.php'; </script>";
								}
							?>
                
          
        </div>     
    </div>
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
	echo "<script> location.href='userlogin.php'; </script>";
}	
?>