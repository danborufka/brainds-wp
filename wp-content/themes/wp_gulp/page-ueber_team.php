<?php
/**
 * Template Name: Über (Team+Partner)
 * @package WordPress
 * @package wp_gulp
 *
 */
get_header();
global $post;

if ( have_posts() ) {
	while ( have_posts() ) : the_post();

		$title   = get_the_title();
		$content = get_the_content();

	endwhile;
}


?>


    <div class="mainFrame">


    <div class="subcontent">

    <div class="row expanded">
        <div class="column show-for-large large-3 xlarge-2" data-sticky-container>
            <div class="sticky-menu" data-sticky data-options="marginTop:1;" data-top-anchor="content-box:top"
                 data-btm-anchor="content-box:bottom">

                <ul>
                    <li class="underline thin uppercase bold">Über uns</li>
                    <li>
                        <ul>
	                        <?php
	                        $submenus_news = get_field( 'submenus_uber_uns', 412 );


	                        foreach ( $submenus_news as $index => $item ) {
		                        $isActive = (rtrim($item['verlinkung'], "/") == rtrim(home_url(add_query_arg(array(),$wp->request)), "/")) ? ' class="active"' : "";
		                        echo "<li$isActive><a href='" . $item['verlinkung'] . "'>" . $item['headline'] . "</a></li>";
	                        }
	                        ?>
<!--                            <li class="active"><a href="<?/*= the_permalink(1042); */?>">Team</a></li>
                            <li><a href="<?/*= the_permalink(1043); */?>">Partnerschaften</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="column medium-12 large-9 xlarge-8 end"> <!-- style=\"border: 1px red solid;\" -->
            <div class="content-box team" id="content-box" data-equalizer data-equalize-by-row>
                <div class="row">
					<?php

					$members      = get_field( 'mitglieder' );
					/*var_dump( $members );*/


					if ($members):



					foreach ( $members as $key => $value ) :
						$foto = $value["foto"];
						$name     = $value["name"];
						$position = $value["position"];
                        $desc     = $value["desc"];
						$link     = $value["link"];
						?>

                        <div class="columns medium-6">
                            <div class="teambox text-center" data-equalizer-watch>
                            <?php if($link): ?>
                                <a href="<?=$link?>" target="_blank" class="fotobox" style="display: block;">
                                    <div style="background-image: url(<?= $foto ?>)" class="foto"></div>
                                </a>
                            <?php else: ?>

                                <div class="fotobox" >
                                    <div style="background-image: url(<?= $foto ?>)" class="foto"></div>
                                </div>
                            <?php endif; ?>
                                <h3 class="underline"><?=$name?></h3>
                                <h6 class="bold"><?=$position?></h6>
                                <?= $desc ?>
                            </div>
                        </div>

						<?php

					endforeach;
					endif;
					?>

                </div>

            </div>
        <!-- </div> -->


        <?php
        //  Experimentell
        echo '
                <!-- <div class="column medium-12 large-9 xlarge-8 end"> <!-- style="border: 1px red solid;" -->
                    <div class="row">
                    <div class="content-box border" id="content-box">

                        ';


                        while ( have_rows( 'dyn_sub' ) ) : the_row();
                        $filename = dirname( __FILE__ ) . "/template-parts/" . get_row_layout() . "_part.php";

                        if ( file_exists( $filename ) ) {
                        include( $filename );
                        } else {
                        echo "<!-- Sorry, Template '" . get_row_layout() . "' not found! -->";
                        }


                        endwhile;
                        echo '
                    </div><!-- content-box -->
                    </div>
                </div><!-- column -->
        ';

?>

    </div>

<?php

get_footer();