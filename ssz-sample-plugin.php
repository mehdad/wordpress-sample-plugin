<?php
/*
Plugin Name: پلاگین نمونه
Plugin URI: http://sitesazz.ir
Version: 0.3
Description: از این پلاگین به عنوان boilerplate برای پلاگین های دیگر استفاده میشود
Author: مهرداد محمدی
Author URI: https://www.linkedin.com/in/mehdad/
Text Domain: wp-sample-plugin
Domain Path: /languages
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

function ssz_sample_plugin_load_textdomain() {
    $url = basename( dirname( __FILE__ ) ) . '/languages';
    load_plugin_textdomain('wp-sample-plugin', false, $url);
}

add_action( 'init', 'ssz_sample_plugin_load_textdomain' );
