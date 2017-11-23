<?php
/**
 * User: fabianwolf
 * Date: 03/05/17
 * Time: 09:17
 */
$content = get_sub_field( 'content' );
$fat     = get_sub_field( 'literatur' );
$fatclass = ($fat) ? "literatur" : "";


echo "
	<div class=\"textblock\">
		<span class=\"" . $fatclass .   "\">$content</span>
	</div>
";