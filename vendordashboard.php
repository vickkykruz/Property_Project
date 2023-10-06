<?php
 ob_start();
 session_start();
if(!isset($_SESSION['userid']))
{
header("Location: login.html");
}
include('scripts/config/config.php');
  $userrid =$_SESSION['userid']; 
 $usertype = $_SESSION['usertype']; 
 
 /* ====calculate total cars added====**/
 $sqlcountcars = mysqli_query($link,"SELECT * FROM `tbl_cars` WHERE `cars_userid`='$userrid'");
 $counttotalcars = mysqli_num_rows($sqlcountcars);
  /* ====end calculate total cars added====**/
  
     /* ====calculate total houses added====**/
 $sqlcounthouse = mysqli_query($link,"SELECT * FROM `tbl_houses` WHERE `house_userid` ='$userrid'");
 $counttotalhouse = mysqli_num_rows($sqlcounthouse);
  /* ====end calculate total houses added====**/
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/fonts/flaticon.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/modal-video.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

<link rel="stylesheet" href="assets/css/theme-dark.css">
<title>Blaze - Bridging Gaps in Logistics</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>
     
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop"  data-bs-backdrop="static" 
            data-bs-keyboard="false" 
            tabindex="-1"
            aria-labelledby="staticBackdropLabel" 
            aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> Urgent Verification Needed</h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12 " >
                <div class="alert alert-primary"  style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                <center>
                    <small>
           <pre><strong><bold> Vendor Registration - Verify NIN, BVN, and Car Credentials</bold></strong>
Welcome to Blaze! Safety is our priority.
Vendors must verify their NIN and BVN for trust and transparency.
For car listings, upload car credentials and driver's license for each rental submission.
Cars must have trackers and valid insurance for approval.
Your diligence ensures a secure and reliable rental platform for all.
Join Blaze today and start sharing responsibly.
</pre>
                    </small>
                </center>
                </div>
            </div>
            <div class="col-12">
                           <div class="card" style="margin:10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-12 text-center">
                                            
                                            <form>
                                           
                                              <div class="form-group">
                                                <label for="enterbvn">Enter your BVN (Bank Verification Number)</label>
                                                <input type="text" class="form-control" id="enterbvn">
                                              </div>
                                                 <div class="form-group">
                                                <label for="enternin">Enter your NIN (National Identification Number)</label>
                                                <input type="text" class="form-control" id="enternin">
                                              </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="verifydetails">Verify Me!</button>
      </div>
    </div>
  </div>
</div>
<!--Modal-->
    
    
    

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner"></div>
</div>
</div>
</div>





  
    
    <div class="nav-top-area">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-sm-2 col-lg-2">
    <div class="left">
    <a href="index.html">
    <img src="assets/images/logo.png" class="logo-one" alt="Logo">
    <img src="assets/images/logo-two.png" class="logo-two" alt="Logo">
    </a>
    </div>
    </div>
    <div class="col-sm-12 col-lg-10">
    <div class="right">
    <ul>
    <li>
    <div class="inner">
    <i class="bx bx-mail-send"></i>
    <a href = "mailto:info@blaze.com.ng"><span class="" data-cfemail="">info@blaze.com.ng</span></a>
    <span>Drop us a line</span>
    </div>
    </li>
    <li>
    <div class="inner">
    <i class="bx bx-phone-call"></i>
    <a href="tel:+913431148">+234 913 431 148</a>
    <span>Make a call</span>
    </div>
    </li>
    <li>
    <a class="common-btn" href="logout.php">
    Logout
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    

    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
        <a href="index.html" class="logo">
        <img src="assets/images/logo-two.png" alt="Logo">
        </a>
        </div>
        
        <div class="main-nav">
        <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a href="index.html" class="nav-link">Home</a>
        </li>
            <li class="nav-item">
        <a href="vendordashboard.php" class="nav-link active"><i class="fa fa-cog" aria-hidden="false"></i> Dashboard</a>
        </li>
           <li class="nav-item">
        <a href="cars.php" class="nav-link"><i class="fa fa-cog" aria-hidden="false"></i> Manage Cars</a>
        </li>
        <li class="nav-item">
            <a href="houses.php" class="nav-link"><i class="fa fa-cog" aria-hidden="false"></i> Manage Houses</a>
            </li>
        </ul>
        <div class="side-nav">
        <a class="left" href="profile.php">
        <i class="bx bxs-user"></i>
        Profile
        </a>
        </div>
        </div>
        </nav>
        </div>
        </div>
        </div>
        



