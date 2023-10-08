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