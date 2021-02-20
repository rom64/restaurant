<?php 
/*
Template Name: index
*/
?>
<?php get_header();?>

<!--==============================Content=================================-->
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com </div>
<?php for($i=1; $i<=3; $i++):?>
<a href="<?php the_permalink(23); ?>" class="block1">
  <img src="<?php the_field("img_$i");?> ">
  <span class="price"><span><?php the_field("title_$i");?></span><span><small>$</small><?php the_field("price_$i");?></span><strong></strong></span>
</a>
<?php endfor;?>

  <div class="container_12">
    <div class="grid_12">
      <h3>New in Menu</h3>
    </div>
    <?php for($i=1; $i<=4; $i++):?>
    <div class="grid_3">
      <div class="box maxheight">
        <img src="<?php the_field("new_img_$i");?>">
        <div class="title"><?php the_field("new_title_$i");?></div>
        <?php the_field("new_text_$i");?> 
        <br>
        <a href="<?php the_permalink(23);?>">More Info</a>
      </div>
    </div>
  <?php endfor;?>
  </div>
</div>
<!--==============================footer=================================-->
<?php get_footer();?>