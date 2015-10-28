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
	if(isset($_POST) && check_admin_referer('awp_theme_options' )){
		update_option( 'awp_theme_options', array(
			'awp_theme_options' => $_POST['awp_theme_options']['awp_theme_options_body'],
			'awp_theme_options' => $_POST['awp_theme_options']['awp_theme_options_header']
		));

		echo '<div class="updated"><p><strong></strong>Настройки збережені</p></div>';
	}	
	$options = get_option('awp_theme_options' );
	echo '<pre>';
		print_r($options);
	echo '</pre>';

	

	?>
		<div class="wrap">
			<h2>Опції  теми:</h2>
			<p>Настройки теми плагина Options &amp; Settings API</p>
			<form action="" method="POST">
				<?php wp_nonce_field('awp_theme_options' ); ?>
				
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
