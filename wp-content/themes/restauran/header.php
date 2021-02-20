<!DOCTYPE html>
<html lang="en">
<head>
	 <script>
	    $(document).ready(function(){
	      $( ".block1" ).mouseover(function() {
	        $(this).addClass( "blur" );
	      });
	      $( ".block1" ).mouseout(function() {
	        $(this).removeClass( "blur" );
	      });
	      $().UItoTop({ easingType: 'easeOutQuart' });
	    }) ;
	 </script> 
</head>
<body class="page1">
 
<!--==============================header=================================-->
  <header> 
    
    <div class="container_12">
      <div class="grid_12"> 
        <div class="socials">
          <a href="http://twitter.com"></a>
          <a href="http://facebook.com"></a>
          <a href="http://google.com"></a>
          <a href="http://pinterest.ru" class="last"></a>
        </div>
        <h1><a href="index.php"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="Boo House"></a> </h1>
        <div class="menu_block">


        <nav id="bt-menu" class="bt-menu">
          <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
          <?php wp_nav_menu([
            'theme_location' => 'top'         
          ]);?>   
        </nav>
        
        <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <?php wp_head();?>
  </header>