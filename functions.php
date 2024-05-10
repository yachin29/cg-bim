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




?>