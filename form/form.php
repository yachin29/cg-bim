<?php
/* template Name:お問い合わせページ */
?>

<?php get_header(); ?>
<main>
<div class="main-img">
<img src="https://placehold.jp/960x350.png" alt="">
</div>

<section id="form-wrapper">
<h2 class="gradation">お問い合わせ</h2>

<?php
echo do_shortcode('[contact-form-7 id="85a5c68" title="お問い合わせフォーム"]');
?>

</section><!-- /.form-wrapper -->

</main>


<?php get_footer(); ?>


<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="js/my-particles.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>

<script>
//thanksページへリダイレクト
document.addEventListener( 'wpcf7mailsent', function( event ) {
location = '<?php echo esc_url( home_url() ); ?>/thanks/';
});
</script>

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