<?php get_header(); ?>
<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv.jpg"
                    media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv-sp.jpg"
                    alt="青い海と白い砂浜" loading="lazy" decoding="async">
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
                                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/campaign_cat/licensediving/">ライセンス取得</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/campaign_cat/experiencediving/">体験ダイビング</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/campaign_cat/fundiving/">ファンダイビング</a>
                                </div>
                            </li>
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/about-us/')); ?>">私たちについて</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sitemap-nav__items sitemap-nav__items--ml">
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/information/')); ?>">ダイビング情報</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/information/#info-tab-1">ライセンス講習</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/information/#info-tab-2">体験ダイビング</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/information/#info-tab-3">ファンダイビング</a>
                                </div>
                            </li>
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sitemap-nav__group sitemap-nav__group--ml">
                        <ul class="sitemap-nav__items sitemap-nav__items--mt0">
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
                                </div>
                            </li>
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/price/#licenseDiving">ライセンス講習</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/price/#experienceDiving">体験ダイビング</a>
                                </div>
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__child sitemap-nav--black"
                                        href="/price/#funDiving">ファンダイビング</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="sitemap-nav__items sitemap-nav__items--ml">
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav__icon--mt0 sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
                                </div>
                            </li>
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br
                                            class="u-mobile">ポリシー</a>
                                </div>
                            </li>
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">利用規約</a>
                                </div>
                            </li>
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
                                </div>
                            </li>
                            <li class="sitemap-nav__item">
                                <div class="sitemap-nav__link">
                                    <a class="sitemap-nav__icon sitemap-nav--black"
                                        href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>