<section class="properties-area two ptb-100">
<div class="container">
<div class="section-title">
<span class="sub-title" style="margin-top:50px;">Welcome Vendor</span>
</div>
<div class="row">
   <div class="col-6">
                    <div class="card" style="margin:10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <div class="card-body">
                                    <center>
                                        <div class="row">
                                            <div class="col-12">
                                                Number Of Cars Added
                                            </div>
                                              <div class="col-12">
                                                <?php echo number_format($counttotalcars); ?>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                    </div>
       
   </div> 
      <div class="col-6">
                    <div class="card" style="margin:10px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <div class="card-body">
                                    <center>
                                        <div class="row">
                                            <div class="col-12">
                                                Number Of Houses Added
                                            </div>
                                              <div class="col-12">
                                                 <?php echo number_format($counttotalhouse); ?>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                    </div>
       
   </div> 
   
</div>

         <div class="row">
             <div class="col-12">
                 <div class="section-title">
<span class="sub-title" style="margin-top:50px;">Cars available for Rental</span>
</div>
             </div>
                         <?php
                         $sqlgetcars = mysqli_query($link,"SELECT * FROM `tbl_cars` WHERE `cars_userid`='$userrid'");
                         $fetchavcars = mysqli_fetch_assoc($sqlgetcars);
                         do{
                             $carid = $fetchavcars['id'];
                             $sqlcarimag = mysqli_query($link,"SELECT * FROM `tbl_images` WHERE `image_propertyid`='$carid' AND `image_type`='car'");
                             $fetchcarimg = mysqli_fetch_assoc($sqlcarimag);
                             echo'
                              <div class="col-4">
                                    <div class="property-item">
                                    <div class="top">
                                    <span>'.$fetchavcars['cars_location'].'</span>
                                    <span>For Rent</span>
                                    <img src="uploads/'.$fetchcarimg['image_title'].'" alt="Property">
                                    </div>
                                    <div class="bottom">
                                    <span>₦ '.number_format($fetchavcars['cars_offerprice']).'</span>
                                    <h3>
                                    <a href="#">'.$fetchavcars['cars_name'].' '.$fetchavcars['cars_model'].'</a>
                                    </h3>
                                    <a class="location" href="#">
                                    <i class="bx bx-current-location"></i>
                                   '.$fetchavcars['cars_location'].'
                                    </a>
                                    </div>
                                    </div>
                                    </div>
                             ';
                             
                         }while($fetchavcars = mysqli_fetch_assoc($sqlgetcars));
                         ?>
                       
                    </div>


</div>
</section>


