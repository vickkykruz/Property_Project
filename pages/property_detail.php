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
  <div class="main-nav">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="./property.php" class="nav-link active dropdown-toggle">Rent a House</a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link dropdown-toggle">Hire a Car</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About Us</a>
            </li>
          </ul>
          <div class="side-nav">
            <a class="left" href="login.php">
              <i class="bx bxs-user"></i>
              Account
            </a>
            <a class="left two" href="property.php">
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
        <div class="share-container mt-2 mb-2">
          <h5>Facilities</h5>
          <div class="d-inline-flex flex-row flex-wrap">
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                pool
              </span>
              <span style="font-size: .8rem;">Outdoor swimming pool</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                shower
              </span>
              <span style="font-size: .8rem;">Private Bathroom</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                hotel
              </span>
              <span style="font-size: .8rem;">Private Bedroom</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                bathtub
              </span>
              <span style="font-size: .8rem;">Bathtub</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                local_parking
              </span>
              <span style="font-size: .8rem;">Free Parking</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                wifi
              </span>
              <span style="font-size: .8rem;">Free WiFi</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                airport_shuttle
              </span>
              <span style="font-size: .8rem;">Airport Shuttle</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                mode_fan
              </span>
              <span style="font-size: .8rem;">Air Condition</span>
            </div>
            <div class="p-2 m-1" style="border: 1px solid #ccc;">
              <span class="material-symbols-outlined">
                room_service
              </span>
              <span style="font-size: .8rem;">Room Services</span>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-8 col-md-8 col-sm-12">
        <h1 style="color: #18253e">PRESKEN WHITE HOUSE</h1>
        <hr style="margin-top: -5px" />
        <h5>Property Description</h5>
        <p>
          Set in Lagos, 3.7 km from Nike Art Gallery, PRESKEN WHITE HOUSE offers accommodation with an outdoor
          swimming pool, free private parking, a shared lounge and a restaurant. With a bar, the 3-star hotel has
          air-conditioned rooms with free WiFi
        </p>
        <button type="button" class="btn btn-outline-primary w-100" style="margin-top: -5px;">Show me more</button>

        <div class="d-flex mt-2 mb-3 p-2 justify-content-between" style="border: 1px solid #ccc; border-radius: 3px;">
          <div class="first-con">
            <h6>Sign in, save money</h6>
            <p>You could save 10% or more at this property when you sign in</p>
            <div class="d-inline-flex align-items-center">
              <button type="button" class="btn btn-outline-primary m-1" style="margin-top: -5px;">Sign in</button>
              <a href="">Create Account</a>
            </div>
          </div>
          <div class="second-con">
            <img src="../assets/images/signads.png" height="75px" width="80px" alt="">
          </div>
        </div>



        <!-- <a class="text-center common-btn mt-3 w-100" href="properties.html#">
            <i class="bx bxs-cart"></i>
            Order Proerty
        </a> -->
      </div>
    </div>
    <hr>
    <!--- Search box -->
    <h3 class="mt-3">Availability</h3>
    <p class="text-danger"><i class="bx bxl-info"></i> Select dates to see the property's availability and price
    </p>
    <div class="s002">
      <form>

        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z">
                </path>
              </svg>
            </div>
            <input id="search" type="text" placeholder="Enter Location" />
          </div>
          <div class="input-field second-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z">
                </path>
              </svg>
            </div>
            <input class="datepicker" id="depart" type="text" placeholder="29 Aug 2018" />
          </div>
          <div class="input-field third-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z">
                </path>
              </svg>
            </div>
            <input class="datepicker" id="return" type="text" placeholder="30 Aug 2018" />
          </div>
          <div class="input-field fifth-wrap">
            <button style="font-size: 1rem;" id="selction_place" class="btn-search" type="button">SELECT
              ROOM</button>

          </div>
          <div class="input-field fifth-wrap mt-1">
            <button style="font-size: 1rem;" class="btn-search" type="button">CHECK AVALIABLITY</button>
          </div>
        </div>
      </form>
    </div>
    <!--- End Search Box -->
    <table class="table table-bordered mt-2">
      <thead>
        <tr>
          <th>Room Type</th>
          <th>Sleep</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="width: 60%">
            <h6>
              <span class="material-symbols-outlined">
                chevron_right
              </span>
              <a href="http://" target="_blank" rel="noopener noreferrer">Superior King Room</a>
            </h6>
            <small>1 extra large double bed</small>
          </td>
          <td style="width: 20%">
            <div class="d-inline-flex">
              <span class="material-symbols-outlined">
                person
              </span>
              <span class="material-symbols-outlined">
                person
              </span>
            </div>
          </td>
          <td style="width: 20%">
            <button id="show_price" class="btn btn-primary w-100" type="button">Show Price</button>
          </td>
        </tr>
        <tr>
          <td style="width: 60%">
            <h6>
              <span class="material-symbols-outlined">
                chevron_right
              </span>
              <a href="http://" target="_blank" rel="noopener noreferrer">Superior Queen Room</a>
            </h6>
            <small>1 extra large double bed</small>
          </td>
          <td style="width: 20%">
            <div class="d-inline-flex">
              <span class="material-symbols-outlined">
                person
              </span>
              <span class="material-symbols-outlined">
                person
              </span>
            </div>
          </td>
          <td style="width: 20%">
            <button id="show_price" class="btn btn-primary w-100" type="button">Show Price</button>
          </td>
        </tr>
      </tbody>
    </table>

    <hr>

    <h4>Guest reviews</h4>
    <div class="rate-info">
      <span class="badge bg-primary">8.7</span>
      <small class="text-mute" style="margin-top: -15px">191 views</small>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="progress mt-3" role="progressbar" aria-label="Example with label" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 15px">
          <div class="progress-bar bg-primary" style="width: 90%">Cleanliness: 90%</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="progress mt-2" role="progressbar" aria-label="Example with label" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 15px">
          <div class="progress-bar bg-primary" style="width: 80%">Location: 80%</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="progress mt-2" role="progressbar" aria-label="Example with label" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 15px">
          <div class="progress-bar bg-success" style="width: 85%">Value for money: 85%</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="progress mt-2" role="progressbar" aria-label="Example with label" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 15px">
          <div class="progress-bar bg-primary" style="width: 80%">Location: 80%</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="progress mt-2" role="progressbar" aria-label="Example with label" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 15px">
          <div class="progress-bar bg-success" style="width: 85%">Value for money: 85%</div>
        </div>
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