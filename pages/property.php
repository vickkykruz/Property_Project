<?php 
//! Database Connection
  require_once('../database/db.php');

  //* Include Libraries File
  require_once('./partials/queries/_propertySql.php');
  require_once('../partials/_header.php');
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
    <!-- Checking If the Property Is Avaliable -->
    <!-- <div class="select_particular mb-3" style="border-bottom: 2px double #18253e; padding-bottom: 5px;">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="img_container">
              <img src="../assets/images/feature1.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <h3>PRESKEN WHITE HOUSE</h3>
            <hr style="margin-top: -5px">
            <p>Set in Lagos, 3.7 km from Nike Art Gallery, PRESKEN WHITE HOUSE offers accommodation with an outdoor
              swimming pool, free...</p>
            <div class="action_con" style="position: relative">
              <div class="spinner-border text-primary spinner-border-sm" role="status">
                <span class="visually-hidden">Loading...</span>

              </div>
              <small class="text-primary">Checking Availability...</small>

              <div class="action-div text-end" style="position: absolute; bottom: 0; right: 0">
                <button class="text-end btn btn-primary" type="submit">See Availability</button>
              </div>
            </div>


          </div>
        </div>
      </div> -->
    <!-- End Checking If the Property Is Avaliable -->

    <div class="section-title">
      <span class="sub-title">Properties</span>
      <h2>We Provide Full Service At Every Step. What You Need?</h2>
    </div>

    <?php if (mysqli_num_rows($propertYSql) > 0) { ?>
      
    <div class="row">
      <h4>Popular Properties</h4>
      <?php 
      $popularSql = mysqli_query($connection, "SELECT * FROM propertyinfo ORDER BY RAND() LIMIT 6");
      while($popularRow = mysqli_fetch_assoc($popularSql)){
        if (strlen($popularRow['address']) > 35) {
          $shortenAddress = substr($popularRow['address'], 0, 35) . "...";
        }else {
          $shortenAddress = $popularRow['address'];
        }
      ?>
      <div class="col-sm-6 col-lg-4">
        <div class="property-item">
          <div class="top">
            <span>Popular To Blaze.com.ng</span>
            <span><?= $popularRow['state'] ?></span>
            <img src="../assets/<?= $popularRow['properyImage'] ?>" alt="Property">
          </div>
          <div class="bottom">
            <span></span>
            <h3>
              <a href="./property_detail.php?view=notSigned&id=<?= $popularRow['id'] ?>&propertyTitle=<?= $popularRow['propertyName'] ?>"> <?= strtoupper($popularRow['propertyName']) ?></a>
            </h3>
            <a class="location" href="./property_detail.php?view=notSigned&id=<?= $popularRow['id'] ?>&propertyTitle=<?= $popularRow['propertyName'] ?>">
              <i class="bx bx-current-location"></i>
              <?= $shortenAddress ?>
              <span class="text-primary">Show Map</span>
            </a>
            <a class="location text-end" style="float: inline-end;" href="./property_detail.php?view=notSigned&id=<?= $popularRow['id'] ?>&propertyTitle=<?= $popularRow['propertyName'] ?>">
              <i class="bx bx-money"></i>
              NGN <?= number_format($popularRow['amount'], 2) ?>
            </a>
            <small>3 nights, 2 adults, 1 child</small>
            <!-- <ul>
              <li>5 BD</li>
              <li>2 BA</li>
            </ul> -->
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    

    <!-- Highest Property -->
    <div class="row mt-5">
      <h4>Highest Properties</h4>
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
    <!-- Highest Property -->

    <!-- Cheapest Property -->
    <div class="row mt-5">
      <h4>Cheapest Properties</h4>
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
    <!-- Cheapest Property -->
    <?php }else{ ?>
      <div class="text-center">
        <h3 class="text-danger">Error ): Failed to fetch data!!!</h3>
      </div>
    <?php } ?>
    <!-- <div class="pagination-area">
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
    </div> -->

    <!--- Search box -->
    <?php require_once('../partials/search/_search.php') ?>
    <!--- End Search Box -->
  </div>
</section>

<?php
  require_once('../partials/reconmended/_reconmended.php');
  require_once('../partials/service/_service.php');
  require_once('../partials/subscribers/_subscribe.php');
  require_once('../partials/_footer.php');
  require_once('../partials/scripts/_index_scriot.php') ?>