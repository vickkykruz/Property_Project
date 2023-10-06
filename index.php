<?php
  //! Database Connection
  require_once('./database/db.php');

  //* Include libraries
  require_once('./partials/queries/_recommanded_property.php');
  require_once('./partials/_header.php');
?>
  <!-- Nvarbar Section -->
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
                <a href="login.php" class="nav-link dropdown-toggle">Rent a House</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link dropdown-toggle">Hire a Car</a>
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


  <!-- Banner Section -->
  <div class="banner-area">
    <div class="banner-slider owl-theme owl-carousel">
      <div class="banner-slider-item banner-slider-img-one">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="banner-content">
                <span class="banner-span">Blaze: Your Premier Car and House Rental Service</span>
                <h1>Welcome to Blaze, your friendly platform for easy house and car rentals!</h1>
                <div class="tab slides-category-list-tab">
                  <form>
                    <ul class="tabs banner-form-tag">
                      <li>
                        <a href="login.php">Rent a car</a>
                      </li>
                      <li>
                        <a href="login.php">Rent a house</a>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-slider-item banner-slider-img-two">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="banner-content">
                <span class="banner-span">Welcome to Blaze</span>
                <h1>Your trusted partner for unforgettable house and car rentals.</h1>
                <div class="tab slides-category-list-tab">
                  <form>
                    <ul class="tabs banner-form-tag">
                      <li>
                        <a href="login.php">Get Started</a>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-slider-item banner-slider-img-three">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">
              <div class="banner-content">
                <span class="banner-span">Find A Modern, Safe & Secure Home</span>
                <h1>We Built Your Home To Keep Safe And Secure</h1>
                <div class="tab slides-category-list-tab">
                  <form>
                    <ul class="tabs banner-form-tag">

                      <li>
                        <a href="login.php">Rent a house</a>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Recommend Houses -->
  <?php if (mysqli_num_rows($propertySql) > 0 ) {?>
  <section class="apartment-area pt-100 pb-70">
    <div class="container-fluid">
      <div class="section-title">
        <span class="sub-title">Featured Apartment For You</span>
        <h2>Recommended Apartment For You</h2>
      </div>
      <div class="apartment-slider owl-theme owl-carousel">

        <?php 
          while ($propertyRow = mysqli_fetch_assoc($propertySql)) {
            $propertyId = $propertyRow['id'];
            require_once('./partials/queries/_property_details.php'); 
        ?>
        <div class="apartment-item">
          <img src="assets/<?= $propertyRow['properyImage'] ?>" alt="Apartment">
          <div class="inner">
            <h3>
              <a href="property-details.html"><?= $propertyRow['propertyName'] ?></a>
            </h3>
            <span>NGN <?= number_format($propertyRow['amount']) ?></span>
            <ul>
              <li><?= $fetchDetail['bedRoom'] ?> BD</li>
              <li><?= $fetchDetail['bathRoom'] ?> BA</li>
              <?php if ($fetchDetail['squareF'] != 0) { ?>
                <li><?= $fetchDetail['squareF'] ?> SF</li>
              <?php } ?>
            </ul>
          </div>
          <div class="property-btn">
            <a class="common-btn" href="property-details.html">
              View Details
              <i class="bx bx-chevron-right"></i>
            </a>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </section>
  <?php } ?>






<!-- Recommanded Cars -->
  <section class="apartment-area pt-100 pb-70">
    <div class="container-fluid">
      <div class="section-title">
        <span class="sub-title">Featured Cars For You</span>
        <h2>Recommended Cars For You</h2>
      </div>
      <div class="apartment-slider owl-theme owl-carousel">
        <div class="apartment-item">
          <img src="assets/images/apartment/apartment1.jpg" alt="Apartment">
          <div class="inner">
            <h3>
              <a href="property-details.html">Apartment With Furniture</a>
            </h3>
            <span>$12,000.00</span>
            <ul>
              <li>5 BD</li>
              <li>2 BA</li>
              <li>1800 SF</li>
            </ul>
          </div>
          <div class="property-btn">
            <a class="common-btn" href="property-details.html">
              View Details
              <i class="bx bx-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="apartment-item">
          <img src="assets/images/apartment/apartment2.jpg" alt="Apartment">
          <div class="inner">
            <h3>
              <a href="property-details.html">Modern Apartment</a>
            </h3>
            <span>$13,000.00</span>
            <ul>
              <li>5 BD</li>
              <li>2 BA</li>
              <li>1800 SF</li>
            </ul>
          </div>
          <div class="property-btn">
            <a class="common-btn" href="property-details.html">
              View Details
              <i class="bx bx-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="apartment-item">
          <img src="assets/images/apartment/apartment3.jpg" alt="Apartment">
          <div class="inner">
            <h3>
              <a href="property-details.html">Elegant Studio Flat</a>
            </h3>
            <span>$14,000.00</span>
            <ul>
              <li>5 BD</li>
              <li>2 BA</li>
              <li>1800 SF</li>
            </ul>
          </div>
          <div class="property-btn">
            <a class="common-btn" href="property-details.html">
              View Details
              <i class="bx bx-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="apartment-item">
          <img src="assets/images/apartment/apartment4.jpg" alt="Apartment">
          <div class="inner">
            <h3>
              <a href="property-details.html">The Tenement House</a>
            </h3>
            <span>$15,000.00</span>
            <ul>
              <li>5 BD</li>
              <li>2 BA</li>
              <li>1800 SF</li>
            </ul>
          </div>
          <div class="property-btn">
            <a class="common-btn" href="property-details.html">
              View Details
              <i class="bx bx-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="apartment-item">
          <img src="assets/images/apartment/apartment5.jpg" alt="Apartment">
          <div class="inner">
            <h3>
              <a href="property-details.html">The Royal House</a>
            </h3>
            <span>$16,000.00</span>
            <ul>
              <li>5 BD</li>
              <li>2 BA</li>
              <li>1800 SF</li>
            </ul>
          </div>
          <div class="property-btn">
            <a class="common-btn" href="property-details.html">
              View Details
              <i class="bx bx-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="apartment-item">
          <img src="assets/images/apartment/apartment6.jpg" alt="Apartment">
          <div class="inner">
            <h3>
              <a href="property-details.html">Apartment With Sofa</a>
            </h3>
            <span>$17,000.00</span>
            <ul>
              <li>5 BD</li>
              <li>2 BA</li>
              <li>1800 SF</li>
            </ul>
          </div>
          <div class="property-btn">
            <a class="common-btn" href="property-details.html">
              View Details
              <i class="bx bx-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- About-us Section -->
  <section class="choose-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Why Choose Us</span>
        <h2>Blaze: Your Ideal Home and Car Rental Solution</h2>
        <p>Blaze offers a diverse range of houses and cars for you to choose from. Whether you're planning a vacation or simply need a stylish ride, we've got options that suit your needs.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-key"></i>
            <h3>Maximize Earnings</h3>
            <p>Generate extra income by renting your idle house or car with Blaze, converting assets into profits</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-real-estate-agent"></i>
            <h3>User-Friendly Platform</h3>
            <p>Our user-focused website boasts intuitive design, ensuring renters and owners enjoy effortless navigation and satisfaction.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-key"></i>
            <h3>List Your Property or Car</h3>
            <p>List your house or car add stunning photos and descriptions to highlight its beauty andd attract customers.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-sale"></i>
            <h3>Verified Renters</h3>
            <p>Your safety is our top priority. Our meticulous vetting process guarantees renter identity verification, offering peace of mind.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-real-estate-agent"></i>
            <h3>Detailed Listings</h3>
            <p>Empowering informed choices,our exhaustive listings offer precise details,vivid imagery,and clear specifications for absolute confidence</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-location"></i>
            <h3>Transparent Pricing</h3>
            <p>Zero hidden costs or surprises. Our crystal-clear pricing guarantees full transparency, so you know your exact expenditure.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-sale"></i>
            <h3>Listing Management</h3>
            <p>Easily manage your listings, update availability, and track your earnings through your personalized dashboard.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="choose-item">
            <i class="flaticon-key"></i>
            <h3>24/7 Support</h3>
            <p>Our dedicated support team is available round the clock to assist you with any questions or concerns. We're here to ensure your experience is worry-free.</p>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- Service Section -->
  <section class="services-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">What You Need</span>
        <h2>We Offer Top-Notch Car & House Rental Services</h2>
        <p>Whether you're an owner with a property or car to share or a renter seeking an unforgettable experience, Blaze is your trusted partner in the world of house and car rentals.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3 p-0">
          <div class="services-item">
            <i class="flaticon-modern-house"></i>
            <h3>
              <a href="service-details.html">Daily Rentals</a>
            </h3>
            <p>Longer-term rental options are available, making Blaze suitable for weekend getaways or extended vacations.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 p-0">
          <div class="services-item">
            <i class="flaticon-apartment"></i>
            <h3>
              <a href="service-details.html">Verified Profiles</a>
            </h3>
            <p>Profiles creation and verification boost trust and security within the rental community for users.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 p-0">
          <div class="services-item right-border">
            <i class="flaticon-mansion"></i>
            <h3>
              <a href="service-details.html">Top Rating System</a>
            </h3>
            <p>Renters and owners can review and rate, offering valuable community feedback for improvement.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 p-0">
          <div class="services-item">
            <i class="flaticon-town"></i>
            <h3>
              <a href="service-details.html">Secure Payment</a>
            </h3>
            <p>Blaze guarantees secure transactions via a dependable payment system equipped with fraud protection measures.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Angent Section -->
  <section class="team-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <span class="sub-title">Meet Our Agent</span>
        <h2>Our Expert Team Will Give You Best Support Always</h2>
        <div class="counter-item">
          <h3>
            <span class="odometer" data-count="54">00</span>
            <span class="target">+</span>
          </h3>
          <p>Experienced Agents</p>
        </div>
      </div>
      <div class="team-slider owl-theme owl-carousel">
        <div class="team-item">
          <div class="top">
            <span>New York</span>
            <span>Level 5</span>
            <img src="assets/images/team1.jpg" alt="Team">
            <h3>Martine Gaptil</h3>
            <p>CEO And Founder</p>
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
          <div class="bottom">
            <ul>
              <li>
                <i class="bx bx-mail-send"></i>
                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d0b8b5bcbcbf90a3beb9b6a4feb3bfbd"><span class="__cf_email__" data-cfemail="bdd5d8d1d1d2fdced3d4dbc993ded2d0">[email&#160;protected]</span></a>
              </li>
              <li>
                <i class="bx bx-phone-call"></i>
                <a href="tel:+123456789">+123-456-789</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="team-item">
          <div class="top">
            <span>Spain</span>
            <span>Level 5</span>
            <img src="assets/images/team2.jpg" alt="Team">
            <h3>Genelia Simran</h3>
            <p>Manager</p>
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
          <div class="bottom">
            <ul>
              <li>
                <i class="bx bx-mail-send"></i>
                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#3b52555d547b4855525d4f15585456"><span class="__cf_email__" data-cfemail="e881868e87a89b86818e9cc68b8785">[email&#160;protected]</span></a>
              </li>
              <li>
                <i class="bx bx-phone-call"></i>
                <a href="tel:+478562482">+478-562-482</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="team-item">
          <div class="top">
            <span>Dubai</span>
            <span>Level 5</span>
            <img src="assets/images/team3.jpg" alt="Team">
            <h3>Denris Angelina</h3>
            <p>Agent</p>
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
          <div class="bottom">
            <ul>
              <li>
                <i class="bx bx-mail-send"></i>
                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#a4cdcac2cbe4d7cacdc2d08ac7cbc9"><span class="__cf_email__" data-cfemail="066f6860694675686f60722865696b">[email&#160;protected]</span></a>
              </li>
              <li>
                <i class="bx bx-phone-call"></i>
                <a href="tel:+752364471">+752-364-471</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="team-item">
          <div class="top">
            <span>Australia</span>
            <span>Level 5</span>
            <img src="assets/images/team4.jpg" alt="Team">
            <h3>Tom Henry</h3>
            <p>Staff</p>
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
          <div class="bottom">
            <ul>
              <li>
                <i class="bx bx-mail-send"></i>
                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#7f171a1313103f0c1116190b511c1012"><span class="__cf_email__" data-cfemail="6a020f0606052a1904030c1e44090507">[email&#160;protected]</span></a>
              </li>
              <li>
                <i class="bx bx-phone-call"></i>
                <a href="tel:+458785455">+458-785-455</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>




<!-- Footer Section -->
<?php 
  require_once('./partials/_footer.php');
  require_once('./partials/scripts/_index_scriot.php') 
?>