<?php
/*
Template Name: reservation
*/
?>
<?php get_header();?>
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com </div>
<div class="container_12">
  <div class="grid_8">
    <h3>Reserve Your Table</h3>
    <img src="<?php bloginfo('template_url');?>/assets/images/page5_img1.jpg" alt="" class="img_inner fleft">
    <div class="extra_wrapper">
      <p class="col1">Hoivamus at magna non nunc tristiquencus. Fliquam nibh ante, egestas id dictum modo luctus libero. Praesent faucibus malesuad faucibu. </p>
      <p>Dorem ipsum dolor sit amet, consecteturer adipiscing elit. Nullam consectetur orci se nulla facilisis consequat. Kurabitur vellore sit amet nulla ullamcorper ermentum. In vitae varius auguem.</p>
    </div>
    <p>Gamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum ammodo luctus libero. Praesent faucibus malesuada faucibus. Forem ipsum dolor sit ametconsectetur adipiscing elit. <span class="cont_phone">For Parties call (023) 101-1100</span> . Nullam  consectetur orci sed. </p>
    Murabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros. <span class="cont_phone">For Parties call (023) 101-1100</span> <br>
    <a href="#" class="reserv"><span>@ </span> Click here to Make a reservation Online</a>
  </div>
  <div class="grid_4">
    <div class="hours">
      <div class="title">Our Hours</div>
      <div>
        Lunch<br>
        Tues - Sat 11:45 am - 2:30 pm<br>
        Brunch<br>
        Sunday 10:30 am - 2 pm<br>
        Cafe Dinner<br>
        Sun - Fri 5:30 pm - 9:00 pm<br>
        Prix Fixe Dinner<br>
        Saturday 5:30 pm - 9:00 pm<br>
        Greens to Go<br>
        Mon - Thurs 8:30 am - varies <br>
      </div>
    </div>
    <h3 class="head3">Our news</h3>
    <?php for($i=1; $i<=2; $i++):?>
      <div class="news">
        <time datetime="2020-01-01"><?php the_field("month_$i");?><span><?php the_field("day_$i");?></span></time>
        <div class="extra_wrapper">
          <p class="col1"><a href="#"><?php the_field("post_title_$i");?></a></p><?php the_field("post_text_$i");?> 
        </div>
      </div>
    <?php endfor;?>
     <!--  <div class="news">
        <time datetime="2020-01-01">Oct<span>08</span></time>
        <div class="extra_wrapper">
          <p class="col1"><a href="#">Fliquam nibh ante, egestas id </a></p>In vitae varius auguemonsectetur ligulatiam dui eros, laoreet sit 
        </div>
      </div> -->
    </div>
  </div>
</div>


<?php get_footer();?>