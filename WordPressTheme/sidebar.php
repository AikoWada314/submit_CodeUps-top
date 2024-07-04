<aside class="page-blog__aside aside">
  <div class="aside__inner aside__inner--pa">
    <div class="aside__content">
      <div class="aside__heading">
        <h2 class="aside__heading-title">人気記事</h2>
      </div>
      <ul class="aside__items blog-popular-cards">
        <?php
        // 最新の投稿3件を取得するクエリ
        $recent_posts = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'post',
          'post_status' => 'publish',
          'orderby' => 'date',
          'order' => 'DESC'
        ));

        // 投稿が見つかった場合
        if ($recent_posts->have_posts()):
          while ($recent_posts->have_posts()): $recent_posts->the_post();
        ?>
            <li class="blog-popular-cards__item blog-popular-card">
              <a class="blog-popular-card__link" href="<?php the_permalink(); ?>">
                <div class="blog-popular-card__img">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="<?php the_title(); ?>" loading="lazy" decoding="async">
                  <?php endif; ?>
                </div>
                <div class="blog-popular-card__body">
                  <div class="blog-popular-card__date">
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                  </div>
                  <h4 class="blog-popular-card__title"><?php the_title(); ?></h4>
                </div>
              </a>
            </li>
        <?php
          endwhile;
          wp_reset_postdata(); // クエリのリセット
        else:
        ?>
          <p>最新の記事が見つかりませんでした。</p>
        <?php endif; ?>
      </ul>
    </div>
    <div class="aside__content">
      <div class="aside__heading">
        <h2 class="aside__heading-title">口コミ</h2>
      </div>
      <ul class="aside__items blog-voice-cards">
        <?php
        // voiceカスタム投稿タイプの最新投稿を1件取得するクエリ
        $latest_voice_query = new WP_Query(array(
          'post_type' => 'voice',  // カスタム投稿タイプが 'voice'
          'posts_per_page' => 1,   // 1件の投稿を取得
          'order' => 'DESC',       // 降順に並べる
          'orderby' => 'date'      // 日付で並べる
        ));

        // クエリのループを開始
        if ($latest_voice_query->have_posts()):
          while ($latest_voice_query->have_posts()): $latest_voice_query->the_post();
        ?>
            <li class="blog-voice-cards__item blog-voice-card">
              <div class="blog-voice-card__img">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg" alt="デフォルト画像" loading="lazy" decoding="async">
                <?php endif; ?>
              </div>
              <div class="blog-voice-card__body">
                <p class="blog-voice-card__age"><?php the_field('voice__age'); ?></p>
                <h3 class="blog-voice-card__heading"><?php the_title(); ?></h3>
              </div>
            </li>
        <?php
          endwhile;
          wp_reset_postdata(); // クエリのリセット
        else:
        ?>
          <p>最新の投稿が見つかりませんでした。</p>
        <?php endif; ?>
      </ul>
      <div class="blog-voice-card__btn">
        <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="btn slide"><span>View more</span></a>
      </div>
    </div>
    <div class="aside__content">
      <div class="aside__heading">
        <h2 class="aside__heading-title">キャンペーン</h2>
      </div>
      <ul class="aside__items blog-campaign-cards">
        <?php
        // 最新の2件の投稿を取得
        $args = array(
          'post_type' => 'campaign', // カスタム投稿タイプが 'campaign' である場合
          'posts_per_page' => 2, // 2件の投稿を表示
          'order' => 'DESC', // 新しい順に並び替え
          'orderby' => 'date' // 日付で並び替え
        );
        $latest_posts_query = new WP_Query($args);

        // カスタムクエリのループを開始
        if ($latest_posts_query->have_posts()):
          while ($latest_posts_query->have_posts()): $latest_posts_query->the_post();
        ?>
            <li class="blog-campaign-card__item card">
              <div class="card__wrapper">
                <a href="<?php the_permalink(); ?>" class="card__link">
                  <div class="card__img card__img--ar">
                    <?php
                    $campaign_img = get_field('campaign__img');
                    if ($campaign_img) {
                      $campaign_img_url = is_array($campaign_img) ? $campaign_img['url'] : $campaign_img;
                    } else {
                      $campaign_img_url = get_theme_file_uri('/assets/images/common/noimage.jpg');
                    }
                    ?>
                    <img src="<?php echo esc_url($campaign_img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="card__content card__content--pb">
                    <h3 class="card__title card__title--center"><?php the_title(); ?></h3>
                    <p class="card__text card__text--mt">全部コミコミ(お一人様)</p>
                    <div class="card__price">
                      <p class="card__price-before card__price-before--fz"><span>¥<?php the_field('campaign__before-price'); ?></span></p>
                      <p class="card__price-after card__price-after--fz">¥<?php the_field('campaign__after-price'); ?></p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
        <?php
          endwhile;
          wp_reset_postdata();
        else:
        ?>
          <p>最新のキャンペーンはありません。</p>
        <?php endif; ?>
      </ul>
      <div class="blog-campaign-card__btn">
        <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="btn slide"><span>View more</span></a>
      </div>
    </div>
    <div class="aside__content">
      <div class="aside__heading">
        <h2 class="aside__heading-title">アーカイブ</h2>
      </div>
      <div class="aside__archive aside-archive">
        <ul class="aside-archive__wrapper">
          <?php
          // 投稿タイプが'post'の月別アーカイブリンクを取得
          $args = array(
            'type' => 'monthly',
            'format' => 'custom',
            'before' => '<li class="aside-archive__month">',
            'after' => '</li>',
            'show_post_count' => false,
            'echo' => 0,
            'order' => 'DESC',
            'post_type' => 'post'
          );

          // 月別アーカイブリンクを取得
          $archive_links = wp_get_archives($args);

          // アーカイブリンクを分割し、年ごとにグループ化する
          $archive_links_array = explode('</li>', $archive_links);
          $years = array();

          foreach ($archive_links_array as $link) {
            if (preg_match('/(\d{4})年(\d{1,2})月/', strip_tags($link), $matches)) {
              $year = $matches[1];
              $month = $matches[2];

              if (!isset($years[$year])) {
                $years[$year] = array();
              }

              // リンクから年を取り除き、月のみのリンクに変更
              $link_without_year = preg_replace('/(\d{4})年(\d{1,2})月/', '$2月', $link);
              $years[$year][] = $link_without_year . '</li>';
            }
          }

          // アーカイブリンクを年ごとに表示
          foreach ($years as $year => $months):
          ?>
            <li class="aside-archive__items">
              <p class="aside-archive__year js-archive-button"><?php echo $year; ?></p>
              <ul class="aside-archive__months">
                <?php echo implode('', $months); ?>
              </ul>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</aside>
