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
<div class="works-box" data-category="cate-1 cate-3">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">外観CGパース</a></li>
<li><a href="#">BIM</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-2 cate-4">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">内観CGパース</a></li>
<li><a href="#">VR/AR</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-3">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">BIM</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-4">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">VR/AR</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-1 cate-2 cate-3 cate-4">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">外観CGパース</a></li>
<li><a href="#">内観CGパース</a></li>
<li><a href="#">BIM</a></li>
<li><a href="#">VR/AR</a></li>
</ul>
</div><!-- /.works-box -->



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