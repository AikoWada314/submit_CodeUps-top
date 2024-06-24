<?php 
function my_custom_enqueue_scripts() {
    // CSSの読み込み
    wp_enqueue_style('google-fonts-preconnect', 'https://fonts.googleapis.com', [], null);
    wp_enqueue_style('google-fonts-preconnect-crossorigin', 'https://fonts.gstatic.com', [], null, 'crossorigin');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap', [], null);
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', [], null);
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), [], null);

    // JavaScriptの読み込み
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], null, true);
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), ['jquery'], null, true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_enqueue_scripts');


// ページネーションの有効化
function custom_post_per_page($query) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive('campaign') ) {
        $query->set('posts_per_page', 4);
    }
}
add_action('pre_get_posts', 'custom_post_per_page');



//ボイスの表示件数変更
function change_voice_posts_per_page($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_post_type_archive('voice')) { // カスタム投稿タイプを指定
        $query->set('posts_per_page', 6); // 表示件数を指定
    }
}
add_action('pre_get_posts', 'change_voice_posts_per_page');

//投稿にアイキャッチ追加
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



// 管理画面の投稿をブログに変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

// footer margin-top
function add_custom_body_class($classes) {
	if (is_404()) {
			$classes[] = 'custom-margin-404';
	} 
	
	return $classes;
}
add_filter('body_class', 'add_custom_body_class');
