<?php get_header('single');?>
<div class="post padding">
  <?php if(have_posts()) : while(have_posts()): the_post();?>
    <?php the_post_thumbnail();?>
    <div class="extra_wrapper ">
      <div class="title col3"><?php the_title();?></div>
      <p class="col1">
        <time datetime="2020-01-01"><?php echo get_the_date('d - m - Y');?></time><span></span> 
        <span></span><a href="<?php the_permalink();?>"><?php comments_number();?></a>
      </p>
      <?php the_content();?>          
    </div>
    <?php endwhile;?>
  <?php endif;?>
</div>
<div class="blog-comment-form">
 <h3>Leave a Comment</h3>
 <?php comments_template();?>
</div>

<?php get_footer();?>