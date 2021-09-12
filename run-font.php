<?php
// By: AmirHosein Rahimi
function font_changer() {
	wp_enqueue_style( 'custom_admin_panel_style', plugin_dir_url( __FILE__ )  . 'style.css' );
}
add_action( 'admin_enqueue_scripts', 'font_changer' );
