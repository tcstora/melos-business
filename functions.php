<?php

// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------
$dir = get_stylesheet_directory_uri();
function melos_thinkup_child_frontscripts() {

	wp_enqueue_style( 'thinkup-style', get_template_directory_uri() . '/style.css', array( 'thinkup-bootstrap' ) );
	wp_enqueue_style( 'melos-thinkup-style-business', get_stylesheet_directory_uri() . '/style.css', array( 'thinkup-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'melos_thinkup_child_frontscripts' );

function add_files() {
	// サイト共通のCSSの読み込み
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/grid.css', "", '20160608' );
}
add_action( 'wp_enqueue_scripts', 'add_files' );
// ----------------------------------------------------------------------------------
//	Update Options Array With Child Theme Color Values
// ----------------------------------------------------------------------------------

// Add child theme color values to options array
function melos_thinkup_updateoption_child_settings() {

	// Set theme name combinations
	$name_theme_upper = 'Melos';
	$name_theme_lower = strtolower( $name_theme_upper );

	// Set possible options names
	$name_options_free  = 'thinkup_redux_variables';
	$name_child_color   = $name_theme_lower . '_thinkup_child_color_business';

	// Get options values (theme options)
	$options_free = get_option( $name_options_free );

	// Get child color values
	$options_child_settings = get_option( $name_child_color );

	if( ! empty( $options_free ) ) {

		// Only set child color values if not already set 
		if ( $options_child_settings != 1 ) {

			$options_free['thinkup_styles_skinswitch'] = '1';
			$options_free['thinkup_styles_skin']       = 'business';

			// Add child color to theme options array
			update_option( $name_options_free, $options_free );

		}
	}

	// Set the child color flag
	update_option( $options_child_settings, 1 );

}
add_action( 'init', 'melos_thinkup_updateoption_child_settings', 999 );

//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'jisseki', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => '施工実績', // 管理画面上で表示する投稿タイプ名
            'singular_name' => '施工実績',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => false,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
	]);
	register_taxonomy_for_object_type('post_tag','jisseki');
}