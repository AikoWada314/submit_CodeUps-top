<?php get_header(); ?>
<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice-mv.jpg"
                    media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice-mv-sp.jpg"
                    alt="海の中で泳ぐ魚とダイバー" loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="page-mv__title">
            <h1>Voice</h1>
        </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>

    <section class="archive-voice l-page-margin">
        <div class="inner fish-icon">
            <div class="archive-voice__tab tab">
                <?php
                // カテゴリーリンクを取得する関数
                function get_category_link_by_slug($slug) {
                    $term = get_term_by('slug', $slug, 'voice_cat');
                    if ($term) {
                        return get_term_link($term);
                    }
                    return '#';
                }
                ?>

                <div class="tab__list">
                    <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>"
                        class="tab__list-item <?php echo (!is_tax('voice_cat')) ? 'is-btn-active' : ''; ?>">ALL</a>

                    <?php
                    // 'voice_cat' タクソノミーの全カテゴリを取得
                    $categories = get_terms([
                        'taxonomy' => 'voice_cat',
                        'hide_empty' => false,
                    ]);

                    // 各カテゴリのタブを生成
                    if (!empty($categories) && !is_wp_error($categories)) :
                        foreach ($categories as $category) :
                            $category_link = get_term_link($category);
                            $active_class = (is_tax('voice_cat', $category->slug)) ? 'is-btn-active' : '';
                    ?>
                    <a href="<?php echo esc_url($category_link); ?>"
                        class="tab__list-item <?php echo esc_attr($active_class); ?>"><?php echo esc_html($category->name); ?></a>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>

            <ul class="archive-voice__items voice-cards">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                            <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.jpg'); ?>"
                                alt="No image" loading="lazy" decoding="async">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="voice-card__bottom">
                        <p class="voice-card__text">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </li>
                <?php endwhile; else : ?>
                <p>まだ投稿がありません。</p>
                <?php endif; ?>
            </ul>

            <div class="l-pagenavi">
                <div class="wp-pagenavi__inner">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>