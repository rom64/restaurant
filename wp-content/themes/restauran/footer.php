<footer> 
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="<?php echo get_template_directory_uri();?>/assets/images/f_logo.png" alt=""></a>
      <div class="copy">
      &copy; 2020 | <a href="#">Privacy Policy</a> <br> Website   designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
      </div>
    </div>
  </div>
</footer>
     
    <?php wp_footer();?>
   	<script>
      $(function(){ 
         $(".bt-menu-trigger").toggle( 
          function(){
            $('.bt-menu').addClass('bt-menu-open'); 
          }, 
          function(){
            $('.bt-menu').removeClass('bt-menu-open'); 
          } 
        ); 
      }) 
    </script> 
   
</body>
</html>