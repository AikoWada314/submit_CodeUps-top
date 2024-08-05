<footer class="footer l-footer">
    <div class="footer__inner inner">
        <div class="footer__contact-wrapper">
            <p class="section-header__enTitle section-header__enTitle--footer js-fadeIn">contact</p>
        </div>
        <p class="footer__text js-fadeIn">お問い合わせ・ご相談はこちらから</p>
        <div class="footer__btn js-fadeIn">
            <a href="<?php echo esc_url(home_url('/inquiry/')); ?>">お問い合わせフォーム</a>
        </div>
        <div class="footer__phone">
            <p class="footer__tel js-fadeIn">tel.</p>
            <p class="footer__number js-fadeIn">06-6753-9535</p>

        </div>
        <p class="footer__hour js-fadeIn">平日9:00〜17:00</p>
        <p class="footer__company js-fadeIn">ART LAB.CO.,LTD.</p>
        <div class="footer__nav">
            <ul class="footer__items js-fadeIn">
                <li class="footer__item">
                    <p>サービス</p>
                    <ul class="footer__service-items">
                        <li class="footer__service-item">
                            <a href="<?php echo esc_url(home_url('/product/')); ?>">- プロダクト</a>
                        </li>
                        <li class="footer__service-item">
                            <a href="<?php echo esc_url(home_url('/spatial/')); ?>">- 空間デザイン
                            </a>
                        </li>
                        <li class="footer__service-item">
                            <a href="<?php echo esc_url(home_url('/sweets_content/')); ?>">- スイーツ・コンテンツ制作
                            </a>
                        </li>
                        <li class="footer__service-item">
                            <a href="<?php echo esc_url(home_url('/architect/')); ?>">- 建築</a>
                        </li>
                    </ul>
                </li>
                <li class="footer__item"><a href="<?php echo esc_url(home_url('/technology/')); ?>">技術・設備・素材</a></li>
                <li class="footer__item"><a href="<?php echo esc_url(home_url('/company_information/')); ?>">会社案内</a>
                </li>
                <li class="footer__item"><a href="<?php echo esc_url(home_url('/inquiry/')); ?>">お問い合わせ</a></li>
            </ul>
        </div>
        <div class="footer__bottom">
            <p class="footer__address js-fadeIn">大阪府大阪市城東区諏訪4丁目10－2　OFFICE KOUKIビル302 </p>
            <small class="js-fadeIn">&copy; ART LAB.CO.,LTD. All Rights Reserved.</small>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>