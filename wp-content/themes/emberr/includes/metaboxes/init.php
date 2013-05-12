<?php 

	$listing_metabox = $listing_mb = new WPAlchemy_MetaBox(array
	(
		'id' => '_listing_meta',
		'title' => 'Listing Information',
		'types' => array('emberr_listings'),
		'template' => get_stylesheet_directory() . '/includes/metaboxes/listings-meta.php',
		'hide_editor' => TRUE, 
		'hide_title' => TRUE
	));

?>