<section class="feature-area ptb-100">
<div class="feature-shape">
<img src="assets/images/feature-shape.png" alt="Shape">
</div>
<div class="container">
<div class="section-title">
<span class="sub-title">Featured Properties</span>
<h2>Recommended Apartment For You</h2>
</div>
<div class="feature-slider owl-theme owl-carousel">
<div class="feature-item">
<div class="row">
<div class="col-sm-7 col-lg-5 p-0">
<div class="feature-content">
<div class="top">
<h3>
<a href="property-details.html">Sag Harbor Cottage</a>
<span>1/25</span>
</h3>
<a class="location" href="properties.html#">
<i class="bx bx-current-location"></i>
300 B 1st View Road, New York
</a>
<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>Bed-Room</h4>
<i class="bx bx-bed"></i>
<span>5</span>
</li>
<li>
<h4>Bath-Room</h4>
<i class="bx bx-bath"></i>
<span>2</span>
</li>
<li>
<h4>Square-Feet</h4>
<i class="bx bx-square"></i>
<span>1800</span>
</li>
<li>
<h4>Total-Room</h4>
<i class="bx bx-building-house"></i>
<span>8</span>
</li>
</ul>
</div>
<div class="sell">
<h4>
From $12,000.00
<a href="properties.html#">For Sell</a>
</h4>
</div>
</div>
</div>
<div class="col-sm-5 col-lg-7 p-0">
<div class="feature-img one">
<img src="assets/images/feature1.jpg" alt="Feature">
</div>
</div>
</div>
</div>
<div class="feature-item">
<div class="row">
<div class="col-sm-7 col-lg-5 p-0">
<div class="feature-content">
<div class="top">
<h3>
<a href="property-details.html">Royal Apartment</a>
<span>1/25</span>
</h3>
<a class="location" href="properties.html#">
<i class="bx bx-current-location"></i>
300 B 1st View Road, New York
</a>
<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>Bed-Room</h4>
<i class="bx bx-bed"></i>
<span>5</span>
</li>
<li>
<h4>Bath-Room</h4>
<i class="bx bx-bath"></i>
<span>2</span>
</li>
<li>
<h4>Square-Feet</h4>
<i class="bx bx-square"></i>
<span>1800</span>
</li>
<li>
<h4>Total-Room</h4>
<i class="bx bx-building-house"></i>
<span>8</span>
</li>
</ul>
</div>
<div class="sell">
<h4>
From $12,000.00
<a href="properties.html#">For Sell</a>
</h4>
</div>
</div>
</div>
<div class="col-sm-5 col-lg-7 p-0">
<div class="feature-img two">
<img src="assets/images/feature2.jpg" alt="Feature">
</div>
</div>
</div>
</div>
<div class="feature-item">
<div class="row">
<div class="col-sm-7 col-lg-5 p-0">
<div class="feature-content">
<div class="top">
<h3>
<a href="property-details.html">Sag Harbor Cottage</a>
<span>1/25</span>
</h3>
<a class="location" href="properties.html#">
<i class="bx bx-current-location"></i>
300 B 1st View Road, New York
</a>
<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>Bed-Room</h4>
<i class="bx bx-bed"></i>
<span>5</span>
</li>
<li>
<h4>Bath-Room</h4>
<i class="bx bx-bath"></i>
<span>2</span>
</li>
<li>
<h4>Square-Feet</h4>
<i class="bx bx-square"></i>
<span>1800</span>
</li>
<li>
<h4>Total-Room</h4>
<i class="bx bx-building-house"></i>
<span>8</span>
</li>
</ul>
</div>
<div class="sell">
<h4>
From $12,000.00
<a href="properties.html#">For Sell</a>
</h4>
</div>
</div>
</div>
<div class="col-sm-5 col-lg-7 p-0">
<div class="feature-img three">
<img src="assets/images/feature3.jpg" alt="Feature">
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="offer-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">Our Features</span>
<h2>We Offer Perfect Real Estate Services And More</h2>
</div>
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="offer-item">
<ul class="align-items-center">
<li>
<i class="flaticon-world-grid"></i>
</li>
<li>
<h3>
<a href="service-details.html">Worldwide Company</a>
</h3>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="offer-item">
<ul class="align-items-center">
<li>
<i class="flaticon-real-estate-agent"></i>
</li>
<li>
<h3>
<a href="service-details.html">Experience Agent</a>
</h3>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="offer-item">
<ul class="align-items-center">
<li>
<i class="flaticon-commission"></i>
</li>
<li>
<h3>
<a href="service-details.html">Lowest Commission</a>
</h3>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="offer-item">
<ul class="align-items-center">
<li>
<i class="flaticon-life-insurance"></i>
</li>
<li>
<h3>
<a href="service-details.html">Property Insurance</a>
</h3>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="offer-item">
<ul class="align-items-center">
<li>
<i class="flaticon-fast-delivery"></i>
</li>
<li>
<h3>
<a href="service-details.html">Fastest Service</a>
</h3>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="offer-item">
<ul class="align-items-center">
<li>
<i class="flaticon-sales"></i>
</li>
<li>
<h3>
<a href="service-details.html">Largest Real Estate</a>
</h3>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>



