<?php
/*
Template Name: about
*/
?>
<?php get_header();?>
<!--==============================Content=================================-->

<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com </div>
  <div class="container_12">
    <div class="grid_8">
    <h3>About Us</h3>
      <img src="<?php bloginfo('template_url');?>/assets/images/page2_img.jpg" alt="" class="img_inner fleft">
      <div class="extra_wrapper">
        <p class="col1">Following the <span><a href="http://blog.templatemonster.com/free-website-templates/" rel="dofollow">link</a></span>, you’ll learn more about this goodie produced by <br> TemplateMonster.com. </p>
        <p class="col1">Want to get more designs of this kind? Check out the category of premium <span><a href="http://www.templatemonster.com/category/cafe-and-restaurant-website-templates/" rel="nofollow">Cafe &amp; Restaurant templates</a></span>.</p>
        <p>Aliquam nibh ante, egestas id dictum modo luctus libero. Praesent faucibus malesorem ipsum dolor sit amet, consecteturer. </p>
      </div>
       at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum ammodo luctus libero. Praesent faucibus malesuada faucibus. Lorem ipsum dolor sit ametconsectetur adipiscing elit. Nullam consectetur orci sed nulla facilisis consequat. 
    </div>
    <div class="grid_4">
      <h3>Features</h3>
      <p class="col1 pad1">Magna non nunc tristiquencus. Aliquam nibh ante, egestas id dictum modo luctus libero. </p>
      <p class="pad1">Dolor sit amet, consectetureripiscingelit. Nullam consectetur orci se nullafaci.</p>
      <ul class="list">
        <li><a href="#">Curabitur Vellore Sit</a></li>
        <li><a href="#">Eu Consectetur Ligula</a></li>
        <li><a href="#">Dui eros Laoreet Sit amet </a></li>
        <li><a href="#">Estvel Dertolino</a></li>
        <li><a href="#">Commodo Venenatis Erossce</a></li>
        <li><a href="#">Adipiscing Quam id Risus </a></li>
        <li><a href="#">Sagittis  Consequat Lacus </a></li>
        <li><a href="#">Onterdumoin ut </a></li>
      </ul>
    </div>
    <div class="grid_12">
      <h3 class="head1">The Best of Professionals</h3>
    </div>
    <?php for($i=1; $i<=4; $i++):?>
    <div class="grid_3">
      <div class="box maxheight">
        <img src="<?php bloginfo('template_url');?>/assets/images/page2_img<?php echo $i ?>.jpg" alt="">
        <div class="title"><a href="#"><?php the_field("professional_name_$i");?></a></div>
		<?php the_field("professional_text_$i");?>

      </div>
  
    </div>
    <?php endfor;?>
  </div>
</div>
<?php get_footer();?>