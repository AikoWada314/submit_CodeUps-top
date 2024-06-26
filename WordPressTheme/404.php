<?php get_header(); ?>

<main>
<?php get_template_part('breadcrumb'); ?>


    <section class="page-error">
      <div class="page-error__inner inner">
        <h2 class="page-error__title">404</h2>
        <p class="page-error__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
      </div>
      <div class="page-error__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn slide reverse"><span>Page TOP</span></a>
      </div>
    </section>

  </main>  

<?php get_footer(); ?>
