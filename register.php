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
                            <a href="index.php" class="nav-link active">Home</a>
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
                        <a class="left" href="login.php">
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
                            <a href="index.php">Home</a>
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
                    </div>
                    <h4>Or</h4>

                    <h5>Already Have An Account? <a href="login.php?view=property&id=<?= $_GET['id'] ?>&propertyTitle=<?= $_GET['propertyTitle'] ?>">Login</a></h5>
            <?php } else { ?>
                <div class="col-lg-12">
                    <button type="button" id="submitbtn" class="btn common-btn">Register</button>
                </div>
            </div>
            <h4>Or</h4>

            <h5>Already Have An Account? <a href="login.html">Login</a></h5>
            <?php } ?>
        </form>
    </div>
</div>
</div>





<?php 
require_once("./partials/_footer.php");
require_once("./partials/scripts/_auth.register.script.php");
?>

