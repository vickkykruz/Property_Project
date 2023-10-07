<?php
require_once('./partials/header/_auth.header.php');
?>
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
                            <a href="index.html#" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="properties.html" class="nav-link dropdown-toggle">Rent a House</a>
                        </li>
                        <li class="nav-item">
                            <a href="properties.html" class="nav-link dropdown-toggle">Hire a Car</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">About Us</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        <a class="left" href="login.html">
                            <i class="bx bxs-user"></i>
                            Login
                        </a>
                        <a class="left two" href="properties.html">
                            <i class="bx bx-chevron-right-circle"></i>
                            New Properties
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>Register</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Regiseter Section -->
<div class="user-area ptb-100">
    <div class="container">
        <div class="user-item">
            <form>
                <h2>Register</h2>
                <div class="row">
                    <div class="col-md-12" style="margin:20px;">
                        <div id="registerresponse"></div>
                    </div>
                    <div class="col-12">
                        <div>
                            <label>Select Acount Type</label>
                            <select class="wide" id="slectusertype">
                                <option value="1">User (Customer)</option>
                                <option value="2">Vendor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12" style="margin-top: 20px; ">
                        <div class="form-group">
                            <input type="text" id="fullname" class="form-control" placeholder="Your Full Name:">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="email" id="emailaddress" class="form-control" placeholder="Your Email:">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" id="userpassword" class="form-control" placeholder="Password:">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" id="confuserpassword" class="form-control" placeholder="Confirm Password:">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value id="flexCheckDefault4">
                                <label class="form-check-label" for="flexCheckDefault4">
                                    I accept all <a href="terms-conditions.html">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_GET['view']) == "property" && isset($_GET['id']) && isset($_GET['propertyTitle'])) { ?>
                        <input type="hidden" name="propertyId" id="propertyId" value="<?= $_GET['id'] ?> />
                    <div class=" col-lg-12">
                        <button type="button" id="submitbtn" class="btn common-btn">Register</button>
                </div>
            <?php } else { ?>
                <div class="col-lg-12">
                    <button type="button" id="submitbtn" class="btn common-btn">Register</button>
                </div>
            <?php } ?>
        </div>
        <h4>Or</h4>

        <h5>Already Have An Account? <a href="login.html">Login</a></h5>
        </form>
    </div>
</div>
</div>




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
                                    <a href="mailto:info@blaze.com.ng"><span class="" data-cfemail="">info@blaze.com.ng</span></a>
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
            <p>Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear())
                </script>Designed By <a href="#" target="_blank">Team Balewites</a>
            </p>
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
    $("body").on("click", "#submitbtn", function() {
        $("#submitbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
        var name = $("#fullname").val();
        var email = $("#emailaddress").val();
        var password = $("#userpassword").val();
        var confirmpass = $("#confuserpassword").val();

        var usertype = $('#slectusertype').val();

        var checkStatus = $('.form-check-input').prop('checked');

        var checkforatsign = email.includes("@");
        if (checkStatus == true) {
            var term = 'yes';
        } else {
            var term = 'no';
        }


        if (name == '' || email == '' || confirmpass == '' || password == '') {
            $("#registerresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i>  Fill all fields to proceed!!</center></div>');
            $("#submitbtn").html("Register");
            $("html, #registerresponse").animate({
                scrollTop: 500
            }, "slow");
        } else if (password !== confirmpass) {
            $("#registerresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i>Confirm the correct Password to Proceed!!</center></div>');
            $("#submitbtn").html("Register");
            $("html, #registerresponse").animate({
                scrollTop: 500
            }, "slow");
        } else if (term == 'no') {
            $("#registerresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i> Please read and agree to our terms and conditions to proceed!!</center></div>');
            $("#submitbtn").html("Register");
            $("html, #registerresponse").animate({
                scrollTop: 500
            }, "slow");
        } else if (checkforatsign !== true) {
            $("#registerresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i> Please enter a valid email address!!</center></div>');
            $("#submitbtn").html("Register");
            $("html, #registerresponse").animate({
                scrollTop: 500
            }, "slow");

        } else {

            $.ajax({
                type: 'post',
                url: "scripts/signup.php", //Here you will fetch records 
                data: 'name=' + name + '&usertype=' + usertype + '&email=' + email + '&password=' + password,
                success: function(data) {
                    $("#registerresponse").html('');

                    var dataresponse = (data);

                    if (dataresponse == '3') {
                        $("#registerresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i>A user with this email address has already been created !! </center></div>');
                        $("#submitbtn").html("Register");
                        $("html, #registerresponse").animate({
                            scrollTop: 500
                        }, "slow");
                    } else if (dataresponse == '1') {
                        $("#registerresponse").html('<div class="alert alert-success"><center><small>User registration successful please wait </small>while we log you in<i class="fa fa-spinner fa-spin"></i> </center></div>');
                        $("html, #registerresponse").animate({
                            scrollTop: 500
                        }, "slow");
                        setTimeout(() => {
                            window.location.href = "dashboard.php";
                        }, 1000);

                    } else if (dataresponse == '2') {
                        $("#registerresponse").html('<div class="alert alert-success"><center><small>Vendor registration successful please wait </small>while we log you in<i class="fa fa-spinner fa-spin"></i> </center></div>');
                        $("html, #registerresponse").animate({
                            scrollTop: 500
                        }, "slow");
                        setTimeout(() => {
                            window.location.href = "vendordashboard.php";
                        }, 1000);

                    } else {}

                }

            });

        }

    });
</script>

</body>

</html>