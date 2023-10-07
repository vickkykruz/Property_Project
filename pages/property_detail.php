<?php
//* View The property from the index page
if (!isset($_GET['view']) || empty($_GET['view']) || !isset($_GET['id']) || empty($_GET['id'])) {
  session_destroy(); //* Just in case their is an active session
  header("Location: http://localhost/Property_Project/");
}

$propertyId = $_GET['id'];
$view = $_GET['view'];

//! Database Connection
require_once('../database/db.php');

//* Include the libraries
require_once('./partials/queries/_propertySql.php');
require_once('../partials/queries/_property_details.php');
require_once('../partials/_header.php');
?>

<!-- Navbar --->
<div class="navbar-area sticky-top" style="background-color: darkblue !important">
  <div class="mobile-nav">
    <a href="index.html" class="logo">
      <img src="../assets/images/logo-two.png" alt="Logo" />
    </a>
  </div>

  <!--- Navbar Link -->
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

<!--- Section i edited -->
<section class="properties-areas two ptb-100 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="img-container">
          <img class="w-100" src="../assets/<?= $rowDetail['properyImage'] ?>" alt="House image" />
        </div>
        <!--- Share Property --->
        <div class="share-container mt-2">
          <h6>Share This Property</h6>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <h1 style="color: #18253e"><?= $rowDetail['propertyName'] ?></h1>
        <hr style="margin-top: -5px" />
        <h5>Property Description</h5>
        <p>
          <?= $rowDetail['propertyDesc'] ?>
        </p>
        <hr style="margin-top: -8px" />
        <h5>Property Details</h5>
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <td>
                <h6>Type</h6>
                <small style="margin-top: -8px !important">Detached Duplex</small>
              </td>
              <td>
                <h6>Market Status</h6>
                <small style="margin-top: -8px !important"><?= ucfirst($rowDetail['marketStatus']) ?></small>
              </td>
            </tr>
            <tr>
              <td>
                <h6>Bedroom</h6>
                <small style="margin-top: -8px !important"><?= $fetchDetail['bedRoom'] ?></small>
              </td>
              <td>
                <h6>Bathroom</h6>
                <small style="margin-top: -8px !important"><?= $fetchDetail['bathRoom'] ?></small>
              </td>
            </tr>
            <tr>
              <td>
                <h6>Packing Space</h6>
                <?php if ($fetchDetail['squareF'] == 0) { ?>
                  <small style="margin-top: -8px !important"> None </small>
                <?php } else { ?>
                  <small style="margin-top: -8px !important"> <?= $fetchDetail['squareF'] ?></small>
                <?php } ?>
              </td>
              <td>
                <h6>Service Changes</h6>
                <small style="margin-top: -8px !important">NGN <?= number_format($rowDetail['amount'], 2) ?></small>
              </td>
            </tr>
          </tbody>
        </table>

        <?php if ($view == "property") {  ?>
          <a class="text-center common-btn mt-3 w-100" href="../login.php?view=property&id=<?= $rowDetail['id'] ?>&propertyTitle=<?= $rowDetail['propertyName']?>">
            <i class="bx bxs-cart"></i>
            Order Proerty
          </a>
        <?php } else { ?>
          <a class="text-center common-btn mt-3 w-100" href="properties.html#">
            <i class="bx bxs-cart"></i>
            Order Proerty
          </a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<!-- Recommend Properties -->
<section class="feature-area ptb-100">
  <div class="feature-shape">
    <img src="assets/images/feature-shape.png" alt="Shape" />
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
                <p>
                  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor
                </p>
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
              <img src="https://blazehq.com.ng/assets/images/feature3.jpg" alt="Feature" />
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
                <p>
                  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor
                </p>
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
              <img src="https://blazehq.com.ng/assets/images/feature1.jpg" alt="Feature" />
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
                <p>
                  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor
                </p>
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
              <img src="https://blazehq.com.ng/assets/images/feature2.jpg" alt="Feature" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<footer class="footer-area pt-100">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="footer-item">
          <div class="footer-logo">
            <div class="top">
              <a class="logo" href="index.html">
                <img src="../assets/images/logo.png" class="footer-logo1" alt="Logo" />
                <img src="../assets/images/logo-two.png" class="footer-logo2" alt="Logo" />
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
      <p>
        Copyright @
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
          document.write(new Date().getFullYear());
        </script>
        Designed By <a href="#" target="_blank">Team Balewites</a>
      </p>
    </div>
  </div>
</footer>
<div class="go-top">
  <i class="bx bxs-arrow-to-top"></i>
  <i class="bx bxs-arrow-to-top"></i>
</div>

<!--- Including Script files -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/jquery.nice-select.min.js"></script>

<script src="../assets/js/jquery.meanmenu.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/odometer.min.js"></script>
<script src="../assets/js/jquery.appear.min.js"></script>

<script src="../assets/js/jquery-modal-video.min.js"></script>

<script src="../assets/js/custom.js"></script>
</body>

</html>