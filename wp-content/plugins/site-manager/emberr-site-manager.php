<?php
/*
Plugin Name: Service Listings Manager
Plugin URI: http://synx3.com/
Description: It allows to manage listings of services using the Google Map v3 API with flexible options that you can modify.
Version: 1.0
Author: Synx3 Internet Solutions
Author URI: http://synx3.com/
License: A "Slug" license name e.g. GPL2
*/
	function listing_manager_option_page() {
		?>
		<div class="wrap">
			<?php screen_icon(); ?>
			<h2><?php echo 'Services Listing Manager' ?></h2>
			<p>Sample Description.</p>
			<form action="options.php" method="post" id="listing_manager_options_form">
				<?php settings_fields('listing_manager_options'); ?>
				<h3><label for="listing_manager_email_add">Email to Send: </label>
					<input type="text" name="listing_manager_email_add" id="listing_manager_email_add" value="<?php echo esc_attr(get_option('listing_manager_email_add')); ?>" />
				</h3>
				<p><input type="submit" value="Submit Changes" name="btn_submit" id="btn_submit" /></p>
			</form>
		</div>
		<?php
	}

	function listing_manager_init() {
		register_setting('listing_manager_options', 'listing_manager_email_add');
	}

	add_action('admin_init', 'listing_manager_init');

	function listing_manager_plugin_menu() {
		add_options_page('Service Listings Manager','Listings Manager', 'manage_options', 'listing-manager-plugin', 'listing_manager_option_page', '/emberr/wp-content/plugins/site-manager/css/images/listing-manager.png', 30);
	}

	add_action('admin_menu', 'listing_manager_plugin_menu');

	function lm_setting_field() {
		?>
		<input type="text" class="regular-text" name="lm_email_add" id="lm_email_add" value="<?php echo get_option('lm_email_add'); ?>" />
		<div id="email_info" align="left"></div>
		<?php
	}

	function lm_setting_section() {
		?>
		<p>Settings Client Support</p>
		<?php
	}

	function lm_plugin_menu() {
		add_settings_section('lm', 'Listing Manager Options', 'lm_setting_section', 'general');
		add_settings_field('lm_email_add', 'Email Address', 'lm_setting_field', 'general', 'lm');
	}

	add_action ('admin_menu', 'lm_plugin_menu');

	function listing_manager_email_check() {
		$email_add = !empty($_POST['lm_email_add']) ? $_POST['lm_email_add'] : null;
		$msg = 'invalid';
		if($email_add) {
			if(is_email($email_add)) {
				$msg = "valid";
			}
		}
		echo $msg;
		die();
	}
	add_action('wp_ajax_listing_manager_email_check', 'listing_manager_email_check');
	add_action('admin_print_scripts-options-general.php', 'listing_manager_email_check_script');

	function listing_manager_email_check_script() {
		wp_enqueue_script('listing_manager', path_join(WP_PLUGIN_URL, basename(dirname(__FILE__)) . "/js/scripts.js"), array('jquery'));
	}
?>