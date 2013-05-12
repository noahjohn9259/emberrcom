<?php
	require_once(WP_CONTENT_DIR . '/wpalchemy/MetaBox.php');
	// global styles for the meta boxes
	if (is_admin()) add_action('admin_enqueue_scripts', 'emberr_metabox_style');
	function emberr_metabox_style() {
		wp_enqueue_style('wpalchemy-metabox', get_template_directory_uri() . '/includes/metaboxes/css/meta.css');
	}

	require_once('init.php');
?>