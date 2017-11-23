
<?php 
$tabs = get_field("tabitems");

$headlines = "";
$icons = "";
$descs = "";
$btns = "";
$links = "";
$imgs = "";

if (count($tabs)) {

foreach ($tabs as $key => $value):

	$faded = ($key) ? "faded" : "";
	$headline = $value["headline"];
	$icon = $value["icon"]["url"];
	$description = $value["description"];
	$btn = $value["tab_button_text"];
	$link = $value["link"];

	$img_section_small = $value["fullscreen_image_small"]['url'];
	$img_section_medium = $value["fullscreen_image_medium"]['url'];
	$img_section_large = $value["fullscreen_image_large"]['url'];


	$headlines .= "<h2 class=\"tab$key\">$headline</h2>";
	$icons .= "<div class=\"tab $faded\"><a href=\"#tab$key\"><img src=\"$icon\" alt=\"\"></a></div>";
	$descs .= "<p class=\"tab$key\">$description</p>";
	$btns .= "<button data-url=\"$link\" type=\"button\" class=\"button gotourl tab$key\">$btn</button>";


	if ($img_section_small != "" && $img_section_medium != "" && $img_section_large != "") {
		$imgs .= "<div class=\"fullImg half fullscr tab$key\" data-interchange=\"[$img_section_small, small],
						[$img_section_medium, medium],
						[$img_section_large, large],
						[$img_section_large, retina],\"></div>";
	}


endforeach;

}

?>

<?php if (count($tabs)): ?>

<div class="row arrowDown" >
	<div class="tabBox">


		<?= $headlines ?>
 		<div class="tabs">
			<?= $icons ?>
		</div>

		<div class="desc">
			<?= $descs ?>
		</div>
		
		<div class="buttons">
			<?= $btns ?>
		</div>

	</div>
</div>

<?php endif; ?>

<div class="tabBox">
	<?= $imgs; ?>
</div>
 


