<?php if(!is_page(array('contact','404'))): ?>
<section class="top-contact l-top-contact">
    <div class="top-contact__inner inner">
        <div class="top-contact__content">
            <div class="top-contact__top">
                <div class="top-contact__logo">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-contact-sp.png" alt="CodeUps"
                        loading="lazy" decoding="async">
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
                        <p class="section-header__enTitle section-header__enTitle--big">Contact</p>
                        <h2 class="section-header__jaTitle section-header__jaTitle--mt">お問い合わせ</h2>
                    </div>
                    <p class="top-contact__text">ご予約・お問い合わせはコチラ</p>
                </div>
                <div class="top-contact__btn">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn slide long"><span>Contact
                            us</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="to-top js-pagetop" id="page-top">
    <a href="#top"><span></span></a>
</div>

<footer class="footer l-footer">
    <div class="footer__inner inner">
        <div class="footer__img-flex">
            <div class="footer__logoLink">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" alt="CodeUps"
                        loading="lazy" decoding="async"></a>
            </div>
            <div class="footer__sns-icon">
                <div class="footer__fb-img">
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png"
                            alt="Facebook" loading="lazy" decoding="async"></a>
                </div>
                <div class="footer__ig-img">
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.png" alt="instagram"
                            loading="lazy" decoding="async"></a>
                </div>
            </div>
        </div>

        <nav class="footer__nav nav">
            <div class="nav__group">
                <ul class="nav__items nav__items--mt">
                    <li class="nav__item">
                        <div class="nav__link">
                            <a class="nav__icon nav__icon--mt0"
                                href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/campaign_cat/licensediving/'))?>">ライセンス講習</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/campaign_cat/experiencediving/'))?>">体験ダイビング</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/campaign_cat/fundiving/'))?>">ファンダイビング</a>
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
                            <a class="nav__icon nav__icon--mt0"
                                href="<?php echo esc_url(home_url('/information/'))?>">ダイビング情報</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/information/#info-tab-1')); ?>">ライセンス講習</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/information/#info-tab-2')); ?>">体験ダイビング</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/information/#info-tab-3')); ?>">ファンダイビング</a>
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
                            <a class="nav__icon nav__icon--mt0"
                                href="<?php echo esc_url(home_url('/voice/'))?>">お客様の声</a>
                        </div>
                    </li>
                    <li class="nav__item">
                        <div class="nav__link">
                            <a class="nav__icon" href="<?php echo esc_url(home_url('/price/'))?>">料金一覧</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/price/#licenseDiving')); ?>">ライセンス講習</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/price/#experienceDiving')); ?>">体験ダイビング</a>
                        </div>
                        <div class="nav__link">
                            <a class="nav__child"
                                href="<?php echo esc_url(home_url('/price/#funDiving')); ?>">ファンダイビング</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav__items">
                    <li class="nav__item">
                        <div class="nav__link">
                            <a class="nav__icon nav__icon--mt0"
                                href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
                        </div>
                    </li>
                    <li class="nav__item">
                        <div class="nav__link">
                            <a class="nav__icon" href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br
                                    class="u-mobile">ポリシー</a>
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