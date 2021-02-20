<?php
add_action('wp_enqueue_scripts', 'theme_styles');
	function theme_styles(){
		wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css');
		wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css');
		wp_enqueue_style('form', get_template_directory_uri().'/assets/css/form.css');
		wp_enqueue_style('menu', get_template_directory_uri().'/assets/css/menu.css');
		wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main-style.css');
		wp_enqueue_style('grid', get_template_directory_uri().'/assets/css/grid.css');
		wp_enqueue_style('touch', get_template_directory_uri().'/assets/css/touchTouch.css');
		wp_enqueue_style('ie', get_template_directory_uri().'/assets/css/ie1.css');
		wp_enqueue_style('style', get_stylesheet_uri());

		

	}
add_action('wp_enqueue_scripts', 'register_scripts');
	function register_scripts(){
		wp_deregister_script( 'jquery-core' );
		wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('migrate', get_template_directory_uri().'/assets/js/jquery-migrate-1.1.1.js', ['jquery']);
		wp_enqueue_script('equalheights', get_template_directory_uri().'/assets/js/jquery.equalheights.js', ['jquery']);
		wp_enqueue_script('ui', get_template_directory_uri().'/assets/js/jquery.ui.totop.js', ['jquery'], null, true);
		wp_enqueue_script('easing', get_template_directory_uri().'/assets/js/jquery.easing.1.3.js', ['jquery']);
		/*wp_enqueue_script('blur', get_template_directory_uri().'/assets/js/blur.svg');*/
		wp_enqueue_script('tabs', get_template_directory_uri().'/assets/js/jquery.tabs.min.js', ['jquery']);
		wp_enqueue_script('touch', get_template_directory_uri().'/assets/js/touchTouch.jquery.js', ['jquery']);
		wp_enqueue_script('TMForm', get_template_directory_uri().'/assets/js/TMForm.js', ['jquery']);

	}
add_action('after_setup_theme', 'nav_menu');
	function nav_menu(){
		register_nav_menu('header_menu', 'top');
	}
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_action('widgets_init', 'register_my_widgets');
	function register_my_widgets(){
		register_sidebar([
			'name' => 'right_sidebar',
			'id' => 'ridht_sidebar',
			'before_widget' => '<ul class="list">',
			'after_widget'  => "</ul>\n",
			'before_title'  => '<h3 class="head3">',
			'after_title'   => "</h3>\n",
		]);
	}