<footer class="footer-area pt-100">
    <div class="container">
    <div class="row">
    <div class="col-sm-6 col-lg-3">
    <div class="footer-item">
    <div class="footer-logo">
    <div class="top">
    <a class="logo" href="index.html">
    <img src="assets/images/logo.png" class="footer-logo1" alt="Logo">
    <img src="assets/images/logo-two.png" class="footer-logo2" alt="Logo">
    </a>
    <p>Bridging Gaps in Logistics</p>
    <ul>
    <li>
    <a href="index.html#" target="_blank">
    <i class="bx bxl-facebook"></i>
    </a>
    </li>
    <li>
    <a href="index.html#" target="_blank">
    <i class="bx bxl-twitter"></i>
    </a>
    </li>
    <li>
    <a href="index.html#" target="_blank">
    <i class="bx bxl-instagram"></i>
    </a>
    </li>
    <li>
    <a href="index.html#" target="_blank">
    <i class="bx bxl-youtube"></i>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="footer-item">
    <div class="footer-links">
    <h3>Quick Links</h3>
    <div class="top">
    <div class="left">
    <ul>
    <li>
    <a href="about.html">About Us</a>
    </li>
    <li>
    <a href="services.html">Rent a car</a>
    </li>
    <li>
    <a href="properties.html">Rent a house</a>
    </li>
    <li>
    <a href="contact.html">Contact</a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="footer-item">
        <div class="footer-links">
        <h3>Quick Links</h3>
        <div class="top">
        <div class="left">
        <ul>
        <li>
        <a href="about.html">About Us</a>
        </li>
        <li>
        <a href="services.html">Rent a car</a>
        </li>
        <li>
        <a href="properties.html">Rent a house</a>
        </li>
        <li>
        <a href="contact.html">Contact</a>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
    <div class="col-sm-6 col-lg-3">
    <div class="footer-item">
    <div class="footer-contact">
    <h3>Contact Information</h3>
    <div class="top">
    <ul>
    <li>
    <i class="bx bx-current-location"></i>
    <a href="index.html#">NiCON plaza Left Wing Abuja, Nigeria</a>
    <span>Meet Us In Office</span>
    </li>
    <li>
    <i class="bx bx-mail-send"></i>
    <a href = "mailto:info@blaze.com.ng"><span class="" data-cfemail="">info@blaze.com.ng</span></a>
    <span>Drop Us A Line</span>
    </li>
    <li>
    <i class="bx bxs-hourglass"></i>
    <p>24 HRS</p>
    <span>Office Hour</span>
    </li>
    </ul>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    <div class="copyright-area">
    <p>Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script>Designed By <a href="#" target="_blank">Team Balewites</a></p>
    </div>
    </div>
    </footer>
  


<div class="go-top">
<i class="bx bxs-arrow-to-top"></i>
<i class="bx bxs-arrow-to-top"></i>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/jquery-modal-video.min.js"></script>

<script src="assets/js/custom.js"></script>
<script>
    $(document).ready(function(){
        var userrid = "<?php echo $userrid; ?>";
               $.ajax({
									type : 'post',
									url : 'scripts/checkvendorverstats.php', //Here you will fetch records 
									data: 'userrid='+userrid,
									success : function(data)
									{
									    var vendorverstats = (data);
									    if(vendorverstats == '1')
									    {
									       $('#staticBackdrop').modal('hide'); 
									    }else
									    {
									        $('#staticBackdrop').modal('show'); 
									    }
									        
									
									  
									    
									}
               });
               
               $("body").on("click","#verifydetails", function(){
                   var enterbvn = $("#enterbvn").val();
                   var enternin = $("#enternin").val();
                     $.ajax({
									type : 'post',
									url : 'scripts/checkvendorverstats.php', //Here you will fetch records 
									data: 'enterbvn='+enterbvn+'&enternin='+enternin,
    								success : function(data)
    									{
    									    alert(data);
    									}
                     });
    									   
               });
               
               
           
        
    });
</script>
</body>
</html>