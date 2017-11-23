<?php
/**
 *
 * Template Name: Contact
 * @package WordPress
 * @package wp_gulp
 */

get_header();
global $post;

?>



<?php include('template-parts/bar_part.php'); ?>


<div class="content">
  <div class="map">

    <div id="map"></div>
    <div class="grid-container">

      <div class="topBox hide-for-small-only">
        <h6>OFFICE ADDRESS/</h6>
        <p>Biberstrasse 9 / 4 <br>
          A-1010 Vienna</p>

          <h6>CONTACT/</h6>
          <div class="icons">

            <div class="contact"><a href="tel:00436504133430"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="">+43 650 4133430</a></div>
            <div class="cal"><a href="mailto:fabian.wolf@gmx.net"><img src="<?php echo get_template_directory_uri(); ?>/img/email.svg" alt="">fabian.wolf@gmx.net</a></div>


          </div>

        </div>

        <div class="contact-box">
          <div class="grid-x">


             <div class="cell medium-12 large-4 show-for-small-only">
             <div class="x-box">

              <h6>OFFICE ADDRESS/</h6>
              <p>Biberstrasse 9 / 4 <br>
                A-1010 Vienna</p>

                <h6>CONTACT/</h6>
                <div class="icons">
                
                <div class="contact"><a href="tel:00436504133430"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="">+43 650 4133430</a></div>
                <div class="cal"><a href="mailto:fabian.wolf@gmx.net"><img src="<?php echo get_template_directory_uri(); ?>/img/email.svg" alt="">fabian.wolf@gmx.net</a></div>

                </div>
              </div>

            </div>
          
           <div class="cell medium-12 large-4">
            <div class="c-box">
              <h3>Contact Us/</h3>
              <img src="<?php echo get_template_directory_uri(); ?>/img/_demo2.png" alt="">
              <p>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
              <a href="#" class="button">request callback</a>
              <p class="big white bold">
                <a href="tel:00">T/ +43 1 375 3333 30</a><br>
                <a href="mailto:optimize@hydrogrid.eu">E/ optimize@hydrogrid.eu</a>
              </p>
            </div>
          </div>
          <div class="cell medium-12 large-4">
            <div class="v-box">
              <h3>VISIT US/</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe quisquam doloremque provident numquam eligendi earum similique sed. Cumque consectetur, placeat.</p>
              <h3>BY PUBLIC TRANSPORT/</h3>
              <p>Stations “Stubentor” (U3), “Schwedenplatz” (U1, U4), “Landstrasse” (U3, U4, S-Bahn, City Airport Train) and “Stephansplatz” (U1, U3) are all within walking distance (less than 10 minutes).</p>
              <h3>ARRIVING BY TRAIN/</h3>
              <p>Take the subway “U1” direct from Vienna Central Train Station (“Hauptbahnhof / Südtiroler Platz”) to “Schwedenplatz” – our office is less than 10 minutes walking distance.</p>
            </div>
          </div>
          <div class="cell medium-12 large-4">
            <div class="i-box">
              <h3>IMPRESSUM/</h3>
              <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/impressumLogo.svg" alt="">
              <p>Für den Inhalt verantwortlich:<br>
                HYDROGRID GmbH<br>
                <br>
                Geschäftsführer: DI Janice Goodenough<br>
                FB-Gericht: Wien, FN 459688 m<br>
                UID: ATU71458326<br>
                Sitz: Biberstrasse 9 / 4, A-1010 Wien<br>
                Tel: +43 1 375 3333 30<br>
                Mitglied der WKO Wien, Gewerbeordnung:<br>
                <a class="green underline fw45" href="http://www.ris.bka.gv.at">www.ris.bka.gv.at</a>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  function initMap() {
    var uluru = {lat: 48.208936, lng: 16.381078};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: {lat: 48.205833, lng: 16.385750},
      styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    });

    var icon = {
      url: window.theme_url + "/img/mapIcon.png",
      anchor: new google.maps.Point(25,50)
    }


    var marker = new google.maps.Marker({
      position: uluru,
      map: map,
      draggable: false,
      icon: icon
    });
  }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWyYUZ9WoK4wX4Ybbkj6GIsVYewsNLKQc&callback=initMap"></script>



<?php get_footer(); ?>