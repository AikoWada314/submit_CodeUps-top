<?php get_header(); ?>
<main>
    <section class="page-mv">
      <div class="page-mv__img">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice-mv.jpg" media="(min-width:768px)">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice-mv-sp.jpg" alt="海の中で泳ぐ魚とダイバー" loading="lazy" decoding="async">
        </picture>
      </div>
      <div class="page-mv__title">
        <h2>Voice</h2>
      </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>


<section class="archive-voice l-page-margin">
    <div class="inner fish-icon">
        <div class="archive-voice__tab tab">
        <?php
// カテゴリースラッグ
$category_slugs = [
    'all' => '#', // ALLタブには特定のURLがないため、'#'を使います
    'license' => 'ライセンス講習',
    'fundiving' => 'ファンダイビング',
    'experiencediving' => '体験ダイビング'
];

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
    <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="tab__list-item <?php echo (is_tax('voice_cat', 'all') || !is_tax('voice_cat')) ? 'is-btn-active' : ''; ?>">ALL</a>
    <a href="<?php echo esc_url(get_term_link('license', 'voice_cat')); ?>" class="tab__list-item <?php echo is_tax('voice_cat', 'license') ? 'is-btn-active' : ''; ?>">ライセンス講習</a>
    <a href="<?php echo esc_url(get_term_link('fundiving', 'voice_cat')); ?>" class="tab__list-item <?php echo is_tax('voice_cat', 'fundiving') ? 'is-btn-active' : ''; ?>">ファンダイビング</a>
    <a href="<?php echo esc_url(get_term_link('experiencediving', 'voice_cat')); ?>" class="tab__list-item <?php echo is_tax('voice_cat', 'experiencediving') ? 'is-btn-active' : ''; ?>">体験ダイビング</a>
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
                <?php endwhile; else : ?>
                    <p>まだ投稿がありません。</p>
                <?php endif; ?>
            </ul>
        </div>

        <div class="l-pagenavi">
      <div class="wp-pagenavi">
        <div class="wp-pagenavi__inner">
        <?php wp_pagenavi(); ?>

          
          
        </div>
      </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>
