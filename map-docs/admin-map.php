<?php
include_once 'header.php';
include_once 'locations_model.php';
?>


<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
    var purple_icon = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var france = {
            lat: 6.785277702704765,
            lng: 80.11392854687506
        };
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: france,
            zoom: 7
        });


        var i;
        var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: locations[i][4] === '1' ? red_icon : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed = locations[i][5] === '1' ? 'checked' : 0;
                    $("#location_status").prop(confirmed, locations[i][5]);
                    $("#id").val(locations[i][0]);
                    $("#lat").val(locations[i][1]);
                    $("#lng").val(locations[i][2]);
                    $("#NIC").val(locations[i][3]);
                    $("#Email").val(locations[i][4]);
                    $("#status").val(locations[i][5]);


                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

</script>

<div style="display: none" id="form">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <div class="container" style="background-color: #61bc47;">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="" id="image">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">ODER<i class="material-icons right"></i></span>


                <h5>HID:</h5>
                <textarea disabled id='id'></textarea>
                <h5>HID:</h5>
                <textarea disabled id='NIC'></textarea>
                <h5>HID:</h5>
                <textarea disabled id='Email'></textarea>
                <h5>HID:</h5>
                <textarea disabled id='status'></textarea>


            </div>

        </div>
    </div>



</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw&callback=initMap">
</script>

<style>
    textarea {

        border: none;
        background-color: #fff;
        font-size: 30px;
        color: #000;
    }

</style>