<?php
//Đường dẫn thực
define('LMCIT_THEME_DIR', get_template_directory()); //Đường dẫn thực đến thư mục theme
define('LMCIT_THEME_INC_DIR', LMCIT_THEME_DIR . '/inc'); //Đường dẫn thực đến thư mục inc chứa các file chia nhỏ và widget
define('LMCIT_THEME_WIDGET_DIR', LMCIT_THEME_INC_DIR . '/widgets'); //Đường dẫn thực đến thư mục widgets
define('LMCIT_THEME_HTML_DIR', LMCIT_THEME_INC_DIR . '/html'); //Đường dẫn thực đến thư mục widgets
define('LMCIT_THEME_BLOCK_DIR', LMCIT_THEME_INC_DIR . '/blocks'); //Đường dẫn thực đến thư mục blocks chưa các file chia nhỏ
define('LMCIT_THEME_LANG_DIR', LMCIT_THEME_DIR . '/languages'); //Đường dẫn thực đến thư mục languages

//Đường dẫn URL
define('LMCIT_THEME_URL', get_template_directory_uri()); //Đường dẫn URL đến thư mục theme
define('LMCIT_THEME_IMG_URL', LMCIT_THEME_URL . '/images'); //Đường dẫn URL đến thư mục images của theme

define('LMCIT_THEME_JS_URL', LMCIT_THEME_URL . '/js'); 
define('LMCIT_THEME_CSS_URL', LMCIT_THEME_URL . '/css'); 
//Đường dẫn vao thư mục CORE
define('BTV',get_stylesheet_directory());
define('CORE', BTV."/core");
//Nhúng file /core/init.php
require_once( CORE."/init.php" );

if(!class_exists('LMCITHtml') && is_admin()) {
	require_once LMCIT_THEME_HTML_DIR . '/html.php';
}
require_once LMCIT_THEME_WIDGET_DIR . '/main.php';
new LMCIT_Theme_Widget_Main();

require_once LMCIT_THEME_INC_DIR . '/check_page.php';

require_once LMCIT_THEME_INC_DIR . '/support.php';
global $themeSupport;
$themeSupport = new LMCIT_Theme_Support();

// /* Init *********************************************/
add_action( 'init', 'lmcit_theme_setup' );
function lmcit_theme_setup() {
	load_theme_textdomain('btv', LMCIT_THEME_LANG_DIR);
	
	// Setup theme support
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'gallery') );
	add_theme_support( 'title-tag' ); /* Them title-tag */
	
	// Khai Template có bao nhiêu menu
	register_nav_menus(array(
		'main-menu' => __('Main menu'),
		'mobile-menu' => __('Mobile menu'),
		'product-menu' => __('Product menu'),
	));
}
// /* Khai báo sử dụng CSS, Javascript *********************************************/

// if(!function_exists('lmcit_theme_register_style')) {
// 	function lmcit_theme_register_style(){
// 		$cssUrl = LMCIT_THEME_URL . '/css';
// 		$jsUrl 	= LMCIT_THEME_URL . '/js';

// 		// CSS 
// 	    wp_register_style('lmcit_theme_css_font-awesome.min', $cssUrl . '/font-awesome.min.css', array(), '1.0');
// 		wp_enqueue_style('lmcit_theme_css_font-awesome.min');



// 	}
// }
// add_action('wp_enqueue_scripts', 'lmcit_theme_register_style');



//------------ TỐI ƯU WEB ----------------

//* Clean WordPress header
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head, 10, 0');


//Tắt biểu tượng cảm xúc trong WP
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
/**
* Filter function used to remove the tinymce emoji plugin.
*
* @param array $plugins
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
if ( is_array( $plugins ) ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
	return array();
	}
}

//Loại bỏ Query Strings
function _remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

add_action('cmb2_admin_init', 'your_prefix_register_gallery_metabox');
function your_prefix_register_gallery_metabox() {
    $cmb = new_cmb2_box([
        'id'            => 'gallery_metabox',
        'title'         => 'Album ảnh',
        'object_types'  => ['post'],
    ]);

    $cmb->add_field([
        'name' => 'Album ảnh',
        'id'   => 'gallery_images',
        'type' => 'file_list',
    ]);
}


// Tắt kích thước ảnh mặc định
update_option('thumbnail_size_w', 0);
update_option('thumbnail_size_h', 0);
update_option('medium_size_w', 0);
update_option('medium_size_h', 0);
update_option('large_size_w', 0);
update_option('large_size_h', 0);

// Xóa các kích thước ảnh bổ sung
function remove_default_image_sizes($sizes) {
    unset($sizes['thumbnail']);
    unset($sizes['medium']);
    unset($sizes['large']);
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');

function your_theme_enqueue_scripts() {
    wp_enqueue_script('custom-ajax', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);

    wp_localize_script('custom-ajax', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');

function handle_custom_ajax_request() {
    if (isset($_POST['catID'])) {
        $catID = sanitize_text_field($_POST['catID']);
        
		$args = array(
			'cat' => $catID,
			'posts_per_page' => 12
		);

		$query = new WP_Query($args);
		$response = '';

		while ($query->have_posts()) {
			$query->the_post();
			$title = get_the_title(); 
			$thumb_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
			$response .= '<a class="gallery-item fleft" href="'. get_the_permalink() .'"><div class="gallery-item-bg" style="background: url('. $thumb_image .') center center no-repeat;background-size: cover;"></div><div class="gallery-item-thumb thumb-cover"><img class="lazy" src="'.$thumb_image.'" alt="'. $title .'"/></div><p class="gallery-item-title white-space">'. $title .'</p></a>';
		}

		$response .= '<div class="cboth"></div>';

        echo $response;
    }
	
    wp_die();
}
add_action('wp_ajax_project_by_cat_id', 'handle_custom_ajax_request');
add_action('wp_ajax_nopriv_project_by_cat_id', 'handle_custom_ajax_request');


