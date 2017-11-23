<?php
/**
 *
 * Template Name: Prime Location
 * @package WordPress
 * @package wp_gulp
 */

get_header();
global $post;


$headline1 = get_field('headeline1');
$headline2 = get_field('headeline2');
$subheadline = get_field('subheadline');
$textblocks= get_field('text_blocks');
$textblocks2= get_field('text_blocks2');
$bigimgID = get_field('big_img');

$bigimg_small   = wp_get_attachment_image_src( $bigimgID, 'small' );
$bigimg_medium  = wp_get_attachment_image_src( $bigimgID, 'medium' );
$bigimg_large   = wp_get_attachment_image_src( $bigimgID, 'large' );


$bigimgsmallID = get_field('small_img');

$smallimg_small   = wp_get_attachment_image_src( $bigimgsmallID, 'small' );
$smallimg_medium  = wp_get_attachment_image_src( $bigimgsmallID, 'medium' );
$smallimg_large   = wp_get_attachment_image_src( $bigimgsmallID, 'large' );



// $extraStyle = "";


foreach ($textblocks as $key => $value) {
  $textblocks[$key]['text'] = preg_replace_callback("/#(.{1,2})#([^\s*]*)/", 'callback', $value['text']);
}
foreach ($textblocks2 as $key => $value) {
	$textblocks2[$key]['text'] = preg_replace_callback("/#(.{1,2})#([^\s*]*)/", 'callback', $value['text']);
}



function callback($matches) {

  $num = $matches[1];
  $text = $matches[2];

  return "<span id=\"link$num\" class=\"strong scrollToMap\"> $text</span>";
  // <style>#link$num:before { content: '$num';}</style>
}

// var_dump($textblocks);

?>



<div class="primelocation">


