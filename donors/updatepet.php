<!doctype html>
<html class="no-js" lang="en">

<!-- checkout.html  03:24:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Donors-UpdatePet</title>
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
                            <li><a href="index-2.html">home</a></li>
                            <li>Update Pet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="Checkout_section mt-60">
        <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <form action="#">
                            <h3>Update Pet Details</h3>
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                    <label>Name or Breed of Pet </label>
                                    <input type="text">    
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <label>Nick Name </label>
                                    <input type="text"> 
                                </div>
								<div class="col-12 mb-20">
                                    <label>Age</label>
                                    <input placeholder="Age" type="text">     
                                </div>
                                
								<div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">health Condition</label>
                                        <textarea id="order_note" rows="2" placeholder="Health Condition"></textarea>
                                    </div>    
                                </div>
								<div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Discription</label>
                                        <textarea id="order_note" rows="2" placeholder="About pet"></textarea>
                                    </div>    
                                </div>
								<div class="col-12">
									<label> Image:</label>
								</div>
								<div class="col-12">
									<input type="file" name="files[]" multiple="" class="form-control"><br>
								</div>
								<div class="col-lg-6">
									<input type="file" name="files[]" multiple="" class="form-control"><br>
								</div>
								<div class="col-lg-6">
									<input type="file" name="files[]" multiple="" class="form-control"><br>
								</div>
								<div class="col-lg-6">
									<input type="file" name="files[]" multiple="" class="form-control"><br>
								</div>
								<div class="col-lg-6">
									<input type="file" name="files[]" multiple="" class="form-control"><br>
								</div>
								
								<div class="order_button">
                                    <button  type="submit">Proceed</button> 
                                </div>		
								<a href=""></a>
                            </div>
                        </form> 
                    </div>
                </div> 
            </div> 
        </div>       
    </div>
    <!--Checkout page section end-->

   <?php include("footer.php"); ?>


<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

<!-- checkout.html  03:24:27 GMT -->
</html>