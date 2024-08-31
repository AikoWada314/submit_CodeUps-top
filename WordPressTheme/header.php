<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <div class="header__inner">
      <?php $tag = is_front_page() ? 'h1' : 'div'; ?>
      <<?php echo $tag; ?> class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logoLink">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="まつだ歯科医院" loading="lazy"
            decoding="async">
        </a>
      </<?php echo $tag; ?>>
      <div class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
      </div>

      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/feature/')); ?>">当院の特徴</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/spatial/')); ?>">診療案内</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/staff/')); ?>">医師・スタッフ紹介</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/first/')); ?>">初めての方へ</a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/news/')); ?>">新着情報</a>
          </li>
        </ul>
        <div class="pc-nav__item pc-nav__item--contact">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>">
            <p class="pc-nav__item--contact__text1">ご予約・お問い合わせはお気軽に</p>
            <p class="pc-nav__item--contact__text2">078-521-0418</p>
          </a>
        </div>
        <div class=" pc-nav__item pc-nav__item--reserve">
          <a href="https://ssl.haisha-yoyaku.jp/x5330939/login/serviceAppoint/index?SITE_CODE=epark" target="_blank">
            <div class="pc-nav__item--reserve__wrapper">
              <p class="pc-nav__item--reserve__text1">reserve</p>
              <p class="pc-nav__item--reserve__text2">ご予約はこちら</p>
            </div>
          </a>
        </div>
      </nav>
    </div>
  </header>

  <main>