<?php get_header(); ?>

<section class="page-error l-404">
  <div class="inner">
    <p class="page-error__title">お探しのページは<br class="u-mobile">見つかりませんでした</p>
    <p class="page-error__text">申し訳ありませんが、<br class="u-mobile">お探しのページは移動または削除<br
        class="u-sm">された可能性があります。<br>3秒後にトップページに戻ります。
    </p>
  </div>
</section>



<script>
setTimeout(function() {
  window.location.href = '<?php echo esc_url(home_url('/')); ?>';
}, 3000);
</script>

</main>
<?php get_footer(); ?>