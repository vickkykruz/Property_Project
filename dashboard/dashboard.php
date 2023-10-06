<?php
ob_start();
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.html");
}
include('scripts/config/config.php');
$userrid = $_SESSION['userid'];
$usertype = $_SESSION['usertype'];



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
                                    <a href="mailto:info@blaze.com.ng"><span class="" data-cfemail="">info@blaze.com.ng</span></a>
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
                                <a class="common-btn" href="properties.html#">
                                    <i class="bx bxs-quote-left"></i>
                                    Get A Quote
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

        <div class="main-nav three">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="properties.html#" class="nav-link dropdown-toggle">Home <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link">Home Demo One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Demo Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Demo Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="properties.html#" class="nav-link dropdown-toggle">Pages <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="properties.html#" class="nav-link dropdown-toggle">Users <i class="bx bx-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="login.html" class="nav-link">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="register.html" class="nav-link">Register</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="portfolio.html" class="nav-link">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Error Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="properties.html#" class="nav-link dropdown-toggle">Services <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="properties.html#" class="nav-link dropdown-toggle active">Properties <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="properties.html" class="nav-link active">Properties</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="property-right-sidebar.html" class="nav-link">Property Right Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="property-left-sidebar.html" class="nav-link">Property Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="property-details.html" class="nav-link">Property Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apartments.html" class="nav-link">Apartments</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="properties.html#" class="nav-link dropdown-toggle">Blog <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="left" href="login.html">
                                <i class="bx bxs-user"></i>
                                Account
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


    <div class="page-title-area title-bg-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Properties</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>Properties</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="properties-area two ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Recent Properties</span>
                <h2>We Provide Full Service At Every Step. What You Need?</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <div class="top">
                            <span>New York</span>
                            <span>For Sell</span>
                            <img src="assets/images/property/property1.jpg" alt="Property">
                        </div>
                        <div class="bottom">
                            <span>From $12,000.00</span>
                            <h3>
                                <a href="property-details.html">Sag Harbor Cottage</a>
                            </h3>
                            <a class="location" href="properties.html#">
                                <i class="bx bx-current-location"></i>
                                300 B 1st View Road, New York
                            </a>
                            <ul>
                                <li>5 BD</li>
                                <li>2 BA</li>
                                <li>1800 SF</li>
                                <li>6 RM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <div class="top">
                            <span>New York</span>
                            <span>For Rent</span>
                            <img src="assets/images/property/property2.jpg" alt="Property">
                        </div>
                        <div class="bottom">
                            <span>$11,000.00/Month</span>
                            <h3>
                                <a href="property-details.html">Cascade Blocks Villa</a>
                            </h3>
                            <a class="location" href="properties.html#">
                                <i class="bx bx-current-location"></i>
                                300 B 1st View Road, New York
                            </a>
                            <ul>
                                <li>5 BD</li>
                                <li>2 BA</li>
                                <li>1800 SF</li>
                                <li>6 RM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <div class="top">
                            <span>New York</span>
                            <span>For Rent</span>
                            <img src="assets/images/property/property3.jpg" alt="Property">
                        </div>
                        <div class="bottom">
                            <span>$10,000.00/Month</span>
                            <h3>
                                <a href="property-details.html">Extension Haven</a>
                            </h3>
                            <a class="location" href="properties.html#">
                                <i class="bx bx-current-location"></i>
                                300 B 1st View Road, New York
                            </a>
                            <ul>
                                <li>5 BD</li>
                                <li>2 BA</li>
                                <li>1800 SF</li>
                                <li>6 RM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <div class="top">
                            <span>New York</span>
                            <span>For Sell</span>
                            <img src="assets/images/property/property4.jpg" alt="Property">
                        </div>
                        <div class="bottom">
                            <span>From $9,000.00</span>
                            <h3>
                                <a href="property-details.html">Titan House</a>
                            </h3>
                            <a class="location" href="properties.html#">
                                <i class="bx bx-current-location"></i>
                                300 B 1st View Road, New York
                            </a>
                            <ul>
                                <li>5 BD</li>
                                <li>2 BA</li>
                                <li>1800 SF</li>
                                <li>6 RM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <div class="top">
                            <span>New York</span>
                            <span>For Sell</span>
                            <img src="assets/images/property/property5.jpg" alt="Property">
                        </div>
                        <div class="bottom">
                            <span>From $8,000.00</span>
                            <h3>
                                <a href="property-details.html">Royal House</a>
                            </h3>
                            <a class="location" href="properties.html#">
                                <i class="bx bx-current-location"></i>
                                300 B 1st View Road, New York
                            </a>
                            <ul>
                                <li>5 BD</li>
                                <li>2 BA</li>
                                <li>1800 SF</li>
                                <li>6 RM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="property-item">
                        <div class="top">
                            <span>New York</span>
                            <span>For Sell</span>
                            <img src="assets/images/property/property6.jpg" alt="Property">
                        </div>
                        <div class="bottom">
                            <span>From $7,000.00</span>
                            <h3>
                                <a href="property-details.html">Natural Cottage</a>
                            </h3>
                            <a class="location" href="properties.html#">
                                <i class="bx bx-current-location"></i>
                                300 B 1st View Road, New York
                            </a>
                            <ul>
                                <li>5 BD</li>
                                <li>2 BA</li>
                                <li>1800 SF</li>
                                <li>6 RM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-area">
                <ul>
                    <li>
                        <a href="properties.html#">Prev</a>
                    </li>
                    <li>
                        <a class="active" href="properties.html#">1</a>
                    </li>
                    <li>
                        <a href="properties.html#">2</a>
                    </li>
                    <li>
                        <a href="properties.html#">3</a>
                    </li>
                    <li>
                        <a href="properties.html#">Next</a>
                    </li>
                </ul>
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


    <div class="subscribe-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Subscribe To Our Newsletter</span>
                <h2>Sign Up For Newsletter And Get The Latest News And Updates</h2>
            </div>
            <div class="subscribe-content">
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                    <button class="btn common-btn" type="submit">
                        Subscribe
                        <i class="bx bxs-paper-plane"></i>
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
                <img src="assets/images/subscribe-main1.png" alt="Subscribe">
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

</body>

</html>