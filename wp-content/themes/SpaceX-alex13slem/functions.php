<?php

// <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon.png">
// 	<link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
// 	<link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
// 	<link rel="manifest" href="img/icon/site.webmanifest">
// 	<link rel="mask-icon" href="img/icon/safari-pinned-tab.svg" color="#5bbad5">
// 	<link rel="stylesheet" href="css/style.min.css?_v=20220629095937">

add_action('wp_enqueue_scripts', function () {

	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');


	// <script src="https://kit.fontawesome.com/bda9f69c70.js?_v=20220629095937" crossorigin="anonymous"></script>
	// <script src="js/app.min.js?_v=20220629095937"></script>

	wp_enqueue_script('fa', "https://kit.fontawesome.com/bda9f69c70.js?_v=20220629095937", array(), 'null', true);
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array(), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

function svg_upload_allow($mimes)
{
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

	// WP 5.1 +
	if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
		$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
	else
		$dosvg = ('.svg' === strtolower(substr($filename, -4)));

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if ($dosvg) {

		// разрешим
		if (current_user_can('manage_options')) {

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}

	return $data;
}
