<?php

//cssファイルにパラメータをつける
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'my_style',
    get_stylesheet_directory_uri().'/css/main.css',
    [],
    date("YmdHi"),
  );
}, 11);


// すべてのアイキャッチ画像の有効化
add_theme_support('post-thumbnails');


//ブログカテゴリー用のアイキャッチ画像の設定
function set_default_thumbnail_image ( $html ) {
  if ( "" === $html ) {
    $html = '<img src="' . get_template_directory_uri() . '/img/staff-blog.jpg" alt="カテゴリー用のアイキャッチ画像" />';
  }
  return $html;
}
add_filter( 'post_thumbnail_html', 'set_default_thumbnail_image' );


// 文字数制限を110から40に変更
add_filter( 'excerpt_length', function( $length ){
  return 40;
}, 999 )



?>