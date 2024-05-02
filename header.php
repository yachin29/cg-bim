<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?> >
<header>
<h1>CG-BIM Studio</h1>
<nav id="g-nav">
<ul>
<li><a href="<?php echo esc_url( home_url() ); ?>">トップ</a>
<div class="drop-menu">
<div class="drop-inner">
<p class="drop-list"><a href="#service">
<img src="https://placehold.jp/200x150.png" alt="">
サービス</a></p>
<p class="drop-list"><a href="#pick-up">
<img src="https://placehold.jp/200x150.png" alt="">
おすすめ</a></p>
<p class="drop-list"><a href="#voice">
<img src="https://placehold.jp/200x150.png" alt="">
お客様の声</a></p>
<p class="drop-list"><a href="#about">
<img src="https://placehold.jp/200x150.png" alt="">
私達について</a></p>
</div><!-- /.drop-inner -->
</div><!-- /#drop-menu -->
</li>

<li><a href="<?php echo esc_url( home_url() ); ?>/works/">実績紹介</a></li>
<li><a href="#">採用情報</a></li>
<li><a href="#">ブログ</a></li>
<li><a href="<?php echo esc_url( home_url() ); ?>/contact/">お問い合わせ</a></li>
</ul>
</nav>
<button id="ham-btn"><span></span></button>
</header>

<nav id="sp-nav">
<ul>
<li><a href="<?php echo esc_url( home_url() ); ?>">トップ</a></li>
<li><a href="<?php echo esc_url( home_url() ); ?>/works/">実績紹介</a></li>
<li><a href="#">採用情報</a></li>
<li><a href="#">ブログ</a></li>
<li><a href="<?php echo esc_url( home_url() ); ?>/contact/">お問い合わせ</a></li>
</ul>
</nav>
<!-- ここまでheader.php -->