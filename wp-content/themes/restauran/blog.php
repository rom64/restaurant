<?php
/*
Template Name: blog
*/
?>
<?php get_header();?>
<div class="content">
  <div class="ic">More Website Templates @ TemplateMonster.com </div>
  <div class="container_12">
    <div class="grid_8">  
      <h3 class="">Blog</h3>
      <?php 
      $wp_query = new WP_Query([
        "post_type" => "post",
        "post_status" => "publish",
        "posts_per_page" => -1
      ]);
  
      if($wp_query->have_posts()) :
      
        while($wp_query->have_posts()) :
        
          $wp_query->the_post();
  
      ?>
      <div class="post">
          <?php the_post_thumbnail();?>
          <div class="extra_wrapper">
            <div class="title col3"><a href="<?php the_permalink();?>"><?php the_title();?> </a></div>
            <p class="col1">
              <time datetime="2020-01-01"><?php the_date('d m Y');?></time><span></span>posted by 
              <a href="#"><?php the_author()?></a><span></span><a href="#"><?php comments_number();?></a>
            </p><?php the_excerpt();?>
            <br>
            <a href="<?php the_permalink();?>" class="link1">More Info</a>
          </div>
      </div>

        <?php endwhile;?>
    
      <?php endif;?>
      <?php   wp_reset_postdata();?>
    </div> 
    <div class="grid_3 prefix_1">
      <?php dynamic_sidebar('right_sidebar');?>
    </div>
 </div>
</div>
<?php get_footer();?>