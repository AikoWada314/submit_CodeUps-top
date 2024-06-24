

  <div class="to-top js-pagetop" id="page-top">
    <a href="#top"><span></span></a>
  </div>

  <footer class="footer l-footer">
    <div class="footer__inner inner">
      <div class="footer__img-flex">
        <div class="footer__logoLink">
          <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" alt="CodeUps" loading="lazy"
              decoding="async"></a>
        </div>
        <div class="footer__sns-icon">
          <div class="footer__fb-img">
            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png" alt="Facebook" loading="lazy" decoding="async"></a>
          </div>
          <div class="footer__ig-img">
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.png" alt="instagram" loading="lazy" decoding="async"></a>
          </div>
        </div>
      </div>

      <nav class="footer__nav nav">
        <div class="nav__group">
          <ul class="nav__items nav__items--mt">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/campaign_cat/licensediving/'))?>">ライセンス講習</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/campaign_cat/experiencediving/'))?>">体験ダイビング</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/campaign_cat/fundiving/'))?>">ファンダイビング</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="<?php echo esc_url(home_url('/about-us/'))?>">私たちについて</a>
              </div>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="<?php echo esc_url(home_url('/information/'))?>">ダイビング情報</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/information/#info-tab-1')); ?>">ライセンス講習</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/information/#info-tab-2')); ?>">体験ダイビング</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/information/#info-tab-3')); ?>">ファンダイビング</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="<?php echo esc_url(home_url('/blog/'))?>">ブログ</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="nav__group nav__group--ml">
          <ul class="nav__items nav__items--mt">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="<?php echo esc_url(home_url('/voice/'))?>">お客様の声</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="<?php echo esc_url(home_url('/price/'))?>">料金一覧</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/price/#licenseDiving')); ?>">ライセンス講習</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/price/#experienceDiving')); ?>">体験ダイビング</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="<?php echo esc_url(home_url('/price/#funDiving')); ?>">ファンダイビング</a>
              </div>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br class="u-mobile">ポリシー</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">利用規約</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <small>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>