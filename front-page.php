<?php
/* template Name:トップページ */
?>

<?php get_header(); ?>

<div id="particles-js"></div>

<div class="tag-line">
<p class="gradation">ビジョンを形にする<br>
建築CGパースで新たな未来を描こう</p>
</div>
<div class="gallery-wrapper">
<div class="photo-box">
<p><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-1.jpg" alt=""></p>
<p><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-3.jpg" alt=""></p>
<p><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-2.jpg" alt=""></p>
</div>
<div class="text-box">
<h2 class="gradation">ビジョンを形に</h2>
<p class="lead">CG-BIM Studioでは、BIMを活用し建築の未来をデジタルモデルで描き出します。高品質なCGパースを通じて、リアルな建築イメージを再現し、設計変更の迅速な反映や効率化されたプロジェクト管理を実現します。<br>
卓越したCGパース制作により、お客様のビジョンを実現するために、最先端のBIM技術を駆使し、革新的な建築CGパースを提供致します。</p>
</div>
</div><!-- /.gallery-wrapper -->


<section id="news">
<h3 class="gradation">お知らせ</h3>

<div class="news-wrapper">
<dl class="news-list">

<?php
$arg = array(
'posts_per_page' => 3, // 表示する件数
'orderby' => 'date', // 日付でソート
'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
'category_name' => 'news', // 表示したいカテゴリーのスラッグを指定
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

<dt><?php the_time('Y年m月d日') ?><span><a href="#">
<?php
$cats = get_the_category();
foreach ( $cats as $cat ):
if ( $cat->parent ) echo $cat->cat_name;
endforeach;
?>
</a></span></dt>
<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
<?php endforeach; ?>
<!-- ループ終了 -->
<?php
/// 必ずクエリをリセット
  endif;
  wp_reset_postdata();
?>
</dl>
<p class="to-news btn-1"><a href="#">お知らせ一覧へ</a></p>
</div><!-- /.news-wrapper -->
</section>

<section id="service">
<h3 class="gradation">事業内容</h3>
<div class="service-wrapper">
<div class="service-box">
<h4><span>1</span>外観CGパース</h4>
<p class="illust"><img src="<?php echo get_template_directory_uri(); ?>/img/illust-01.svg" alt=""></p>
<p class="service-text">建物の外観をCG技術を使用してリアルに再現し、建物の外見や材質、環境などを視覚的に表現します。<br>
建物のデザインや色彩、光の表現などを調整して、建築物の魅力を引き出します。</p>
</div><!-- /.service-box -->

<div class="service-box">
<h4><span>2</span>内観CGパース</h4>
<p class="illust"><img src="<?php echo get_template_directory_uri(); ?>/img/illust-02.svg" alt=""></p>
<p class="service-text">建物の内部空間をCG技術を使用して表現し、部屋のレイアウトや家具、照明、素材などを再現します。<br>
クライアントの要望に応じた内装デザインをビジュアル化し、イメージの共有やプレゼンテーションに活用されます。</p>
</div><!-- /.service-box -->

<div class="service-box">
<h4><span>3</span>BIMを使ったCGモデリング</h4>
<p class="illust"><img src="<?php echo get_template_directory_uri(); ?>/img/illust-03.svg" alt=""></p>
<p class="service-text">BIMを活用することで、3Dモデリングによる空間情報だけでなく、時間情報や費用情報などの情報も統合的に扱い、建築プロジェクト全体を最適化することができます。</p>
</div><!-- /.service-box -->

<div class="service-box">
<h4><span>4</span>VR・ARコンテンツ</h4>
<p class="illust"><img src="<?php echo get_template_directory_uri(); ?>/img/illust-04.svg" alt=""></p>
<p class="service-text">建物や空間のVR（仮想現実）やAR（拡張現実）コンテンツを制作します。<br>クライアントや顧客が建物や空間を仮想的に体験し、リアルなイメージを得ることができます。</p>
</div><!-- /.service-box -->

</div><!-- /.service-wrapper -->
</section>



<section id="pick-up">
<h3 class="gradation">ピックアップ</h3>


<div class="pick-wrapper">
<?php
$pick = array(
'posts_per_page' => 3, // 表示する件数
'meta_key' => 'rank', //カスタムフィールド名
'orderby' => 'meta_value_num',
'order' => 'ASC',
'category_name' => 'pick-up', // 表示したいカテゴリーのスラッグを指定
);
$posts = get_posts( $pick );
if( $posts ):
?>

<!-- ここからループ -->
<?php
foreach ( $posts as $post ) :
setup_postdata( $post );
?>
<div class="pick-box">
<div class="pick-text-box">
<h4><?php the_title(); ?></h4>
<p class="pick-text">
<?php
// １、投稿テキストを取得する
$content = get_the_content();
// ２，HTMLタグをすべて取り除く
$content = wp_strip_all_tags( $content );
// ３．ショートコードを取り除く
$content = strip_shortcodes( $content );
// ４、出力する
echo $content;
?>
</p>
<ul>
<li><a href="#">外観CGパース</a></li>
<li><a href="#">VR・ARコンテンツ</a></li>
</ul>
<p class="btn-1 to-works"><a href="#">実績一覧へ</a></p>
</div><!-- /.pick-text-box -->
<p class="pick-img">
<?php the_post_thumbnail(); ?>
</p>
</div><!-- /.pick-box -->

<?php endforeach; ?>
<!-- ループ終了 -->
<?php
/// 必ずクエリをリセット
  endif;
  wp_reset_postdata();
?>
</div><!-- /.pick-wrapper -->


</section>

<section id="voice">
<h3 class="gradation">利用者の声</h3>

<div class="voice-wrapper">
<div class="voice-box">
<div class="avatar">
<img src="<?php echo get_template_directory_uri(); ?>/img/voice-1.svg" alt="">
</div>
<p class="voice-name">A社の担当者様</p>
<p class="voice-date">2024年4月10日</p>
<h4>イメージ通りのCGで満足</h4>
<p class="voice-text">当社の建物のCGパースを制作していただきました。BIM技術を使って、リアルなイメージを提供していただき、大変満足しております。また、スムーズなコミュニケーションで、要望に沿ったCGパースを作っていただけたことも、大変助かりました。</p>
</div><!-- /.voice-box -->

<div class="voice-box">
<div class="avatar">
<img src="<?php echo get_template_directory_uri(); ?>/img/voice-2.svg" alt="">
</div>
<p class="voice-name">B社の担当者様</p>
<p class="voice-date">2024年3月20日</p>
<h4>丁寧な仕事に感謝しています</h4>
<p class="voice-text">弊社の商業施設のCGパースを制作していただきました。BIM技術を使ったCGパースは、まるで完成した建物のようにリアルで、投資家の方々からも高く評価されました。スピーディーな対応と丁寧な仕事に感謝しています。</p>
</div><!-- /.voice-box -->


<div class="voice-box">
<div class="avatar">
<img src="<?php echo get_template_directory_uri(); ?>/img/voice-3.svg" alt="">
</div>
<p class="voice-name">C社の担当者様</p>
<p class="voice-date">2024年3月12日</p>
<h4>最新のBIM技術に感動</h4>
<p class="voice-text">私たちのマンションのCGパースを制作していただきました。BIM技術を駆使して、細かい部分までリアルに再現していただけたことに、感動しました。また、短い期間での対応やスタッフの方々の丁寧な対応に、大変満足しております。</p>
</div><!-- /.voice-box -->
</div><!-- /.voice-wrapper -->
</section><!-- /#voice -->

<section id="about">
<div class="about-text">
<h3 class="about-title">私達について</h3>
<dl class="about-list">
<dt>名称</dt>
<dd>CG-BIM Studio</dd>
<dt>設立</dt>
<dd>2016年4月</dd>
<dt>事業内容</dt>
<dd>3DCGを活用したパース制作</dd>
<dt>従業員数</dt>
<dd>46名<span>令和6年4月時点</span></dd>
</dl>
</div>
</section><!-- /#about -->

<section id="blog">
<h3 class="gradation">スタッフブログ</h3>
<div class="blog-wrapper">
<div class="blog-box">
<a href="#">
<h4>投稿記事のタイトル</h4>
<p class="blog-date">2024/04/08</p>
<p class="blog-img"><img src="https://placehold.jp/600x400.png" alt=""></p>
<div class="blog-text"><p>wpの投稿テキストはpタグごと出力されます。wpの投稿テキストはpタグごと出力されます。</p></div>

</a>
</div><!-- /.blog-box -->

<div class="blog-box">
<a href="#">
<h4>投稿記事のタイトル</h4>
<p class="blog-date">2024/04/08</p>
<p class="blog-img"><img src="https://placehold.jp/600x400.png" alt=""></p>
<div class="blog-text"><p>wpの投稿テキストはpタグごと出力されます。wpの投稿テキストはpタグごと出力されます。</p></div>

</a>
</div><!-- /.blog-box -->

<div class="blog-box">
<a href="#">
<h4>投稿記事のタイトル</h4>
<p class="blog-date">2024/04/08</p>
<p class="blog-img"><img src="https://placehold.jp/600x400.png" alt=""></p>
<div class="blog-text"><p>wpの投稿テキストはpタグごと出力されます。wpの投稿テキストはpタグごと出力されます。</p></div>

</a>
</div><!-- /.blog-box -->

<div class="blog-box">
<a href="#">
<h4>投稿記事のタイトル</h4>
<p class="blog-date">2024/04/08</p>
<p class="blog-img"><img src="https://placehold.jp/600x400.png" alt=""></p>
<div class="blog-text"><p>wpの投稿テキストはpタグごと出力されます。wpの投稿テキストはpタグごと出力されます。</p></div>

</a>
</div><!-- /.blog-box -->
</div><!-- /.blog-wrapper -->
</section><!-- /#blog -->


<?php get_footer(); ?>


<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/my-particles.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js:title"></script>

<script>
$(function(){
//ピックアップ部分
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

//ハンバーガーボタン
$('#ham-btn').on('click',function(){
$(this).toggleClass('is-active');
$('#sp-nav').toggleClass('move');
});

//resizeした時にハンバーガメニューをリセットする
//画面の幅を取得
let windowWidth = $(window).width();
//画面をresizeした時
$(window).on('resize load',function(){
//resize後の幅を取得
let ww = $(window).width();
//幅が変わった時に限る
if(windowWidth != ww){
//min-width:960pxの時だけ
if(window.matchMedia('(min-width:960px)').matches){
$('#ham-btn').removeClass('is-active');
$('#sp-nav').removeClass('move');
}
}
});


});
</script>


<script>
const mySwiper = new Swiper('.swiper', {
slidesPerView: 1, // コンテナ内に表示させるスライド数（CSSでサイズ指定する場合は 'auto'）
spaceBetween: 20,
grabCursor: true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},

loop: true,  // 無限ループさせる
loopAdditionalSlides: 1, // 無限ループさせる場合に複製するスライド数

navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},

watchSlidesProgress: true,//はみ出ているスライド部分にもクラスを付与する

breakpoints: {
600: {
slidesPerView: 2,
},
1025: {
slidesPerView: 3,
spaceBetween: 32,
}
},
});
</script>

</body>
</html>


