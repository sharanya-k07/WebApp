<?php
if(isset($_SESSION['petuser']))
{
	?>
<header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p style="font-family:georgia;">Email: <a href="mailto:">supportpawspot@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                   <li><a href="logout.php" style="font-family:georgia;">Logout</a></li> 
                                   
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="index.php"><img src="petimage/ps1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                   <form action="searchproduct.php" method="post">
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text" name="name"required="">
                                            <button type="submit" name="search" style="font-family:georgia;">Search</button> 
                                        </div>
                                    </form>
                                </div>
								<?php
									include 'config.php';
									$sql1 = "SELECT cart.cid, cart.pid, products.name, products.pprice, products.image, cart.quantity FROM cart INNER JOIN products ON cart.pid=products.pid where cart.userid='".$_SESSION['petuser']."'";
									$result1 = mysqli_query($con,$sql1);
									$num1=mysqlI_num_rows($result1);
									$sl=0;
									$total=0;
									?>
                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                        <a href="myprofile.php"><img src="assets/img/user.png" alt=""></a>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="javascript:void(0)"><img src="assets/img/shopping-bag.png" alt=""></a>
                                        <span class="cart_quantity"><?php echo $num1; ?></span>
										
										
										
										
										
										<!--mini cart-->
                                         <div class="mini_cart">
										 <?php
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
									?>
                                            <div class="cart_item">
											
                                               <div class="cart_img">
                                                   <a href="#"><img src="../petshop/image/<?php echo $img; ?>" alt="products"></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#"><?php echo $name; ?></a>
                                                    <p>Qty: <?php echo $qty; ?> X <span> Rs. <?php echo $price; ?> </span></p> 
                                                </div>
                                                
									
                                            </div>
											<?php
										}
									}
									?>
                                            
                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Total:</span>
                                                    <span class="price">Rs. <?php echo $total; ?></span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="cart.php" style="font-family:georgia;">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="checkout.php" style="font-family:georgia;">Checkout</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!--mini cart end-->
									
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="main_menu menu_position"> 
                                <nav>  
                                    <ul>
                                        <li><a href="index.php" style="font-family:georgia;">home</a></li>
										<li><a href="adoptpet.php" style="font-family:georgia;">Adopt Pet</a></li>
                                        <li><a href="petcareproduct.php" style="font-family:georgia;">petcare products</a></li>
										<li><a href="myorder.php" style="font-family:georgia;">My Orders</a></li>
										<li><a href="feedback.php" style="font-family:georgia;">Feedback</a></li>
                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>
	<?php
}
else
{
	echo "<script> location.href='userlogin.php'; </script>";
}	
?>
	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
    <!--header area end-->