<?php get_header(); ?>
<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-info-mv.jpg"
                    media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-info-mv-sp.jpg"
                    alt="海の中で泳ぐ魚とダイバー" loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="page-mv__title">
            <h1>Information</h1>
        </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <section class="page-info l-page-margin">
        <div class="page-info__inner inner fish-icon">
            <div class="page-info__tab">
                <div class="info-tab">
                    <!-- タブ１ -->
                    <ul class="info-tab__items">
                        <li class="info-tab__item active js-info-tab">ライセンス<br class="u-mobile">講習</li>
                        <li class="info-tab__item info-tab__item--b js-info-tab">体験<br class="u-mobile">ダイビング</li>
                        <li class="info-tab__item info-tab__item--c js-info-tab">ファン<br class="u-mobile">ダイビング</li>
                    </ul>
                    <!-- パネル -->
                    <div class="info-tab__panel-area">
                        <div class="info-tab__panel active" id="info-tab-1">
                            <ul class="info-tab__panel-items">
                                <li class="info-tab__panel-item info-card">
                                    <div class="info-card__text-wrapper">
                                        <h3 class="info-card__title">ライセンス講習</h3>
                                        <p class="info-card__text">
                                            泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                                        </p>
                                    </div>
                                    <div class="info-card__img">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-card1.jpg"
                                            alt="" loading="lazy" decoding="async">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="info-tab__panel" id="info-tab-2">
                            <ul class="info-tab__panel-items info-cards">
                                <li class="info-tab__panel-item info-card">
                                    <div class="info-card__text-wrapper">
                                        <h3 class="info-card__title">体験ダイビング</h3>
                                        <p class="info-card__text">
                                            ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;
                                        </p>
                                    </div>
                                    <div class="info-card__img">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-card3.jpg"
                                            alt="" loading="lazy" decoding="async">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="info-tab__panel" id="info-tab-3">
                            <ul class="info-tab__panel-items info-cards">
                                <li class="info-tab__panel-item info-card">
                                    <div class="info-card__text-wrapper">
                                        <h3 class="info-card__title">ファンダイビング</h3>
                                        <p class="info-card__text">
                                            ブランクダイバー、ライセンスを取り立ての方も安心&#33;沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;
                                        </p>
                                    </div>
                                    <div class="info-card__img">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-card2.jpg"
                                            alt="" loading="lazy" decoding="async">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>