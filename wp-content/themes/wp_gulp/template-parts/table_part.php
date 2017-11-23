

<div class="table">

<?php

$table = get_sub_field( 'table' );
$hl =  get_sub_field( 'table_headline' );
$credit =  get_sub_field( 'table_credit' );

echo "<h4>$hl</h4>";
echo "<div class=\"special-spacer\"></div>";
if ( $table ) {

	echo '<div class="scroller">';

echo '<table border="0">';

	if ( $table['header'] ) {

	echo '<thead>';

	echo '<tr>';

		foreach ( $table['header'] as $th ) {

		echo '<th>';
			echo $th['c'];
			echo '</th>';
		}

		echo '</tr>';

	echo '</thead>';
	}

	echo '<tbody>';

	foreach ( $table['body'] as $tr ) {

	echo '<tr>';

		foreach ( $tr as $td ) {

		echo '<td>';
			echo $td['c'];
			echo '</td>';
		}

		echo '</tr>';
	}

	echo '</tbody>';

	echo '</table>';
	echo '</div>';
}

echo "<p class='text-right copy'>$credit</p>";


?>
</div>