<div class="frame">

	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="medium-6 cell">
				<h1><?=$headline1?></h1>
				<h1><?=$headline2?></h1>
			</div>



		</div>
		<div class="grid-x grid-margin-x">
			<div class="medium-6 cell medium-order-1">
				<h3><?=$subheadline?></h3>
			</div>
			
			<div class="medium-6 cell medium-order-3">
				<p><?php if (isset($textblocks[0]['text'])) echo $textblocks[0]['text'] ?></p>
       <!-- <p> Ihre neue Wohnadresse 1. Börseplatz 1 hat nicht nur einen besonderen Klang, 
         sie hat auch eine ganz besondere Lage: In einer der lebenswertesten Städte der Welt, im Zentrum und dennoch nicht im Touristenstrom gelegen. Angenehm ruhig und doch mitten im pulsierenden Leben, 
         in einem gut gesicherten Umfeld. </p> -->
			</div>

			<div class="medium-6 cell medium-order-5">
				<p><?php if (isset($textblocks[1]['text'])) echo $textblocks[1]['text']  ?></p>
        
   <!--  <p>Die Ringstraße in unmittelbarer Nähe und doch in einer 
      idyllischen Atmosphäre mit einem Park direkt vor der Türe.
      Lassen Sie uns auf Ihre neue Adresse anstoßen! 
      Bei 2. Unger und Klein (Gölsdorfgasse 2; 7 Geh-Minuten) 
      liegt der Champagner bereits auf Eis. Hier finden Sie auch die 
      richtigen Weine für Ihren Weinkeller. Von denselben Gastronomen wird übrigens auch die kleine, aber sehr außergewöhnliche Bar 3. Unger und Klein im Hochhaus (Herrengasse 6–8; 6 Gehminuten) betrieben, ideal für ein kleines „Achterl“ oder einen guten Kaffee zwischendurch. </p> -->

			</div>

			<div class="medium-6 cell medium-order-7" style="order: 7;">
				<p><?php if (isset($textblocks[2]['text'])) echo $textblocks[2]['text']  ?></p>
      <!--  <p> Die Frage ist nun, was passt zum guten Wein auf den Teller? Toni Mörwalds 4. Kochamt im Palais Ferstel (Herrengasse 14; 5 Geh-Minuten), hat die richtigen Antworten. Gleich nebenan bei 5. Xocolat locken Verführungen und auf der anderen Seite der Freyung, im 6. Kräuterhaus Kottas (Freyung 7; 
         5 Geh-Minuten) werden seit 1795 Kräuter gemischt und Tees für alles Denkbare zusammengestellt. Es ist übrigens nicht unwahrscheinlich, dass auch Ludwig van Beethoven hier Rat und Tee für seine zahlreichen Zipperlein suchte. Er wohnte ja 
         nicht weit von hier (Mölkerbastei 8). </p> -->

				<div class="space-h"></div>
			</div>
			
			<div class="medium-6 cell medium-order-2">
				<p><?php if (isset($textblocks[3]['text'])) echo $textblocks[3]['text']  ?></p>
       <!-- <p> Der Mensch lebt nicht vom Brot allein, er braucht auch etwas für die Seele. Apropos Brot: Das tatsächlich beste Brot hat der Bäcker Joseph 7. Joseph (Naglergasse 9; 8 Geh-Minuten) Wobei die Wiener Seele, wie allgemein bekannt, 
         sich am besten in einem Kaffeehaus aufspüren lässt, beispielsweise im 8. Café Korb (Brandstätte 9; 10 Geh-Minuten). </p> -->
			</div>

			<div class="medium-6 cell medium-order-4">
				<p><?php if (isset($textblocks[4]['text'])) echo $textblocks[4]['text']  ?></p>
        <!-- <p>Hier im Keller haben die Künstler Peter Weibel, Peter Kogler, 
          Manfred Wolff-Plottegg und Günter Brus die artlounge eingerichtet, neben Lesungen trifft sich hier auch regelmäßig das Wiener Philosophen Café. Denn das Denken, Schreiben und Diskutieren gehören untrennbar zum traditionellen Wiener Kaffeehaus. Im Café 9. Bräunerhof (Stallburggasse 2; </p> -->
			</div>

			<div class="medium-6 cell show-for-medium medium-order-6">
				<p><?php if (isset($textblocks[5]['text'])) echo $textblocks[5]['text']  ?></p>
      <!--  <p> 12 Geh-Minuten) studierte Thomas Bernhard regelmäßig seine Zeitgenossen, das 10. Café Central (Herrengasse 14; 6 Geh-Minuten) war das Stammcafé vieler Wiener Kaffeehausliteraten wie Peter Altenburg, Alfred Polgar, Anton Kuh und Friedrich Torberg.</p> -->

			</div> 
		
		</div>
	</div><!-- grid-container -->

		<div class="bigimg">
			<?php echo '<img  data-interchange="[' . $bigimg_small[0] . ', small], [' . $bigimg_medium[0] . ', medium], [' . $bigimg_large[0] . ', large],  [' . $bigimg_large[0] . ', retina], ">'; ?>
		</div>

	<div class="grid-container">
		<div class="grid-x grid-margin-x"> <!-- data-equalizer data-equalize-by-row -->

			
			<div class="medium-6 cell">
				<p><?php if (isset($textblocks2[0]['text'])) echo $textblocks2[0]['text'] ?></p>
			</div>

			<div class="medium-6 cell">

			</div>




			<div class="medium-6 cell">
				<p><?php if (isset($textblocks2[1]['text'])) echo $textblocks2[1]['text']  ?></p>
			</div>

			<div class="medium-6 cell">
				<p><?php if (isset($textblocks2[2]['text'])) echo $textblocks2[2]['text']  ?></p>
      </div>


      </div>
      </div>

      <div class="grid-x grid-margin-x">

            <div class="medium-6 cell">
              <div class="smallimgleft"> 
              <?php echo '<img  data-interchange="[' . $smallimg_small[0] . ', small], [' . $smallimg_medium[0] . ', medium], [' . $smallimg_large[0] . ', large],  [' . $smallimg_large[0] . ', retina], ">'; ?>    
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/kleinlinks.png" alt=""> -->
              </div>
            </div>


            <div class="medium-6 cell">
             <p><?php if (isset($textblocks2[3]['text'])) echo $textblocks2[3]['text']  ?></p>
            </div>
      </div>
      <div class="grid-container">
      <div class="grid-x grid-margin-x">
			
			<div class="medium-6 cell">
	       <p><?php if (isset($textblocks2[4] ['text'])) echo $textblocks2[4]['text']  ?></p>
			</div>
			
			<div class="medium-6 cell">
			
			</div>
			
			<div class="medium-6 cell">
        <p><?php if (isset($textblocks2[5]['text'])) echo $textblocks2[5]['text']  ?></p>
			</div>
			

      
      <div class="medium-6 cell">

      </div>
      
      <div class="medium-6 cell">
          <p><?php if (isset($textblocks2[6]['text'])) echo $textblocks2[6]['text']  ?></p>
      </div>
			
			<div class="medium-6 cell">

			</div>
			
			<div class="medium-6 cell">
          <p><?php if (isset($textblocks2[7]['text'])) echo $textblocks2[7]['text']  ?></p>
			</div>



		</div>
	</div>

    <div id="map"></div>
    <script type="text/javascript">

	var map;
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
	 scrollwheel: false,
    // navigationControl: false,
    // mapTypeControl: false,
    // scaleControl: false,
    // draggable: false,
    center: {lat: 48.2094829, lng: 16.3709279},
    styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "stylers": [
      {
        "color": "#cbcace"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "stylers": [
      {
        "color": "#0000ce"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
  });



  setMarkers(map);
}


// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
var locations = [
 ["1 Börseplatz 1", 48.214067, 16.366344, 5, 'Hier leben Sie an einer der besten Adressen der Wiener Innenstadt boerseplatz1.com'],
 ["2 Unger und Klein", 48.213484, 16.372359, 5, 'Weinhandlung und Bar Gölsdorfgasse 2, 7 Geh-Minuten ungerundklein.at'],
 ["3 Unger und Klein im Hochhaus", 48.209621, 16.366126, 5, 'Bar und Stehcafé Herrengasse 6–8, 6 Geh-Minuten imhochhaus.at'],
 ["4 Kochamt", 48.210718, 16.365588, 5, 'Restaurant & Delikatessen Herrengasse 14, 5 Geh-Minuten moerwald.at/kochamt'],
 ["5 Xocolat", 48.211470, 16.365609, 5, 'Schokoladekontor Freyung 2, 5 Geh-Minuten xocolat.at'],
 ["6 Kräuterhaus Kottas", 48.212123, 16.365842, 5, 'Heilkräuter- und Teespezialist Freyung 7, 5 Geh-Minuten kottas.at'],
 ["7 Joseph Brot", 48.210406, 16.367549, 5, 'Bäckerei Naglergasse 9, 8 Geh-Minuten joseph.co.at'],
 ["8 Café Korb", 48.210323, 16.370684, 5, 'Brandstätte 9, 10 Geh-Minuten cafekorb.at'],
 ["9 Bräunerhof", 48.207446, 16.368687, 5, 'Ka eehaus und Restaurant Stallburggasse 2, 12 Geh-Minuten braeunerhof.at'],
 ["10 Café Central", 48.210623, 16.365479, 5, 'Herrengasse 14, 6 Geh-Minuten cafecentral.wien'],
 ["11 Scheer", 48.208180, 16.369506, 5, 'Maßschuhmacher Bräunerstraße 4, 12 Geh-Minuten scheer.at'],
 ["12 Knize", 48.208548, 16.369618, 5, 'Mode-Atelier Graben 13, 11 Geh-Minuten knize.at'],
 ["13 Loos American Bar", 48.207409, 16.371289, 5, 'Kärntner Durchgang 7 13 Geh-Minuten loosbar.at'],
 ["14 Meinl am Graben", 48.209640, 16.368273, 5, 'Delikatessengeschäft Graben 19, 10 Geh-Minuten meinlamgraben.at'],
 ["15 Kohlmarkt", 48.209189, 16.367880, 5, 'Einkaufsstrasse Michaelerplatz–Graben 11 Geh-Minuten kohlmarkt.com'],
 ["16 Café Demel", 48.208628, 16.367710, 5, 'Kohlmarkt 14, 12 Geh-Minuten demel.at'],
 ["17 Hofburg Wien", 48.207894, 16.366022, 5, 'Habsburger Kaiserresidenz Michaelerkuppel, 12 Geh-Minuten hofburg-wien.at'],
 ["18 Michaelerkirche", 48.208445, 16.367033, 5, 'Katholische Kirche St. Michael Michaelerplatz 4–5, 11 Geh-Minuten wien.info'],
 ["19 Burgtheater", 48.210518, 16.361428, 5, 'Universitätsring 2, 10 Geh-Minuten burgtheater.at'],
 ["20 Café Landtmann", 48.211659, 16.361436, 5, 'Universitätsring 4, 10 Geh-Minuten landtmann.at'],
 ["21 Fabios", 48.210073, 16.369578, 5, 'Restaurant Tuchlauben 4, 12 Geh-Minuten fabios.at'],
 ["22 Donaukanal", 48.215780, 16.425669, 5, 'Freizeit- und Erholungsraum 15 Geh-Minuten wien.info'],
 ["23 Tel Aviv Beach", 48.217356, 16.373505, 5, 'Strandbar Obere Donaustraße 65 15 Geh-Minuten neni.at']

];

function setMarkers(map) {

  window.markers = [];
  let titles = [];
  let descriptions = [];
  var infoWindows = [];

  for (var i = 0; i < locations.length; i++) {
    
    var location = locations[i];
    

    var marker = new google.maps.Marker({
      position: {lat: location[1], lng: location[2]},
      map: map,
      icon: {
        url: window.theme_url + "/img/" + (i+1) + ".svg",
        fillOpacity: 1,
        anchor: new google.maps.Point(0,0),
        scaledSize: new google.maps.Size(30,30),
        strokeWeight: 0,
        scale: 1
    },
      zIndex: location[3],
      title: location[0]
    });
    
    markers.push(marker);
    titles.push( location[0]);
    descriptions.push(location[4]);
    
    var content = `<div class="infoWindow">
        <div class="miniFrame">
          <h6>`+ titles[titles.length-1] + `</h6>
          <p>`+ descriptions[descriptions.length-1] + `</p>
        </div>
      </div>`;


    var infowindow = new google.maps.InfoWindow({
      maxWidth: 300
    });

    infoWindows.push(infowindow); 


    // google.maps.event.addListener(marker, "click", function(e) {
    //   iw.open(map, this);
    // });


    google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {

            for (var i=0;i<infoWindows.length;i++) {
               infoWindows[i].close();
            }

            infowindow.setContent(content);
            infowindow.open(map,marker);
        };
    })(marker,content,infowindow));


  }
}


// function addMarker(feature) {
//   var marker = new google.maps.Marker({
//     position: feature.position,
//     icon: icons[feature.type].icon,
//     map: map
//   });
// }



    </script>


	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk3ffbF-ax1du45KpuCXejDaX95mwFvSg&callback=initMap"></script>

<!-- 	<div class="grid-container">
		<div class="grid-x grid-margin-x"> 
			
Weiter hier

		</div>
	</div> -->

	</div>
		
</div>


</div>


<?php get_footer(); ?>