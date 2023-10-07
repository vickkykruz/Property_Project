<?php
require_once('./partials/header/_auth.header.php');
?>
<div class="navbar-area sticky-top">
  <div class="mobile-nav">
    <a href="index.html" class="logo">
      <img src="assets/images/logo-two.png" alt="Logo" />
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
          <h2>Login</h2>
          <ul>
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <span>Login</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Container -->
<div class="user-area ptb-100">
  <div class="container">
    <div class="user-item">
      <div class="row">
        <div class="col-md-12" style="margin: 20px">
          <div id="registerresponse"></div>
        </div>
      </div>
      <form>
        <h2>Login</h2>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email" />
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
        </div>
        <button type="button" id="loginbtn" class="btn common-btn">
          Login
        </button>
        <h4>Or</h4>
        <h5>
          Didn't Have An Account?
          <?php
          if (isset($_GET['view']) == "property" && isset($_GET['id']) && isset($_GET['propertyTitle'])){?>
            <input type="hidden" name="propertyId" id="propertyId" value ="<?= $_GET['id'] ?> /> 
          <a href="register.php?view=property&id=<?= $_GET['id'] ?>&propertyTitle=<?= $_GET['propertyTitle'] ?>">Register</a>
          <?php }else{ ?>
            <a href="register.html">Register</a>
          <?php } ?>
        </h5>
      </form>
    </div>
  </div>
</div>
<!-- End Login Container -->

<!-- Footer -->
<?php 
  require_once('./partials/_footer.php');
  require_once('./partials/scripts/_auth.login.script.php') ?>
