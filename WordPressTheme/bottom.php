<?php if (!is_page('architect')) : ?>
<section class="top-technology">
  <div class="top-technology__img u-desktop">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-technology.jpg" alt="カラフルな造形物" loading="lazy"
      decoding="async">
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
<?php endif; ?>


<?php if (is_page(array('product', 'technology')) || is_single()) : ?>

<section class="facility l-facility">
  <div class="inner">
    <div class="section-header">
      <p class="section-header__enTitle section-header__enTitle--black js-fadeIn">facility</p>
      <h2 class="section-header__jaTitle section-header__jaTitle--black js-fadeIn">設備</h2>
    </div>
    <ul class="facility__items js-fadeIn">
      <li class="facility__item">
        <div class="facility__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facility1.jpg" alt="棚にならんだたくさんの瓶詰の塗料"
            loading="lazy" decoding="async">
        </div>
        <p class="facility__title">シルク印刷</p>
      </li>
      <li class="facility__item">
        <div class="facility__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facility2.jpg" alt="塗装をしている様子"
            loading="lazy" decoding="async">
        </div>
        <p class="facility__title">塗装</p>
      </li>
      <li class="facility__item">
        <div class="facility__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facility3.jpg" alt="加工をしている様子"
            loading="lazy" decoding="async">
        </div>
        <p class="facility__title">切削加工</p>
      </li>
    </ul>
  </div>
</section>
<?php endif; ?>

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
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service1.jpg" alt="白とゴールドのヘッドフォン"
            loading="lazy" decoding="async">
        </div>
      </li>
      <li class="service__item">
        <div class="service__title-wrapper">
          <h3 class="service__item-title">空間デザイン</h3>
          <a href="<?php echo esc_url(home_url('/spatial/')); ?>" class="service__link"></a>
        </div>
        <p class="service__text">デザイン、設計、CGパース、展示台製作、インテリア及び什器の製作・施工</p>
        <div class="service__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service2.jpg" alt="お店の写真" loading="lazy"
            decoding="async">
        </div>
      </li>
      <li class="service__item">
        <div class="service__title-wrapper">
          <h3 class="service__item-title">スイーツデザイン /<br>コンテンツ制作</h3>
          <a href=" <?php echo esc_url(home_url('/sweets_content/')); ?>" class="service__link"></a>
        </div>

        <p class="service__text">スイーツデザイン、CG、各種コンテンツ制作</p>
        <div class="service__img">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/service3.jpg" alt="コンテンツ制作をしている写真"
            loading="lazy" decoding="async">
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

</main>