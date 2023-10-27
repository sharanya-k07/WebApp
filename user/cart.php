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
    <title>Petcare-VIew cart</title>
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
                            <li>Cart</li>
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
                                    <th class="product_remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
									include 'config.php';
									$sql1 = "SELECT cart.cid, cart.pid, products.name, products.pprice, products.image, cart.quantity FROM cart INNER JOIN products ON cart.pid=products.pid where cart.userid='".$_SESSION['petuser']."'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									$finaltotal=0;
									if($num1 > 0)
									{ 
									while($row1 = mysqli_fetch_array($result1))
									{ 
									$cid=$row1[0];
									$pid=$row1[1];
									$name=$row1[2];
									$price=$row1[3];
									$img=$row1[4];
									$qty=$row1[5];
									$tot=$qty*$price;
									$total=$total+$tot;
									$delivery=25;
									$finaltotal=$delivery+$total;
									$_SESSION['amt']=$finaltotal;
									
									?>
                                <tr style="font-family:times;">
                                    <td class="product_thumb"><a href="#"><img src="../petshop/image/<?php echo $img; ?>" alt=""></a></td>
                                    <td class="product_name"><a href="#"><?php echo $name; ?></a></td>
                                    <td class="product-price">Rs. <?php echo $price; ?></td>
                                    <td class="product_quantity">Qty: <?php echo $qty; ?></td>
                                    <td class="product_total">Rs. <?php echo $tot; ?></td>
									<td class="product_remove">
									<form method="post" action="#">
									<input type="text" value="<?php echo $cid; ?>" name="cid[]" hidden="true">
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
								foreach ($_POST['cid'] as $key => $value) 
								{	
									$cartid=$value;	
								}
								echo 
								$sql1 = "delete from cart where cid='".$cartid."'";
								$result1 = mysqli_query($con,$sql1);
								echo "<script>
												alert('Product Deleted');
											</script>";
											echo "<script> location.href='cart.php'; </script>";
								}
							?>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                           
                        </div>
                        <div class="col-lg-6 col-md-6" style="font-family:times;">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">Rs. <?php echo $total; ?></p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Delivery charges</p>
                                    <p class="cart_amount"> Rs. 25.00</p>
                                </div>
                                <a href="#">Calculate Amount</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">Rs. <?php echo $finaltotal; ?></p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="checkout.php">Proceed to Checkout</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            
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