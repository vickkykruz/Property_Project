<script src="http://localhost/Property_Project/assets/js/jquery.min.js"></script>
<script src="http://localhost/Property_Project/assets/js/bootstrap.bundle.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/form-validator.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/contact-form-script.js"></script>

<script src="http://localhost/Property_Project/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/jquery.nice-select.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/jquery.meanmenu.js"></script>

<script src="http://localhost/Property_Project/assets/js/owl.carousel.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/wow.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/odometer.min.js"></script>
<script src="http://localhost/Property_Project/assets/js/jquery.appear.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/jquery-modal-video.min.js"></script>

<script src="http://localhost/Property_Project/assets/js/custom.js"></script>
<script src="http://localhost/Property_Project/pages/assets/js/choices.js"></script>
<script src="http://localhost/Property_Project/pages/assets/js/flatpickr.js"></script>
<script src="http://localhost/Property_Project/assets/js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
<script src="http://localhost/Property_Project/assets/js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
<script src="http://localhost/Property_Project/assets/slick/slick.min.js"></script> 
  <script>
    flatpickr(".datepicker",
    {});

  </script>
  <script>
    const choices = new Choices('[data-trigger]',
    {
      searchEnabled: false,
      itemSelectText: '',
    });

    $(document).ready(function() {
      $('.priceTable').on('click', '#show_price', function() {
        let propertyId = $('#propertyId').val();
        let propertyTitle = $('#propertyTitle').val()
        alert("Enter your Check-in and Check-out date!");
        // console.log("Value: " + propertyId + propertyTitle);
        window.location.href ='http://localhost/Property_Project/pages/property_detail.php?view=notSigned&id='+ propertyId +'&propertyTitle='+ propertyTitle +'#duration';
      })
    })
  </script>

  <script>

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 13,
                    center: new google.maps.LatLng(-23.013104,-43.394365),
                    scrollwheel: false
                };

                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
              });

                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
              });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            } 

            function setCarousel() {
                
                if ($('.tm-article-carousel').hasClass('slick-initialized')) {
                    $('.tm-article-carousel').slick('destroy');
                } 

                if($(window).width() < 438){
                    // Slick carousel
                    $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                }
                else {
                 $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });   
                }
            }

            function setPageNav(){
                if($(window).width() > 991) {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 79
                    });   
                }
                else {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 65
                    });   
                }
            }

            function togglePlayPause() {
                vid = $('.tmVideo').get(0);

                if(vid.paused) {
                    vid.play();
                    $('.tm-btn-play').hide();
                    $('.tm-btn-pause').show();
                }
                else {
                    vid.pause();
                    $('.tm-btn-play').show();
                    $('.tm-btn-pause').hide();   
                }  
            }
       
            $(document).ready(function(){

                $(window).on("scroll", function() {
                    if($(window).scrollTop() > 100) {
                        $(".tm-top-bar").addClass("active");
                    } else {
                        //remove the background property so it comes transparent again (defined in your css)
                       $(".tm-top-bar").removeClass("active");
                    }
                });      

                // Google Map
                loadGoogleMap();  

                // Date Picker
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');
                
                // Slick carousel
                setCarousel();
                setPageNav();

                $(window).resize(function() {
                  setCarousel();
                  setPageNav();
                });

                // Close navbar after clicked
                $('.nav-link').click(function(){
                    $('#mainNav').removeClass('show');
                });

                // Control video
                $('.tm-btn-play').click(function() {
                    togglePlayPause();                                      
                });

                $('.tm-btn-pause').click(function() {
                    togglePlayPause();                                      
                });

                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());                           
            });

        </script>             

</body>

</html>