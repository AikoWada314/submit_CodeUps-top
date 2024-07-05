<?php get_header(); ?>


<main>
    <section class="page-mv">
        <div class="page-mv__img">
            <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv.jpg"
                    media="(min-width:768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv-sp.jpg"
                    alt="海の中で泳ぐ魚とダイバー" loading="lazy" decoding="async">
            </picture>
        </div>
        <div class="page-mv__title">
            <h1>Blog</h1>
        </div>
    </section>

    <?php get_template_part('breadcrumb'); ?>


    <section class="page-blog l-page-margin">
        <div class="page-blog__inner inner fish-icon">
            <div class="page-blog__main">
                <ul class="blog-cards blog-cards--2col">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li class="blog-cards__item blog-card">
                        <div class="blog-card__wrapper">
                            <a href="<?php the_permalink(); ?>" class="blog-card__link">
                                <div class="blog-card__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                                    <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg"
                                        alt="デフォルト画像" loading="lazy" decoding="async">
                                    <?php endif; ?>
                                </div>
                                <div class="blog-card__content">
                                    <div class="blog-card__date">
                                        <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    </div>
                                    <h3 class="blog-card__title"><?php the_title(); ?></h3>
                                    <p class="blog-card__text">
                                        <?php echo wp_trim_words(get_the_content(), 88, '...'); ?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <p>投稿が見つかりませんでした。</p>
                    <?php endif; ?>
                </ul>


                <div class="l-pagenavi">
                    <div class="wp-pagenavi">
                        <div class="wp-pagenavi__inner">
                            <?php wp_pagenavi(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>