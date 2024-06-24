<?php get_header(); ?>

  <main>
    <div class="fv">
      <div class="fv_inner">
        <div class="fv_slider swiper swiper-container js-fv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
            <picture>
    <?php
    // ACF フィールドから画像 URL を取得
    $fv_pc1 = get_field('fv-pc1');
    $fv_sp1 = get_field('fv-sp1');

    // デフォルトの画像 URL
    $default_pc1 = get_theme_file_uri('/assets/images/common/top-fv1.jpg');
    $default_sp1 = get_theme_file_uri('/assets/images/common/top-fv-sp1.jpg');
    ?>

    <source srcset="<?php echo $fv_pc1 ? esc_url($fv_pc1['url']) : $default_pc1; ?>" media="(min-width:768px)">
    <img src="<?php echo $fv_sp1 ? esc_url($fv_sp1['url']) : $default_sp1; ?>" alt="青い海の中でカメが泳いでいる">
</picture>

            </div>
            <div class="swiper-slide">
            <picture>
    <?php
    // ACF フィールドから画像 URL を取得
    $fv_pc2 = get_field('fv-pc2');
    $fv_sp2 = get_field('fv-sp2');

    // デフォルトの画像 URL
    $default_pc2 = get_theme_file_uri('/assets/images/common/top-fv2.jpg');
    $default_sp2 = get_theme_file_uri('/assets/images/common/top-campaign-sp2.jpg');
    ?>

    <source srcset="<?php echo $fv_pc2 ? esc_url($fv_pc2['url']) : $default_pc2; ?>" media="(min-width:768px)">
    <img src="<?php echo $fv_sp2 ? esc_url($fv_sp2['url']) : $default_sp2; ?>" alt="青い海の中でカメが泳いでいる">
</picture>

            </div>
            <div class="swiper-slide">
            <picture>
    <?php
    // ACF フィールドから画像 URL を取得
    $fv_pc3 = get_field('fv-pc3');
    $fv_sp3 = get_field('fv-sp3');

    // デフォルトの画像 URL
    $default_pc3 = get_theme_file_uri('/assets/images/common/top-fv3.jpg');
    $default_sp3 = get_theme_file_uri('/assets/images/common/top-fv-sp3.jpg');
    ?>

    <source srcset="<?php echo $fv_pc3 ? esc_url($fv_pc3['url']) : $default_pc3; ?>" media="(min-width:768px)">
    <img src="<?php echo $fv_sp3 ? esc_url($fv_sp3['url']) : $default_sp3; ?>" alt="青い海の中でカメが泳いでいる">
