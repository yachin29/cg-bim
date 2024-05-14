<?php
/* template Name:サンクスページ */
?>

<?php get_header(); ?>
<main>
<div class="main-img">
<img src="https://placehold.jp/960x350.png" alt="">
</div>

<section id="form-wrapper">
<h2 class="gradation">お問い合わせありがとうございました。</h2>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos qui, corrupti nobis nulla cumque inventore molestiae ipsa iusto explicabo ratione, porro aspernatur quas animi non, repudiandae enim reiciendis? Tempora, voluptates!</p>
</section><!-- /.form-wrapper -->
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