<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="CodeUps" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="CodeUps" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="./assets/images/common/top-about-mask.png" />
  <!-- css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/style.css" />


  <!-- JavaScript -->
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script defer src="./assets/js/jquery.inview.min.js"></script>
  <script defer src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script defer src="./assets/js/script.js"></script>

</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="./index.html" class="header__logoLink">
          <picture>
            <source srcset="./assets/images/common/CodeUps.svg" media="(min-width:768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/CodeUps-sp.png" alt="CodeUps">
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
          <li class="pc-nav__item"><a href="./page-campaign.html">Campaign<p>キャンペーン</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="./page-about.html">About us<p>私たちについて</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="./page-information.html">Information<p>ダイビング情報</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="./page-blog.html">Blog<p>ブログ</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="./archive-voice.html">Voice<p>お客様の声</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="./page-price.html">Price<p>料金一覧</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="./page-faq.html">FAQ<p>よくある質問</p></a>
          </li>
          <li class="pc-nav__item">
            <a href="./page-contact.html">Contact<p>お問い合わせ</p></a>
          </li>
        </ul>
      </nav>

      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__group">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon sp-nav__icon--mt0" href="./page-campaign.html">キャンペーン</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-campaign.html">ライセンス取得</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-campaign.html">貸切体験ダイビング</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-campaign.html">ナイトダイビング</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./page-about.html">私たちについて</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./page-information.html">ダイビング情報</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-information.html#info-tab-1">ライセンス講習</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-information.html#info-tab-2">体験ダイビング</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-information.html#info-tab-3">ファンダイビング</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./page-blog.html">ブログ</a>
              </div>
            </li>
          </ul>
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon sp-nav__icon--mt0" href="./archive-voice.html">お客様の声</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./page-price.html">料金一覧</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-price.html#licenseDiving">ライセンス講習</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-price.html#experienceDiving">体験ダイビング</a>
              </div>
              <div class="sp-nav__link">
                <a class="sp-nav__child" href="./page-price.html#funDiving">ファンダイビング</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./page-faq.html">よくある質問</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./privacy-policy.html">プライバシー<br>ポリシー</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./term-of-service.html">利用規約</a>
              </div>
            </li>
            <li class="sp-nav__item">
              <div class="sp-nav__link">
                <a class="sp-nav__icon" href="./page-contact.html">お問い合わせ</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="fv">
      <div class="fv_inner">
        <div class="fv_slider swiper swiper-container js-fv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source srcset="./assets/images/common/top-fv1.jpg" media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-campaign-sp1.jpg" alt="青い海の中でカメが泳いでいる">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="./assets/images/common/top-fv2.jpg" media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-fv-sp2.jpg" alt="青い海の中でカメが泳いでいる">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="./assets/images/common/top-fv3.jpg" media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-fv-sp3.jpg" alt="海に浮かんだ船と山">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source srcset="./assets/images/common/top-fv4.jpg" media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-fv-sp4.jpg" alt="青い空と青い海">
              </picture>
            </div>
          </div>
          <div class="fv_title-wrap">
            <p class="fv_main-copy">
              diving
            </p>
            <p class="fv_sub-copy">into the ocean</p>
          </div>
        </div>
      </div>
    </div>

    <section class="top-campaign l-top-campaign">
      <div class="top-campaign__inner inner">
        <div class="top-campaign__title">
          <div class="section-header">
            <p class="section-header__enTitle">Campaign</p>
            <h2 class="section-header__jaTitle">キャンペーン</h2>
          </div>
        </div>

        <div class="top-campaign__items cards">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper swiper-container js-campaign-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide top-campaign__item card">
                <div class="card__wrapper">
                  <a href="#" class="card__link">
                    <div class="card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-campaign-sp1.jpg" alt="海で泳ぐたくさんの魚" loading="lazy"
                        decoding="async">
                    </div>
                    <div class="card__content">
                      <div class="card__tag tag">
                        <p class="tag__text">ライセンス講習</p>
                      </div>
                      <h3 class="card__title">ライセンス取得</h3>
                      <p class="card__text">全部コミコミ(お一人様)</p>
                      <div class="card__price">
                        <p class="card__price-before"><span>¥56,000</span></p>
                        <p class="card__price-after">¥46,000</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide top-campaign__item card">
                <div class="card__wrapper">
                  <a href="#" class="card__link">
                    <div class="card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-campaign-sp2.jpg" alt="海岸に泊まる一艘の船" loading="lazy"
                        decoding="async">
                    </div>
                    <div class="card__content">
                      <div class="card__tag tag">
                        <p class="tag__text">体験ダイビング</p>
                      </div>
                      <h3 class="card__title">貸切体験ダイビング</h3>
                      <p class="card__text">全部コミコミ(お一人様)</p>
                      <div class="card__price">
                        <p class="card__price-before"><span>¥24,000</span></p>
                        <p class="card__price-after">¥18,000</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide top-campaign__item card">
                <div class="card__wrapper">
                  <a href="#" class="card__link">
                    <div class="card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-campaign-sp3.jpg" alt="海の中で泳ぐたくさんのクラゲ" loading="lazy"
                        decoding="async">
                    </div>
                    <div class="card__content">
                      <div class="card__tag tag">
                        <p class="tag__text">体験ダイビング</p>
                      </div>
                      <h3 class="card__title">ナイトダイビング</h3>
                      <p class="card__text">全部コミコミ(お一人様)</p>
                      <div class="card__price">
                        <p class="card__price-before"><span>¥10,000</span></p>
                        <p class="card__price-after">¥8,000</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide top-campaign__item card">
                <div class="card__wrapper">
                  <a href="#" class="card__link">
                    <div class="card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-campaign-sp4.jpg" alt="海から顔を出すダイバー" loading="lazy"
                        decoding="async">
                    </div>
                    <div class="card__content">
                      <div class="card__tag tag">
                        <p class="tag__text">ファンダイビング</p>
                      </div>
                      <h3 class="card__title">貸切ファンダイビング</h3>
                      <p class="card__text">全部コミコミ(お一人様)</p>
                      <div class="card__price">
                        <p class="card__price-before"><span>¥20,000</span></p>
                        <p class="card__price-after">¥16,000</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="top-campaign__btn">
          <a href="./page-campaign.html" class="btn slide"><span>View more</span></a>
        </div>
      </div>
    </section>

    <section class="top-about l-top-about">
      <div class="top-about__inner fish-icon inner">
        <div class="top-about__title">
          <div class="section-header">
            <p class="section-header__enTitle">About us</p>
            <h2 class="section-header__jaTitle">私たちについて</h2>
          </div>
        </div>
        <div class="top-about__img-wrapper">
          <div class="top-about__mainImg">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-about2.jpg" alt="青い海の中で泳ぐ2匹の魚" loading="lazy" decoding="async">
          </div>
          <div class="top-about__subImg">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-about1.jpg" alt="青い空と琉球瓦の上に座るシーサー" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="top-about__text-wrapper">
          <h3 class="top-about__copy">
            Dive into<br>the Ocean
          </h3>
          <div class="top-about__flex">
            <p class="top-about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            <div class="top-about__btn">
              <a href="./page-about.html" class="btn slide"><span>View more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="top-info l-top-info">
      <div class="top-info__inner inner">
        <div class="top-info__title">
          <div class="section-header">
            <h2 class="section-header__enTitle">Information</h2>
            <p class="section-header__jaTitle">ダイビング情報</p>
          </div>
        </div>
        <div class="top-info__flex">
          <div class="top-info__img js-inview">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-info.jpg" alt="海の中で泳ぐオレンジ色の魚" loading="lazy" decoding="async">
          </div>
          <div class="top-info__text-wrapper">
            <h3 class="top-info__subTitle">ライセンス講習</h3>
            <p class="top-info__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="top-info__btn">
              <a href="./page-information.html" class="btn slide"><span>View more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="top-blog">
      <div class="top-blog__background"></div>
      <div class="top-blog__inner inner">
        <div class="top-blog__title">
          <div class="section-header">
            <p class="section-header__enTitle section-header__enTitle--white">Blog</p>
            <h2 class="section-header__jaTitle section-header__jaTitle--white">ブログ</h2>
          </div>
        </div>
        <ul class="top-blog__items blog-cards">
          <li class="blog-cards__item blog-card">
            <div class="blog-card__wrapper">
              <a href="#" class="blog-card__link">
                <div class="blog-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-blog1.jpg" alt="海の中のイソギンチャク" loading="lazy" decoding="async">
                </div>
                <div class="blog-card__content">
                  <div class="blog-card__date">
                    <time datetime="2023-11-17">2023.11.17</time>
                  </div>
                  <h3 class="blog-card__title">ライセンス取得</h3>
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </a>
            </div>
          </li>
          <li class="blog-cards__item blog-card">
            <div class="blog-card__wrapper">
              <a href="#" class="blog-card__link">
                <div class="blog-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-blog2.jpg" alt="海の中で泳ぐウミガメ" loading="lazy" decoding="async">
                </div>
                <div class="blog-card__content">
                  <div class="blog-card__date">
                    <time datetime="2023-11-17">2023.11.17</time>
                  </div>
                  <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </a>
            </div>
          </li>
          <li class="blog-cards__item blog-card">
            <div class="blog-card__wrapper">
              <a href="#" class="blog-card__link">
                <div class="blog-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-blog3.jpg" alt="海の中のカクレクマノミとイソギンチャク" loading="lazy"
                    decoding="async">
                </div>
                <div class="blog-card__content">
                  <div class="blog-card__date">
                    <time datetime="2023-11-17">2023.11.17</time>
                  </div>
                  <h3 class="blog-card__title">カクレクマノミ</h3>
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </a>
            </div>
          </li>
        </ul>

        <div class="top-blog__btn">
          <a href="./page-blog.html" class="btn slide"><span>View more</span></a>
        </div>
      </div>
    </section>

    <section class="top-voice l-top-voice">
      <div class="top-voice__inner inner">
        <div class="top-voice__title">
          <div class="section-header">
            <p class="section-header__enTitle">Voice</p>
            <h2 class="section-header__jaTitle">お客様の声</h2>
          </div>
        </div>
        <ul class="top-voice__items voice-cards">
          <li class="voice-cards__item voice-card">
            <a href="" class="voice-card__link">
              <div class="voice-card__top">
                <div class="voice-card__text-wrapper">
                  <div class="voice-card__meta">
                    <p class="voice-card__age">20代(女性)</p>
                    <div class="tag">
                      <p class="tag__text">ライセンス講習</p>
                    </div>
                  </div>
                  <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="voice-card__img js-inview">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-card1.jpg" alt="帽子をかぶった若い女性" loading="lazy" decoding="async">
                </div>
              </div>
              <div class="voice-card__bottom">
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </li>
          <li class="top-voice__item voice-card">
            <a href="" class="voice-card__link">
              <div class="voice-card__top">
                <div class="voice-card__text-wrapper">
                  <div class="voice-card__meta">
                    <p class="voice-card__age">20代(男性)</p>
                    <div class="tag">
                      <p class="tag__text">ファンダイビング</p>
                    </div>
                  </div>
                  <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="voice-card__img js-inview">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-card2.jpg" alt="いいねのポーズをしている若い男性" loading="lazy"
                    decoding="async">
                </div>
              </div>
              <div class="voice-card__bottom">
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </a>
          </li>
        </ul>
        <div class="top-voice__btn">
          <a href="./archive-voice.html" class="btn slide"><span>View more</span></a>
        </div>
      </div>
    </section>

    <section class="top-price l-top-price">
      <div class="top-price__inner inner">
        <div class="top-price__title">
          <div class="section-header">
            <p class="section-header__enTitle">Price</p>
            <h2 class="section-header__jaTitle">料金一覧</h2>
          </div>
        </div>
        <div class="top-price__content">
          <div class="top-price__img u-mobile">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-price-sp.jpg" alt="海の中で泳ぐカメ" loading="lazy" decoding="async">
          </div>
          <div class="top-price__img js-inview u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-price-pc.jpg" alt="イソギンチャク" loading="lazy" decoding="async">
          </div>
          <div class="top-price__text-wrapper">
            <h3 class="top-price__subTitle">ライセンス講習</h3>
            <ul class="top-price__items">
              <li class="top-price__item">
                <p class="top-price__text">オープンウォーターダイバーコース</p>
                <p class="top-price__price">¥50,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">アドバンスドオープンウォーターコース</p>
                <p class="top-price__price">¥60,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">レスキュー＋EFRコース</p>
                <p class="top-price__price">¥70,000</p>
              </li>
            </ul>
            <h3 class="top-price__subTitle">体験ダイビング</h3>
            <ul class="top-price__items">
              <li class="top-price__item">
                <p class="top-price__text">ビーチ体験ダイビング(半日)</p>
                <p class="top-price__price">¥7,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">ビーチ体験ダイビング(1日)</p>
                <p class="top-price__price">¥14,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">ボート体験ダイビング(半日)</p>
                <p class="top-price__price">¥10,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">ボート体験ダイビング(1日)</p>
                <p class="top-price__price">¥18,000</p>
              </li>
            </ul>
            <h3 class="top-price__subTitle">ファンダイビング</h3>
            <ul class="top-price__items">
              <li class="top-price__item">
                <p class="top-price__text">ビーチダイビング(2ダイブ)</p>
                <p class="top-price__price">¥14,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">ボートダイビング(2ダイブ)</p>
                <p class="top-price__price">¥18,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">スペシャルダイビング(2ダイブ)</p>
                <p class="top-price__price">¥24,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">ナイトダイビング(1ダイブ)</p>
                <p class="top-price__price">¥10,000</p>
              </li>
            </ul>
            <h3 class="top-price__subTitle">スペシャルダイビング</h3>
            <ul class="top-price__items">
              <li class="top-price__item">
                <p class="top-price__text">貸切ダイビング(2ダイブ)</p>
                <p class="top-price__price">¥24,000</p>
              </li>
              <li class="top-price__item">
                <p class="top-price__text">1日ダイビング(3ダイブ)</p>
                <p class="top-price__price">¥32,000</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="top-price__btn">
          <a href="./page-price.html" class="btn slide"><span>View more</span></a>
        </div>
      </div>
    </section>

    <section class="top-contact l-top-contact">
      <div class="top-contact__inner inner">
        <div class="top-contact__content">
          <div class="top-contact__top">
            <div class="top-contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/top-contact-sp.png" alt="CodeUps" loading="lazy" decoding="async">
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
              <a href="./page-contact.html" class="btn slide long"><span>Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="to-top js-pagetop" id="page-top">
    <a href="#top"><span></span></a>
  </div>

  <footer class="footer l-footer">
    <div class="footer__inner inner">
      <div class="footer__img-flex">
        <div class="footer__logoLink">
          <a href="./index.html"><img src="<?php echo get_theme_file_uri(); ?>/images/common/CodeUps.svg" alt="CodeUps" loading="lazy"
              decoding="async"></a>
        </div>
        <div class="footer__sns-icon">
          <div class="footer__fb-img">
            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img
                src="./assets/images/common/FacebookLogo.png" alt="Facebook" loading="lazy" decoding="async"></a>
          </div>
          <div class="footer__ig-img">
            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img
                src="./assets/images/common/instagram.png" alt="instagram" loading="lazy" decoding="async"></a>
          </div>
        </div>
      </div>

      <nav class="footer__nav nav">
        <div class="nav__group">
          <ul class="nav__items nav__items--mt">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="./page-campaign.html">キャンペーン</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-campaign.html">ライセンス取得</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-campaign.html">貸切体験ダイビング</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-campaign.html">ナイトダイビング</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="./page-about.html">私たちについて</a>
              </div>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="./page-information.html">ダイビング情報</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-information.html#info-tab-1">ライセンス講習</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-information.html#info-tab-2">体験ダイビング</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-information.html#info-tab-3">ファンダイビング</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="./page-blog.html">ブログ</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="nav__group nav__group--ml">
          <ul class="nav__items nav__items--mt">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="./archive-voice.html">お客様の声</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="./page-price.html">料金一覧</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-price.html#licenseDiving">ライセンス講習</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-price.html#experienceDiving">体験ダイビング</a>
              </div>
              <div class="nav__link">
                <a class="nav__child" href="./page-price.html#funDiving">ファンダイビング</a>
              </div>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon nav__icon--mt0" href="./page-faq.html">よくある質問</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="./privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="./term-of-service.html">利用規約</a>
              </div>
            </li>
            <li class="nav__item">
              <div class="nav__link">
                <a class="nav__icon" href="./page-contact.html">お問い合わせ</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <small>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
    </div>
  </footer>
</body>

</html>