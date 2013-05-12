<?php

	register_post_type('emberr_listings', array('menu_icon' => get_template_directory_uri().'/includes/css/images/listings.png', 'menu_position' => 50, 'label' => 'Listings','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('editor','thumbnail'),'labels' => array (
	    'name' => 'Listings',
	    'singular_name' => 'Listing',
	    'menu_name' => 'Listings',
	    'add_new' => 'Add Listing',
	    'add_new_item' => 'Add New Listing',
	    'edit' => 'Edit',
	    'edit_item' => 'Edit Listing',
	    'new_item' => 'New Listing',
	    'view' => 'View Listing',
	    'view_item' => 'View Listing',
	    'search_items' => 'Search Listings',
	    'not_found' => 'No Listings Found',
	    'not_found_in_trash' => 'No Listings Found in Trash',
	    'parent' => 'Parent Listing',
	),) );

	add_action("admin_head", 'stylize'); //i use classes

	function stylize() {
		global $post_type;
		if($post_type == 'emberr_listings') echo '<style>.post-new-php post-new-php#icon-edit {background: url("'. get_template_directory_uri().'/includes/css/images/add-new.png' .'") no-repeat; }</style>';
	}

	function template_styles()	{
		wp_enqueue_style( 'bootstrap-datetimepicker', get_template_directory_uri() . '/includes/css/bootstrap-wysiwyg.css');
		wp_enqueue_style( 'bootstrap-lightbox', get_template_directory_uri() . '/includes/css/bootstrap-lightbox.css');
		wp_enqueue_style( 'bootstrap-fileupload', get_template_directory_uri() . '/includes/css/bootstrap-fileupload.min.css');

		wp_enqueue_style( 'fancycheckbox-min', get_template_directory_uri() . '/includes/css/jquery.fancycheckbox.min.css');
		wp_enqueue_style( 'fancycheckbox', get_template_directory_uri() . '/includes/css/jquery.fancybox-1.3.4.css');

		wp_enqueue_style( 'bootstrap-wysiwyg', get_template_directory_uri() . '/includes/css/bootstrap-datetimepicker.min.css');
	    wp_enqueue_style( 'page-layout', get_template_directory_uri() . '/includes/css/page-layout.css');
	}
	add_action( 'wp_enqueue_scripts', 'template_styles' );
	function template_scripts() {
	    // wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/includes/js/jquery.flexslider-min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'sensor_map', 'http://maps.google.com/maps/api/js?sensor=false', array( 'jquery' ) );
	    wp_enqueue_script( 'google-map-infobubble', get_template_directory_uri() . '/includes/js/infobubble.js', array( 'jquery' ) );
	    wp_enqueue_script( 'hotkeys', get_template_directory_uri() . '/includes/js/jquery.hotkeys.js', array( 'jquery' ) );
	    wp_enqueue_script( 'bootstrap-wysiwyg', get_template_directory_uri() . '/includes/js/bootstrap-wysiwyg.js', array( 'jquery' ) );
	    wp_enqueue_script( 'bootstrap-lightbox', get_template_directory_uri() . '/includes/js/bootstrap-lightbox.js', array( 'jquery' ) );
	    wp_enqueue_script( 'bootstrap-fileupload', get_template_directory_uri() . '/includes/js/bootstrap-fileupload.min.js', array( 'jquery' ) );

	    wp_enqueue_script( 'fancycheckbox-min', get_template_directory_uri() . '/includes/js/jquery.fancycheckbox.min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'fancycheckbox', get_template_directory_uri() . '/includes/js/jquery.fancybox-1.3.4.js', array( 'jquery' ) );

	    wp_enqueue_script( 'gmap3-infobox', get_template_directory_uri() . '/includes/js/gmap3.infobox.js', array( 'jquery' ) );
	    wp_enqueue_script( 'gmap3-min', get_template_directory_uri() . '/includes/js/gmap3.min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'spin-min', get_template_directory_uri() . '/includes/js/spin.min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'bootstrap-datetimepicker', get_template_directory_uri() . '/includes/js/bootstrap-datetimepicker.min.js', array( 'jquery' ) );
	    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/includes/js/scripts.js', array( 'jquery' ), '1.0', 'true' );	    
	}
	add_action( 'wp_enqueue_scripts', 'template_scripts' );

	require_once('metaboxes/setup.php');
?>