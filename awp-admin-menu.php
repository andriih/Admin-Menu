<?php
	
	/*
	Plugin Name: Admin Menu
	Description: AWP Admin Menu
	Plugin URI: http://#
	Author: Andrii Hnatyshyn
	Author URI: http://#
	Version: 1.0
	License: GPL2
	Text Domain: Text Domain
	Domain Path: Domain Path
	*/
 add_action('admin_menu' , 'awp_admin_menu');

function awp_admin_menu()
{
	add_options_page('Theme Options',
		'Theme Options','manage_options',
		__FILE__,
		'awp_option_page');
}

function awp_option_page ()
{
	$options = '';
	if(isset($_POST['awp_hidden']) && $_POST['awp_hidden']=='awp_hidden'){
		print_r($_POST);
	}	

	?>
		<div class="wrap">
			<h2>Опції  теми:</h2>
			<p>Настройки теми плагина Options &amp; Settings API</p>
			<form action="" method="POST">
				<input type="hidden" name="awp_hidden" value="awp_hidden">
				<p>
					<label for="">Колір фону</label>
					<input type ="text"
				           class="regular-text"
				           name ="awp_theme_options[awp_theme_options_body]"
				           id   ="awp_theme_options_body"
				           value="<?php echo esc_attr( $options['awp_theme_options_body']); ?>" />
				</p>

				<p>
					<label for="">Колір header</label>
					<input type ="text"
				           class="regular-text"
				           name ="awp_theme_options[awp_theme_options_header]"
				           id   ="awp_theme_options_header"
				           value="<?php echo esc_attr( $options['awp_theme_options_header']); ?>" />
				</p>
				<p><?php submit_button( $text, $type, $name, $wrap, $other_attributes );?></p>
			</form>
		</div>
	<?php
}
