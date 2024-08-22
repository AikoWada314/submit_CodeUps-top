<?php 
function my_custom_enqueue_scripts() {
    // CSSの読み込み
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', [], null);
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', [], null);
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), [], null);

    // JavaScriptの読み込み
    // WordPress提供のjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), ['jquery'], null, true);

}
add_action('wp_enqueue_scripts', 'my_custom_enqueue_scripts');

function add_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head', 'add_preconnect');

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

// ログイン画面ロゴ変更
function my_login_logo() {
  echo '<style type="text/css">
      .login h1 a {
          background-image: url(' . get_template_directory_uri() . '/assets/images/common/logo.png);
          width: 320px;
          height: 40px;
          background-size: 320px 40px;
      }
  </style>';
}
add_action('login_head', 'my_login_logo');


// 投稿の表示名を実績投稿に変更

/* 「投稿」ラベル変更 */
function change_post_menu_label() {
  global $menu;
  global $submenu;
  $name = '実績投稿';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
 }
 function change_post_object_label() {
  global $wp_post_types;
  $name = '実績投稿';
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
 add_action( 'init', 'change_post_object_label' );
 add_action( 'admin_menu', 'change_post_menu_label' );

//  投稿のコンテンツを入力するエディターを削除

function my_remove_meta_boxes() {
  // カスタムフィールドのメタボックスを非表示にする
  remove_meta_box('postcustom', 'post', 'normal'); 
}
add_action('admin_menu', 'my_remove_meta_boxes');

function theme_slug_remove_editor_supports() {
  // 投稿タイプ「post」のエディタを非表示にする
  remove_post_type_support('post', 'editor');
  
  // 投稿タイプ「post」のアイキャッチ画像設定を非表示にする
  remove_post_type_support('post', 'thumbnail');
}
add_action('init', 'theme_slug_remove_editor_supports');


// コンテンツのPタグ自動挿入を止める
remove_filter('the_content','wpautop');

 // data-src を src に戻す処理
 function replace_data_src_with_src() {
  ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
  // すべての iframe タグを対象にする
  var iframes = document.querySelectorAll('iframe[data-src]');
  iframes.forEach(function(iframe) {
    iframe.setAttribute('src', iframe.getAttribute('data-src'));
    iframe.removeAttribute('data-src');
  });

  // すべての img タグを対象にする
  var images = document.querySelectorAll('img[data-src]');
  images.forEach(function(img) {
    img.setAttribute('src', img.getAttribute('data-src'));
    img.removeAttribute('data-src');
  });
});
</script>
<?php
}
add_action('wp_footer', 'replace_data_src_with_src');

//Swiper部分のみ遅延読み込みを解除
function disable_lazy_load_for_images() {
  ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
  // .js-fv-swiper 内の img タグの遅延読み込みを無効化
  var swiperImages = document.querySelectorAll('.fv__swiper-slide img');
  swiperImages.forEach(function(img) {
    img.loading = 'eager'; // eager は画像をできるだけ早く読み込む設定
    img.removeAttribute('loading'); // loading 属性を削除
  });

  // .members__slide 内の img タグの遅延読み込みを無効化
  var memberImages = document.querySelectorAll('.members__img img');
  memberImages.forEach(function(img) {
    img.loading = 'eager';
    img.removeAttribute('loading');
  });
});
</script>
<?php
}
add_action('wp_footer', 'disable_lazy_load_for_images');