</picture>
            </div>
            <div class="swiper-slide">
            <picture>
    <?php
    // ACF フィールドから画像 URL を取得
    $fv_pc4 = get_field('fv-pc4');
    $fv_sp4 = get_field('fv-sp4');

    // デフォルトの画像 URL
    $default_pc4 = get_theme_file_uri('/assets/images/common/top-fv4.jpg');
    $default_sp4 = get_theme_file_uri('/assets/images/common/top-fv-sp4.jpg');
    ?>

    <source srcset="<?php echo $fv_pc4 ? esc_url($fv_pc3['url']) : $default_pc4; ?>" media="(min-width:768px)">
    <img src="<?php echo $fv_sp4 ? esc_url($fv_sp3['url']) : $default_sp4; ?>" alt="青い海の中でカメが泳いでいる">
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
        <?php
        // クエリを修正してタクソノミーアーカイブページの場合はフィルタリングを適用
        $args = array(
            'post_type' => 'campaign', // カスタム投稿タイプが 'campaign' である場合
            'posts_per_page' => 4, // 1ページに表示する投稿数を指定
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // ページネーション対応
        );

        if (is_tax('campaign_cat')) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'campaign_cat',
                    'field' => 'slug',
                    'terms' => get_queried_object()->slug,
                ),
            );
        }

        $campaign_query = new WP_Query($args);

        // カスタムクエリのループを開始
        if ($campaign_query->have_posts()) :
            while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
                <div class="swiper-slide top-campaign__item card">
    <div class="card__wrapper">
        <div class="card__img">
            <?php
            $campaign_img = get_field('campaign__img');
            if ($campaign_img) {
                $campaign_img_url = is_array($campaign_img) ? $campaign_img['url'] : $campaign_img;
                ?>
                <img src="<?php echo esc_url($campaign_img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy" decoding="async">
            <?php } else { ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy" decoding="async">
            <?php } ?>
        </div>

        <div class="card__content">
            <div class="card__tag tag">
                <?php
                $terms = get_the_terms(get_the_ID(), 'campaign_cat');
                if ($terms && !is_wp_error($terms)) :
                    foreach ($terms as $term) :
                        ?>
                        <p class="tag__text"><?php echo esc_html($term->name); ?></p>
                    <?php
                    endforeach;
                endif;
                ?>
            </div>
            <h3 class="card__title"><?php the_title(); ?></h3>
            <p class="card__text">全部コミコミ(お一人様)</p>

            <div class="card__price">
                <p class="card__price-before">
                    <span>¥<?php the_field('campaign__before-price'); ?></span>
                </p>
                <p class="card__price-after">
                    ¥<?php the_field('campaign__after-price'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <p>現在、キャンペーンはありません。</p>
        <?php
        endif;
        ?>
    </div>
</div>

        </div>
        <div class="top-campaign__btn">
          <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="btn slide"><span>View more</span></a>
        </div>
      </div>
    </section>

    <?php
$page_about_us_id = get_page_by_path('about-us')->ID;
$about_text = SCF::get('about__text', $page_about_us_id);
?>

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
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about2.jpg" alt="青い海の中で泳ぐ2匹の魚" loading="lazy" decoding="async">
      </div>
      <div class="top-about__subImg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about1.jpg" alt="青い空と琉球瓦の上に座るシーサー" loading="lazy" decoding="async">
      </div>
    </div>
    <div class="top-about__text-wrapper">
      <h3 class="top-about__copy">
        Dive into<br>the Ocean
      </h3>
      <div class="top-about__flex">
        <p class="page-about__text">
          <?php echo nl2br($about_text); ?>
        </p>
        <div class="top-about__btn">
          <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn slide"><span>View more</span></a>
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-info.jpg" alt="海の中で泳ぐオレンジ色の魚" loading="lazy" decoding="async">
          </div>
          <div class="top-info__text-wrapper">
            <h3 class="top-info__subTitle">ライセンス講習</h3>
            <p class="top-info__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="top-info__btn">
              <a href="<?php echo esc_url(home_url('/information/')); ?>" class="btn slide"><span>View more</span></a>
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
    <?php
    // Query latest 3 posts
    $args = array(
        'posts_per_page' => 3,
    );
    $latest_posts = new WP_Query($args);

    if ($latest_posts->have_posts()) :
        while ($latest_posts->have_posts()) :
            $latest_posts->the_post();
    ?>
            <li class="blog-cards__item blog-card">
                <div class="blog-card__wrapper">
                    <a href="<?php the_permalink(); ?>" class="blog-card__link">
                        <div class="blog-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="デフォルト画像" loading="lazy" decoding="async">
                            <?php endif; ?>
                        </div>
                        <div class="blog-card__content">
                            <div class="blog-card__date">
                                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </div>
                            <h3 class="blog-card__title"><?php the_title(); ?></h3>
                            <p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 88, '...'); ?></p>
                        </div>
                    </a>
                </div>
            </li>
    <?php
        endwhile;
        wp_reset_postdata(); // Reset Post Data
    else :
        echo '<p>投稿が見つかりませんでした。</p>';
    endif;
    ?>
