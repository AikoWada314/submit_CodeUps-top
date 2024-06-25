<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/'))?>" class="header__logoLink">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" media="(min-width:768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps-sp.png" alt="CodeUps">
          </picture>
        </a>
      </h1>
      <div class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="<?php echo esc_url(home_url('/campaign/'))?>">Campaign<p>キャンペーン</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/about-us/'))?>">About us<p>私たちについて</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/information/'))?>">Information<p>ダイビング情報</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/blog/'))?>">Blog<p>ブログ</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/voice/'))?>">Voice<p>お客様の声</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/price/'))?>">Price<p>料金一覧</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/faq/'))?>">FAQ<p>よくある質問</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/contact/'))?>">Contact<p>お問い合わせ</p></a>
          </li>
        </ul>
      </nav>

      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__group">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon sp-nav__icon--mt0" href="<?php echo esc_url(home_url('/campaign/'))?>">キャンペーン</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/campaign_cat/licensediving/'))?>">ライセンス講習</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/campaign_cat/experiencediving/'))?>">体験ダイビング</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/campaign_cat/fundiving/'))?>">ファンダイビング</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/about-us/'))?>">私たちについて</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/information/'))?>">ダイビング情報</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/information/#info-tab-1')); ?>">ライセンス講習</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/information/#info-tab-2')); ?>">体験ダイビング</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/information/#info-tab-3')); ?>">ファンダイビング</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
              </div>
            </li>
          </ul>
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon sp-nav__icon--mt0" href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/price/#licenseDiving')); ?>">ライセンス講習</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/price/#experienceDiving')); ?>">体験ダイビング</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="<?php echo esc_url(home_url('/price/#funDiving')); ?>">ファンダイビング</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br>ポリシー</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">利用規約</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>