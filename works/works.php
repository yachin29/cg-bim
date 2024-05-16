<?php
/* template Name:worksページ */
?>
<?php get_header(); ?>

<main>
<div class="main-img">
<img src="https://placehold.jp/960x350.png" alt="">
</div>

<div class="works-page-wrapper">
<h2 class="gradation">実績紹介</h2>
<input type="radio" id="btn-all" name="filter-btn" checked>
<label for="btn-all">ALL</label>
<input type="radio" id="btn-ex" name="filter-btn">
<label for="btn-ex">外観CGパース</label>
<input type="radio" id="btn-in" name="filter-btn">
<label for="btn-in">内観CGパース</label>
<input type="radio" id="btn-bim" name="filter-btn">
<label for="btn-bim">BIM</label>
<input type="radio" id="btn-vr" name="filter-btn">
<label for="btn-vr">VR/AR</label>

<div class="works-item-wrapper">

<?php
$arg = array(
'posts_per_page' => 10, // 表示する件数
'orderby' => 'date', // 日付でソート
'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
'category_name' => 'works', // 表示したいカテゴリーのスラッグを指定
//'tag' => 'post'//表示したいタグをスラッグ指定
);
$posts = get_posts( $arg );
if( $posts ):
?>

<!-- ループ開始 -->
<?php
foreach ( $posts as $post ) :
setup_postdata( $post );
?>

<div class="works-box" data-category="<?php $posttags = get_the_tags(); if ( $posttags ) { foreach ( $posttags as $tag ) { echo $tag->slug . ' ';} } ?>">
<a href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
<div class="works-content">
<p>
<?php the_post_thumbnail(); ?>
</p>
</div>
</a>
<ul>
<?php the_tags('<li>','</li><li>','</li>'); ?>
</ul>
</div><!-- /.works-box -->

<?php endforeach; ?>
<!-- ループ終了 -->
<?php
/// 必ずクエリをリセット
  endif;
  wp_reset_postdata();
?>



</div><!-- /.works-item-wrapper -->
</div><!-- /.works-page-wrapper -->
</main>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="js/my-particles.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
<script>
$(function(){
$(window).on('scroll resize',function(){
let scrTop = $(window).scrollTop();
let winHeight = $(window).outerHeight();

$('.pick-img').each(function(){
let elmTop = $(this).offset().top;
let h = $(this).outerHeight();

if(scrTop > elmTop - winHeight + h){
$(this).addClass('scroll');
}


});
});
});
</script>


</body>
</html>


Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis veniam repellat quas eum in odit fugiat qui hic possimus porro, illum quisquam reiciendis consectetur aspernatur recusandae obcaecati accusamus, ipsa dicta.