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
require_once('./partials/queries/_propertyDetailsSql.php');
require_once('./partials/queries/_propertyDetailsImg.php');
require_once('../partials/queries/_property_details.php');
require_once('./partials/queries/_romm_type.php');
require_once('./partials/_propertyDetail_header.php');
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
      <div class="col-lg-3 col-md-3 col-sm-12" id="desktop-view">
        <div class="row" style="border-bottom: 2px solid #18253e;" id="duration">
          <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
            <h5>Search For</h5>
            <form action="../scripts/search.php"  method="POST" class="tm-search-form tm-section-pad-2">
              <div class="form-row tm-search-form-row mt-3">
                <div class="form-group tm-form-element tm-form-element-100">
                  <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                  <input name="city" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                </div>
                <div class="form-group tm-form-element tm-form-element-50 mt-1">
                  <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                  <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
                </div>
                <div class="form-group tm-form-element tm-form-element-50 mt-1">
                  <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                  <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
                </div>
                <div class="form-group tm-form-element tm-form-element-50 mt-1" style="height: 65px;">
                  <select name="adult" class="form-control tm-select" id="adult">
                    <option value="">Adult</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                  <i class="fa fa-2x fa-user tm-form-element-icon" style="top: 20px;"></i>
                </div>
                <div class="form-group tm-form-element tm-form-element-50 mt-1" style="height: 65px;">
                  <select name="children" class="form-control tm-select" id="children">
                    <option value="">Children</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                  <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small" style="top: 30px"></i>
                </div>
                <div class="form-group tm-form-element tm-form-element-50 mt-1" style="height: 65px;">
                  <select name="room" class="form-control tm-select" id="room">
                    <option value="">Room</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                  <i class="fa fa-2x fa-bed tm-form-element-icon" style="font-size: 30px; top: 20px;"></i>
                </div>
                <div class="form-group tm-form-element tm-form-element-50 mt-2">
                <input type="hidden" id="propertyId" name="propertyId" value="<?= $propertyId ?>" />
                  <button type="submit" name="search" class="btn btn-primary tm-btn-search w-100">Check Availability</button>
                </div>
              </div>

              <!-- <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                <p class="tm-margin-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
              </div> -->
            </form>
          </div>
        </div>
        <!--- Share Property --->
        <div class="google-map mt-2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d311789.0812019412!2d4.890600000000007!3d52.373099999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1snl!2snl!4v1697631774072!5m2!1snl!2snl" class="map-view"  width="280" height="190" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="col-lg-9 col-md-9 col-sm-12" id="second-desktop-view">
        <!--- Nav & tabs --->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Apartment Info & Prices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-disabled="true">House Rules</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-disabled="true">Reconmended Properties</a>
          </li>
        </ul>
        <div class="d-flex mt-2 justify-content-between w-100">
          <div class="position-badge">
            <span class="badge text-bg-primary" style="background-color: #18253e;">
              Popuar To Blaze.com.ng
            </span>
            <div class="location mt-1">
              <i class="bx bx-current-location"></i>
              <?= $rowDetail['address'] ?> -
              <span class="text-primary">Show Map</span>
            </div>
          </div>
          <div class="position-info">
            <button type="button" class="btn btn-primary">
              <span>Reserve your apartment</span> <br>
              <small>1 apartment for NGN 254,980</small>
            </button>
          </div>
        </div>
        <h2 class="mt-1" style="color: #18253e"><?= $rowDetail['propertyName'] ?></h2>
        <hr style="margin-top: -5px" />

        <div class="d-flex flex-wrap">
          <?php while ($rowImg = mysqli_fetch_assoc($propertyImages)) { ?>
            <div class="p-2 flex-fill">
              <img class="w-100" style="height: 200px; width: 200px; object-fit: fill;" src="../assets/<?= $rowImg['images'] ?>" alt="" />
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="share-container mt-2 mb-2">
      <h5>Facilities</h5>
      <div class="d-inline-flex flex-row flex-wrap">
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            pool
          </span>
          <span style="font-size: .8rem;">Outdoor swimming pool</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            shower
          </span>
          <span style="font-size: .8rem;">Private Bathroom</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            hotel
          </span>
          <span style="font-size: .8rem;">Private Bedroom</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            bathtub
          </span>
          <span style="font-size: .8rem;">Bathtub</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            local_parking
          </span>
          <span style="font-size: .8rem;">Free Parking</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            wifi
          </span>
          <span style="font-size: .8rem;">Free WiFi</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            airport_shuttle
          </span>
          <span style="font-size: .8rem;">Airport Shuttle</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            mode_fan
          </span>
          <span style="font-size: .8rem;">Air Condition</span>
        </div>
        <div class="p-3 m-1 facility" style="border: 1px solid #ccc;">
          <span class="material-symbols-outlined">
            room_service
          </span>
          <span style="font-size: .8rem;">Room Services</span>
        </div>
      </div>

    </div>
    <hr>
    <div id="apartmentInfo">
      <div class="special_rev p-2" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <h5 class="mb-2">Special Reserve Apartment For 2 Adults and 1 Child</h5>
        <hr>
        <div class=" d-flex">
          <div class="p-2 flex-lg-grow-1">
            <p>
              1 * <a href="#http://" target="_blank" rel="noopener noreferrer">Two Bedroom Apartments</a>
              <br>
              Price For
              <span class="material-symbols-outlined">
                person
              </span>
              <span class="material-symbols-outlined">
                person
              </span>
              <br>
              <span class="material-symbols-outlined">
                other_houses
                </span> Entitlement Apartment
              <br>
              <b>Bedroom 1: </b>1 queen bed <b><span class="material-symbols-outlined">
                bed
                </span></b>
              <br>
              <b>Bedroom 2: </b> 1 full bed <b><span class="material-symbols-outlined">
                king_bed
                </span></b> <br>
              <b>Living Room: </b>1 sofa bed  <span class="material-symbols-outlined">
              chair
              </span>
              <span class="text-success"><b>No Cancellation</b> October 31, 2023</span> <br>
              <span class="text-success"><b>No Prepayment needed</b> – pay at the prope</span>
          </p>
          </div>
          <div class="p-2" style="margin: 30px; border-left:1px solid #ccc;">
            <small>3 nights, 2 adults and 1 child</small>
            <h4 class="mt-2">NGN 253,980</h4>
            <small>Including taxes and fee</small>

            <div class="mt-3">
              <button class="btn btn-secondary w-100" disabled>Reserve</button>
            </div>
          </div>
        </div>
      </div>

      <div class="propertDesc row mt-3">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <p>
            <?= $rowDetail['propertyDesc'] ?>
          </p>
          <button type="button" class="btn btn-outline-primary w-100" style="margin-top: -5px;">Show me more</button>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="d-flex mt-3 mb-3 p-2 justify-content-between" style="border: 1px solid #ccc; border-radius: 3px;">
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
        </div>
      </div>

    </div>

    <!-- Mobile Search -->
    <!-- End Mobile Search -->

    <?php if (mysqli_num_rows($roomSql) > 0){ ?>
    <div class="type_property">
      <table class="table table-bordered mt-2">
        <thead>
          <tr>
            <th>Room Type</th>
            <th>Sleep</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            while($rowRoom = mysqli_fetch_assoc($roomSql)) {
              $roomId = $rowRoom['id'];
              require_once('./partials/queries/_room_price.php');
              while ($rowPrice = mysqli_fetch_assoc($roomPriceSql)) {
            ?>
          <tr>
            <td style="width: 60%">
              <h6>
                <span class="material-symbols-outlined">
                  chevron_right
                </span>
                <a href="http://" target="_blank" rel="noopener noreferrer"><?= ucfirst($rowRoom['propertyTitle']) ?></a>
              </h6>
              <small>1 extra large double bed</small>
              </td>

            <td style="width: 20%">
              <div class="d-inline-flex">
                <?php for($i = 0; $i < $rowPrice['priceFor']; $i++) { ?>
                  <span class="material-symbols-outlined">
                    person
                  </span>
                <?php } ?>
              </div>
            </td>
            <td style="width: 20%" class="priceTable">
              <input type="hidden" id="propertyId" name="propertyId" value="<?= $propertyId ?>" />
              <input type="hidden" id="propertyTitle" name="propertyTitle" value="<?= $rowDetail['propertyName'] ?>" />
              <button id="show_price" class="btn btn-primary w-100" type="button">Show Price</button>
            </td>
          </tr>
          <?php  } } ?>
          
        </tbody>
      </table>

    </div>
    <?php } ?>

    <!--- Search box -->
    <!-- <h3 class="mt-3">Availability</h3>
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
    </div> -->
    <!--- End Search Box -->

    <!-- 
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
  </div> -->
</section>

<section style="">

</section>


<?php
require_once('../partials/reconmended/_reconmended.php');
require_once('../partials/_footer.php');
require_once('../partials/scripts/_index_scriot.php');
?>