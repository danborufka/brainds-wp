
	<?php $subheadline = get_field("subheadline"); ?>

	<div class="bar">

		 <img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.svg" alt="">


		<p class="breadcrump"><?php echo $title ?> <span class="title">/ <?php echo $subheadline ?></span></p>
	 	<a  class="login" href="#">
	 		<img src="<?php echo get_template_directory_uri(); ?>/img/login.svg" alt="">
	 		<span>login</span>
	 	</a>
	</div>
