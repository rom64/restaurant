<?php
/*
Template Name: menu
*/
?>
<?php get_header();?>
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com </div>
<div class="container_12">
	<div class="grid_12">
		<h3 class="head2">Our Menu</h3>
	</div>  
	
	<div class="tabs tb gallery">
		<div class="div-nav  ">
			<div class="grid_12">
				<ul class="nav">
					<li class="selected"><a href="#tab-1" class="">Salads</a></li>
					<li><a href="#tab-2">Soups</a></li>
					<li><a href="#tab-3">Appetizers</a></li>
					<li><a href="#tab-4">Beverages</a></li>
					<li><a href="#tab-5">Desserts</a></li>
					<li><a href="#tab-6">Lunch Specials</a></li>
				</ul>
			</div>    
		</div>

		<div class="div-tabs">
			<div  id="tab-1" class="tab-content gallery1">
			<?php $posts = get_posts( [
				'numberposts' => 0,
				'category_name'    => 'Salads',
				'order'       => 'DESC',
				'post_type'   => 'post'
				] );

			foreach( $posts as $post ){
				setup_postdata($post);
			?>
				<div class="grid_3">
					<a href="<?php the_field('menu_img');?>" class="gal"><?php the_post_thumbnail();?><span></span></a>
					<div class="col2"><span class="col3"><a href="#"><?php the_title();?></a></span> $ <?php the_field('price');?></div>
				</div>
				<?php
				}

				wp_reset_postdata(); // сброс
				?>
				
				
			</div>
			<div  id="tab-2" class="tab-content gallery2">
				
				<!-- <div class="clear"></div> -->
				<?php  $posts = get_posts( [
					'numberposts' => 0,
					'category_name'    => 'Soups',
					'order'       => 'DESC',
					'post_type'   => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
					?>
					<div class="grid_3">
						<a href="<?php the_field('menu_img');?>" class="gal"><?php the_post_thumbnail();?><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><?php the_title();?></a></span> $ <?php the_field('price');?></div>
					</div>
					<?php
				}

				wp_reset_postdata(); // сброс
				?>
				
			</div>
			<div  id="tab-3" class="tab-content gallery3">
				<?php  $posts = get_posts( [
					'numberposts' => 0,
					'category_name'    => 'Appetizers',
					'order'       => 'DESC',
					'post_type'   => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
					?>
					<div class="grid_3">
						<a href="<?php the_field('menu_img');?>" class="gal"><?php the_post_thumbnail();?><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><?php the_title();?></a></span> $ <?php the_field('price');?></div>
					</div>
					<?php
				}

				wp_reset_postdata(); // сброс
				?>
				
				
			</div>
			<div  id="tab-4" class="tab-content gallery4">
				<?php  $posts = get_posts( [
					'numberposts' => 0,
					'category_name'    => 'Beverages',
					'order'       => 'DESC',
					'post_type'   => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
					?>
					<div class="grid_3">
						<a href="<?php the_field('menu_img');?>" class="gal"><?php the_post_thumbnail();?><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><?php the_title();?></a></span> $ <?php the_field('price');?></div>
					</div>
					<?php
				}

				wp_reset_postdata(); // сброс
				?>

				

			</div>
			<div  id="tab-5" class="tab-content gallery5">
				<?php  $posts = get_posts( [
					'numberposts' => 0,
					'category_name'    => 'Desserts',
					'order'       => 'DESC',
					'post_type'   => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
					?>
					<div class="grid_3">
						<a href="<?php the_field('menu_img');?>" class="gal"><?php the_post_thumbnail();?><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><?php the_title();?></a></span> $ <?php the_field('price');?></div>
					</div>
					<?php
				}

				wp_reset_postdata(); // сброс
				?>

			</div>
			<div  id="tab-6" class="tab-content gallery6">
				<?php  $posts = get_posts( [
					'numberposts' => 0,
					'category_name'    => 'Lunch Specials',
					'order'       => 'DESC',
					'post_type'   => 'post'
				] );

				foreach( $posts as $post ){
					setup_postdata($post);
					?>
					<div class="grid_3">
						<a href="<?php the_field('menu_img');?>" class="gal"><?php the_post_thumbnail();?><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><?php the_title();?></a></span> $ <?php the_field('price');?></div>
					</div>
					<?php
				}

				wp_reset_postdata(); // сброс
				?>
				
				
			</div>

			
		</div>
	</div>
</div>

<?php get_footer();?>