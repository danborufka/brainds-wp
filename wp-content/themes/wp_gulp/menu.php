
<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>


<?php  

$menuitems = wp_get_nav_menu_items( "hauptmenu", array( 'order' => 'DESC' ) );


$count = 0;
$submenu = false;
$linkTopMenuWithSubitems = false; //Link Top menu of dropdown

foreach( $menuitems as $item ):
  $link = $item->url;
  $title = $item->title;
  
  if ( !$item->menu_item_parent ):  // item does not have a parent so menu_item_parent equals 0 (false)

    $parent_id = $item->ID; // save this id for later comparison with sub-menu items

    if ( count ( get_pages(['child_of' => $item->object_id]) ) ) :  ?>


<li class="item">
  <a href="<?= ($linkTopMenuWithSubitems) ? $link : '#'; ?>" class="title"><?php echo $title; ?></a>

    <?php else: ?>

<li class="item">
  <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>

  <?php endif; ?>

<?php endif; ?>


<?php if ( $parent_id == $item->menu_item_parent ): ?>

  <?php if ( !$submenu ): $submenu = true; ?>
    <ul class="menu vertical">
    <?php endif; ?>

    <li class="item">
      <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
    </li>

    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
    </ul>
    <?php $submenu = false; endif; ?>

  <?php endif; ?>

  <?php if ( isset( $menuitems[ $count + 1 ])  &&  $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
  </li>                           
  <?php $submenu = false; endif; ?>

<?php
  $count++;
  endforeach;
?>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>


