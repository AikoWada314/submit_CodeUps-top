<?php 
function my_custom_enqueue_scripts() {
    // CSSの読み込み
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', [], null);
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', [], null);
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), [], null);

    // JavaScriptの読み込み
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', [], null, true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), ['jquery'], null, true);

}
add_action('wp_enqueue_scripts', 'my_custom_enqueue_scripts');

function add_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head', 'add_preconnect');