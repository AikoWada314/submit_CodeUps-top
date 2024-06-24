<?php get_header(); ?>
<main>
    <section class="page-mv">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv.jpg" media="(min-width:768px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv-sp.jpg" alt="青い海と白い砂浜" loading="lazy" decoding="async">
        </picture>
      </div>
      <div class="page-mv__title">
        <h2>Contact</h2>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>


    <div class="page-contact l-page-margin l-page-margin--contact">
      <div class="page-contact__inner inner fish-icon fish-icon--contact">
        <div class="page-contact__error-message">
          <p>※必須項目が入力されていません。<br class="u-mobile">入力してください。</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="95dc0b4" title="お問い合わせ"]');  ?>


      </div>
    </div>
  </main>


<?php get_footer(); ?>