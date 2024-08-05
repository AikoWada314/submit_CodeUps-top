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
                    ART LAB.CO.,LTD.
                </a>
            </<?php echo $tag; ?>>
            <div class="header__drawer hamburger js-hamburger">
            </div>

            <nav class="header__pc-nav pc-nav">
                <ul class="pc-nav__items">
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>">サービス</a>
                        <ul class="pc-nav__service-items">
                            <li class="pc-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/product/')); ?>">- プロダクト</a>
                            </li>
                            <li class="pc-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/spatial/')); ?>">- 空間デザイン</a>
                            </li>
                            <li class="pc-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/sweets_content/')); ?>">- スイーツ・コンテンツ制作</a>
                            </li>
                            <li class="pc-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/architect/')); ?>">- 建築</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/technology/')); ?>">技術・設備・素材</a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/company_information/')); ?>">会社案内</a>
                    </li>
                </ul>
                <div class="pc-nav__item pc-nav__item--contact">
                    <a href="<?php echo esc_url(home_url('/inquiry/')); ?>">contact</a>
                </div>
            </nav>

            <nav class="header__sp-nav sp-nav js-sp-nav">
                <ul class="sp-nav__items">
                    <li class="sp-nav__item">サービス
                        <ul class="sp-nav__service-items">
                            <li class="sp-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/product/')); ?>">- プロダクト</a>
                            </li>
                            <li class="sp-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/spatial/')); ?>">- 空間デザイン</a>
                            </li>
                            <li class="sp-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/sweets_content/')); ?>">- スイーツ・コンテンツ制作</a>
                            </li>
                            <li class="sp-nav__service-item">
                                <a href="<?php echo esc_url(home_url('/architect/')); ?>">- 建築</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sp-nav__item">
                        <a href="<?php echo esc_url(home_url('/technology/')); ?>">技術・設備・素材</a>
                    </li>
                    <li class="sp-nav__item">
                        <a href="<?php echo esc_url(home_url('/company_information/')); ?>">会社案内</a>
                    </li>
                    <li class="sp-nav__item">
                        <a href="<?php echo esc_url(home_url('/inquiry/')); ?>">お問い合わせ</a>
                    </li>
                </ul>
                <div class="sp-nav__contact">
                    <a href="<?php echo esc_url(home_url('/inquiry/')); ?>">お問い合わせフォーム</a>
                </div>
                <div class="sp-nav__phone">
                    <p class="sp-nav__tel">tel.</p>
                    <p class="sp-nav__number">06-6753-9535</p>

                </div>
                <p class="sp-nav__hour">平日9:00〜17:00</p>
                <p class="sp-nav__address">大阪府大阪市城東区諏訪4丁目10-2 OFFICE KOUKIビル302</p>
                <small>&copy; ART LAB.CO.,LTD. All Rights Reserved.</small>
            </nav>
        </div>
    </header>