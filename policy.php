<?php
/* template Name:サイトポリシーページ */
?>

<?php get_header(); ?>

<section>
<div class="pages-wrapper">
<?php
$page_id = get_page_by_path('policy');//パーマリンク名が入ります
$page = get_post( $page_id );
echo $page -> post_content;  //本文を取得
?>


</div><!-- /.pages-wrapper -->
</section>

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


