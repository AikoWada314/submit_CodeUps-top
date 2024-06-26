<?php get_header(); ?>
<main>
    <section class="page-mv">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv.jpg" media="(min-width:768px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv-sp.jpg" alt="青い海と白い砂浜" loading="lazy" decoding="async">
        </picture>
      </div>
      <div class="page-mv__title">
        <h1>Site MAP</h1>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>


    <div class="page-sitemap l-page-margin">
      <div class="page-sitemap__inner inner fish-icon">
        <div class="page-sitemap__nav">
          <div class="sitemap-nav">
            <div class="sitemap-nav__group">
              <ul class="sitemap-nav__items sitemap-nav__items--mt0">
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black" href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/campaign_cat/licensediving/">ライセンス取得</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/campaign_cat/experiencediving/">体験ダイビング</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/campaign_cat/fundiving/">ファンダイビング</a>
                  </div>
                </li>
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav--black" href="<?php echo esc_url(home_url('/about-us/')); ?>">私たちについて</a>
                  </div>
                </li>
              </ul>
              <ul class="sitemap-nav__items sitemap-nav__items--ml">
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black" href="<?php echo esc_url(home_url('/information/')); ?>">ダイビング情報</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/information/#info-tab-1">ライセンス講習</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/information/#info-tab-2">体験ダイビング</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/information/#info-tab-3">ファンダイビング</a>
                  </div>
                </li>
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav--black" href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="sitemap-nav__group sitemap-nav__group--ml">
              <ul class="sitemap-nav__items sitemap-nav__items--mt0">
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black" href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
                  </div>
                </li>
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav--black" href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/price/#licenseDiving">ライセンス講習</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/price/#experienceDiving">体験ダイビング</a>
                  </div>
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__child sitemap-nav--black" href="/price/#funDiving">ファンダイビング</a>
                  </div>
                </li>
              </ul>
              <ul class="sitemap-nav__items sitemap-nav__items--ml">
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black" href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
                  </div>
                </li>
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav--black" href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br class="u-mobile">ポリシー</a>
                  </div>
                </li>
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav--black" href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">利用規約</a>
                  </div>
                </li>
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav--black" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
                  </div>
                </li>
                <li class="sitemap-nav__item">
                  <div class="sitemap-nav__link">
                    <a class="sitemap-nav__icon sitemap-nav--black" href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <section class="top-contact l-top-contact">
      <div class="top-contact__inner inner">
        <div class="top-contact__content">
          <div class="top-contact__top">
            <div class="top-contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-contact-sp.png" alt="CodeUps" loading="lazy" decoding="async">
            </div>

            <div class="top-contact__flex">
              <div class="top-contact__info-wrapper">
                <p class="top-contact__info top-contact__info--mt">沖縄県那覇市1-1</p>
                <p class="top-contact__info">TEL:0120-000-0000</p>
                <p class="top-contact__info">営業時間:8:30-19:00</p>
                <p class="top-contact__info">定休日:毎週火曜日</p>
              </div>
              <div class="top-contact__map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14320.124627230969!2d127.65836873349186!3d26.19566472716933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e569a926a083d5%3A0xf368c08083a19ad6!2z44CSOTAxLTAxNTIg5rKW57iE55yM6YKj6KaH5biC5bCP56aE77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1711282365114!5m2!1sja!2sjp"
                  style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="top-contact__bottom">
            <div class="top-contact__title">
              <div class="section-header">
                <p class="section-header__enTitle section-header__enTitle--big">Contact
                </p>
                <h2 class="section-header__jaTitle section-header__jaTitle--mt">お問い合わせ</h2>
              </div>
              <p class="top-contact__text">ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="top-contact__btn">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn slide long"><span>Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
