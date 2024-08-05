<?php get_header(); ?>

<main>
    <section class="approach l-approach">
        <div class="approach__inner inner">
            <div class="approach__top">
                <div class="approach__title js-fadeIn">
                    <h2 class="approach__jaTitle">ART LABの強み</h2>
                    <p class="approach__enTitle">approach</p>
                </div>
                <p class="approach__text js-fadeIn">
                    提案力の高さ、<br>
                    開発スピードと品質の向上、<br>
                    幅広い対応力、<br>
                    ゼロから作り出す技術力、<br>
                    大手企業様との実績で培ったクオリティーの高さ。<br>
                    デザインから施工までオールインワン。
                </p>
            </div>
            <div class="approach__bottom js-fadeIn">
                <ul class="approach__items features">
                    <li class="features__item feature">
                        <div class="feature__flex-container">
                            <p class="feature__number">01</p>
                            <div class="feature__wrapper">
                                <h3 class="feature__title">提案力の高さ</h3>
                                <p class="feature__text">クリエイティブな発想と技術的な知識を活かし、プロジェクトに最適なアプローチを見つけ、効果的な提案を行います。</p>
                            </div>
                        </div>
                        <div class="feature__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/approach1.jpg"
                                alt="男性がおしゃれなオフィスでパソコンに向かって仕事をしている" loading="lazy" decoding="async">
                        </div>
                    </li>
                    <li class="features__item feature">
                        <div class="feature__flex-container">
                            <p class="feature__number">02</p>
                            <div class="feature__wrapper">
                                <h3 class="feature__title">開発スピードと品質向上</h3>
                                <p class="feature__text">お客様のプロジェクト全体を一貫してサポートすることで、製品開発のスピードと品質を向上させます。</p>
                            </div>
                        </div>
                        <div class="feature__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/approach2.jpg"
                                alt=" 机の上の資料を指さす様子" loading="lazy" decoding="async">
                        </div>
                    </li>
                    <li class="features__item feature">
                        <div class="feature__flex-container">
                            <p class="feature__number">03</p>
                            <div class="feature__wrapper">
                                <h3 class="feature__title">チームを組んで幅広く対応</h3>
                                <p class="feature__text">クリエイターとチームを組み、プロダクトに関する事はもちろん、プロダクト以外の部分も幅広くサポートいたします。</p>
                            </div>
                        </div>
                        <div class="feature__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/approach3.jpg"
                                alt="男性3人が机の上にパソコンを置き打ち合わせをしている様子" loading="lazy" decoding="async">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="service l-service">
        <div class="service__inner inner">
            <div class="section-header">
                <p class="section-header__enTitle js-fadeIn">service</p>
                <h2 class="section-header__jaTitle js-fadeIn">サービス一覧</h2>
            </div>
            <ul class="service__items js-fadeIn">
                <li class="service__item">
                    <div class="service__title-wrapper">
                        <h3 class="service__item-title">プロダクトデザイン</h3>
                        <a href="<?php echo esc_url(home_url('/product/')); ?>" class="service__link"></a>

                    </div>
                    <p class="service__text">デザイン提案、データ作成、試作モデル製作、ワーキングモデル、プロトタイプ製作、展示モデル、各種開発支援、小ロットからの量産対応</p>
                    <div class="service__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service1.jpg"
                            alt="白とゴールドのヘッドフォン" loading="lazy" decoding="async">
                    </div>
                </li>
                <li class="service__item">
                    <div class="service__title-wrapper">
                        <h3 class="service__item-title">空間デザイン</h3>
                        <a href="<?php echo esc_url(home_url('/spatial/')); ?>" class="service__link"></a>
                    </div>
                    <p class="service__text">デザイン、設計、CGパース、展示台製作、インテリア及び什器の製作・施工</p>
                    <div class="service__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service2.jpg" alt="お店の写真"
                            loading="lazy" decoding="async">
                    </div>
                </li>
                <li class="service__item">
                    <div class="service__title-wrapper">
                        <h3 class="service__item-title">スイーツデザイン /<br>コンテンツ制作</h3>
                        <a href=" <?php echo esc_url(home_url('/sweets_content/')); ?>" class="service__link"></a>
                    </div>

                    <p class="service__text">スイーツデザイン、CG、各種コンテンツ制作</p>
                    <div class="service__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service3.jpg"
                            alt="コンテンツ制作をしている写真" loading="lazy" decoding="async">
                    </div>
                </li>
                <li class="service__item">
                    <div class="service__title-wrapper">
                        <h3 class="service__item-title">建築 / リフォーム /<br>管工事</h3>
                        <a href="<?php echo esc_url(home_url('/architect/')); ?>" class="service__link"></a>
                    </div>

                    <p class="service__text">住居、オフィス内外装改修工事、リノベーション、管工事</p>
                    <div class="service__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service4.jpg"
                            alt="紺色の壁にフローリングの床。キッチンのある部屋。" loading="lazy" decoding="async">
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section class="top-technology">
        <div class="top-technology__img u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-technology.jpg" alt="カラフルな造形物"
                loading="lazy" decoding="async">
        </div>
        <div class="top-technology__inner inner">
            <div class="top-technology__flex-container">
                <div class="top-technology__left">

                    <div class="section-header js-fadeIn">
                        <p class="section-header__enTitle section-header__enTitle--black">technology and materials</p>
                        <h2 class="section-header__jaTitle section-header__jaTitle--black">対応できる技術や素材</h2>
                    </div>


                </div>
                <div class="top-technology__accordion accordion js-fadeIn">
                    <div class="accordion__container">
                        <div class="accordion__wrapper">
                            <div class="accordion__title-wrapper jsAccordionTitle is-active">
                                <h3 class="accordion__title">データ作成</h3>
                                <p class="accordion__enTitle">Data Creation</p>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__text">・3次元データの作成/編集</p>
                                <p class="accordion__text">・2次元図面の作成/編集</p>
                                <p class="accordion__text">・印刷データ（ai）の作成/編集</p>
                                <p class="accordion__text">・画像データの作成/編集</p>
                            </div>
                        </div>
                        <div class="accordion__wrapper">
                            <div class="accordion__title-wrapper jsAccordionTitle">
                                <h3 class="accordion__title">材質</h3>
                                <p class="accordion__enTitle">Material</p>
                            </div>
                            <div class="accordion__content accordion__content--none">
                                <dl>
                                    <dt>樹 脂：</dt>
                                    <dd>ABS,アクリル、PC、ケミカルウッド、発泡ウレタン、発泡スチロール</dd>
                                    <dt>金 属：</dt>
                                    <dd>鉄、ステンレス、銅、真鍮、アルミ、ADC12
                                        <p class="accordion__text--small">※その他の特殊材料も対応可能ですので<br class="u-mobile">相談ください。
                                        </p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="accordion__wrapper">
                            <div class="accordion__title-wrapper jsAccordionTitle">
                                <h3 class="accordion__title">加工</h3>
                                <p class="accordion__enTitle">processing</p>
                            </div>
                            <div class="accordion__content accordion__content--none">
                                <p class="accordion__text">マシニングセンタ加工、旋盤加工（NC旋盤/複合旋盤も対応可能）、5軸加工、板金加工、曲げ加工、３Dプリンター、光造形
                                </p>
                                <p class="accordion__text--small">※その他の加工は相談ください。</p>
                            </div>
                        </div>
                        <div class="accordion__wrapper">
                            <div class="accordion__title-wrapper jsAccordionTitle">
                                <h3 class="accordion__title">成形</h3>
                                <p class="accordion__enTitle">Molding</p>
                            </div>
                            <div class="accordion__content accordion__content--none">
                                <p class="accordion__text">真空成形、射出成形、ブロー成形、押出成形、真空注型</p>
                                <p class="accordion__text--small">※その他の成形は相談ください。</p>
                            </div>
                        </div>
                        <div class="accordion__wrapper">
                            <div class="accordion__title-wrapper jsAccordionTitle">
                                <h3 class="accordion__title">表面処理</h3>
                                <p class="accordion__enTitle">surface treatment</p>
                            </div>
                            <div class="accordion__content accordion__content--none">
                                <p class="accordion__text">塗装（ラッカー/ウレタン/アクリル/メラミン）</p>
                                <p class="accordion__text">メッキ（電気メッキ/蒸着メッキ）</p>
                                <p class="accordion__text">印刷（シルク/インクジェット/UV）</p>
                                <p class="accordion__text">研磨（バフ/バレル/電解/化学）</p>
                                <p class="accordion__text--small">※塗装、メッキ、印刷の調色対応可能</p>
                                <p class="accordion__text--small">※その他の仕上げは相談ください。</p>
                            </div>
                        </div>
                        <div class="accordion__wrapper">
                            <div class="accordion__title-wrapper jsAccordionTitle">
                                <h3 class="accordion__title">その他</h3>
                                <p class="accordion__enTitle">others</p>
                            </div>
                            <div class="accordion__content accordion__content--none">
                                <p class="accordion__text">基板・メカ設計、アプリ制作、LED実装、水圧転写、ラッピング、フィルム施工（ダイノック、フィーノなど）</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="facility l-facility">
        <div class="inner">
            <div class="section-header">
                <p class="section-header__enTitle section-header__enTitle--black js-fadeIn">facility</p>
                <h2 class="section-header__jaTitle section-header__jaTitle--black js-fadeIn">設備</h2>
            </div>
            <ul class="facility__items js-fadeIn">
                <li class="facility__item">
                    <div class="facility__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facility1.jpg"
                            alt="棚にならんだたくさんの瓶詰の塗料" loading="lazy" decoding="async">
                    </div>
                    <p class="facility__title">シルク印刷</p>
                </li>
                <li class="facility__item">
                    <div class="facility__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facility2.jpg"
                            alt="塗装をしている様子" loading="lazy" decoding="async">
                    </div>
                    <p class="facility__title">塗装</p>
                </li>
                <li class="facility__item">
                    <div class="facility__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facility3.jpg"
                            alt="加工をしている様子" loading="lazy" decoding="async">
                    </div>
                    <p class="facility__title">切削加工</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="members l-members">
        <div class="inner">
            <div class="members__title-wrapper">
                <h2 class="members__title js-fadeIn">team<br>members</h2>
                <p class="members__text js-fadeIn">案件に合わせてさまざまなクリエイターと<br class="u-mobile">チームを組み、<br class="u-desktop">
                    ご提案から納品まで進めております。
                </p>
            </div>
            <div class="swiper__container js-fadeIn">
                <div class="swiper-pagination"></div>
                <div class="swiper members__swiper js-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="members__slide">
                                <div class="members__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/members1.jpg"
                                        alt="プロデューサー/岡坂 貴司の写真" loading="lazy" decoding="async">
                                </div>
                                <p class="members__post">Producer</p>
                                <p class="members__name">プロデューサー/岡坂 貴司</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="members__slide">
                                <div class="members__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/members2.jpg"
                                        alt="プロダクトデザイナー/和田圭亮の写真" loading="lazy" decoding="async">
                                </div>
                                <p class="members__post">Product Designer</p>
                                <p class="members__name">プロダクトデザイナー/和田圭亮</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="members__slide">
                                <div class="members__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/members3.jpg"
                                        alt="インテリアデザイナー/松本 直也の写真" loading="lazy" decoding="async">
                                </div>
                                <p class="members__post">Interior Designer</p>
                                <p class="members__name">インテリアデザイナー/松本 直也</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="members__slide">
                                <div class="members__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/members4.jpg"
                                        alt="インテリアデザイナー/田中 秀明の写真" loading="lazy" decoding="async">
                                </div>
                                <p class="members__post">Interior Designer</p>
                                <p class="members__name">インテリアデザイナー/田中 秀明</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="members__slide">
                                <div class="members__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/members5.jpg"
                                        alt="コーディネーター/三島美緒の写真" loading="lazy" decoding="async">
                                </div>
                                <p class="members__post">Coordinator</p>
                                <p class="members__name">コーディネーター/三島美緒</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="members__slide">
                                <div class="members__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/members6.jpg"
                                        alt="空間演出プロデューサー/表 千代子の写真" loading="lazy" decoding="async">
                                </div>
                                <p class="members__post">Spatial Presentation Producer</p>
                                <p class="members__name">空間演出プロデューサー/表 千代子</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-image l-top-image">
        <div class="inner">
            <div class="section-header">
                <p class="section-header__enTitle section-header__enTitle--black js-fadeIn">image</p>
                <h2 class="section-header__jaTitle section-header__jaTitle--black js-fadeIn">制作対応イメージ</h2>
            </div>
            <ul class="top-image__items js-fadeIn">
                <li class="top-image__item">
                    <h3 class="top-image__title">プロダクトモデル</h3>
                    <div class="top-image__container">
                        <div class="top-image__background">
                        </div>
                        <div class="top-image__wrapper">
                            <div class="top-image__mainImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mainImg1.jpg"
                                    alt="黒い扇風機" loading="lazy" decoding="async">
                            </div>
                            <div class="top-image__subImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/subImg1.jpg"
                                    alt="ピンクゴールドと白のヘッドフォン" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top-image__item">
                    <h3 class="top-image__title">空間デザイン</h3>
                    <div class="top-image__container">
                        <div class="top-image__background top-image__background--spatial">
                        </div>
                        <div class="top-image__wrapper">
                            <div class="top-image__mainImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mainImg2.jpg"
                                    alt="お店の空間" loading="lazy" decoding="async">
                            </div>
                            <div class="top-image__subImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/subImg2.jpg"
                                    alt="オフィスにある椅子と机" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top-image__item">
                    <h3 class="top-image__title">スイーツデザイン・コンテンツ制作</h3>
                    <div class="top-image__container">
                        <div class="top-image__background top-image__background--sweets_content">
                        </div>
                        <div class="top-image__wrapper">
                            <div class="top-image__mainImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mainImg3.jpg"
                                    alt="花の形をしたスイーツ" loading="lazy" decoding="async">
                            </div>
                            <div class="top-image__subImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/subImg3.jpg"
                                    alt="カップケーキ" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top-image__item">
                    <h3 class="top-image__title">建築</h3>
                    <div class="top-image__container">
                        <div class="top-image__background top-image__background--architect">
                        </div>
                        <div class="top-image__wrapper">
                            <div class="top-image__mainImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mainImg4.jpg"
                                    alt="家の内装" loading="lazy" decoding="async">
                            </div>
                            <div class="top-image__subImg">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/subImg4.jpg"
                                    alt="お風呂場" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</main>

<?php get_footer(); ?>