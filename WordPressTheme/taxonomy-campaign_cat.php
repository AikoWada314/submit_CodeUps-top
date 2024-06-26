<?php get_header(); ?>

<main>
    <section class="page-mv">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-campaign-mv.jpg" media="(min-width:768px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-campaign-mv-sp.jpg" alt="海の中で泳ぐ二匹の魚" loading="lazy" decoding="async">
        </picture>
      </div>
      <div class="page-mv__title">
        <h1>Campaign</h1>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <section class="page-campaign l-page-margin">
  <div class="inner fish-icon">
    <div class="page-campaign__tab tab">
      <?php
      // カテゴリーリンクを取得する関数
      function get_category_link_by_slug($slug) {
          $term = get_term_by('slug', $slug, 'campaign_cat');
          if ($term) {
              return get_term_link($term, 'campaign_cat');
          }
          return '#';
      }
      ?>

      <div class="tab__list">
        <!-- ALLタブ -->
        <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="tab__list-item <?php echo (!is_tax('campaign_cat')) ? 'is-btn-active' : ''; ?>">ALL</a>

        <?php
        // 'campaign_cat' タクソノミーの全カテゴリを取得
        $categories = get_terms([
            'taxonomy' => 'campaign_cat',
            'hide_empty' => false,
        ]);

        // 各カテゴリのタブを生成
        if (!empty($categories) && !is_wp_error($categories)) :
            foreach ($categories as $category) :
                $category_link = get_term_link($category);
                $active_class = (is_tax('campaign_cat', $category->slug)) ? 'is-btn-active' : '';
        ?>
                <a href="<?php echo esc_url($category_link); ?>" class="tab__list-item <?php echo esc_attr($active_class); ?>"><?php echo esc_html($category->name); ?></a>
        <?php
            endforeach;
        endif;
        ?>
      </div>
    </div>

    <div class="page-campaign__items campaign-cards">
      <?php
      // メインクエリのループ
      if (have_posts()) :
          while (have_posts()) : the_post();
      ?>
          <div class="campaign-cards__item campaign-card">
            <div class="campaign-card__img">
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

            <div class="campaign-card__content">
              <div class="campaign-card__tag tag">
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
              <h3 class="campaign-card__title"><?php the_title(); ?></h3>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>

              <div class="campaign-card__price">
                <p class="campaign-card__price-before"><span>¥<?php the_field('campaign__before-price'); ?></span></p>
                <p class="campaign-card__price-after">¥<?php the_field('campaign__after-price'); ?></p>
              </div>
              <p class="campaign-card__detailText"><?php echo nl2br(esc_html(get_field('campaign__text'))); ?></p>
              <p class="campaign-card__date"><?php the_field('campaign__date'); ?></p>
              <p class="campaign-card__this">ご予約・お問い合わせはコチラ</p>
              <div class="campaign-card__btn">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn slide long"><span>Contact us</span></a>
              </div>
            </div>
          </div>
      <?php
          endwhile;
      else :
      ?>
          <p>現在、キャンペーンはありません。</p>
      <?php
      endif;
      ?>
    </div>
  </div>
</section>


<div class="l-pagenavi">
  <div class="wp-pagenavi__inner">
    <?php wp_pagenavi(); ?>        
  </div>
</div>


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
                        <p class="section-header__enTitle section-header__enTitle--big">Contact</p>
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
