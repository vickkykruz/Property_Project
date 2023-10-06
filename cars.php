<?php
 ob_start();
 session_start();
if(!isset($_SESSION['userid']))
{
header("Location: login.html");
}else if( $_SESSION['usertype'] !== '2')
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
        <a href="index.html" class="nav-link"><i class="bx bxs-home-circle"></i> Home</a>
        </li>
            <li class="nav-item">
        <a href="vendordashboard.php" class="nav-link"><i class="bx bxs-dashboard" aria-hidden="false"></i> Dashboard</a>
        </li>
           <li class="nav-item">
        <a href="cars.php" class="nav-link active"><i class="bx bx-cog bx-spin" aria-hidden="false"></i> Manage Cars</a>
        </li>
        <li class="nav-item">
            <a href="houses.php" class="nav-link"><i class="bx bx-cog bx-spin" aria-hidden="false"></i> Manage Houses</a>
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
                    <div class="card"  style="margin:10px; box-shadow: rgba(237, 38, 71,0.24) 0px 3px 8px; margin-top:20px; border-color:rgba(237, 38, 71,0.24);">
                                <div class="card-body">
                                    <center>
                                        <div class="row">
                                            <div class="col-12">
                                                No of Available Cars
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
                    <div class="card"  style="margin:10px; box-shadow: rgba(237, 38, 71,0.24) 0px 3px 8px; margin-top:20px; border-color:rgba(237, 38, 71,0.24);">
                                <div class="card-body">
                                    <center>
                                        <div class="row">
                                            <div class="col-12">
                                                No of Available Houses
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
    <div class="col-4"></div>
     <div class="col-4"></div>
      <div class="col-4">
        <!-- Modal -->
<div class="modal fade" id="exampleModal"  data-bs-backdrop="static" 
            data-bs-keyboard="false"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bx bxs-add-to-queue"></i> Upload Car Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                     <div class="col-12">
                           <div class="card" style="box-shadow: rgba(237, 38, 71,0.24) 0px 3px 8px; margin:10px; border-color:rgba(237, 38, 71,0.24);">
                                <div class="card-body">
                                    <div class="row">
                                                  <div class="col-md-12" style="margin:20px;">
                                                                        <div id="responsess"></div>
                                                                    </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12 text-center">
                                            
                                            <form>
                                                
                                           
                                              <div class="form-group">
                                                <label for="cartitle">Car Name</label>
                                                <input type="text" class="form-control" id="cartitle">
                                              </div>
                                              <div class="form-group">
                                                <label for="carmodel">Car Model</label>
                                                <input type="text" class="form-control" id="carmodel">
                                              </div>
                                                  <div class="form-group">
                                                <label for="carlocation">Car Location</label>
                                                <input type="text" class="form-control" id="carlocation">
                                              </div>
                                                  <div class="form-group">
                                                <label for="cardesc">Car Description</label>
                                                <input type="text" class="form-control" id="cardesc">
                                              </div>
                                                 <div class="form-group">
                                                <label for="enterdriverli">Enter your Drivers License Number <small>(NOTE: You must have a valid drivers license number in order to proceed)</small></label>
                                                <input type="text" class="form-control" id="enterdriverli">
                                              </div>
                                                     <div class="form-group">
                                                <label for="entervehdesc">Enter your Vehicle Description</label>
                                                <input type="text" class="form-control" id="entervehdesc">
                                              </div>
                                                    <div class="form-group">
                                                <label for="enteravdate">Enter Available Date</label>
                                                <input type="date" class="form-control" id="enteravdate">
                                              </div>
                                                  <div class="form-group">
                                                <label for="enterrentduration">Enter Rent Duration</label>
                                                <input type="text" class="form-control" id="enterrentduration">
                                              </div>
                                                    <div class="form-group">
                                                <label for="enterprice">Enter Offer Price (₦)</label>
                                                <input type="number" class="form-control" id="enterprice">
                                              </div>
                                             
                                              	
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card" style="margin:10px; box-shadow: rgba(237, 38, 71,0.24) 0px 3px 8px; margin-top:20px; border-color:rgba(237, 38, 71,0.24);">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-12 text-center">
                                            
                                            <form>
                                           
                                              <div class="form-group">
                                                <label for="carimages"><small>Upload car at least 3 car images</small></label>
                                                <input type="file" name="carimages" id="carimages" multiple>
                                              </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="uploadcarbtn"><i class="bx bxs-add-to-queue"></i> Upload</button>
      
      </div>
    </div>
  </div>
</div>
                           
                
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bxs-add-to-queue"></i> Upload Car</button>
          
             
      </div>
</div>
</div>
</section>



<section class="properties-area two ptb-100">
<div class="container">
<div class="section-title">
<span class="sub-title">Available Cars</span>
</div>
         <div class="row">
                         <?php
                         $sqlgetcars = mysqli_query($link,"SELECT * FROM `tbl_cars` WHERE `cars_userid`='$userrid'");
                         $fetchavcars = mysqli_fetch_assoc($sqlgetcars);
                         do{
                             $carid = $fetchavcars['id'];
                             $sqlcarimag = mysqli_query($link,"SELECT * FROM `tbl_images` WHERE `image_propertyid`='$carid' AND `image_type`='car'");
                             $fetchcarimg = mysqli_fetch_assoc($sqlcarimag);
                             echo'
                              <div class="col-4">
                                    <div class="property-item" style="cursor:pointer;">
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
    <p>Copyright @<script data-cfasync="false" src=""></script><script>document.write(new Date().getFullYear())</script>Designed By <a href="#" target="_blank">Team Balewites</a></p>
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
 $("body").on("click","#uploadcarbtn", function(){
      $("#uploadcarbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
      var totalfiles = document.getElementById('carimages').files.length;
      
      alert(totalfiles);
      if(totalfiles == 3 ){

  var formData = new FormData();

  // Read selected files
  for (var index = 0; index < totalfiles; index++) {
    formData.append("files[]", document.getElementById('carimages').files[index]);
  }
  var cartitle = $("#cartitle").val();
  var carmodel = $("#carmodel").val();
  var carlocation = $("#carlocation").val();
  var cardesc = $("#cardesc").val();
  var enterdriverli = $("#enterdriverli").val();
  var entervehdesc = $("#entervehdesc").val();
  var enteravdate = $("#enteravdate").val();
  var enterrentduration = $("#enterrentduration").val();
  var enterprice = $("#enterprice").val();
          var userrid = "<?php echo $userrid; ?>";
  
  formData.append("cartitle", cartitle);
  formData.append("carmodel", carmodel);
  formData.append("carlocation", carlocation);
  formData.append("cardesc", cardesc);
  formData.append("enterdriverli", enterdriverli);
  formData.append("entervehdesc", entervehdesc);
  formData.append("enteravdate", enteravdate);
    formData.append("enterrentduration", enterrentduration);
      formData.append("enterprice", enterprice);
      formData.append("userrid", userrid);


             $.ajax({
                                                url: 'scripts/carmultiplefileupload.php',
                                                method:'POST',
                                                data: formData,
                                                cache:false,
                                                contentType: false,
                                                processData: false,
                                                success: function(data)
                                                {
                                                    $("#responsess").html(data);
                                                    $("#uploadcarbtn").html('<i class="bx bxs-add-to-queue"></i> Upload');

                                                    
                                                }
                        });



}else{
    $("#responsess").html('  <div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>oops!!</strong> Please select at least 3 images of your car in oreder to upload</div>');
                                                   $("#uploadcarbtn").html('<i class="bx bxs-add-to-queue"></i> Upload');
}
     
 });
</script>
</body>
</html>