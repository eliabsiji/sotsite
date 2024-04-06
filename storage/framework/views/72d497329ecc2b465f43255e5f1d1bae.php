
<footer id="footer" class="bg-color-secondary custom-footer m-0" style="background: url('img/demos/church/footer-bg.jpg'); background-size: cover;">
    <div class="container pt-5">
        <div class="row text-center">
            <div class="col">
                <a href="<?php echo e(asset('html/demo-church.html')); ?>" class="text-decoration-none">
                    <img src="<?php echo e(asset('html/img/demos/church/logo2.png')); ?>" alt class="img-fluid custom-img-fluid-center" />
                </a>
            </div>
        </div>
        <hr class="solid tall custom-hr-color-1">
        <div class="row justify-content-center text-center">
            <div class="col-lg-3 custom-sm-margin-bottom-1">
                <i class="fas fa-map-marker-alt text-color-primary custom-icon-size-1"></i>
                <p class="custom-text-color-2 alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">SOTSM NORTHAMPTOM</strong>
                    Address: Kings Heath Industrial Estate,
                    </br>  229/230 K2 House, Heathfield Way, </br>   Northampton NN5 7QP
                </p>
            </div>
            <div class="col-lg-4 custom-sm-margin-bottom-1">
                <i class="far fa-clock text-color-primary custom-icon-size-1"></i>
                <p class="custom-text-color-2 alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">Join us on</strong>
                    <p class="custom-text-color-2"><strong class="text-color-light">Sundays at 10.00am - 12.30pm</strong></br></p>
                    <p class="custom-text-color-2"><strong class="text-color-light">W at 10.00am - 12.30pm</strong></br></p>
                </p>
            </div>
            <div class="col-lg-3">
                <i class="fas fa-phone-volume text-color-primary custom-icon-size-1"></i>
                <p class="alternative-font-4 text-3-5">
                    <strong class="d-block text-color-light custom-secondary-font text-5-5 line-height-8 mb-1">Call us now</strong>
                    <a href="tel:+447847530525" class="text-decoration-none custom-text-color-2">Phone :+447847530525</a></br>
                    <a href="mail:clworldoutreach@hotmail.com" class="text-decoration-none custom-text-color-2">Email : <span class="__cf_email__" data-cfemail="c9a4a8a0a589acb1a8a4b9a5ace7aaa6a4">clworldoutreach@hotmail.com</span></a>
                </p>
            </div>
        </div>
        <hr class="solid tall custom-hr-color-1">
        <div class="row text-center pb-5">
            <div class="col">
                <ul class="social-icons social-icons-clean custom-social-icons mb-3">
                    <li class="social-icons-facebook"><a href="https://m.facebook.com/story.php?story_fbid=pfbid02zDQF8c8XkrBbUC46x3EJFGi61MqntQETqSuEDFY9EEkmNsNKfM8xQ7bYbZZyAnvhl&id=100070144230445&sfnsn=scwspwa" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>

                    <li class="social-icons-youtube"><a href="https://youtube.com/@SOTSMnorthampton" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-instagram"><a href="https://www.instagram.com/clwocnorthampton?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p class="alternative-font-4 text-3 text-color-light opacity-7">© Copyright 2023. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
</div>




<!-- Vendor -->
<script data-cfasync="false" src="<?php echo e(asset('html/../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')); ?>"></script>
<script src="<?php echo e(asset('html/vendor/plugins/js/plugins.min.js')); ?>"></script>
<script src="<?php echo e(asset('html/vendor/jquery.countdown/jquery.countdown.min.js')); ?>"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo e(asset('html/js/theme.js')); ?>"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo e(asset('html/js/views/view.contact.js')); ?>"></script>

<!-- Demo -->
<script src="<?php echo e(asset('html/js/demos/demo-church.js')); ?>"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo e(asset('html/js/theme.init.js')); ?>"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
<script>

/*
Map Settings

    Find the Latitude and Longitude of your address:
        - https://www.latlong.net/
        - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

*/

// Map Markers
var mapMarkers = [{
    address: "New York, NY 10017",
    html: "<strong>Porto Church</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
    icon: {
        image: "img/demos/church/others/pin.png') }}",
        iconsize: [28, 35],
        iconanchor: [28, 35]
    }
}];

// Map Initial Location
var initLatitude = 40.75198;
var initLongitude = -73.96978;

// Map Extended Settings
var mapSettings = {
    controls: {
        draggable: (($.browser.mobile) ? false : true),
        panControl: true,
        zoomControl: true,
        mapTypeControl: true,
        scaleControl: true,
        streetViewControl: true,
        overviewMapControl: true
    },
    scrollwheel: false,
    markers: mapMarkers,
    latitude: initLatitude,
    longitude: initLongitude,
    zoom: 14
};

// Map text-center At
var mapCenterAt = function(options, e) {
    e.preventDefault();
    $('#googlemaps').gMap("centerAt", options);
}

// Custom Init Map
var initMapAt = function(options, e) {
    e.preventDefault();
    $('#googlemaps').animate({
        height: 350
    }, 300, function(){
        setTimeout(function(){
            $('.custom-view-our-location').animate({
                bottom: '-160px'
            }, 300);
        }, 1000);

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Styles from https://snazzymaps.com/
        var styles = [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#e94f3f"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"gamma":"0.50"},{"hue":"#ff4a00"},{"lightness":"-79"},{"saturation":"-86"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#ff1700"}]},{"featureType":"landscape.natural.landcover","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"poi","elementType":"all","stylers":[{"color":"#e74231"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#4d6447"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"color":"#f0ce41"},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"color":"#363f42"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#231f20"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#6c5e53"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#313639"},{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"hue":"#ff0000"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#0e171d"}]}];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });

        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');
    });
}



</script>




</body>


</html>
<?php /**PATH C:\xampp\htdocs\sotsite\resources\views/inc/footer.blade.php ENDPATH**/ ?>