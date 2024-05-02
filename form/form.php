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
<dl>
<dt>お問い合わせ内容</dt>
<dd>
<label for="list-1">
<input type="radio" name="form-list" value="カタログ請求" id="list-1">カタログ請求
</label>
<label for="list-2">
<input type="radio" name="form-list" value="採用について" id="list-2">採用について
</label>
<label for="list-3">
<input type="radio" name="form-list" value="製品について" id="list-3">製品について
</label>
<label for="list-4">
<input type="radio" name="form-list" value="その他" id="list-4">その他
</label>
</dd>
<dt>お名前</dt>
<dd><input type="text" name="onamae" placeholder="お名前を入力して下さい" required></dd>
<dt>フリガナ</dt>
<dd><input type="text" name="kana" placeholder="カタカナで入力して下さい" required></dd>
<dt>メールアドレス</dt>
<dd><input type="email" name="email" placeholder="メールアドレスを入力して下さい" required></dd>
<dt>お電話番号</dt>
<dd><input type="text" name="tel" placeholder="ハイフン無しで入力して下さい"></dd>

<dt>興味のある技術分野<span>複数選択可</span></dt>
<dd>
<label for="check-1">
<input type="checkbox" name="check" id="check-1" value="外観CGパース">外観CGパース
</label>
<label for="check-2">
<input type="checkbox" name="check" id="check-2" value="内観CGパース">内観CGパース
</label>
<label for="check-3">
<input type="checkbox" name="check" id="check-3" value="BIM">BIM
</label>
<label for="check-4">
<input type="checkbox" name="check" id="check-4" value="VR/AR">VR/AR
</label>
</dd>
<dt>備考欄</dt>
<dd>
<textarea name="message"></textarea>
</dd>
</dl>

<div class="button02">
<button type="submit">送信</button>
</div>


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