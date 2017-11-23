<?php 


$names = ["The Imperial Lofts", "The Danube Loft", "The Aurora Loft", "The Telegram Loft", "The Novella Loft", "The Adele Loft", "The Dragonfly Loft", "The Skyview Penthouses", "Over the Rainbow Penthouse", "Fly me to the Moon Penthouse", "Blue Moon Penthouse", "Star Dust Penthouse", "View from Heaven Penthouse", "Heart of the Sunrise Penthouse"];

$names = [];
for ($i=1; $i < 10; $i++) { 
	$names[] = "Top 10" . $i;
}

// $names = ["eins Penthouse", "zwo Loft"];

foreach ($names as $key => $value) {
	

	// Create post object
	$my_post = array(
		'post_title'    => $value,
	 	'post_status'   => 'publish',
		'post_type' 	=> 'wohnung'
	);
	 
	// Insert the post into the database
	$post_id = wp_insert_post( $my_post );

	$roomlist = [];
	$roomlist[] = ["name" => "Wohnzimmer", "qm" => 34.5];
	$roomlist[] = ["name" => "Schlafzimmer", "qm" => 24.1];
	$roomlist[] = ["name" => "Abstellraum", "qm" => 5.4];
	$roomlist[] = ["name" => "WC", "qm" => 24];
	$roomlist[] = ["name" => "Ankleide", "qm" => 5];
	$roomlist[] = ["name" => "Wohnraum", "qm" => 118.2];
	$roomlist[] = ["name" => "Treppe", "qm" => 24];
	$roomlist[] = ["name" => "Galerie", "qm" => 47.2];
	$roomlist[] = ["name" => "Treppe", "qm" => 24];
	$roomlist[] = ["name" => "Schlafzimmer", "qm" => 48];
	$roomlist[] = ["name" => "Bad ensuite", "qm" => "6.3"];

	update_field('roomlist', $roomlist, $post_id);

$lorem = "Lorem ipsum facilisis urna quisque ipsum aptent primis massa dolor sed sodales, lectus egestas metus tincidunt euismod varius sollicitudin euismod cursus fames turpis, facilisis urna ante etiam volutpat etiam eros tempus potenti placerat. adipiscing vehicula vulputate nec venenatis semper purus, eleifend class ultricies hendrerit ad maecenas massa, tincidunt taciti nisl vitae nunc.

Habitasse ac tincidunt non tristique metus gravida volutpat, dolor blandit bibendum malesuada quisque lobortis etiam congue, auctor taciti viverra adipiscing elementum facilisis. eleifend vivamus eget consectetur quisque nunc eleifend curabitur turpis, eros interdum ipsum accumsan dui risus quam potenti leo, cras nibh ante varius ultricies maecenas vehicula.

Elit lobortis ultrices inceptos curabitur metus phasellus eros, viverra curabitur urna nostra enim tincidunt fringilla, bibendum tempor suscipit taciti molestie auctor. ultricies diam lacus sodales tempor bibendum, curabitur felis dictum laoreet.";


	update_field('flatsize', rand(80, 200), $post_id);

	if (preg_match("/loft/i", $value)){
		$type = "loft";
	}  else if  (preg_match("/pent/i", $value)){
		$type = "pent";
	} else {
		$type = "ap";
	} 

	update_field('cat', $type, $post_id); // pent
	update_field('slider_img', wp_upload_dir()["baseurl"] . "/2017/08/20170912_Detailed_View_2OG_Top201.svg", $post_id);
	update_field('description', $lorem, $post_id); // string(89) ""
	update_field('folder_download', wp_upload_dir()["baseurl"] . "/2017/08/20170705_Börseplatz1_Branding.pdf", $post_id); 


	
}



 ?>