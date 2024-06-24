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


    <section class="thanks-page l-page-margin">
      <div class="thanks-page__inner inner fish-icon">
        <p class="thanks-page__main">お問い合わせ内容を送信完了しました。</p>
        <p class="thanks-page__sub">
          このたびは、お問い合わせ頂き<br class="u-mobile">
          誠にありがとうございます。<br>
          お送り頂きました内容を確認の上、<br class="u-mobile">
          3営業日以内に折り返しご連絡させて頂きます。<br>
          また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
          自動返信の確認メールをお送りしております。
        </p>
      </div>
    </section>
  </main>


<?php get_footer(); ?>