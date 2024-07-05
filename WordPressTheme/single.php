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


    <div class="page-blog l-page-margin">
        <div class="inner fish-icon page-blog__inner">
            <div class="page-blog__main">
                <div class="page-blog__articles articles">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="articles__item article">
                        <div class="article__date">
                            <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                        <h1 class="article__title"><?php the_title(); ?></h1>
                        <div class="article__img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full', ['loading' => 'lazy', 'decoding' => 'async']); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.jpg"
                                alt="デフォルト画像" loading="lazy" decoding="async">
                            <?php endif; ?>
                        </div>
                        <div class="article__wrapper">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>


                <div class="wp-pagenavi l-wp-pagenavi--mt">
                    <div class="wp-pagenavi__inner--mw">
                        <?php if (get_previous_post()) : ?>

                        <div>
                            <a class="previouspostslink previouspostslink--hover"
                                href="<?php echo get_permalink(get_previous_post()->ID); ?>"></a>
                        </div>
                        <?php endif; ?>

                        <?php if (get_next_post()) : ?>
                        <div>
                            <a class="nextpostslink nextpostslink--hover"
                                href="<?php echo get_permalink(get_next_post()->ID); ?>"></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>




            </div>
            <?php get_sidebar(); ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>