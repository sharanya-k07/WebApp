<?php
session_start();
if(isset($_SESSION['shopuser']))
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
                        <ul>
                            <li><a href="index-2.html">home</a></li>
                            <li>Vieworders</li>
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
                        <h2 style="font-family:georgia;font-size:30px;color:#458c8b;">VIEW ORDERS</h2>
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
                            <thead style="font-family:georgia;">
                                <tr style="font-family:georgia;">
									<th class="product_thumb" >ID</th>
									<th class="product_thumb">Username</th>
									<th class="product_thumb">Address</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
								
									
                                </tr>
                            </thead>
                            <tbody>
							<?php
									include 'config.php';
									$sql1 = "SELECT ordertb.oid, ordertb.pid, products.name, products.pprice, products.image, ordertb.quantity, ordertb.userid, address.address1, address.address2, address.city, address.pin, address.contact FROM ordertb INNER JOIN products ON ordertb.pid=products.pid INNER JOIN address on ordertb.userid=address.userid where products.shopuser='".$_SESSION['shopuser']."'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									if($num1 > 0)
									{ 
									while($row1 = mysqli_fetch_array($result1))
									{ 
									$sl+=1;
									$oid=$row1[0];
									$pid=$row1[1];
									$name=$row1[2];
									$price=$row1[3];
									$img=$row1[4];
									$qty=$row1[5];
									$Userid=$row1[6];
									$addr1=$row1[7];
									$addr2=$row1[8];
									$city=$row1[9];
									$pin=$row1[10];
									$contact=$row1[11];
									$tot=$qty*$price;
									$total=$total+$tot;
									?>
                                <tr style="font-family:times;">
									<td class="product_name"><?php echo $sl; ?></td>
									<td class="product_name"><?php echo $Userid; ?></td>
									<td class="product_name"><?php echo $addr1; ?><br><?php echo $addr2; ?><br><?php echo $city; ?><br>NO. <?php echo $contact; ?><br><?php echo $pin; ?></td>
                                    <td class="product_thumb"><a href="#"><img src="image/<?php echo $img; ?>" alt=""></a></td>
                                    <td class="product_name"><a href="#"><?php echo $name; ?></a></td>
                                    <td class="product-price">Rs. <?php echo $price; ?></td>
                                    <td class="product_quantity">Qty: <?php echo $qty; ?></td>
									<td class="product-price"><?php echo $tot; ?></td>
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
	echo "<script> location.href='user-login.php'; </script>";
}	
?>