<?php
if (get_bloginfo("language") == 'fa-IR') {
/*
Plugin Name: تغییر فونت پیشخوان وردپرس
Plugin URI:  
Author:      امیرحسین رحیمی
Author URI:  http://tipy.link/am_ho_ra
Version: 	 2.1.1
Description: ساده ترین راه برای تغییر فونت پیشخوان وردپرسِ؛ به همراه فونت دانا
*/
}else {
/*
Plugin Name: WP-Admin FontChanger
Plugin URI:  
Author:      AmirHosein Rahimi
Author URI:  http://tipy.link/am_ho_ra
Version: 	 2.1.1
Description: The easiest way to change WordPress admin font, with Dana Font
*/
}
//
if (!function_exists( 'font_changer' )) {
  require_once plugin_dir_path(__FILE__) . DIRECTORY_SEPARATOR . 'run-font.php';
}
