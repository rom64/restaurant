<?php get_header();?>
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com </div>
  <div class="container_12">
    <div class="grid_8">  
      <h3 class="">Blog</h3>
      <?php while(have_posts()):the_post();?>
      <div class="post">
        <?php the_post_thumbnail();?>
        <div class="extra_wrapper">
          <div class="title col3"><a href="<?php the_permalink();?>"><?php the_title();?> </a></div>
          <p class="col1">
            <time datetime="2020-01-01"><?php the_date('d m Y');?></time><span></span>posted by: 
            <a href="<?php the_permalink();?>"><?php the_author()?></a><span></span><a href="<?php the_permalink();?>"><?php comments_number();?></a>
          </p><?php the_excerpt();?>
          <br>
          <a href="<?php the_permalink();?>" class="link1">More Info</a>
        </div>
      </div>
  		<?php endwhile;?>
    </div>  
    <div class="grid_3 prefix_1">
		<?php dynamic_sidebar('right_sidebar');?>
  	</div>
  </div>
</div>
<?php get_footer();?>