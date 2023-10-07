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
  $("body").on("click", "#loginbtn", function() {
    $("#loginbtn").html(
      '<i style="color:white;" class="fa fa-spinner fa-spin"></i>'
    );
    var useremail = $("#exampleInputEmail1").val();
    var userpassword = $("#exampleInputPassword1").val();

    if (useremail == "" || userpassword == "") {
      $("#registerresponse").html(
        '<div class="alert alert-warning" role="alert"><center><p>Please fill in all the fields</p></center></div>'
      );
      $("html, #registerresponse").animate({
        scrollTop: 200
      }, "slow");
      $("#loginbtn").html("Login");
    } else {
      $.ajax({
        type: "post",
        url: "scripts/login.php", //Here you will fetch records
        data: "useremail=" + useremail + "&userpassword=" + userpassword,
        success: function(data) {
          var dataresponse = data;
          if (dataresponse == "1") {
            $("#registerresponse").html(
              '<div class="alert alert-success" role="alert"><small><center>User successfully logged in<br><i class="fa fa-spinner fa-spin"></i> Redirecting....</center></small></div>'
            );
            $("#loginbtn").html("Login");
            $("html, #registerresponse").animate({
                scrollTop: 200
              },
              "slow"
            );
            setTimeout(() => {
              window.location.href = "dashboard.php";
            }, 2000);
          } else if (dataresponse == "2") {
            $("#registerresponse").html(
              '<div class="alert alert-success" role="alert"><small><center>Vendor successfully logged inl <br><i class="fa fa-spinner fa-spin"></i> Redirecting....</center></small></div>'
            );
            $("#loginbtn").html("Login");
            $("html, #registerresponse").animate({
                scrollTop: 200
              },
              "slow"
            );
            setTimeout(() => {
              window.location.href = "vendordashboard.php";
            }, 2000);
          } else if (dataresponse == "3") {
            $("#registerresponse").html(
              '<div class="alert alert-warning" role="alert"><small><center>Invalid login details.<br> Please enter valid account details to login.</center></small></div>'
            );
            $("#loginbtn").html("Login");
            $("html, #registerresponse").animate({
                scrollTop: 200
              },
              "slow"
            );
          }
        },
      });
    }
  });
</script>
</body>

</html>