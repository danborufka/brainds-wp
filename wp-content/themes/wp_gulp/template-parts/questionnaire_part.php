

<div class="questionnaire">

<?php 

	$headline = get_sub_field( 'headline' );
	$description = get_sub_field( 'description' );


	echo "<h4>$headline</h4>";
	echo "<div class=\"special-spacer\"></div>";
	echo $description;


 ?>

<div class="questions slides" data-slick='{"infinite": false}' >


<?php


// $questions = array
// (
//   array("Wie hoch schätzen Sie Ihre Zuversichtlichkeit ein, bei sexueller Erregung eine Erektion zu bekommen und aufrecht erhalten zu können?","sehr niedrig","niedrig", "moderat", "hoch", "sehr hoch"),

//   array("Wie häufig war Ihre Erektion nach sexueller Stimulation hart genug für eine Penetration?","fast nie/ nie","selten (seltener als in der
// Hälfte der Fälle)", "manchmal
// (etwa in der Hälfte der Fälle)", "meistens (häufiger als in der Hälfte der Fälle)", "fast immer/ immer"),
//   array("Wie häufig konnten Sie Ihre Erektion beim Geschlechtsverkehr aufrecht erhalten, nachdem Sie in Ihre Partnerin eingedrungen waren?","fast nie/ nie","selten (seltener als in der
// Hälfte der Fälle)", "manchmal (etwa in der Hälfte der Fälle)", "meistens (häufiger als in der Hälfte der Fälle)", "fast immer/ immer"),
//   array("Wie schwierig ist es für Sie, Ihre Erektion bis zum Ende des Geschlechtsverkehrs aufrecht zu erhalten?","extrem schwierig","sehr schwierig", "schwierig", "wenig schwierig", "überhaupt nicht
// schwierig"),
//   array("Wie oft würden Sie den Geschlechtsverkehr mit Ihrer Partnerin als befriedigend einstufen?","fast nie/ nie","selten (seltener als in der Hälfte der Fälle)", "manchmal (etwa in der Hälfte der Fälle)", "meistens (häufiger als in der Hälfte der Fälle)", "fast immer/ immer")
// );

$questions = array
(
  array("Wie hoch schätzen Sie Ihre Zuversichtlichkeit ein, bei sexueller Erregung eine Erektion zu bekommen und aufrecht erhalten zu können?","sehr niedrig","niedrig", "moderat", "hoch", "sehr hoch"),

  array("Wie häufig war Ihre Erektion nach sexueller Stimulation hart genug für eine Penetration?","fast nie/ nie","selten", "manchmal", "meistens ", "fast immer/ immer"),
  array("Wie häufig konnten Sie Ihre Erektion beim Geschlechtsverkehr aufrecht erhalten, nachdem Sie in Ihre Partnerin eingedrungen waren?","fast nie/ nie","selten", "manchmal", "meistens", "fast immer/ immer"),
  array("Wie schwierig ist es für Sie, Ihre Erektion bis zum Ende des Geschlechtsverkehrs aufrecht zu erhalten?","extrem schwierig","sehr schwierig", "schwierig", "wenig schwierig", "überhaupt nicht
schwierig"),
  array("Wie oft würden Sie den Geschlechtsverkehr mit Ihrer Partnerin als befriedigend einstufen?","fast nie/ nie","selten", "manchmal", "meistens", "fast immer/ immer")
);

$x = 0;

foreach ($questions as $key => $value) {


?>

	<div class="question">
		<div class="header">
			<div class="row" data-equalizer >
				<div class="columns medium-3" data-equalizer-watch>
					<div class="flexWrapper">
						<div class="currentQ"><?= $x+1 ?>/5</div>
					</div>
				</div>
				<div class="columns medium-9" data-equalizer-watch>
					<div class="flexWrapper">
						<div class="textQ">
							<?= $value[0]; ?>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="body">
			<div class="answers">


				<?php 
				$answerCounter = 0;
				foreach ($value as $key2 => $value2) {


					if ($answerCounter == 0) {
						$answerCounter++;
						continue;
					}

					if ($answerCounter == 5) {
						$checked = "checked";
					} else {
						$checked = "";
					}

					
					?>

					<div class="answer">
						<div><?=$answerCounter?></div>
						<input type="radio" id="radio<?= $x ?><?=$answerCounter?>" name="radios<?=$x?>" value="<?=$answerCounter?>" <?=$checked?>>
						<label for="radio<?= $x . $answerCounter?>"></label>
						<div class="text-center"><?=$value2?></div>
					</div>


				<?php

					$answerCounter++;
					}

				?>

										
				</ol>
			</div>
		</div>
	</div>



<?php

$x++;

}

?>



<div class="question">
		<div class="header final">
			<div class="row" data-equalizer >
				<div class="columns medium-3">
					<div class="currentQ"><?= $x ?>/5</div>
				</div>
				<div class="columns medium-9">
					<div class="flexWrapper">
						<div class="textQ">
							Zur Bewertung des Schweregrades der erektilen Dysfunktion wird die Summe der Antworten auf die fünf Fragen gebildet:
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="body final">
			<div class="answers">


					<div class="num">
						25 von 25
					</div>
					<div class="resultText">
						Keine erektile Dysfunktion
					</div>

					<div class="resultText2">
						Sie haben 21 Punkte oder weniger erreicht. Es liegen Anzeichen für eine erektile Dysfunktion vor. Wenden Sie sich an Ihren Arzt.
					</div>

					<div class="disclaimer">
						Grundsätzlich kann der Fragebogen jedoch keine ärztliche Diagnose ersetzen!
					</div>
										
				</ol>
			</div>
		</div>
	</div>


</div>



 </div>









