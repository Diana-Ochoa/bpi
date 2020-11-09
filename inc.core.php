<?php
	include("aplication/inc.config.php");
	define("_includes_",$_cfg['sitio']['ruta']."aplication/includes/");
	define("_images_",$_cfg['sitio']['url']."aplication/images/");
	define("_sliderimages_",$_cfg['sitio']['url']."aplication/sliderimages/");
	define("_js_",$_cfg['sitio']['url']."aplication/js/");
	define("_css_",$_cfg['sitio']['url']."aplication/css/");
	define("_webfont_",$_cfg['sitio']['url']."aplication/webfont/");
	define("_favicon_",$_cfg['sitio']['url']."aplication/favicon/");
	define("_svg_",$_cfg['sitio']['url']."aplication/svg/");
	
	define('_file_',basename($_SERVER['PHP_SELF']));
	define('_base_',$_cfg['sitio']['url']);

	/*
	$_cfg['sitio'] = "https://www.andinasoluciones.com/demos/bpi.com.pe/";
	define("_includes_",$_cfg['sitio']."aplication/includes/");
	define("_images_",$_cfg['sitio']."aplication/images/");
	define("_js_",$_cfg['sitio']."aplication/js/");
	define("_source_",$_cfg['sitio']."aplication/source/");
	define("_css_",$_cfg['sitio']."aplication/css/");
	define("_dist_",$_cfg['sitio']."aplication/dist/");

	define('_base_',$_cfg['sitio']);
	define('_file_',basename($_SERVER['PHP_SELF']));
	*/
?>