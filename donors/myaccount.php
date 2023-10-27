<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- about.html  03:24:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet shop-myshop</title>
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
<style>
.bn39 {
  background-image: linear-gradient(135deg, #008aff, #86d472);
  border-radius: 6px;
  box-sizing: border-box;
  color: #ffffff;
  display: block;
  height: 50px;
  font-size: 1.4em;
  font-weight: 600;
  padding: 4px;
  position: relative;
  text-decoration: none;
  width: 7em;
  z-index: 2;
}

.bn39:hover {
  color: #fff;
}

.bn39 .bn39span {
  align-items: center;
  background: #0e0e10;
  border-radius: 6px;
  display: flex;
  justify-content: center;
  height: 100%;
  transition: background 0.5s ease;
  width: 100%;
}

.bn39:hover .bn39span {
  background: transparent;
}
</style>
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
                            <li>my shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
   
   <!--team area start-->
   <div class="team_area">
       <div class="container">
           <div class="row justify-content-center">
			<?php
					include 'config.php';
					$sql1 = "select * from donorregister where demail='".$_SESSION['donoruser']."'";
					$result1 = mysqli_query($con,$sql1);
					$num1=mysqlI_num_rows($result1);
					$sl=0;
					if($num1 > 0)
					{ 
						while($row1 = mysqli_fetch_array($result1))
						{ 
							$sl+=1;
							$id=$row1[0];
							$dname=$row1['dname'];
							$dphone=$row1['dphone'];
							$demail=$row1['demail'];
							$daddress=$row1['daddress'];
						
			?>
                <div class="col-lg-7 col-md-9 col-sm-16">
                    <article class="team_member">
                        <figure style="padding:15px 12px;">
                            <!--<div class="team_thumb">
                                <img src="assets/img/about/team-1.jpg" alt="">
                            </div>-->
                            <figcaption class="team_content" style="padding:15px 12px; background-color:#EAFCFD;">
                                <h2 style="font-family:georgia;color:navy;">Name: <?php echo $dname; ?></h2>
								<h3 style="font-family:georgia;"><b>Email: <?php echo $demail; ?></b></h3>
                                <h5 style="font-family:times;">Phone: <?php echo $dphone; ?></h5><br>
                               
								<h5 style="font-family:georgia;">Address: <?php echo $daddress; ?>, India.</h5>
								<center><a class="bn39" href="updatemyaccount.php"><span class="bn39span">Update</span></a></center>
                            </figcaption>
                        </figure>   
                    </article>
                </div>
				<?php }
					}
					?>
                <!--<div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="assets/img/about/team-2.jpg" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Mary Marlive</h3>
                                <h5>Delevery Manager</h5>
                                <p>Phone: +(800) 123 456 789 <br> Email: john@example.com</p>
                            </figcaption>
                        </figure>   
                    </article>
                </div>-->
                <!--<div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="assets/img/about/team-3.jpg" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>Michael Corn</h3>
                                <h5>Quality Controller</h5>
                                <p>Phone: +(800) 123 456 789 <br> Email: john@example.com</p>
                            </figcaption>
                        </figure>   
                    </article>
                </div>-->
               <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <article class="team_member">
                        <figure>
                            <div class="team_thumb">
                                <img src="assets/img/about/team-4.jpg" alt="">
                            </div>
                            <figcaption class="team_content">
                                <h3>James Troops</h3>
                                <h5>Program assistant</h5>
                                <p>Phone: +(800) 123 456 789 <br> Email: john@example.com</p>
                            </figcaption>
                        </figure>   
                    </article>
                </div>-->
           </div>
       </div>
   </div>
   <!--team area end-->
        

<?php include("footer.php"); ?>


<!-- JS
============================================ -->



<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- about.html  03:24:44 GMT -->
</html>