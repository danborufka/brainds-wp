

    <?php $collection = ( substr( get_field('cat'), -1) == "C" ); ?>

    <div class="dynamicFrame">
        <!-- <div class="maxFrame" data-equalizer="<?=str_replace(" " , "", strtolower($title))?>" data-equalize-on="medium"> -->
        <div class="maxFrame">

            <div class="left">
                <a class="backToO" href="#">Back to<br>overview</a>
                <h1 data-cat="<?=$cat?>"  data-url="<?= str_replace(home_url(), '', $perma)  ?>"><?php echo str_replace("_", " ", preg_replace("/ /i", "$1<br>", $title )) ?></h1>
                <!-- <h1 data-cat="<?=$cat?>"  data-url="<?= str_replace(home_url(), '', $perma)  ?>"><?= $title ?></h1> -->
                
                <?php 
                    if ( get_field('folder_download') ) :
                ?>
                <a target="_blank" href="<?=get_field('folder_download')?>" class="download">DOWNLOAD <?php echo strtoupper($title)   ?></a>
                <?php 
                    else:
                 ?>
               <a target="_blank" href="#" class="download">DOWNLOAD <?php echo strtoupper($title)   ?></a>
                <?php 
                    endif;
                 ?>
            </div>           

            <div class="cell auto gradient hide-for-small-only"></div>

            <div class="right">



            <?php // if ($slider_img): ?>
              <!-- <img class="topfloor svg" src="<?php echo $slider_img ?>" alt=""> -->
            <?php 
                //else :
            ?>   

          <?php if ($collection): ?>
            <p class="coll-claim"> <?php echo get_field('claim') ?></p>
          <?php  else: ?>
            <img class="topfloor svg" src="<?= get_template_directory_uri(); ?>/img/20170912_Slider_1OG_Top101_test.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/compass_gold_2.svg" alt="" class="hide-for-small-only compass_slider svg float-right">
          <?php  endif; ?>
            <?php //endif; ?>
              <!-- <div class="copy"> <?= $description ?> </div> -->
              <div class="copy"></div>
          </div>

 <?php if ($collection): ?>
 </div>

    <div class="bigimg">
      <?php     

      $big_img_top = get_field('big_img_top');

      $bigimg_small   = wp_get_attachment_image_src( $big_img_top, 'small' );
      $bigimg_medium  = wp_get_attachment_image_src( $big_img_top, 'medium' );
      $bigimg_large   = wp_get_attachment_image_src( $big_img_top, 'large' );

      echo '<img  data-interchange="[' . $bigimg_small[0] . ', small], [' . $bigimg_medium[0] . ', medium], [' . $bigimg_large[0] . ', large],  [' . $bigimg_large[0] . ', retina], ">'; ?>
      <?php // echo '<img  data-interchange="[' . get_template_directory_uri() . "/img/intro_background.png" . ', small], [' . get_template_directory_uri() . "/img/intro_background.png" . ', medium], [' . get_template_directory_uri() . "/img/intro_background.png" . ', large],  [' . get_template_directory_uri() . "/img/intro_background.png" . ', retina], ">'; ?>
    </div>
 <div class="maxFrame">

<?php endif; ?>

<?php if ($collection): ?>

  <div class="collectionLeft">

   <h4 class="claim"><?php echo get_field('claim') ?></h4>


  </div>
  <div class="collectionRight grey">
    <div class="description">
      <?= $description ?>
    </div>
  </div>



  <?php else: ?>




           <div class="left grey">
                <div class="extragrey"></div>
                <div class="rooms" data-equalizer-watch="<?=str_replace(" " , "", strtolower($title))?>"> 
                <!-- <div class="rooms"> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/compass.svg" alt="" class="compass">
                    <ol>
                    <?php 

                        $roomlist = get_field('roomlist');
                        $flatsize = get_field('flatsize');

                        if ($roomlist) :
                            foreach ($roomlist as $key => $value) :
                                $name = $value['name'];
                                $qm = $value['qm'];

                                echo '<li class="R' . ($key+1) . '">' . $name . ' ' . $qm . ' m²</li>';

                            endforeach;
                        endif;
                    
                    ?>
                    </ol>
                    <ul>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>Gesamtgröße</li>
                        <li><?=$flatsize?> m²</li>
                    </ul>


                </div>

          </div>
            <div class="right grey">
                <div class="extragrey"></div>
                <div class="levels" data-equalizer-watch="<?=str_replace(" " , "", strtolower($title))?>"> 
                <!-- <div class="levels"> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/demo3.png" alt="">
            
                  

                </div>
          </div>

          <div class="both grey">
                <div class="gr">

  
                  <?php
                  $grGross = get_field('grGross');
                  if (isset($grGross ) ):

                    foreach ($grGross as $key => $value):

                      ?>
                      <div class="grCont">
                        <img class="svg" src="<?php echo $value['gr']; ?>" alt="">
                      </div>

                    <?php

                    endforeach; 

                      else:

                    ?>
                    <div class="grCont">
                      Demo Plan:
                      <img  class="svg" src="/wp-content/uploads/2017/09/loft1.svg" alt="">
                    </div>
                  <?php endif; ?>

                  <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/demo2.png" alt=""> -->
                  <!-- <div class="change hide-for-large"></div> -->
                </div>
          </div>

          <?php endif; ?>



           <?php if ($collection): ?>
           </div>


          <div class="internSlider">

          <?php 

          $big_slider_bottom = get_field('big_slider_bottom');

          foreach ($big_slider_bottom as $key => $value):

            $bigimg_small   = wp_get_attachment_image_src( $value['img'], 'small' );
            $bigimg_medium  = wp_get_attachment_image_src( $value['img'], 'medium' );
            $bigimg_large   = wp_get_attachment_image_src( $value['img'], 'large' );

            echo "<div class=\"sliderImg\">";

            echo '<img  data-interchange="[' . $bigimg_small[0] . ', small], [' . $bigimg_medium[0] . ', medium], [' . $bigimg_large[0] . ', large],  [' . $bigimg_large[0] . ', retina], ">';

            echo "</div>";

          endforeach;
             

           ?>

           </div>

           <div class="maxFrame">

          <?php endif; ?>



          <?php 
               if ($next_post) :
           ?>
                 <div class="bottom">
                       <a href="<?= get_the_permalink ( $next_post->ID ) ?>"><h3><span class="next">Next</span> <span class="divider"></span> <?= str_replace("_", " ", get_the_title ( $next_post->ID ) )?><img src="<?php echo get_template_directory_uri(); ?>/img/nextFlat_arrow.svg" alt=""></h3>  </a>
                 </div>

           <?php 
             else:
             ?>

           <div class="bottom">
                 <a href="#"><h3><span class="next">Next</span> <span class="divider"></span>The Telegram Loft<img src="<?php echo get_template_directory_uri(); ?>/img/nextFlat_arrow.svg" alt=""></h3>  </a>
           </div>


           <?php 
          
               endif;
           ?>


      </div>

  </div>