</ul>


        <div class="top-blog__btn">
          <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn slide"><span>View more</span></a>
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
    <?php
    // Query latest 2 voice posts
    $args = array(
        'posts_per_page' => 2,
        'post_type' => 'voice', // Adjust post type as needed
    );
    $latest_posts = new WP_Query($args);

    if ($latest_posts->have_posts()) :
        while ($latest_posts->have_posts()) :
            $latest_posts->the_post();
    ?>
            <li class="voice-cards__item voice-card">
                <div class="voice-card__top">
                    <div class="voice-card__text-wrapper">
                        <div class="voice-card__meta">
                            <p class="voice-card__age"><?php the_field('voice__age'); ?></p>
                            <div class="tag">
                                <?php
                                $categories = get_the_terms(get_the_ID(), 'voice_cat');
                                if ($categories) {
                                    foreach ($categories as $category) {
                                        echo '<p class="tag__text">' . esc_html($category->name) . '</p>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <h3 class="voice-card__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="voice-card__img js-inview">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                        <?php else : ?>
                            <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.jpg'); ?>" alt="No image" loading="lazy" decoding="async">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="voice-card__bottom">
                    <p class="voice-card__text">
                        <?php the_content(); ?>
                    </p>
                </div>
            </li>
    <?php
        endwhile;
        wp_reset_postdata(); // Reset Post Data
    else :
        echo '<p>まだ投稿がありません。</p>';
    endif;
    ?>
</ul>


        <div class="top-voice__btn">
          <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="btn slide"><span>View more</span></a>
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-sp.jpg" alt="海の中で泳ぐカメ" loading="lazy" decoding="async">
          </div>
          <div class="top-price__img js-inview u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-price-pc.jpg" alt="イソギンチャク" loading="lazy" decoding="async">
          </div>
          <div class="top-price__text-wrapper">
    <h3 class="top-price__subTitle">ライセンス講習</h3>
    <ul class="top-price__items">
        <?php
        $page_price_id = get_page_by_path('price')->ID;
        $licenses = SCF::get('license', $page_price_id);
        if (!empty($licenses)) :
            foreach ($licenses as $license) : ?>
                <li class="top-price__item">
                    <p class="top-price__text"><?php echo esc_html($license['license__course']); ?></p>
                    <p class="top-price__price">¥<?php echo esc_html($license['license__price']); ?></p>
                </li>
            <?php endforeach;
        else : ?>
            <li class="top-price__item">
                <p class="top-price__text">ライセンス情報が見つかりませんでした。</p>
            </li>
        <?php endif; ?>
    </ul>

    <h3 class="top-price__subTitle">体験ダイビング</h3>
  <ul class="top-price__items">
    <?php
    $experience_course = SCF::get('experience__course', $page_price_id);
    $experience_price = SCF::get('experience__price', $page_price_id);

    if (!empty($experience_course) && !empty($experience_price)) {
      foreach ($experience_course as $index => $course) {
        $price = isset($experience_price[$index]) ? $experience_price[$index] : '';
    ?>
        <li class="top-price__item">
          <p class="top-price__text"><?php echo esc_html($course); ?></p>
          <p class="top-price__price">¥<?php echo esc_html($price); ?></p>
        </li>
    <?php
      }
    } else {
    ?>
      <li class="top-price__item">
        <p class="top-price__text">体験ダイビング情報が見つかりませんでした。</p>
      </li>
    <?php
    }
    ?>
  </ul>

  <h3 class="top-price__subTitle">ファンダイビング</h3>
  <ul class="top-price__items">
    <?php
    $fun_course = SCF::get('fun__course', $page_price_id);
    $fun_price = SCF::get('fun__price', $page_price_id);

    if (!empty($fun_course) && !empty($fun_price)) {
      foreach ($fun_course as $index => $course) {
        $price = isset($fun_price[$index]) ? $fun_price[$index] : '';
    ?>
        <li class="top-price__item">
          <p class="top-price__text"><?php echo esc_html($course); ?></p>
          <p class="top-price__price">¥<?php echo esc_html($price); ?></p>
        </li>
    <?php
      }
    } else {
    ?>
      <li class="top-price__item">
        <p class="top-price__text">ファンダイビング情報が見つかりませんでした。</p>
      </li>
    <?php
    }
    ?>
  </ul>

  <h3 class="top-price__subTitle">スペシャルダイビング</h3>
  <ul class="top-price__items">
    <?php
    $special_course = SCF::get('special__course', $page_price_id);
    $special_price = SCF::get('special__price', $page_price_id);

    if (!empty($special_course) && !empty($special_price)) {
      foreach ($special_course as $index => $course) {
        $price = isset($special_price[$index]) ? $special_price[$index] : '';
    ?>
        <li class="top-price__item">
          <p class="top-price__text"><?php echo esc_html($course); ?></p>
          <p class="top-price__price">¥<?php echo esc_html($price); ?></p>
        </li>
    <?php
      }
    } else {
    ?>
      <li class="top-price__item">
        <p class="top-price__text">スペシャルダイビング情報が見つかりませんでした。</p>
      </li>
    <?php
    }
    ?>
  </ul>
</div>

        </div>
        <div class="top-price__btn">
          <a href="<?php echo esc_url(home_url('price')); ?>" class="btn slide"><span>View more</span></a>
        </div>
      </div>
    </section>





    <section class="top-contact l-top-contact">
      <div class="top-contact__inner inner">
        <div class="top-contact__content">
          <div class="top-contact__top">
            <div class="top-contact__logo">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-contact-sp.png" alt="CodeUps" loading="lazy" decoding="async">
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
              <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn slide long"><span>Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
