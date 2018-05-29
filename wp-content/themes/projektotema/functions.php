<?php 

//apsirasau kelia iki index direktorijos
//sukuriu ASSETS_URL constanta kuri ir yra kelias
define('ASSETS_URL', get_template_directory_uri() . '/assets/');
//pridedu stilius ir js 
add_action('wp_enqueue_scripts', 'prijungiu_css');
//registruoju
function prijungiu_css(){

	//css
	wp_register_style('reset_css', ASSETS_URL . 'reset.css', array(), false);
	wp_register_style('stiliai_css', ASSETS_URL . 'stiliai-dist.css', array(), false);
	//fontai
	wp_register_style('fontai_css', ASSETS_URL . '/fonts/stylesheet.css', false);
	//iconos
	wp_register_style('ikonos_css', ASSETS_URL . '/icons/icomoon/style.css', array(), false);
	//js
	wp_register_script('siema_js', ASSETS_URL . 'js/siema.min.js', array(), false, true);
	wp_register_script('projekto_js', ASSETS_URL . 'js/projektojs.js', array('siema_js'), false, true);
	//mapsas
	wp_register_script('google_api_key', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCoq3nVP5qommm7ET3alU4zp8Q25SxtLpo', array(), false, false);//uzsikrauna headeryje kai false 
	wp_register_script('maps_js', ASSETS_URL . 'js/maps.js', array('google_api_key', 'jquery'), false, true);
	
	wp_enqueue_style('reset_css');
	wp_enqueue_style('stiliai_css');
	wp_enqueue_style('fontai_css');
	wp_enqueue_style('ikonos_css');
	//echo 'veikia stiliu prijungimo funkcija <br>';

	wp_enqueue_script('siema_js');
	wp_enqueue_script('projekto_js');

	wp_enqueue_script('google_api_key');
	wp_enqueue_script('maps_js');
}

add_action('init', 'meniu');

function meniu(){
	add_theme_support('menus');
}

add_action('init', 'registruoju_navigacija');
function registruoju_navigacija(){
	register_nav_menus(array(
		'header-menu'	=> __('Virsutinis meniu')
	));
}

//registruoju mapsa
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCoq3nVP5qommm7ET3alU4zp8Q25SxtLpo';
	
	return $api;
}
?>