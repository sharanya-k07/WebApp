<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User-About</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
	
<style>
#scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#185a6e;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#dbbb02;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}
</style>

</head>

<body>
<?php include("header.php"); ?>
<a href="#" id="scroll" style="display: none;"><span></span></a>
    
    <!--Features area-->
    <section class="gray-bg pt-60 pb-60" style="background-color:#f0ede4;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1 order-sm-1">
                    <div class="pro-details-feature">
                        <img src="petimage/about1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-2 order-md-2 order-sm-2">
                    <div class="pro-details-feature">
                        
                        <p style="text-align:justify;font-family:bookman;font-size:20px;">The main idea of this project is to provide a user friendly interface to automate the process of serving towards the welfare of the pets by giving the abandoned pets a place of shelter and care them with affection. The application also gives guidelines for caring towards the pets, adoption procedure of a pet. The user can do the adoption process through the application as this process is time consuming if done manually. The user can register themselves to the application and adopt a pet or purchase the products related to pets. For adoption, the user can choose the pets that are available, view their details and if they wish they can continue with the process of adoption. </p>
                        
                        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-3 order-md-4 order-sm-4 order-4">
                    <div class="pro-details-feature">
                        
                        <p style="text-align:justify;font-family:bookman;font-size:20px;">In case of purchase of products related to the pets, the user can choose the products they require from the application that are organized based on categories (i.e. food,combos,supplements etc). Payment of the purchased products is done by using by credit card, debit card or cash on delivery. The administrator of the application will be able to maintain the records of the adopters of the pets, purchasers of the products making the manual work easier. The administrator can also maintain the details of pets and products.The main objective of this project is to automate the process of serving towards the welfare of the pets by giving the abandoned pets a place of shelter with care and affection.</p>
                        
                        
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-lg-4 order-md-3 order-sm-3 order-3">
                    <div class="pro-details-feature">
                        <img src="petimage/about2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!--Features area-->

    
 <?php include("footer.php"); ?>  


<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script>

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>


</body>

<!--   03:22:07 GMT -->
</html>